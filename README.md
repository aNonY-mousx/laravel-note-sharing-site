# laravel-note-sharing-site
Laravel powered note sharing site. You can share notes (download and /or upload ) notes from here 
There is even a Q and As' section where u can ask questions/answer some maybe ? :)

this is built on Laravel 5.4 framework 

This website is currently under development ..


##  How to get it up and running.

Make sure u have **_composer_** installed.      
Clone this repository.  
Now Make sure You are in the project  directory /.../note-share/ (via terminal or command prompt) then type this command:    
	
		composer install     
	
It will install all dependencies from composer.lock( this will create 'vendor' folder and download all packages).

Now create a file named ".env" in ur project directory/./note-share/ . This file will contain database connection details and such. You can copy and paste the content of .env.example located in same directory. **(! Dont just simply rename that .env.example file to .env it is kept as refrence so that others can quickly set up their environment)** 
After u copy and paste it to .env file make necessary changes like mysql connection details emails and other stuffs.   

If u r using linux as a non root user u might have to change some permissions of ur project folder and /../note-share/storage folder   

		sudo chgrp -R www-data /var/www/html/note-share
 		sudo chmod -R 775 /var/www/html/note-share/storage
 
 Generate APP_KEY (make sure u r in project directory in terminal/cmd prompt)then type this command:   
 
 		php artisan key:generate   
	

Now its time for migration _i.e_ importing database tables :)

Make sure to create a new database and add your database credentials to your .env file:   
	
	DB_HOST=localhost
	DB_DATABASE=homestead
	DB_USERNAME=homestead
	DB_PASSWORD=secret
	

Now edit one more file /../note-share/config/database.p and change mysql configurations database name,usrname and password   

Finally on project directory in terminal or cmd prompt type this command:
		
		php artisan migrate
	
this will create all necessary tables(from migrations) into the database u chose/configured in .env and config/database.php file 

If u have problems while migrating and would not mind deleting previous records in database u could use ':refresh '

		sudo php artisan migrate:refresh

this will drop any  matching table if exists or u can drop them manually  or use another database
## Note 
>Troubleshooting: Specified key was too long error. If you see this error message you have an outdated version of MySQL, use the following solution: [https://laravel-news.com/laravel-5-4-key-too-long-error](https://laravel-news.com/laravel-5-4-key-too-long-error)

>This solution has been alrealy applied in this project. If u have mysql 5.7.7 and up you may undo these changes by visiting above link.   

For starting server type this command in terminal/prompt ( U must be in project folder ):   
	
		php artisan serv


Thats all !  =)    
>.<

