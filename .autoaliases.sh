#!/usr/bin/env bash

DOCKER_COMPOSE_OPTION="-T"
DOCKER_OPTION=""

phpqa() {
   docker run $DOCKER_OPTION  --rm -v `pwd`/:/project -w /project jakzal/phpqa:php7.4-alpine "$@"
}

composer-unused() {
    phpqa composer-unused -vvv
}

phpunit () {
    phpqa phpdbg -qrr /tools/phpunit-8 -c . --colors=never --exclude-group excluded,functionnal $@
}

symfony () {
   docker run --rm -v $(pwd):$(pwd) -w $(pwd) symfonycorp/cli $@
}

composer () {
   docker run  --rm -v `pwd`/:/project -w /project jakzal/phpqa:php7.4-alpine composer $@
}

php-cs-fixer() {
  phpqa php-cs-fixer fix --using-cache=no --verbose --diff $@
}

php-cs-fixer-fix() {
  phpqa php-cs-fixer fix --using-cache=no --verbose $@
}