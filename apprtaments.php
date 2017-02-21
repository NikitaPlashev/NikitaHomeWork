<?php 
interface OurHouse{
    function ChoosingType();
    function ChoosingObject();
    function Calculation();
    }


abstract class FindHouse{

	public $type;

	public function __construct($type) {
		$this->type = $type;

	}

public function __get($name) {    // доступ к закрытому методу (тип)
	return $this->$name;

}


}


class HouseType extends FindHouse implements OurHouse {
	public function ChoosingType() {

	echo "House 4/5/4/3 (4 accesses, 5 flors, per 4 flats (first flor 3 flats only)    --> 1 \n";
	echo "House 4/5/4/4 (4 accesses, 5 flors, per 4 flats (first flor 4 flats)         --> 2 \n";
	echo "House 5/5/3/2 (5 accesses, 5 flors, per 3 flats (first flor 2 flats only)    --> 3 \n";
	echo "House 7/9/6/4 (7 accesses, 9 flors, per 6 flats (first flor 4 flat only)    --> 4 \n";
	echo "House 7/9/7/6 (7 accesses, 9 flors, per 7 flats (first flor 6 flat only)    --> 5 \n";
	echo "Choose house type ___ " ;
	$handle = fopen ("php://stdin","r");
	$obj = fgets($handle);

	switch ($obj) {
		case 1:
   
    	$obj = new HouseType('House_4/5/4/3'. "\n");
 		print_r($obj->type);
 	
 		$accesses = 4;
 		$flors = 5;
 		$flats = 4;
 		$fff = 3;  //// First flor flets

    	break;
		
		case 2:
    
    	$obj = new HouseType('House_4/5/4/4'. "\n");
 		print_r($obj->type);
 	
 		$accesses = 4;
 		$flors = 5;
 		$flats = 4;
 		$fff = 4; 

    	break;
		
		case 3:
    
    $obj = new HouseType('House_5/5/3/2'. "\n");
	print_r($obj->type);
    
	$accesses = 5;
 	$flors = 5;
 	$flats = 3;
 	$fff = 2; 

    break;
case 4:
    
    $obj = new HouseType('House_7/9/6/4'. "\n");
 	print_r($obj->type);
    
 	$accesses = 7;
 	$flors = 9;
 	$flats = 6;
 	$fff = 4; 

    break;
case 5:
    
    $obj = new HouseType('House_7/9/7/6'. "\n");
 	print_r($obj->type);
    
    $accesses = 7;
 	$flors = 9;
 	$flats = 7;
 	$fff = 6; 

    break;    
default:
    echo "We have not such House type \n";
    $obj = NULL;
	}
	return $this->type;
	return $accesses;
	return $flors;
	return $flats;
	return $fff;
}
	public function ChoosingObject() {

	if ($this->type = true) {
echo "Write your flat number ___";
$handle = fopen ("php://stdin","r");
$flat_number = fgets($handle);
		}
		return $this->flat_number;
	}

	public function Calculation() {
		 if ($flat_number = true) {
			if ($this->flat_number > ($accesses*($flors-1)*$flats+$fff)) {
			echo "We have not such flat number in this house";
			$flat_number = NULL;
		}
 		else {
$access_number = $flat_number/($flats*($flors-1)+$fff);
$access_number = ceil($access_number);

echo "\n Your flat is in access number ___";
print_r($access_number);



$flor_number = $flat_number-(($access_number-1)*(($flors-1)*$flats+$fff));
	if ($flor_number <= $fff) {
		$flor_number = 1;
	}
	else {
		$flor_number = ($flor_number-$fff)/$flats;
		$flor_number = ceil($flor_number) +1;
	}

echo "\n And on the flor number ___";
print_r($flor_number);
	}
}
}
}
$FindHouse = new HouseType();
$FindHouse->ChoosingType();
$FindHouse->ChoosingObject();
$FindHouse->Calculation();







9






// class House {

// 	private $type;

// 	public function __construct($type) {
// 		$this->type = $type;

// 	}

// public function __get($name) {    // доступ к закрытому методу (тип)
// 	 $this->$name = $value;

// }

// // public function __set($name) {    // доступ к закрытому методу (тип)
// // 	return $this->$name;



// }

// $obj = new House('KHR_5_4');
//  print_r($obj->type); 
// $obj->type = ('SLT_9_7');
// print_r($obj->type);