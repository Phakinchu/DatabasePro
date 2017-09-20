# blog

## installation

1. Install dependencies

```
php composer.phar install
```

2. Create a config file, just copy from `.env.example` then rename it to `.env`

3. Migrate and seed the database

```
php artisan migrate:refresh --seed
```

## Running on your local machine

```
php -S localhost:8000 -t public
```

## Troubleshoots

* Call to undefined function bcrypt()

use `crypt()` instead.



