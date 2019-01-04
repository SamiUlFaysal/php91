<?php 
                     # Database Class #
                      # Class No 10 #


class Db{
    private $conn;
    public function __construct($host,$user,$pass,$db){
        $this->conn=new mysqli($host,$user,$pass,$db);
        if(!$this->conn){
            die("Connection Fail!".$this->conn->connect_error);
        }
    }
    public function getAll($table,$cols){
        $sql="SELECT $cols FROM $table";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }
        else{
            return false;
        }
    }
        public function getById($table,$cols,$condition){
        $sql="SELECT $cols FROM $table WHERE $condition";
        $result=$this->conn->query($sql);
        if($result->num_rows>0){
            return $result->fetch_assoc();
        }
        else{
            return false;
        }
    }

}

    $connect=new Db("localhost","root","","myshopbd");
    echo "<pre>";
    ($student=$connect->getById("students","*","id=2"));

    //$students=$connect->getAll("students","*");
    //echo "<pre>";
    //print_r($students);
    //echo "</pre>";
// converted data to table
   /* echo "<table border=\"1\" cellpadding=\"5\">";
    echo "<tr>";
    foreach($students[0] as $key=>$val){
	echo "<th>".ucfirst ($key). "</th>";
    }
    echo "<tr>";
    foreach($students as $student){
    	echo"<tr>";
    	foreach($student as $value){
    		echo"<td> $value</td>";
    	}
    	echo"<tr>";
    }
    echo "</table>";*/

    echo "<table border=\"1\" cellpadding=\"5\">";
    
    foreach($student as $key=>$val){
    echo "<tr>";	
	echo "<td>$key</td>";
	echo "<td>$val</td>";
	echo "<tr>";
    }
    
    echo "</table>";

 ?>
