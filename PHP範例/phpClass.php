<?
class test{
	//建立一個空陣列
	var $arr = array();
	function __get($name){
		echo "<br>這是get的參數: $name";
		return (isset($this -> arr[$name])) ? $this -> arr[$name]:"no \$arr[$name]";
	}
	
	function __set($name,$value){
		echo "<br>這是set的參數: name=$name , value =$value";
		$this -> arr[$name]=$value;
	
	}
}

$p = new test();
echo "<br>i get you:".$p -> First;

$p -> Second=500;
echo "<br>i get you:".$p -> Second;
?>