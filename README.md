# Laravel Button Configuration Application

This is a Laravel-based web application that allows users to configure and update button settings, including customizing button color and hyperlink. It provides an intuitive interface for managing button configurations and previewing changes in real-time before saving.

## Features
- **Button Color Customization:** Users can select a color for each button via a color picker.
- **Hyperlink Configuration:** Users can set a URL for each button that redirects users when clicked.
- **Button Preview:** Users can see how the button looks in real-time with their selected settings.
- **CRUD Operations:** Create, update, and delete button configurations.
- **Responsive Design:** Works on mobile and desktop devices.


## how to setup the project: 

### if running without docker
```bash
cp .env.example .env
```

```bash
composer install
npm install
npm run dev
```

```bash
php artisan key:generate
php artisan migrate or ./vendor/bin/sail artisan migrate
php artisan db:seed --class="ButtonSeeder"
```


If running with docker (sail) syntax sugar
```bash
cp.env.example .env
```

```bash
./vendor/bin/sail composer install
```

```bash
./vendor/bin/sail yarn
./vendor/bin/sail yarn dev
```

```bash
./vendor/bin/sail artisan key:generate
./vendor/bin/sail migrate
./vendor/bin/sail db:seed --class="ButtonSeeder"
./vendor/bin/sail artisan db:seed --class="ButtonSeeder"
```