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

2. Uruchom kontenery Docker (pierwsze uruchomienie może potrwać kilka minut)
```bash
docker-compose up -d
```

3. Poczekaj aż kontenery się uruchomią (ok. 30 sekund), następnie zaimportuj bazę danych
```bash
docker-compose exec -T database mysql -uroot -proot transport < transport_backup.sql
```

4. Aplikacja będzie dostępna pod adresem:
```
http://localhost:8080
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
- Dostęp do bazy danych: `docker-compose exec database mysql -uroot -proot transport`

## Rozwiązywanie problemów
1. Jeśli port 3306 jest zajęty, zatrzymaj lokalny serwer MySQL:
   - Na Ubuntu/Debian: `sudo service mysql stop`
   - Na macOS: `brew services stop mysql`

2. Jeśli widzisz błąd "Connection refused", poczekaj kilka sekund - baza danych może jeszcze się uruchamiać

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