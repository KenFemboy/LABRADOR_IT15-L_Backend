How to install
 1. Download Php
 1. Install Composer with php path
 2. Php ( change php.ini extention ZIP, MYSQL)
 3. Change Environment Variable
 4. Open repo then cp .env.example .env
 5. php artisan key:generate
 6. Make empty database in Laragon and setup .env file with database
 7. Migrate database: php artisan migrate:fresh