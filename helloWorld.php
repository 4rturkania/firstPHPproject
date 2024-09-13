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

if ($number == 23 && $number2 != 10) {
    echo 'true';
} else echo 'false';

echo "<br>";
// For and For Each

print_r($array3);

echo "<br>";
foreach ($array3 as $key => $value) {
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
if (! empty($_GET['s'])) {
    echo "Your search term is: " . $_GET['s'];
}
?>

<form method="get" action="">
    <label>Enter search term</label>
    <input type="search" name="s" value="<?php if (! empty($_GET['s'])) {
                                                echo $_GET['s'];
                                            } ?>"> <!-- adding another if here fixes warning -->
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
if (! empty($_POST['s'])) {
    echo "Your search term is: " . $_POST['s'];
}
?>

<form method="POST" action="">
    <label>Enter search term</label>
    <input type="search" name="s" value="<?php if (! empty($_POST['s'])) {
                                                echo $_POST['s'];
                                            } ?>"> <!-- adding another if here fixes warning -->
</form>


<?php
//mail
$headers = "From: x3\r\n";
$headers = "Reply-To: xxx@xxx.xxx\r\n";
$headers .= "Content-type: text/html";


//mail('riwage5626@barakal.com', 'test subject', '<h1>test</h1> <h2><b>msg</b></h2>', $headers);

$emailTitle = "Tytuł wiadomości";
$emailContent;
$emailMessage = "treść wiadomości";
$emailRecipient;
$emailSender = "test@test.test";
$emailSentDate = "12-07-2024";

//stałe

define("CONSTANT_TEST", 12);
echo CONSTANT_TEST;
echo "<br>";


print_r($array3);
echo "<br>";
$formattedText = print_r($array3, true);

echo ("<pre>$formattedText</pre>");


$arr0do10co2 = [0, 2, 4, 6, 8, 10];

for ($i = 0; $i < count($arr0do10co2); $i++) {
    $result = ($arr0do10co2[$i] + 5) * 2;
    echo "$result, ";
}

echo "<br>";

$num = 0;

if ($num > 0) {
    echo "$num jest liczbą dodatnią";
} elseif ($num < 0) {
    echo "$num jest liczbą ujemną";
} else {
    echo "$num nie jest ani dodatnie ani ujemne, jest równe zero";
}
echo "<br>";


$temp = 10;

$result = match ($temp) {
    -10, -5, 0, 5 => "zima",
    10, 12 => "wiosna",
    20, 25 => "lato",
    default => "nieznany przypadek"
};
echo ($result);

/*
switch ($temp) {
    case -10:
    case -5:
    case 0:
    case 5:
        echo "zima";
        break;
    case 10:
    case 12:
        echo "wiosna lub jesień";
        break;
    case 20:
    case 25:
        echo "lato";
        break;
    default:
       echo "nieznany przypadek";
}
*/
echo "<br>";

//funkcje

$arr0do12co3 = [0, 3, 6, 9, 12];

function sumArr($arr)
{

    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}

$result = sumArr($arr0do12co3);
echo $result . "<br>";



//bmi

function calculateBMI($weight, $height)
{

    $bmi = $weight / ($height * $height);
    echo $bmi . "<br>";
}

calculateBMI(70, 1.7);
calculateBMI(100, 1.8);


echo "<br>";
function checkDonor($age, $weight)
{
    $requiredAge = 18;
    $requiredWeight = 50;

    if ($age >= 18) {
        if ($weight > 50) {
            echo "Kandydat spełnia warunek wieku $requiredAge lat oraz wagi ciała $requiredWeight kilogramów.";
            return true;
        } else {
            echo "Kandydat spełnia wymóg wieku $requiredAge, ale za mało wazy (ponizej $requiredWeight kilogramów)";
            return false;
        }
    } else {
        echo "Kandydat nie spełnia warunku wieku $requiredAge lat.";
        return false;
    } 
    }


checkDonor(19, 60);
echo "<br>";
checkDonor(34, 49);
echo "<br>";
checkDonor(15, 55);



?>