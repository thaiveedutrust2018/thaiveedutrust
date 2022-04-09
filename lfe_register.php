
<?php
include('webpage.php');
$link= mysqli_connect("https://databases.000webhost.com/?_ga=2.228331229.1909350981.1649506330-363896670.1642482217", "id18728171_root", "july@2018_Asha","id18728171_thaiveedutrust"); // Establishing Connection with Server

if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL

if(!empty($_POST['city'])) {
          $city = $_POST['city'];
          
        }
$name=$_POST['name'];

$age=$_POST['age'];
$fathername = $_POST['fathername'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$bloodgroup = $_POST['bloodgroup'];
$weight = $_POST['weight'];
$contactnumber = $_POST['contactnumber'];
$aadhar = $_POST['aadhar'];




$education = $_POST['education'];
}
$name= mysqli_real_escape_string($link, $_REQUEST['name']);


$age= mysqli_real_escape_string($link, $_REQUEST['age']);
$fathername = mysqli_real_escape_string($link, $_REQUEST['fathername']);
$gender  = mysqli_real_escape_string($link, $_REQUEST['gender']);
$religion = mysqli_real_escape_string($link, $_REQUEST['religion']);
$bloodgroup= mysqli_real_escape_string($link, $_REQUEST['bloodgroup']);
$weight= mysqli_real_escape_string($link, $_REQUEST['weight']);
$contactnumber= mysqli_real_escape_string($link, $_REQUEST['contactnumber']);
$aadhar= mysqli_real_escape_string($link, $_REQUEST['aadhar']);

$city= mysqli_real_escape_string($link,$_REQUEST['city']);

$education= mysqli_real_escape_string($link, $_REQUEST['education']);
//Insert Query of SQL
$query= "insert into info(name,age,fathername,gender,religion,bloodgroup,weight,contactnumber,aadhar,city,education) values ('$name','$age','$fathername','$gender','$religion','$bloodgroup','$weight','$contactnumber','$aadhar','$city','$education')";


if(mysqli_query($link, $query))
{
echo "Records added successfully.";
} else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
    
?>









