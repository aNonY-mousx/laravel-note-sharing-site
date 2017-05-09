# laravel-note-sharing-site
laravel powered note sharing site
Yup! you can share notes (download and /or upload ) notes from here 
There is even a Q and As' section where u can ask questions/answer some maybe ? :)

this is built on Laravel 5.4 framework 

This website is currently under development ..


How to get it up and running.
	1. Make sure u have composer and laravel installed ofcourse :)
		It is assumed that u have tried laravel :) and u have knowledge of virtual hosts (if u dont its easy af, look it up on google)

	2. clone this repository (i suggest u clone it in the place ur server can find ( /var/www/html or  /.../htdocs/ etc)  but we will be making a virtual host so it might not be necessary)

	3.make sure You are in the project  directory /.../laravel-note-sharing-site/ (via terminal or command prompt) then type 
			
			composer install 

	this will install all dependencies from composer.lock( this will create 'vendor' folder and download all packages).

	4.Now create a file named ".env" in ur project directory/./laravel-note-sharing-site/ . This file will contain database connection details and such. You can copy and paste the content of .env.example located in same directory. (! Dont just simply rename that .env.example file to .env ) 
	After u copy and paste it to .env file make necessary changes like mysql connection details emails and other stuffs.

	5.If u r using linux as a non root user u might have to change some permissions of ur project folder and /../laravel-note-sharing-site/storage folder

		sudo chgrp -R www-data /var/www/html/laravel-note-sharing-site
 		sudo chmod -R 775 /var/www/html/laravel-note-sharing-site/storage
	
	6. Generate APP_KEY (make sure u r in project directory)
				type php artisan key:generate

	Thats about it. THere u go :D

	You can access ur site by typing in url
		localhost/laravel-note-sharing-site/public		

		in linux(localhost resolves into /var/www/html/) as defined in /etc/hosts
		
		similar in windows :) 

	Now if ur site is up and running now its time for migration ie importing database tables :)

	a. First as this is Laravel 5.4 go to /../laravel-note-sharing-site/app/Providers and edit AppServiceProvider.php with sublime or anything 
		add below use Illuminate\Support\ServiceProvider;

			use Illuminate\Support\Facades\Schema;
		
		and then add schema::defaultStringLength(191);  function inside boot function as below

		public function boot()
	    {
	       schema::defaultStringLength(191); 
	    }
	b. Now edit one more file /../laravel-note-sharing-site/config/database.php
	 change mysql configurations database name,usrname and password

	c. Finally on project directory in terminal or cmd prompt type
				php arisan migrate
		Or sudo php artisan migrate
	
	this will create all necessary tables into the database u configured in .env and config/database.php file 
		
	If u have problems while migrating and would not mind deleting previous records in database u could use refresh 

			sudo php artisan migrate:refresh

	this will drop any matching table if exists

	Thats all ! =)
	>.<

