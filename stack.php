<?php
echo "Install stack data structure";
class Stack {
    public $stack ;
    public $limit ;
    public $count=0;
    public function __construct($limit,$arr)
    {
        if (is_array($arr)){
            $this->stack=$arr;
        }else{
            die("error / not an parameter");
        }
        if (is_integer($limit)){
            $this->limit=$limit;
        }else{
            $this->limit=20;
        }
    }
    public function push($value){
        if (count($this->stack)<$this->limit){
            array_unshift($this->stack,$value);
            $this->count++;
        }else{
            die("overFloat data!!!");
        }


    }
    public function isEmpty(){
        return empty($this->stack);
    }
    public function DataShow($index){
        return $this->stack[$index];
    }
    public function pop(){
        if ($this->isEmpty()){
            die("error");
        }else{
            array_shift($this->stack);
            $this->count--;
        }
    }
    public function showList(){
        echo "<table border='2'>";
        for ($i=0;$i<count($this->stack);$i++){
            echo "<tr>";
            echo "<td>".$i."____".$this->stack[$i]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
$arr=[];
$stack=new Stack(10,$arr);
$stack->push("hello");
$stack->push("my name is nguyen tuan anh ");
$stack->push("i am an programing web");
$stack->push("nice to meet you ");
$stack->pop();
$stack->pop();
var_dump($stack);
