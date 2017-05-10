<?php
/**
 * Created with PhpStorm by:
 * @author Ukor Jidechi Ekundayo << https://ukorjidechi.com || ukorjidechi@gmail.com>>.
 * Date: 2016/10/18
 * Time: 11:29 AM
 */

namespace ukorJidechi;


class database{
    protected $database_connection;

    /**
     * db_connect constructor.: opens connection to database
     */
    function __construct(){

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

        $config = [
            "host"=> "localhost",       /** usually localhost */

            "port"=> 80,                /** leave as it is if not sure */

            "username"=> "root",        /** Mysql username, usually "root". Recommend to create a new user with less privilege */

            "password"=> "password",    /** password to MySQL username, leave blank if no password is set */

            "database_name"=> "rose",

            "charset" => "utfmb4",      /** leave as it is */

            "table_prefix" => ""        /** optional */
        ];
        try{
            $this->open_db_connection((array) $config);
        }catch(\PDOException $e){

            //TODO: Some logging function and email to developer or admin

            echo "something went wrong ";
        }
        //$this->open_db_connection();
    }

    /**
     *db_connect destructor.: close connection to database
     */
    function __destruct(){

        try {
            $this->close_db_connection();
        }catch (\PDOexception $e){

            //TODO: Some logging functions and maybe mail to developer or admin of the website
            echo "database was not close";
        }
        //$this->close_db_connection();
    }


    /**
     * connect to the database
     * @param array $config
     * @return \PDO
     */
    final protected function open_db_connection(array $config){

        $dns = 'mysql:host=' . $config['host'] . ';dbname=' . $config['database_name'];

        $this->database_connection = new \PDO($dns, $config['username'], $config['password']
        );

        $this->database_connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $this->database_connection->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);

        return $this->database_connection;
    }


    /**
     * close database connection
     * @return null
     */
    final protected function close_db_connection(){
        $this->database_connection = null;
    }
}