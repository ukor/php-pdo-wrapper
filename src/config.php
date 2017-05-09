<?php
/**
 * Created with PhpStorm by:
 * @author Ukor Jidechi Ekundayo << https://ukorjidechi.com || ukorjidechi@gmail.com>>.
 * Date: 5/9/17
 * Time: 2:47 PM
 */

$config = [
    "host"=> "localhost",       /** usually localhost */

    "port"=> 80,                /** leave as it is if not sure */

    "username"=> "root",        /** Mysql username, usually "root". Recommend to create a new user with less privilege */

    "password"=> "password",    /** password to MySQL username, leave blank if no password is set */

    "database_name"=> "example_db",

    "charset" => "utfmb4",      /** leave as it is */

    "table_prefix" => ""        /** optional */
];

/**@host
 * set the host, this is usually "localhost",
 * ask you hosting company for this...
 * @port
 * Leave as it is, Change if you know what you doing
 * @username
 * change this to your database username,
 * Recommend you create another user with less privilege
 * it is usually root, if you not sure ask your hosting company for this
 * @password
 * change this to whatever password you set for database in user
 * @database_name
 * create a database with phpMyAdmin or from terminal,
 * you can name it with any name that interest you
 * but make sure to change the name here
 * @charset
 * set charset, leave this just as it is
 * @table_prefix
 * set database table prefix, change to what ever you like
 */