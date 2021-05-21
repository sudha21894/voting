<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come 
*after* these tags -->
 <title>Bootstrap 101 Template</title>
 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' 
type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' 
type='text/css'>
 <style>
 .headerFont{
 font-family: 'Ubuntu', sans-serif;
 font-size: 24px;
 } .subFont{
 font-family: 'Raleway', sans-serif;
 font-size: 14px;
 
 }
 
 .specialHead{
 font-family: 'Oswald', sans-serif;
 }
 .normalFont{
 font-family: 'Roboto Condensed', sans-serif;
 }
 body{
 background-color: #ADFF2F;
 }
 .abc:hover{
 
 background-color: #eb7f39;
 color: black;
 }
 .abc{
 background-color: gray; 
 border: none;
 color: white;
 padding: 10px;
 text-align: center;
 text-decoration:none;
 display: inline-block;
 font-size: 15px; margin: 4px 2px;
 cursor: pointer;
 border-radius: 12px;
}
 </style>
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -
->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 </head>
 <body>
 
 <div class="container" style="padding-top:150px;">
 <div class="row">
 <div class="col-sm-4"></div>
 <div class="col-sm-4 text-center" style="border:2px solid 
gray;padding:50px;">
 
 <?php
 require('config.php');
  
if(isset($_POST["submit"])){
if(isset($_POST["voterName"]) && 
isset($_POST["voterEmail"]) && isset($_POST["voterID"]) && 
isset($_POST["selectedCandidate"]))
{
$name= test_input($_POST["voterName"]);
$email= test_input($_POST["voterEmail"]);
$voterID= test_input($_POST["voterID"]);
$selection= 
test_input($_POST["selectedCandidate"]);
}
}
else
{
echo "<br>All Field Recquired";
}
 $DB_HOST= "localhost";
 $DB_USER="root";
 $DB_PASSWORD="";
 $DB_NAME="db_evoting";
 $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
 or die("Couldn't Connect to Database :");$sql= "INSERT INTO db_evoting.tbl_users 
VALUES(null,'".$name."','".$email."','".$voterID."','".$selection."');";
if(mysqli_query($conn, $sql)){
echo "<img src='success.jpg' width='70' height='70'>";
echo "<h1 class='text-info specialHead textcenter'><strong>Successfully VOTED</strong></h1>";
 echo "<h4>Thanks for Voting!!!</h4>";
echo "<a href='home.html' class='btn btn-primary'> 
<span class='glyphicon glyphicon-ok'></span> <strong> Back to home</strong> </a>";
}
else
{
echo "<img src='images/error.png' width='70' 
height='70'>";
echo "<h3 class='text-info specialHead textcenter'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
echo "<a href='home.html' class='abc'> <strong> Back to 
home</strong> </a>";
}
?>
 
 </div>
 <div class="col-sm-4"></div>
 </div>
 </div> </div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 </body>
</html>