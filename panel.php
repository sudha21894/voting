<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come 
*after* these tags -->
 <title>Control Panel</title>
 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' 
type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
 <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' 
type='text/css'> <style>
 body{
 background-color: #e87d37;
 }
 .headerFont{
 font-family: 'Ubuntu', sans-serif;
 font-size: 24px;
 }
 .subFont{
 font-family: 'Raleway', sans-serif;
 font-size: 14px;
 
 }
 
 .specialHead{
 font-family: 'Oswald', sans-serif;
 }
 .normalFont{
 font-family: 'Roboto Condensed', sans-serif;
 }
 
 .topnav {
 overflow: hidden;
 background-color: black;
}
.topnav a {
 float: left; color: white;
 text-align: center;
 padding: 14px 16px;
 text-decoration: none;
 font-size: 19px;
 font-weight: bold;
}
.topnav a:hover {
 color: white;
 background-color: #03a9b7;
}
.topnav a.active {
 color: white;
 background-color: #03a9b7;
 
}
.topnav-right {
 float: right;
 font-weight: bold;
 background-color: green;
 color: white;
 
}
 
 .top{
 top:100%;
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
 <div class="top">
 <div class="topnav">
 <a class="active" href="cpanel.php">Admin Panel</a>
 <div class="topnav-right">
 <a href="home.html">Sign out</a>
 </div>
</div>
 <div class="container" style="padding:100px;">
 <div class="row">
 <div class="col-sm-12" style="border:2px solid gray;">
 
 <div class="page-header">
 <h2 class="specialHead" style="color:white;">CONTROL PANEL</h2>
 <p class="normalFont" style="color:white;">This is Administration Panel.</p>
 </div>
 
 <div class="col-sm-12">
 <?php
 require 'config.php'; $DMK=0;
 $ADMK=0;
 $MNK=0;
 $NTK=0;
 $AMMK=0;
 $conn = mysqli_connect($hostname, $username, $password, $database);
 if(!$conn)
 {
 echo "Error While Connecting.";
 }
 else
 {
 //DMK
 $sql ="SELECT * FROM tbl_users WHERE voted_for='DMK'";
 $result= mysqli_query($conn, $sql);
 if(mysqli_num_rows($result)>0)
 {
 while($row= mysqli_fetch_assoc($result))
 {
 if($row['voted_for'])
 $DMK++;
 }
 echo "<strong>M.K.Stalin(DMK)</strong><br>";
 echo " <div class='text-primary'>
 <h3 class='normalFont'>VOTES : $DMK </h3>
 </div>
 ";
 echo "
 <div class='progress'>
 <div class='progress-bar progress-bar-success' role='progressbar' ariavaluenow=\"$DMK\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$DMK."%'>
 <span class='sr-only'>DMK</span>
 </div>
 </div>
 ";
 }
 // ADMK
 $sql ="SELECT * FROM tbl_users WHERE voted_for='ADMK'";
 $result= mysqli_query($conn, $sql);
 if(mysqli_num_rows($result)>0)
 {
 while($row= mysqli_fetch_assoc($result))
 {
 if($row['voted_for'])
 $ADMK++;
 }
 echo "<strong>Edappadi K.Palaniswami(ADMK)</strong><br>";
 echo "
 <div class='text-primary'>
 <h3 class='normalFont'>VOTES : $ADMK </h3>
 </div> ";
 echo "
 <div class='progress'>
 <div class='progress-bar progress-bar-primary' role='progressbar' ariavaluenow=\"$ADMK\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: 
".$ADMK."%'>
 <span class='sr-only'>ADMK</span>
 </div>
 </div>
 ";
 }
 // MNK
 $sql ="SELECT * FROM tbl_users WHERE voted_for='MNK'";
 $result= mysqli_query($conn, $sql);
 if(mysqli_num_rows($result)>0)
 {
 while($row= mysqli_fetch_assoc($result))
 {
 if($row['voted_for'])
 $MNK++;
 }
 echo "<strong>kamal Haasan(MNK)</strong><br>";
 echo "
 <div class='text-primary'>
 <h3 class='normalFont'>VOTES : $MNK </h3>
 </div>
 "; echo "
 <div class='progress'>
 <div class='progress-bar progress-bar-info' role='progressbar' ariavaluenow=\"$MNK\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$MNK."%'>
 <span class='sr-only'>MNK</span>
 </div>
 </div>
 ";
 }
 // TMC
 $sql ="SELECT * FROM tbl_users WHERE voted_for='NTK'";
 $result= mysqli_query($conn, $sql);
 if(mysqli_num_rows($result)>0)
 {
 while($row= mysqli_fetch_assoc($result))
 {
 if($row['voted_for'])
 $NTK++;
 }
 echo "<strong>Seeman(NTK)</strong><br>";
 echo "
 <div class='text-primary'>
 <h3 class='normalFont'>VOTES : $NTK </h3>
 </div>
 ";
 echo "
 <div class='progress'> <div class='progress-bar progress-bar-warning' role='progressbar' ariavaluenow=\"$NTK\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$NTK."%'>
 <span class='sr-only'>NTK</span>
 </div>
 </div>
 ";
 }
 //AMMK
 $sql ="SELECT * FROM tbl_users WHERE voted_for='AMMK'";
 $result= mysqli_query($conn, $sql);
 if(mysqli_num_rows($result)>0)
 {
 while($row= mysqli_fetch_assoc($result))
 {
 if($row['voted_for'])
 $AMMK++;
 }
 echo "<strong>T.T.V.Dhinakaran(AMMK)</strong><br>";
 echo "
 <div class='text-primary'>
 <h3 class='normalFont'>VOTES : $AMMK </h3>
 </div>
 ";
 echo "
 <div class='progress'>
 <div class='progress-bar progress-bar-info' role='progressbar' ariavaluenow=\"$AMMK\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: 
".$AMMK."%'> <span class='sr-only'>AMMK</span>
 </div>
 </div>
 ";
 }
 echo "<hr>";
 $total=0;
 // Total
 $sql ="SELECT * FROM tbl_users";
 $result= mysqli_query($conn, $sql);
 if(mysqli_num_rows($result)>0)
 {
 while($row= mysqli_fetch_assoc($result))
 {
 if($row['voted_for'])
 $total++;
 }
 $tptal= $total*10;
 echo "<strong>Total Number of Votes</strong><br>";
 echo "
 <div class='text-primary'>
 <h3 class='normalFont'>VOTES : $total </h3> </div>
 ";
 }
 }
 ?>
 </div>
 </div>
 </div>
 </div>
 </div>
<button type="button" class="back"href="home.html" value="Signout"></button>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 </body>
</html>