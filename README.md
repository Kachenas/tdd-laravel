
Part 1: Setup Local Working Environment:

1. To create a project using Laravel Framework, we first must download an environment where we will be running the Project. In this setup, I am using Laragon as my working environment as it simplifies the setup for PHP, MySQL and Apache. 
- You can download the working environment on this link https://laragon.org/docs/install.html and follow the steps on the site to setup Laragon. This will download the latest version of PHP, MySQL and Apache. 
Once successful, you can start Laragon by clicking on the Start All button.

* Start All – will start all the services you need when creating a website. It will start the Apache, MySQL, and PHP setup for you. 
* Database – will be for managing your database creation.
* Terminal – will open a terminal for you, it is just like a cmd console window.
* Root – will take you to your project folders root.

2. After downloading Laragon, you will also need to download composer.  Composer is a package that manages dependencies of PHP and you can download it here on this link https://getcomposer.org/download/ , just follow the instructions in the site on how to download and install for Windows or Mac. 
3. We also need to have a code editor to write our code, for this one I am using Visual Studio code and you can download it using this link https://code.visualstudio.com/download

Project Setup Database:
1.	When doing project, I prefer to first setup my database environment for the project. To setup the environment settings, just click on Database in Laragon and a new window will appear. To create a new setting of database, just click on new and type in the name of your setting. 
2.	For this one, will be using the default which is root for the user and blank for the password and port is 3306. But in real word, the username should not be root and password should not be blank. Once finish, click on Open and confirmed “Yes” to save the settings.
3.	The next step is to create a database for the environment we have setup, right click on the name of the Project and select create new then database. 
4.	A new window will appear and you just need to type in the name of your Database. For the collation, we can leave it as is and then click on “OK”

Project Setup Laravel:
1.	On Laragon, click on terminal and a window console will appear. To check if composer was successfully installed, just run composer –v on the terminal. Running this command will show you the version of composer you have downloaded.
2.	The next step is to clone this repo on your root folder in Laragon. 
Type: git clone [http://127.0.0.1:8000].
3.	Once cloning of the project is finished, go to .env and update this information:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<the name of your database>
DB_USERNAME=root
DB_PASSWORD=

After updating this information, go to your terminal and type this commands:
php artisan optimize:clear
php artisan serve
if no errors where encountered, you can go to this link http://127.0.0.1:8000/ or the url provided by the terminal. 

Enable PHP Extensions

1.	To enable PHP extensions, go to Laragon Window and right click on the mouse. Select -> PHP -> Extensions and click on pdo_sqlite. After that restart Laragon by clicking the stop and running it again.

Running a test unit
Run  .\vendor\bin\phpunit or php artisan test on your Laragon console terminal.

Part 2: Setting up Laravel Project

1.	Git Clone this repository
2.	Create a Database
-	Read the manual on how to create a database in setting up Laragon Project
3.	Make a copy of .env, rename .env.example to .env
4.	Update the .env to point to newly created database on part 1 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<the name of your database>
DB_USERNAME=root
DB_PASSWORD=
5.	Run composer install on your laragon terminal
-	This will install composer on your project folder
6.	Run php artisan optimize:clear on your laragon terminal
7.	Run php artisan serve on your terminal
8.	Be sure to enable PHP Extensions
9.	Find phpunit.xml and comment out DB_CONNECTION and DB Database
10.	Close php artisan serve and run php artisan migrate
-	This will migrate the migrations file made for this repo.


Running Test
1.	Run php artisan test
-	This will run the artisan test made for this project. Since the routes/api with group product is commented, this will cause the test to fail. 
2.	Comment out these line of code found on routes/api
3.  After that, go to productController, and go to index function. Comment the line of code below 1st comment and uncomment code below the 2nd Comment.
4. Also comment the line of code below 1st comment and uncomment code below the 2nd Comment of the create function. And run php artisan test on your console. 
    -  The create function will fail because no data is being inserted.
	- Now go to test_endpoint_create and comment out 2nd comment and comment 1st comment. 
    - Hit save and run php artisan test. 
5. Now go to Product Controller under show function. Comment the line of code below 1st comment and uncomment code below the 2nd Comment of the show function. And run php artisan test on your console. 
    - The show function will fail because no product is found.
    - Now go to test_endpoint_show_specific_product and comment out 2nd comment and comment 1st comment. 
    - Hit save and run php artisan test. 
6. Now go to Product Controller under update function. Comment the line of code below 1st comment and uncomment code below the 2nd Comment of the update function. And run php artisan test on your console. 
    - The update function will fail because no data is being created and updated.
    - Now go to test_endpoint_update and comment out 2nd comment and comment 1st comment. 
    - Hit save and run php artisan test. 
7. Now go to Product Controller under delete function. Comment the line of code below 1st comment and uncomment code below the 2nd Comment of the delete function. And run php artisan test on your console. 
    - The delete function will fail because no data is being deleted.
    - Now go to test_endpoint_delete and comment out 2nd comment and comment 1st comment. 
    - Hit save and run php artisan test. 
    - 8. Now under test_invalid_input_create. We purposely entered an invalid input, this will cause the test to fail because of the wrong data type and null data being pass. To pass this test, uncomment //'product_name' => $this->faker->randomElement(["Addidas", "Nike", "Reebok", "Pony"]), and //'quantity' => $this->faker->randomDigit(), then comment 'product_name' => $this->faker->randomFloat(), and 'quantity' => $this->faker->randomElement(["", null]),



