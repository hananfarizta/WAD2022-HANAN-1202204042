# WAD2022 HANAN 1202204042

## MODUL5 HANAN

<br>

-   copy the .env.example file to .env

```bash
cp .env.example .env
```

-   change the database name in the .env file

```bash
DB_PORT=your_mysql_port
DB_DATABASE=your_database_name
```

-   Install Composer

```bash
composer install
```

-   Generate Key

```bash
php artisan key:generate
```

-   migrate database

```bash
php artisan migrate
```

-   link storage

```bash
php artisan storage:link
```

-   run the server

```bash
php artisan serve
```
