<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-*">
    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
    <title>Complete Responsive Design</title>
    <link rel="stylesheet" href="style.css">
<style type="text/css">
table {
margin: 25px;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: 1em;
background:#f9495e;
color: #FFF;
padding: 1px 1px;
border-collapse: separate;
border: 1px solid #846065;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: 2em;
border: 1px solid #dac4c7;
background:#b5b4b4;
}
</style>


</head>

<body>
    <header class="sticky">
        <a href="#" class="logo">Food<span>.</span></a>
        <div class="menuToggle active" onclick="toggleMenu();"></div>
        <ul class="navigation active">
            <li><a href="index.html" onclick="toggleMenu();">Home</a></li>
            <li><a href="#about" onclick="toggleMenu();">About</a></li>
            <li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
            <li><a href="#expert" onclick="toggleMenu();">Expert</a></li>
            <li><a href="#testimonials" onclick="toggleMenu();">Testimonials</a></li>
            <li><a href="#contactus" onclick="toggleMenu();">ContactUs</a></li>
            <li><a href="login.php" onclick="toggleMenu();">Login</a></li>
            <li><a href="logout.php" onclick="toggleMenu();">Logout</a></li>
        </ul>
    </header>
             
             <section class="contactus" id="contactus">
        <div class="title">
          
                  </div>
<form name=frm method=post action="query.php">
       <section class="contactus" id="contactus">
        <div class="title">
            <h2 class="titleText"><span>C</span>ontact Us</h2>
            <p>Feel free to contact us.Team Always with you</p>
        </div>
        <div class="contactform">
            <h3>Send Message</h3>
            <div class="inputBox">
                <input type="text" placeholder="Name" name="na">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Email" name="em">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Enter the Query" name="qr">
    
            </div>
            <div class="inputBox">
                <input type="submit" value="Send" name="sbm">
            </div>

          
<?php
   $host="localhost";
$user="root";
$pass="";
$db="hotel";
$cn=mysqli_connect($host,$user,$pass,$db);
//mysql_select_db("hotel",$cn);
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Send")
{
$sql="insert into query values('$_POST[na]','$_POST[em]','$_POST[qr]')";

mysqli_query($cn,$sql);

echo "record is saved";
}
}
?>



</form>
    </section>
</body>  
</html>