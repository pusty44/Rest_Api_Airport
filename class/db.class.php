<?php
class db {
private $host;
private $database;
private $login;
private $password;
private $port;
private $dbh;

    /**
     * db constructor.
     * @param $host
     * @param $database
     * @param $login
     * @param $password
     * @param $port
     */
    public function __construct($host, $database, $login, $password, $port)
    {
        $this->host = $host;
        $this->database = $database;
        $this->login = $login;
        $this->password = $password;
        $this->port = $port;
        $this->connect();
        if(!$this->dbh) return false;
    }

    public function connect(){
        try
        {
            $this->dbh = new PDO('mysql:host='.$this->host.':'.$this->port.';dbname='.$this->database, $this->login, $this->password);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch(PDOException $e)
        {
            $this->dbh = false;
            echo $e->getMessage();
        }
    }

    public function select(string $table, array $options = null){
        $opt = '';

        if($options != null){

            foreach($options as $values){
                $opt .= $values[0].' '.$values[1].' :'.$values[0];
            }
            $query = 'SELECT * FROM '.$table.' WHERE '.$opt;
            $stmt = $this->dbh->prepare($query);
            foreach($options as $values){
                if($values[3] == 'string') $pdo = PDO::PARAM_STR;
                elseif($values[3] == 'int') $pdo = PDO::PARAM_INT;
                $stmt->bindValue(':'.$values[0],$values[2],$pdo);
            }
            $stmt->execute();
            return $stmt->fetch();
        } else {
            $query = 'SELECT * FROM '.$table;
            $stmt = $this->dbh->query($query);
            return $stmt;
        }

    }


}