<?php 
$fname= $_POST["fname"];
$lname= $_POST["lname"];

$age=$_POST["age"];
#$des=$_POST["des"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$file=$_POST["file"];


$pattern = "([0-9])";

if(empty($fname) || empty($lname)){
    echo "Name cannot be empty";
}

else{
if(preg_match($pattern, $fname) || preg_match($pattern, $lname))
{
    echo "Enter name without any numeric value";
}
else{
    echo "First name is ".$fname."<br>Last name is ".$lname;
}
}

if(isset($_POST["des"]))
{
    echo "<br>Designation is ".$_POST["des"] ;
}
else{
    echo "<br>Select designation please";
}

if(!empty($age)){
    echo "<br>Age is ".$age;
}
if(isset($_POST["l1"]) || isset($_POST["l2"]) || isset($_POST["l3"])){
    echo "<br>Language preferred - <br>";
    if(isset($_POST["l1"])){
        echo $_POST["l1"]." <br>";
    }
    if(isset($_POST["l2"])){
        echo $_POST["l2"]." <br>";
    }
    if(isset($_POST["l3"])){
        echo $_POST["l3"]." <br>";
    }
}
else{
    echo "<br>Preferred language must be selected<br>";
}
if(!empty($_POST["email"])){
    echo"Email is".$email;
}
else{
    echo "Email must be entered";
}
echo"<br>";
if(strlen($pass)>6){
    echo "Password given";
}
else{
    echo "Password should be more than 6 characters";
}
?>