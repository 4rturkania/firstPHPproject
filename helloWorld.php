<?php

$number = 23;
$variable = "Hello " . "World " . "<br>";
echo $variable;

echo "My age is $number" . "<br>";
echo 'My age is $number' . "<br>";

//variable variable
$a = "number";
echo "variable variable" . $$a;

// Arrays
$array1 = array('name', 'email', 'address');
echo $array1 . "<br>"; //Warning: Array to string conversion in /Users/user/Documents/0git/helloWorld.php on line 16

print_r($array1);

echo "<br>";

echo $array1[0];
echo "<br>";

$array2[] = "salad";
print_r($array2);
echo "<br>";
$array2[] = "bowl";
print_r($array2);


$array3 = array(
    'name' => 'John',
    'age' => 25,
    'email' => 'email@email.com'
);
echo "<br>";
echo $array3['name'];
echo "<br>";
print_r($array3);

echo "<br>";

$number2 = 11;



// If, else, switch

if ($number == 23 && $number2 != 10){
    echo 'true';
} else echo 'false';

echo "<br>";
// For and For Each

print_r($array3);

echo "<br>";
foreach($array3 as $key=>$value){
    echo  "Key: $key: $value";
    echo "<br>";
}


// While
//Not anymore valid. Since PHP 8, this coding style throws a warning if the key is not defined. "Warning: Undefined array key 3 in /Users/user/Documents/0git/helloWorld.php on line 71"
// print_r($array1);
// echo "<br>";
// $i = 0;
// while($array1[$i]){
//         echo "$array1[$i]<br>";
//         $i++;
//     }
    

// $_GET Variables
//http://localhost:8888/helloWorld.php?imie=Ja%C5%9B&test=test2
    
    echo "<br>";
    echo 'print_r($_GET);';
    echo "<br>";
    print_r($_GET);
    echo "<br>";
    
    //throws a warning becaus of calling undefined array elemnt
    //if(isset($_GET['s'])){

echo "<br>";
echo "<br>";

//tez warning
if(! empty($_GET['s'])){
echo "Your search term is: " . $_GET['s'];
}
?>

<form method="get" action="">
    <label>Enter search term</label>
    <input type="search" name="s" value="<?php if(! empty($_GET['s'])){echo $_GET['s'];}?>"> <!-- adding another if here fixes warning -->
</form>


<?php
echo "<br>";
echo 'print_r($_POST);';
echo "<br>";
print_r($_POST);
echo "<br>";

//throws a warning becaus of calling undefined array elemnt
//if(isset($_POST['s'])){

echo "<br>";
echo "<br>";

//tez warning
if(! empty($_POST['s'])){
echo "Your search term is: " . $_POST['s'];
}
?>

<form method="POST" action="">
<label>Enter search term</label>
<input type="search" name="s" value="<?php if(! empty($_POST['s'])){echo $_POST['s'];}?>"> <!-- adding another if here fixes warning -->
</form>


<?php
//mail
$headers = "From: x3\r\n";
$headers = "Reply-To: xxx@xxx.xxx\r\n";
$headers .= "Content-type: text/html";


mail('riwage5626@barakal.com', 'test subject', '<h1>test</h1> <h2><b>msg</b></h2>', $headers);




?>
