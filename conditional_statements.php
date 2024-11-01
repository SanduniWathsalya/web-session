<?php
$x=60;
if ($x>=50) {
        echo "Pass";
}

echo "<br>";
echo "Rest of the code";
echo "<br>";
echo "<br>";
?>

<?php
$x=10;
if ($x>=50) 
    echo "S1";
    echo "S2"; //false part is printed

echo "<br>";
echo "<br>";
?>

<?php
$x=10;
if ($x<=50) 
    echo "S1";
    echo "S2";
    echo "S8"; //when statement true all statements are printed

echo "<br>";
echo "<br>";
?>

<?php
$x=10;
if ($x>=50) 
    echo "S1"; //true part
else
    echo "S2"; //false part 
    echo "S3"; //rest of the code 
    echo "S6";   
//when statement false 'false part and rest of the code printed
echo "<br>";
echo "<br>";
?>

<?php
$x=10;
if ($x<=50) 
    echo "S1"; //true part
else
    echo "S2"; //false part 
    echo "S3"; //rest of the code printed// 
    echo "S6";   
//when statement true 'true part and rest of the code printed
echo "<br>";
echo "<br>";
?>

<?php
$x=60;
if ($x>=50) 
    echo "S1";
/*  echo "S4";//Can't include more statements to the true part*/
else
    echo "S2";
    echo "S3";

echo "<br>";
echo "<br>";
?>

<?php
    function getGrade($marks) {
        if ($marks>=75) {
            return "A";
        } elseif ($marks>=65) {
           return "B";
        } elseif ($marks>=55) {
           return "C";       
        } elseif ($marks>=35) {
            return "S";
        } else {
            return "F";
        }
    }
$marks=78;
echo "Marks: $marks , Grade: " . getGrade($marks);
echo "<br>";
echo "<br>";
?>


<?php
$x=68;
if ($x>=75)
    echo "A";
 else if($x>=65)
    echo "B";
 else if($x>=55)
    echo "C";
else if($x>=35)  
    echo "S";
    else 
    echo "F";
?>