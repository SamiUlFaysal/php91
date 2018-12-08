            # PHP Class 06 #
#topic:  OPP(Object Oriented Programmering)


#1) class=> BluePrint Of Object
#2) object=>
            #To make a class you need to know
            #i)  Porperty
            #ii) Methodes
            #iii)Constant
            #iv) Visibility=>
                      #1)Public
                      #2)Private
                      #3)Protected
                      #............
            #v)  $this
            #vi) Object handler
            #)vii):: =>Scope Resolution Oparetor

#................................................

class myClass{
        public $a;
        private $b;
        protected $c;
    public function setval($x){
        $this->b=$x;
    }
    public function getval (){
        return $this->b;
    }
    public function sum($y,$v){
       echo $y+$v,"<br>";
    }
    public function series($m,$n){
        for ($m; $m<=$n ; $m++) { 
            echo $m ,"<br>";
        }
    }
}
 #..This Is Object..#
$obj = new myclass;

$obj->setval(5);
echo $obj->getval() , "<br>";

$obj->a="hello world";
$obj->sum(5,7);

$obj->series(5,17);

#........... End Of The Class 06.............#
