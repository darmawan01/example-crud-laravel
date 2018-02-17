# Example-crud-laravel 5.5

# Run with your computer
  - Composer Install -> installing dependencys package
  - Rename .env.example to .env
  - set .env : <br>
      <u> make sure you have created the database, and then change the code below according to your database</u>

      > DB_CONNECTION=mysql <br>
      > DB_HOST=localhost <br>
      > DB_PORT=3306 <br>
      > DB_DATABASE=database_name <br>
      > DB_USERNAME=username <br>
      > DB_PASSWORD=password

  - php artisan migrate -> migrate model
  - php artisan db:seed -> auto adding data to table from seed -> seed is data permanent/default
  - php artisan key:generate -> generate the APP_KEY 
  - php artisan serve -> run server

# Video Tutorial
  [Kawan Koding](https://kawankoding.com/)

# Default
  - CRUD
  - Validation
  - Paginate
  - Middleware

# Additional
  - Post Edit/Delete Access

# File Uploads
  ## Upload Using Intervention
     - composer require intervention/image -> make sure you have been installed GD library
       > Code in UserController.php
       > In view just call {{ auth()->user()->avatar }}
    
  
  ## Upload using Laravel storage
    - In config/filesystem.php
    - Code in UserProfileController
      > change local setting to : 

            'local' => [
                  'driver' => 'local',
                  'root' => public_path('files'),
             ],
  
