# blog

## installation

Install dependencies

```
php composer.phar install
```

Create a config file, just copy from `.env.example` then rename it to `.env`

## Running on your local machine

```
php -S localhost:8000 -t public
```

## Troubleshoots

* Call to undefined function bcrypt()

use `crypt()` instead.



