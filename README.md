# Welcome to SPMF !

Welcome to **S**imple **P**HP **M**VC **F**ramework

## Simple PHP MVC Framework
You can clone this repository and develop your project with the principle of OOP and MVC.

### Configuration

 1. Change your project folder from **public/.htaccess**
	 - Like This ... ***/yourfolder/public***
	 
 2. Change your configurations from **config/config.php**
	 - DB Parameters
		 - `define('DB_HOST', '127.0.0.1');`
		 - `define('DB_USER', 'YOUR_USER');`
		 - `define('DB_PASS', 'YOUR_PASS');`
		 - `define('DB_NAME', 'YOUR_DBNAME');`
		 >
	 - URL Root
		 - `define('URL_ROOT', 'http://localhost/yourfolder');`
		 >
	 - Site Name
		 - `define('SITE_NAME', 'Your Project');`
	 >

**> 	 Enjoy it.**

# Files

 - App
	 - config
		 - config.php
	 - Controllers
		 - Pages.php
	 - Core
		 - App.php
		 - Controller.php
		 - Database.php
	 - helpers
	 - Models
	 - Views
		 - inc
			 - footer.php
			 - header.php
		 - pages
			 - index.php
	 - .htaccess
	 - bootstrap.php
 - public
	 - css
		 - style.css
	 - js
		 - main.js
	 - index.php
	 - .htaccess
 - .htaccess