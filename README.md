How to run
 1. Enusure you have Install Php and Composer
 2. In the terminal run "composer install" or "composer update"
 3. Run "Php artisan migrate:fresh" after that "php artisan db:seed"
 4. Wait for the migration and seeder to finish
 5. Proceed to the Frontend (Refere to Labrador_IT15-L_Frontend for instructions)
 6. In the frontend or postman use the example admin credentials
    For Postman:
    Go to Body then Raw then paste this as a JSON format
    "email": "test@example.com",
    "password": "password"u
    Method Should be POST and the URL is
    http://127.0.0.1:8000/api/admin/login