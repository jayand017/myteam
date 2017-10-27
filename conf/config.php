<?php

class DB
{
    //database connection variables
    protected static $myconn;

    //Specify the database credentials here
    protected $db_host = 'localhost';
    protected $db_user = 'root';
    protected $db_pass = '';
    protected $db_name = 'myteam';


    /**
     * Connect to the database!
     */
    public function connect()
    {
        //Connection String
        $conn = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $this->myconn = $conn;
            //echo "Connection established";
        }
        return $this->myconn;

    }

    /**
     * Query the database
     */
    public function query($query)
    {
        // Connect to the database
        $myconn = $this->connect();

        // Query the database
        $result = $myconn->query($query);

        return $result;
    }

    /**
     * Fetch rows from the database (SELECT query)
     *
     */
    public function select($query)
    {
        $rows = array();
        $result = $this->query($query);
        if ($result === false) {
            return false;
        }
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }


}//End class


?>