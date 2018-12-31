<?php
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
    public function Insert($table, $cols){
        $sql="INSERT INTO $table SET $cols";
        $result=$this->conn->query($sql);
        if ($this->conn->affected_rows>0) {
            return true;
        } return false;
    }
    public function Update($table, $cols, $condition){
        $sql="UPDATE $table SET $cols WHERE $condition";
        $result = $this->conn->query($sql);
        if ($this->conn->affected_rows>0) {
            return true;
        } return false;
    }
    public function Delete($table, $condition){
        $sql="Delete FROM $table  WHERE $condition";
        $result = $this->conn->query($sql);
        if ($this->conn->affected_rows>0) {
            return true;
        } return false;
    }
}
$connect=new Db("localhost","root","","myshopbd");

#To Show All Data From Databale #

// if($connect->getAll("students","*")!=false){
//     echo "<pre>";
//     print_r($connect->getAll("students","Name,Mobile"));
//     echo "</pre>";

// }

#Specfic Data Entry into Database #

if($connect->getById("students","*","id=2")!=false){
    echo "<pre>";
    print_r($connect->getById("students","*","id=2"));
    echo "</pre>";

}
#For New Data Entry Into Database#

// if ($connect->Insert("students"," Name='Rakib', Mobile='01737485094', Address='London.UK' ")) {
//     echo " Insert Success ";
// }
// else{
// echo " Insert Fail ";
// }
#For Update #

// if ($connect->Update("students"," Name='Jhon',Address= 'UK' ","id=3")) {
//     echo "Update Success";
// } else {
//     echo " Update Fail";
// }

#For Delete #

 if ($connect->Delete("students","id = 4")) {
    echo " Delete Success ";
 } else {
    echo " Delete Fail ";
 }
 

?>
