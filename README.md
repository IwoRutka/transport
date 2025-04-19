# Transport TMS

System zarządzania transportem

## Wymagania
- Docker (minimum version 20.10.0)
- Docker Compose (minimum version 2.0.0)

## Instalacja (Docker)
1. Sklonuj repozytorium
```bash
git clone [url_repozytorium]
```

2. Skopiuj plik .env.dist do .env i ustaw własne hasła
```bash
cp .env.dist .env
```

3. Uruchom kontenery Docker (pierwsze uruchomienie może potrwać kilka minut)
```bash
docker-compose up -d
```

4. Poczekaj aż kontenery się uruchomią (ok. 30 sekund), następnie zaimportuj bazę danych
```bash
docker-compose exec -T database mysql -u$MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE < transport_backup.sql
```

## Struktura kontenerów
- PHP 8.1 (FPM)
- Nginx
- MySQL 8.0
- Mailcatcher (do testowania maili)

## Przydatne komendy Docker
- Zatrzymanie kontenerów: `docker-compose down`
- Restart kontenerów: `docker-compose restart`
- Podgląd logów: `docker-compose logs -f`
- Dostęp do kontenera PHP: `docker-compose exec php bash`
- Dostęp do bazy danych: `docker-compose exec database mysql -u $MYSQL_USER -p $MYSQL_DATABASE`

## Rozwiązywanie problemów
1. Jeśli port 3306 jest zajęty, zatrzymaj lokalny serwer MySQL:
   - Na Ubuntu/Debian: `sudo service mysql stop`
   - Na macOS: `brew services stop mysql`

2. Jeśli widzisz błąd "Connection refused", poczekaj kilka sekund - baza danych może jeszcze się uruchamiać

## Zmienne środowiskowe
Przed uruchomieniem aplikacji skopiuj `.env.dist` do `.env` i ustaw następujące zmienne:
- `MYSQL_ROOT_PASSWORD` - hasło dla użytkownika root bazy danych
- `MYSQL_DATABASE` - nazwa bazy danych (domyślnie: transport)
- `MYSQL_USER` - nazwa użytkownika bazy danych
- `MYSQL_PASSWORD` - hasło użytkownika bazy danych
- `DATABASE_URL` - URL połączenia do bazy danych (format: mysql://user:pass@host:3306/dbname)

## Instalacja (Lokalna)
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
php bin/console doctrine:fixtures:load 
```

5. Uruchom serwer developerski
```bash
symfony server:start
```