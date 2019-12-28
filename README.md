# ci3_login
A simple login system using codeigniter 3

# Database
> Database Name : ci3_login

# CI Configuration
#### application/config/autoload.php
> $autoload['libraries'] = array('', 'database','form_validation','');

> $autoload['helper'] = array('form','url','html','text');


#### application/config/config.php
> $config['base_url']	= "http://".$_SERVER['HTTP_HOST'].  str_replace(basename($_SERVER['SCRIPT_NAME']),"", $_SERVER['SCRIPT_NAME']); 

> $config['encryption_key'] = '2l3k4j2l34j2l34kj234j2l3k4j234l';

# .htaccess
> Add a ".htaccess" file in the main folder : ci3_login/.htaccess and write these code on it<br>
` RewriteEngine on ` <br>
` RewriteCond %{REQUEST_FILENAME} !-f ` <br>
` RewriteCond %{REQUEST_FILENAME} !-d ` <br>
` RewriteRule .* index.php/$0 [PT,L] ` <br>


