<h1>DataBase Final Project <strong>Attendance</strong></h>

<h2>ER Diagram Link</h2>
<p align="center">
<a href="https://www.figma.com/file/dQ3tghjmOEb70kRYInyTxv/Untitled?type=whiteboard&node-id=0-1&t=zyBRrlparJYk1dPO-0">ER Diagram</a>
</p>

<h2>Steps to run laravel project</h2>
<p>
1. Install Required Software:

 Make sure you have PHP installed on your system. You can check by running php -v in the command line.
Install Composer, a dependency manager for PHP. You can find installation instructions at https://getcomposer.org/download/.

2. Clone the Repository:

Open your command line or terminal and navigate to the directory where you want to clone the repository.
Run the following command to clone the repository: git clone <repository-url>
Replace <repository-url> with the actual URL of the repository you want to clone.

3. Install Dependencies:

Navigate to the project's directory: cd <project-directory>
Run composer install to install the project dependencies defined in the composer.json file. This command will create a vendor directory in your project.

4. Create Environment File:

Copy the .env.example file to a new file called .env: cp .env.example .env
Update the necessary configurations in the .env file, such as database credentials.

5. Generate Application Key:

Run the following command to generate an application key: php artisan key:generate
This key is used for secure sessions and other encrypted data within the application.

6. Set Up Database:

Create a new database for your Laravel project and run the DDL.sql file.
Update the .env file with the database details (database name, username, password).

7. Serve the Application:
You have need to download xampp or wamp to run the server .

Run the following command to start the Laravel development server: php artisan serve
This will start the server, and you can access the application in your browser at http://localhost:8000.
Access the Application:

Open your web browser and visit http://localhost:8000 (or the URL shown in the console after running php artisan serve).
You should see your Laravel application up and running.
</p>

<h2>Files needed</h2>
<p>
1. AttendanceDDL.sql => you need to run this file to create the Postgres database and then run this files to get files tables.
2. AttendanceDML.sql => you need to run this file to insert some data into the tables.
</p>


<h2>Interfaces</h2>
<span>You can shown the views in resources folder and then in views folder</span>
<p>1. LoginPage => you can login as teacher or system manager.</p>
<p>2. UserPage => you can see the user information and you can add and edit it.</p>
<p>3. CoursePage => you can see the course information and you can add and edit it.</p>
<p>4. StudentPage => you can see the student information and you can add and edit it.</p>
<p>5. InstructorPage => you can see the instructor information and you can add and edit it.</p>
<p>6. AttendancePage => you can see the attendance information and you can add and edit it.</p>

<h2>Data Login </h2>
<p>1. System Manager => username:israa@gmail.com , password:israa1234</p>

