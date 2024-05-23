<?php
// Veri tanımlamak için $ işaretiyle başlıyoruz. bool, int, float, string... (C# ile benzer)
/*$age = 20;
$name = "Kaan";
var_dump($age);
var_dump($name);
strlen($name);
*/
/*
$kaan_age = 17;
if ($kaan_age < 20){
	echo "you can't enter the pub";
}
*/
/*
$counter = 0;
while($counter < 10){
	echo $counter;
	$counter++;
}

*/
/*
$counter = 0;
do{
	echo $counter;
	$counter++;
}while($counter <= 10);
*/

/*
for($i = 0; $i <= 10; $i++){
	$produc	t = 10 * $i;
	echo "This product $i is $product <br/> $";
}
*/
/*
$a = (int)readline("Please enter rectangles' corner");
$b = (int)readline("Please enter rectangles' corner");

$area = $a * $b;

echo "This rectangle's area is $area <br/>";
*/
/*
$x = 16;
$y = "Kaan";
var_dump($x);
var_dump($y)
*/

$x = "Kaan";
$y = "Özcan";
echo "$x, $y";
echo "<br/>";
echo $x. $y;
echo "<br/> ";
echo "Kaan"." ". "Özcan";
echo "<br/>";

define("pi", 3.14);
echo "<br/>";
echo pi ;
#pi = 4;
/*
Bugün
2024'ün
ikinci
günü
*/
const g = 9.8;
//ini_set("display_errors",0);
//error_reporting(0);
echo g;
//echo $z; 
//$z = "Zeki";
/*
echo "<br/>";
$a = "isim";
echo $a. "<br/>";
$$a = "Kaan";
echo $$a. "<br/>" ; 
$sayi = (int)5  ;
$sayi = "Zeki" ;
echo $sayi;
$sayi = (double)"12.5";
echo $sayi;
var_dump($sayi);
print $sayi;
*/
$dizi = array(1,3,5,7);
print_r ($dizi);
echo "<pre> ";
print_r ($dizi);
echo "<pre> ";
echo $dizi[0]."";
//echo $dizi[-1]."";
$dizi2 = array("kapi" => 4,
                3 => 5,
			    "Zeki" => "mürekkep"  );
				print_r ($dizi2);

				
/*
print_r(array_keys($dizi2))	;
print_r(array_values($dizi2));
$anahtarlar = array_keys($dizi2);
$degerler = array_values($dizi2);
print_r($anahtarlar);	;
print_r($degerler);
print_r (array_key_exists("kapi2", $dizi2));
foreach($dizi2 as $key => $value){
	echo $key.":". $value. "<br/>";
}
echo count($dizi); 
//for($i = 0; $i < count($dizi)-1; $i++){
//	echo $dizi[$i]."<br/>";
//};
$i = 0;
while($i < count($dizi)-1){
	echo $dizi[$i]."<br/>";
	$i++;
}
$h = array_intersect_key($dizi, $dizi2);
print_r($h);

//array_change_key_case

print_r(array_change_key_case($dizi, CASE_UPPER));
print_r(array_change_key_case($dizi2, CASE_UPPER));
/*$c = 6;
$c = "Kaan";
echo $c;
echo "<br/>";
var_dump($c);
*/
if (array_key_exists(10, $dizi)){
	echo "TRUE";
	
}else {
	echo "FALSE";
}
echo "<pre>";
print_r(array_key_first($dizi));
function cube($n){
	return ($n * $n * $n);

}
 	

?>


