# ci3_login
A simple login system using codeigniter 3

# Download Codeigniter 3 
> https://codeigniter.com/en/download

# Controller Configuration
Add some files in the controllers' folder
> ` application/controllers/login.php ` <br>
` application/controllers/login_success.php `

# Models
> ` application/models/login_model.php `

# Views
> ` application/views/login_page.php ` <br>
> ` application/views/login_sucess.php ` 

# Database
#### Xampp
> https://www.apachefriends.org/download.html

#### Database Configuration 
> Database Name : ci3_login <br>
Table Name : user <br>
Table Structure : <br>

| Name        | Type           | Value  |
| ------------- |:-------------:| -----:|
| user_id (Auto_Increment)      | int | 11 |  
| full_name      | varchar      |   40 |
| email | varchar      |    50 |
| password | varchar      |    50 |

# CI Configuration
#### application/config/database.php

` 'hostname' => 'localhost', ` <br>
` 'username' => 'root', ` <br>
` 'password' => '', ` <br>
` 'database' => 'ci3_login', ` <br>

#### application/config/config.php
> ` $config['base_url']	= "http://".$_SERVER['HTTP_HOST'].  str_replace(basename($_SERVER['SCRIPT_NAME']),"", $_SERVER['SCRIPT_NAME']); `

> ` $config['encryption_key'] = '2l3k4j2l34j2l34kj234j2l3k4j234l'; `

#### application/config/autoload.php
> ` $autoload['libraries'] = array('', 'database','form_validation',''); `

> ` $autoload['helper'] = array('form','url','html','text'); `

#### application/config/routes.php
> ` $route['default_controller'] = 'login'; `

# Remove the "index.php" in the url using ".htaccess file"
Add a ".htaccess" file in the main folder : ci3_login/.htaccess and write these code on it, so we can use the url without index.php<br>
` RewriteEngine on ` <br>
` RewriteCond %{REQUEST_FILENAME} !-f ` <br>
` RewriteCond %{REQUEST_FILENAME} !-d ` <br>
` RewriteRule .* index.php/$0 [PT,L] ` <br>

> Before : http://localhost/ci3_login/index.php/login <br>
After : http://localhost/ci3_login/login

# User
> Email : admin@login.com <br>
Password : sacode

![GitHub Logo](/img/prevew_main_page.jpg)