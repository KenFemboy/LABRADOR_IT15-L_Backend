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

Frontend Technologies

      React – Main library for building the user interface

      Vite – Fast development server and build tool

      React Router – Client-side routing for navigation

      Tailwind CSS – Utility-first CSS framework for styling

      FullCalendar – Calendar UI component for schedules/events

      Recharts – Data visualization charts

      Lucide – Icon library used in React

      Axios – API request library
         
      Backend Technologies

Laravel – Backend API framework

      Laravel Vite Plugin – Connects Laravel with Vite

      MySQL – Database used with Laravel

      Development Tools

      ESLint – Code quality and linting

      PostCSS – CSS transformation tool

      Autoprefixer – Automatically adds CSS vendor prefixes

      Concurrently – Runs multiple commands at the same time

Stack Summary

Frontend: React + Vite + Tailwind + React Router + FullCalendar + Recharts

Backend: Laravel + MySQL

API Communication: Axios