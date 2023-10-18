
# PHP OPP MCV Structure

in this file, we have an index.php file which is the entry point for our application. It will load the necessary files and instantiate the controllers based on the request URL.

- index.php
- .htaccess
    - app/
        - models/
            - UserModel.php
        - views/
            - home.php
            - login.php
            - register.php
        - controllers/
            - HomeController.php
            - AuthController.php
        - config/
            - database.php
        

The app/models/ directory contains all of our model classes, in this example we have a UserModel.php class that handles user data.

The app/views/ directory contains all of our view files, in this example we have three view files: home.php, login.php, and register.php. These files are responsible for rendering the HTML content that the user sees in their browser.

The app/controllers/ directory contains all of our controller classes, in this example we have a HomeController.php class and an AuthController.php class. The controller classes handle user input, validate it, and interact with the models and views to produce a response.

The app/config/ directory contains configuration files, in this example we have a database.php file that contains the database connection settings.

This structure allows us to separate our code into distinct layers, making it easier to maintain and modify. The models handle database interactions and business logic, the views handle presentation, and the controllers act as the intermediary between the two.
## Authors

- [@fahimi-eng](https://www.github.com/fahimi-eng)
