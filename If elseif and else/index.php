
<?php
$var=3;
if ($var % 2 == 0 && $var % 3 ==0){
    echo "Can take both ";
   
}
elseif($var % 2==0){
 
    echo"Can only be divded by 2";
}
 elseif($var %3==0){
     echo "Can  be divided by only 3";
 }
else{
    echo " I can do what you want";
}


 
$laptop_brand = array("HP", "Lenovo", "Asus", "Dell");
echo var_dump($laptop_brand);
?>
