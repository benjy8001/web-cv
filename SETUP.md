# CV Benjamin Mabille — Setup Guide

## 1. Créer le projet Laravel 12

```bash
composer create-project laravel/laravel cv-benjamin-mabille
cd cv-benjamin-mabille
```

## 2. Installer le starter kit React (Inertia 2 + Tailwind + shadcn)

```bash
php artisan install:starter-kit react
```

## 3. Installer les packages Laravel

```bash
# Admin panel
composer require filament/filament:"^3.3"
php artisan filament:install --panels

# Media library (images portfolio, CV PDF)
composer require spatie/laravel-medialibrary
php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="medialibrary-migrations"

# Multi-langue (modèles traduisibles)
composer require spatie/laravel-translatable

# Sitemap SEO
composer require spatie/laravel-sitemap

# Slugs auto (articles blog)
composer require spatie/laravel-sluggable

# Filament plugins
composer require filament/spatie-laravel-translatable-plugin:"^3.3"
composer require filament/spatie-laravel-media-library-plugin:"^3.3"
```

## 4. Installer les packages NPM (React)

```bash
npm install framer-motion react-type-animation react-intersection-observer react-i18next i18next @tabler/icons-react
```

## 5. Configurer l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

Éditer `.env` :
```
APP_NAME="Benjamin Mabille"
APP_URL=https://cv.benjamin-mabille.net

DB_DATABASE=cv_benjamin
DB_USERNAME=root
DB_PASSWORD=

APP_LOCALE=fr
APP_FALLBACK_LOCALE=en
APP_AVAILABLE_LOCALES=fr,en
```

## 6. Lancer les migrations et le seeder

```bash
php artisan migrate
php artisan db:seed --class=CvDataSeeder
```

## 7. Créer l'utilisateur admin Filament

```bash
php artisan make:filament-user
```

## 8. Publier les fichiers du kit

Copier tous les fichiers de ce kit dans le projet Laravel aux emplacements indiqués.

## 9. Build & Serve

```bash
npm run dev          # Dev avec HMR
php artisan serve    # http://localhost:8000
                     # Admin: http://localhost:8000/admin
```

## Structure du projet

```
app/
├── Models/              → Modèles Eloquent (Experience, Skill, Project, Article...)
├── Filament/
│   ├── Resources/       → CRUD admin (ExperienceResource, ArticleResource...)
│   ├── Pages/           → Pages custom (Settings)
│   └── Widgets/         → Widgets dashboard
├── Http/Controllers/    → Controllers Inertia
└── Http/Middleware/      → Middleware locale

resources/js/
├── Pages/               → Pages React (Home, Blog/Index, Blog/Show)
├── Components/          → Composants React réutilisables
├── Layouts/             → Layout principal
├── i18n/                → Traductions FR/EN
└── lib/                 → Utilitaires (cn, animations)

database/
├── migrations/          → Tables
└── seeders/             → Import des données actuelles
```
