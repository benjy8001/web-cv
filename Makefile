#!/usr/bin/env bash

ifndef VERBOSE
.SILENT:
endif


DOCKER_COMPOSE  = docker-compose
DOCKER          = docker
EXEC_PHP        = $(DOCKER_COMPOSE) exec -T apache
SYMFONY         = $(EXEC_PHP) bin/console

IMAGE_AUDIT = jakzal/phpqa:php7.4-alpine
QA = docker run --rm -v `pwd`/:/project -w /project $(IMAGE_AUDIT)

COMPOSER = ${QA} composer

REF_BRANCH ?= 'master'

ifndef QUIET
#normal mode display text
QUIET_PARAM :=
define display
	@{ \
    printf $1; \
    }
endef
else
#  quiet enabled do nothing
QUIET_PARAM :=  -q
define display
endef
endif

#
# Presentation commands
# -------------------
#
coffee:
	printf "\033[32m You can go take a coffee while we work for you \033[0m\n"

banner:
	printf "\033[95m WEB CV\n"
#
.DEFAULT_GOAL := help
help:banner ## this help
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/  \x1b\[32m##/\x1b\[33m/'
.PHONY: help coffee banner


##
## Project
## -------

build: ## Build docker
	printf "\033[32m Deploy to Server \033[0m\n"
	$(DOCKER_COMPOSE) build

run: build ## Run project
	printf " 🏃\033[33m Running application ... \033[0m\n"
	$(DOCKER_COMPOSE) pull
	$(DOCKER_COMPOSE) up -d
	# wait 10s for containers being fully started
	sleep 10s
	printf "\n\n"

stop: ## Stop the VMs
	printf " \033[31m◉\033[0m\033[33m  Stopping application ... \033[0m\n"
	$(DOCKER_COMPOSE) stop
	printf "\n\n"

down: ## Stop the VMs
	printf " \033[31m◉\033[0m\033[33m  Stopping application ... \033[0m\n"
	$(DOCKER_COMPOSE) down --volumes
	printf "\n\n"

add-hooks:
	 rm -fr .git/hooks && ln -s `pwd`/.hooks/ .git/hooks
login-sudo: # demande le login utilisateur
	printf "\033[32m Please enter your password \033[0m\n"
	sudo printf "\033[32m thanxs \033[0m\n"

host-manager: login-sudo
	wget -q https://gitlab.com/snippets/1730128/raw -O host-manager
	chmod +x host-manager

add-hosts:host-manager
	sudo ./host-manager -add mailer-dev.local.dev 127.0.0.1
	sudo ./host-manager -add web-cv-dev.local.dev 127.0.0.1

remove-hosts:login-sudo
	sudo ./host-manager -remove mailer-dev.local.dev
	sudo ./host-manager -remove web-cv-dev.local.dev

start: add-hooks add-hosts run vendor assets migrate ## Run project

##.env.dist => .env.local CP

##
## Vendor and Assets
## -----------------

composer.lock: ## Run composer update
	$(COMPOSER) update --lock --no-interaction --no-suggest

vendor: composer.lock ## Run composer install
	printf " 💽\033[33m Start Composer ... \033[0m\n"
	$(COMPOSER) install ${QUIET_PARAM}

composer-install:
	printf " 💽\033[33m Start Composer ... \033[0m\n"
	$(COMPOSER) install ${QUIET_PARAM}

assets: ## Compile assets
	$(DOCKER) run  --rm -v `pwd`/:/project -w /project node yarn install
	$(DOCKER) run  --rm -v `pwd`/:/project -w /project node yarn encore dev

migration: ## Generate a new doctrine migration
	$(SYMFONY) doctrine:migrations:diff

migration-sql: ## Generate a new doctrine migration
	$(SYMFONY) doctrine:schema:update --dump-sql

migrate: ## Play latest doctrine migrations on comutitres and alert database
	$(SYMFONY) doctrine:migrations:migrate --no-interaction --allow-no-migration $(QUIET_PARAM)

db-validate-schema: ## Validate the doctrine ORM mapping
	$(SYMFONY) doctrine:schema:validate

.PHONY: assets vendor composer.lock

lint: lp lt ly

lt: ## lint twig files
	$(QA) find . -iname '*.twig' -exec  twig-lint  -q lint {} \;

ly: ## lint yaml files
	$(QA) sh -c  "find -iname '*.yml' -print0 | xargs -0 -n1  yaml-lint;"

lp: ## lint php files
	$(QA) parallel-lint --blame --exclude vendor .

security: ## Check security of your dependencies (https://security.sensiolabs.org/)
	$(QA) local-php-security-checker

psalm: ## Finds errors in PHP applications
	$(QA) psalm --find-dead-code

rector: ## Tool for instant code upgrades and refactoring
	$(QA) rector process src --dry-run

phpmd: ## PHP Mess Detector (https://phpmd.org)
	$(QA) phpmd src text .phpmd.xml

phpcpd: ## PHP Copy/Paste Detector (https://github.com/sebastianbergmann/phpcpd)
	$(QA) phpcpd src

php_codesnifer: ## PHP_CodeSnifer (https://github.com/squizlabs/PHP_CodeSniffer)
	$(QA) phpcs -d memory_limit=-1 --standard=.phpcs.xml src

phpmetrics: artefacts  ## PhpMetrics (http://www.phpmetrics.org)
	$(QA) phpmetrics --report-html=$(LOCAL_ARTEFACTS)/phpmetrics src

php-cs-fixer: ## php-cs-fixer (http://cs.sensiolabs.org)
	$(QA) php-cs-fixer fix --dry-run --using-cache=no --verbose --diff

apply-php-cs-fixer: ## apply php-cs-fixer fixes on new files
	$(eval NEW_FILES := $(shell git diff $(REF_BRANCH) --name-only| egrep '.php$$'))
	$(QA) sh -c 'for filename in $(NEW_FILES);  do if [ -f $$filename ]; then  echo  "fixing $$filename";  php-cs-fixer fix -q --using-cache=no $$filename; fi; done;'

phpstan: ## PHP Static Analysis Tool (https://github.com/phpstan/phpstan)
	$(QA) phpstan analyse -l 0 -c .phpstan.neon --memory-limit=-1 src

twigcs: ## twigcs (https://github.com/friendsoftwig/twigcs)
	$(eval NEW_FILES := $(shell git diff $(REF_BRANCH) --name-only| egrep '.twig$$'))
	$(QA) sh -c 'for filename in $(NEW_FILES);  do if [ -f $$filename ]; then  echo  "analysing $$filename"; twigcs lint  --severity=error $$filename; fi; done;'

phpunit: ## Run phpunit
	printf " 💽\033[33m Start PHPUnit ... \033[0m\n"
	$(QA) phpdbg -qrr /tools/phpunit -c . --colors=never

deploy:
	printf "\033[32m Deploy to Server \033[0m\n"
