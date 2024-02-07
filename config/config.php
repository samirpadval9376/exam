<?php

class Config{

    private $HOST = "127.0.0.1";
    private $USERNAME = "root";
    private $PSW = "";
    private $DB_NAME = "exam";
    private $table_name = "books";
    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->HOST,$this->USERNAME,$this->PSW,$this->DB_NAME);

        if($this->conn) {
        }
        else{
            echo "Failed to Connect";
        }
    }

    public function insert($book_name,$borrow_date,$due_date) {




        $query = "INSERT INTO $this->table_name(book_name,borrow_date,deu_date) VALUES('$book_name',$borrow_date,$due_date)";

        $res = mysqli_query($this->conn,$query);

        print_r($res);

        return $res;
    }

    public function getAllData() {

        $query = "SELECT * FROM $this->table_name";

        $res = mysqli_query($this->conn,$query);

        return $res;
    }

}

?>