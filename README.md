# ci3_login
A simple login system using codeigniter 3

# Database
> Database Name : ci3_login

#### application/config/database.php

` 'hostname' => 'localhost', ` <br>
` 'username' => 'root', ` <br>
` 'password' => '', ` <br>
` 'database' => 'ci3_login', ` <br>

#### application/config/config.php
> $config['base_url']	= "http://".$_SERVER['HTTP_HOST'].  str_replace(basename($_SERVER['SCRIPT_NAME']),"", $_SERVER['SCRIPT_NAME']); 

> $config['encryption_key'] = '2l3k4j2l34j2l34kj234j2l3k4j234l';

# CI Configuration
#### application/config/autoload.php
> $autoload['libraries'] = array('', 'database','form_validation','');

> $autoload['helper'] = array('form','url','html','text');

# Remove the "index.php" in the url using .htaccess file
Add a ".htaccess" file in the main folder : ci3_login/.htaccess and write these code on it, so we can use the url without index.php<br>
` RewriteEngine on ` <br>
` RewriteCond %{REQUEST_FILENAME} !-f ` <br>
` RewriteCond %{REQUEST_FILENAME} !-d ` <br>
` RewriteRule .* index.php/$0 [PT,L] ` <br>

> Before : http://localhost/ci3_login/index.php/login <br>
After : http://localhost/ci3_login/login


