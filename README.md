# citrus-system-assignment

Citrus System assignment

USAGE

- Clone this repository and run:
  
  composer install
  
- Application should be placed in Apache root directory (Ubuntu example):

  /var/www/html/
  
- If, for some reason, Application is not placed in root directory, changes are required in .htaccess file
  
- Project also contains a sql file which already contains products and one admin user

- Import sql file

- MySql credentials should be changed in app/Config/Database.php file on line 19:

  self::$_db = new \PDO('mysql:host=localhost;dbname=catalog','bojan','bojan1994');
  
- Admin page is accessible on /admin route

- Admin credentials are 

  username: admin
  password: admin123
  
- On homepage all products are visible, below that is form for posting a comment

- After a comment is posted, admin must publish it before it become visible on homepage
