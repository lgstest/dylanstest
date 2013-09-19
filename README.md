Dylan's LGS Test
========================

The following requirements should be met by this repository:

  1. Use the Symfony2 Standard edition, but replace Doctrine with Propel ORM
  2. Specify user roles as defined by Peter Kartawidjaja.
  3. Upon login, redirect users to a page specific to their roles
  4. Prevent unauthorized access to role pages

Installation 
-----
  
  1. Packagist/Composer: this project can be installed by running `php composer.phar create-project -s dev lgstest/dylanstest /path/to/root`
  2. Download: simply click the download button at the top of the repository. 
  
Use
-----

  1. If you downloaded the repo instead of using Composer, install requirements: `php composer.phar install`
  2. Check configuration: change the mysql user/password to appropriate settings for your 
     system. DO NOT change the secret, as it will cause the Propel Fixtures to break.
  3. Move into the root `cd /path/to/root`
  4. **IMPORTANT**: To allow the Propel Fixtures to load, because they do not support classes,
     you need to edit the schema in the FOSUserBundle. Go to `/root/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/propel/schema.xml` and add `last_login` after `password_requested_at` on line 37. (I know this is a hack; c'mon, I only worked for a couple hours on it)
  4. Build the SQL: `php app/console propel:sql:build`
  5. Create Database: `php app/console propel:database:create`
  6. Insert the tables: `php app/console propel:sql:insert --force`
  7. Install fixtures: `php app/console propel:fixtures:load`
  8. Refer to email from Dylan about usernames and passwords for various roles.