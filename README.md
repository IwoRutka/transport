# Transport TMS

System zarządzania transportem

## Wymagania
- PHP 8.0 lub wyższy
- Composer
- MySQL/MariaDB
- Symfony CLI

## Instalacja
1. Sklonuj repozytorium
```bash
git clone [url_repozytorium]
```

2. Zainstaluj zależności
```bash
composer install
```

3. Skopiuj .env.dist do .env i skonfiguruj połączenie z bazą danych
```bash
cp .env.dist .env
```

4. Utwórz bazę danych i wykonaj migracje
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

5. Uruchom serwer developerski
```bash
symfony server:start
```