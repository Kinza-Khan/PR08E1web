<?php
$stringData = "Ali is a student of Aptech. Ali is great";
echo strlen($stringData) . "<br>";
echo str_word_count($stringData)."<br>";
$fileName = "image.jpeg";
$array = explode(".",$fileName);
print_r($array);
echo "<br>";
$fileExtension = $array[count($array)-1];
echo $fileExtension ;
if($fileExtension == "jpg" || $fileExtension == "png"){
        echo " allowed";
}
else{
    echo " not allowed";
}



?>
<h1>Implode</h1>
<?php
$std = ["ali","is","student"];
// echo $std;
echo implode(" " ,$std) . "<br>"; 
$stdName = "dad";
$strRev  =  strrev($stdName);
if($stdName == $strRev){
        echo "your string is palindrome";
}
else{
    echo "not palidrome";
}
echo "<br>" .ucwords($stdName) . "<br>";
echo str_replace('Ali','Huzaifa',$stringData) . "<br>";

$countryCode = "+91";
$pakistanCountryCode = "+92";
$final = strcmp($countryCode, $pakistanCountryCode);
if($final == 0){
    echo "valid Country Code";
}
else{
    echo "invalid";
}

?>