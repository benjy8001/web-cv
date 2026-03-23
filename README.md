# CV Benjamin Mabille

CV en ligne : [cv.benjamin-mabille.net](https://cv.benjamin-mabille.net)

## Stack technique

| Couche     | Technologies                                                  |
|------------|---------------------------------------------------------------|
| Backend    | Laravel 13, PHP 8.3, Inertia.js 2                            |
| Frontend   | React 19, TypeScript, Tailwind CSS 4, Framer Motion           |
| Admin      | Filament 4 (dark mode)                                        |
| BDD        | MariaDB (MySQL)                                               |
| Cache      | Redis                                                         |
| Infra      | Docker (PHP-FPM + Nginx + MariaDB + Redis)                    |

### Packages notables

**Composer** : spatie/laravel-translatable (i18n FR/EN), spatie/laravel-medialibrary (uploads), spatie/laravel-sluggable, spatie/laravel-sitemap, filament/spatie-laravel-media-library-plugin

**NPM** : framer-motion, react-type-animation, react-intersection-observer, react-i18next, @tabler/icons-react

## Prérequis

- Docker & Docker Compose
- Make (optionnel, mais recommandé)

## Installation (dev)

```bash
# 1. Cloner le repo
git clone <repo-url>
cd web-cv

# 2. Copier l'env (si pas déjà fait)
cp .env.example .env

# 3. Build et lancement Docker
make build
make run
# ou sans Make :
docker compose build && docker compose up -d

# 4. Installer les dépendances
docker compose exec phpfpm composer install
docker compose exec phpfpm npm install --legacy-peer-deps

# 5. Générer la clé (si vide)
docker compose exec phpfpm php artisan key:generate

# 6. Créer les tables et injecter les données du CV
docker compose exec phpfpm php artisan migrate:fresh --seed

# 7. Créer le lien storage
docker compose exec phpfpm php artisan storage:link

# 8. Compiler les assets
docker compose exec phpfpm npm run build
```

Le site est accessible sur `http://localhost`.
L'admin Filament est sur `http://localhost/admin`.

### Compte admin par défaut

| Email                        | Mot de passe |
|------------------------------|-------------|
| admin@benjamin-mabille.net   | password    |

### Développement avec HMR

Pour le hot-reload Vite pendant le dev, il faut exposer le port 5173 du container. Ajouter dans `docker-compose.yml` sous le service `phpfpm` :

```yaml
ports:
    - '127.0.0.1:5173:5173'
```

Puis lancer :

```bash
docker compose exec phpfpm npm run dev
```

## Structure du projet

```
cv-benjamin-mabille/
├── app/
│   ├── Enums/                 # SkillCategory
│   ├── Filament/
│   │   ├── Pages/             # Settings (page custom)
│   │   ├── Resources/         # Experience, Diploma, Skill, Project, Article, Tag, Contact
│   │   └── Widgets/           # Availability, UnreadMessages, MaintenanceToggle
│   ├── Http/
│   │   ├── Controllers/       # HomeController, ContactController, BlogController
│   │   └── Middleware/        # HandleInertiaRequests (shared props)
│   └── Models/                # 8 modèles (Experience, Diploma, Skill, Project, Article, Tag, Contact, Setting)
├── database/
│   ├── migrations/            # 8 tables + media
│   └── seeders/               # CvDataSeeder (toutes les données du CV)
├── resources/
│   ├── css/app.css            # Tailwind + animations custom
│   ├── js/
│   │   ├── app.tsx            # Point d'entrée Inertia/React
│   │   ├── components/        # GrainOverlay, Navigation, LanguageSwitcher
│   │   │   └── sections/      # Hero, Timeline, Education, SkillGrid, ProjectBento
│   │   ├── i18n/              # Config i18next + locales FR/EN
│   │   ├── layouts/           # AppLayout (dark, grain, dotted grid)
│   │   ├── lib/               # Variants Framer Motion
│   │   ├── pages/             # Home, Contact
│   │   └── types/             # Interfaces TypeScript (cv.ts)
│   └── views/
│       ├── app.blade.php      # Root template Inertia
│       └── filament/          # Vues Blade widgets + settings
├── routes/
│   └── web.php                # /, /contact, /admin (Filament)
├── docker-compose.yml
├── docker/
│   ├── Dockerfile             # PHP 8.3-FPM + Node 20 + intl
│   └── nginx/default.conf
└── Makefile
```

## Pages

| Route        | Description                                 |
|--------------|---------------------------------------------|
| `/`          | CV one-page (Hero, Expériences, Formation, Compétences, Projets) |
| `/contact`   | Formulaire de contact                       |
| `/admin`     | Panel d'administration Filament             |

## Admin Filament

Le panel `/admin` permet de gérer :

- **CV** : Expériences, Diplômes, Compétences, Projets (drag & drop ordering, upload logos)
- **Blog** : Articles (rich text, tags, scheduling), Tags
- **Messages** : Messages de contact reçus (marquer comme lu)
- **Paramètres** : Nom, bio, email, téléphone, réseaux sociaux, toggle disponibilité/maintenance
- **Dashboard** : Widgets disponibilité, messages non lus, toggle maintenance

## i18n

Le site est bilingue FR/EN :

- **Backend** : les champs `position`, `description`, `title`, `specialization`, `excerpt`, `body` sont stockés en JSON via `spatie/laravel-translatable`
- **Frontend** : labels de navigation et UI via `react-i18next` (`resources/js/i18n/locales/`)
- Le switch de langue est dans la barre de navigation

## Déploiement en production

### Option A : Serveur avec Docker

```bash
# 1. Cloner sur le serveur
git clone <repo-url> /var/www/cv
cd /var/www/cv

# 2. Configurer l'environnement
cp .env.example .env
# Editer .env :
#   APP_ENV=production
#   APP_DEBUG=false
#   APP_URL=https://cv.benjamin-mabille.net
#   DB_PASSWORD=<mot-de-passe-fort>
#   Configurer MAIL_* pour les vrais envois

# 3. Lancer les containers
docker compose up -d

# 4. Installer les dépendances (prod)
docker compose exec phpfpm composer install --no-dev --optimize-autoloader
docker compose exec phpfpm npm install --legacy-peer-deps

# 5. Setup Laravel
docker compose exec phpfpm php artisan key:generate
docker compose exec phpfpm php artisan migrate --force
docker compose exec phpfpm php artisan db:seed   # Première fois seulement
docker compose exec phpfpm php artisan storage:link

# 6. Build assets
docker compose exec phpfpm npm run build

# 7. Optimiser Laravel
docker compose exec phpfpm php artisan config:cache
docker compose exec phpfpm php artisan route:cache
docker compose exec phpfpm php artisan view:cache
docker compose exec phpfpm php artisan icons:cache

# 8. Permissions
docker compose exec phpfpm chmod -R 775 storage bootstrap/cache
```

### Option B : Serveur classique (sans Docker)

Prérequis : PHP 8.3+, Node 20+, MySQL/MariaDB, Redis, Nginx/Apache, Composer.

```bash
# 1. Clone + dépendances
git clone <repo-url> /var/www/cv
cd /var/www/cv/cv-benjamin-mabille
composer install --no-dev --optimize-autoloader
npm install --legacy-peer-deps
npm run build

# 2. Config
cp .env.example .env
# Editer .env (APP_ENV=production, DB_*, etc.)
php artisan key:generate

# 3. BDD
php artisan migrate --force
php artisan db:seed   # Première fois

# 4. Optimisations
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan icons:cache
chmod -R 775 storage bootstrap/cache
```

Config Nginx minimale :

```nginx
server {
    listen 80;
    server_name cv.benjamin-mabille.net;
    root /var/www/cv/cv-benjamin-mabille/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known) {
        deny all;
    }
}
```

### SSL (Let's Encrypt)

```bash
sudo certbot --nginx -d cv.benjamin-mabille.net
```

### Mise à jour

```bash
cd /var/www/cv
git pull origin master

docker compose exec phpfpm composer install --no-dev --optimize-autoloader
docker compose exec phpfpm npm install --legacy-peer-deps
docker compose exec phpfpm npm run build
docker compose exec phpfpm php artisan migrate --force
docker compose exec phpfpm php artisan config:cache
docker compose exec phpfpm php artisan route:cache
docker compose exec phpfpm php artisan view:cache
docker compose exec phpfpm php artisan icons:cache
```

## Commandes utiles (Make)

```bash
make run          # Build + démarrage Docker
make stop         # Arrêt des containers
make connect      # Shell dans le container PHP
make tinker       # Laravel Tinker
make migrate      # Jouer les migrations
make seed         # Lancer les seeders
make tests        # Lancer les tests
```
