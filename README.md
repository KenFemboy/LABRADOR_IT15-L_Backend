How to install
 1. Download Php
 1. Install Composer with php path
 2. Php ( change php.ini extention ZIP, MYSQL)
 3. Change Environment Variable 
 4. Open repo run composer install/update then cp .env.example .env
 5. Run php artisan key:generate (if error: composer install)
 6. Make empty database in Laragon and setup .env file with database
 7. Migrate database: php artisan migrate:fresh
 8. to seed database run :php artisan db:seed