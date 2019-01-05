<?php
             # keep this file into Process.php File #

include("db.php");
if(isset($_REQUEST["submit"])){
    
        //print_r($_REQUEST);

    extract($_REQUEST);
#For New Data Entry Into Database#
if($connect->Insert("students"," Name='$name', Mobile='$mobile', Address='$address' ")) {
    echo " Insert Success ";
 }
 else{
 echo " Insert Fail ";
}
}
                  #  END of Process.php File   #  
?>


<?php
             # keep this file into  db.php  #
class Db{
    private $conn;
    public function __construct($host,$user,$pass,$db){
        $this->conn=new mysqli($host,$user,$pass,$db);
        if(!$this->conn){
            die("Connection Fail!".$this->conn->connect_error);
        }
    }

    public function Insert($table, $cols){
        $sql="INSERT INTO $table SET $cols";
        $result=$this->conn->query($sql);
        if ($this->conn->affected_rows>0) {
            return true;
        } return false;
    }
}
$connect=new Db("localhost","root","","myshopbd");

             # End of db.php File #
?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Give Your Detail's</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <form action="form.php" method="POST" >
            <div class=" form-group">
                <label class="text-primary" for="exampleFormControlInput1">Name</label>
                <input name="name"  type="text" class="form-control text-primary" id="exampleFormControlInput1" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label class="text-danger" for="exampleFormControlInput1">Email address: </label>
                <input name="email" type="email" class="form-control text-danger" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label  class="text-success" for="exampleFormControlInput1">Phone Number: </label>
                <input name="mobile" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
            </div>


            <div class="form-group">
                <label class="text-info" for="exampleFormControlTextarea1">Address: </label>
                <textarea name="address" class="form-control text-info" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mt-4 form-group text-center">
                <button name="submit" type="submit" class="btn-lg btn-outline-warning">Submit</button>
                <button name="edit" type="submit" class="btn-lg btn-outline-warning">Update</button>
            </div>
        </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
