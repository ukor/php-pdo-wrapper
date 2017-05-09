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
     * @param array $config
     */
    function __construct(array $config){
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