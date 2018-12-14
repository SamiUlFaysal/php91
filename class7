<?php 

#................................................

            # PHP Class 07 #
#topic:  OPP(Object Oriented Programmering -[02] )


class A{
    public $j;
    public function setval($x){
        $this->j=$x;
    }
    public function getval(){
        return $this->j;
    }

   #public function __destruct(){
    #    echo "Bye Bye";
   #}
    #public function __construct(){
     #   echo "welcome","<br>";
   # }

    public function getTable($row,$col,$width,$height){
        $table=" <table border=\"2\" width=\"$width\" height=\"$height\" >";
            for ($i=1; $i <=$row ; $i++) { 
            $table.= "<tr>";
                for ($j=1; $j <=$col ; $j++) { 
                    # code...
                    $table.=" <td>$j</td> ";
                } ;           
            
        $table.= "</tr>";
        } 
        $table.="</table> ";

        return $table;
    }

    public function getOdd($start,$end){
        for ($i=$start; $i <=$end ; $i++) { 
            # code...
         echo ($i%2!=0)? $i :" ";
        }
    }


}

 #..This Is Object..#
$obj = new A;

#$obj->setval("And");
#echo $obj->getval() , "<br>";
$obj->getTable(4,4,100,10);
echo $obj->getTable(4,4,100,10);
$obj->getOdd(5,15);


#................................................
?>
