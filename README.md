<h1>DataBase Final Project <strong>Attendance</strong></h>

<h2>ER Diagram Link</h2>
<p align="center">
<a href="https://www.figma.com/file/dQ3tghjmOEb70kRYInyTxv/Untitled?type=whiteboard&node-id=0-1&t=zyBRrlparJYk1dPO-0">ER Diagram</a>
</p>

<h2>Steps to run laravel project</h2>
<p>
1. Install Required Software:

2. Make sure you have PHP installed on your system. You can check by running php -v in the command line.
Install Composer, a dependency manager for PHP. You can find installation instructions at https://getcomposer.org/download/.
Clone the Repository:

3. Open your command line or terminal and navigate to the directory where you want to clone the repository.
Run the following command to clone the repository: git clone <repository-url>
Replace <repository-url> with the actual URL of the repository you want to clone.
Install Dependencies:

4. Navigate to the project's directory: cd <project-directory>
Run composer install to install the project dependencies defined in the composer.json file. This command will create a vendor directory in your project.
Create Environment File:

5. Copy the .env.example file to a new file called .env: cp .env.example .env
Update the necessary configurations in the .env file, such as database credentials.
Generate Application Key:

6. Run the following command to generate an application key: php artisan key:generate
This key is used for secure sessions and other encrypted data within the application.
Set Up Database:

7. Create a new database for your Laravel project.
Update the .env file with the database details (database name, username, password).
Run Migrations:

8. Run the following command to migrate the database: php artisan migrate
This command will create the necessary database tables based on the migrations defined in the project.
Serve the Application:

9. Run the following command to start the Laravel development server: php artisan serve
This will start the server, and you can access the application in your browser at http://localhost:8000.
Access the Application:

10. Open your web browser and visit http://localhost:8000 (or the URL shown in the console after running php artisan serve).
You should see your Laravel application up and running.
</p>

<h2>Files needed</h2>
<p>
1. AttendanceDDL.sql => you need to run this file to create the Postgres database and then run this files to get files tables.
2. AttendanceDML.sql => you need to run this file to insert some data into the tables.
</p>


