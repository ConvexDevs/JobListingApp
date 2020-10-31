<?php

class Database
{
    private $db_name=DB_NAME;
    private $db_user=DB_USER;
    private $db_pass=DB_PASSWORD;
    private $db_host = DB_HOST;

    private $dbh;

    // private $error;

    private $statement;

    public function __construct()
    {
        $dsn = "mysql:dbname=".$this->db_name.";host=".$this->db_host;
        $options=
        [
            PDO::ATTR_PERSISTENT=>true,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        ];
        try 
        {
            $this->dbh = new PDO($dsn,$this->db_user,$this->db_pass,$options);
            return $this->dbh;
        }
        catch (PDOException $e) {
            return  $e->getMessage();
        }
    }
    public function query($query)
    {
        $this->statement=$this->dbh->prepare($query);
    }
    public function bind($parameters,$values,$type=null)
    {
        if(is_null($type))
        {
            switch(true)
            {
                case is_int($values):
                    $type=PDO::PARAM_INT;
                    break;
                case is_bool($values):
                    $type=PDO::PARAM_BOOL;
                    break;
                case is_null($values):
                    $type=PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->statement->bindValue($parameters,$values,$type);    
    }
    public function execute()
    {
       return $this->statement->execute();
    }
    public function resultSet()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function resultSingle()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }
}
https://www.electronics-tutorials.ws/counter/count_2.html