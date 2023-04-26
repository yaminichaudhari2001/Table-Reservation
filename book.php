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
          <li><a href="index.html" onclick="toggleMenu();">Back to Home page</a></li>
            
            <li><a href="logout.php" onclick="toggleMenu();">Logout</a></li>
        </ul>
    </header>
             
             <section class="contactus" id="contactus">
        <div class="title">
            <h2 class="titleText"><span>R</span>eservation.</h2>
                  </div>
<form name=frm method=post action="book.php"">
       <div class="contactform">
        
            <div class="inputBox">
                <input type="text" placeholder="Username" name="user">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Email" name="em">
            </div>
             <div class="inputBox">
                <input type="int" placeholder="Phone" name="ph">
            </div>
 <div class="inputBox">
                <input type="date" placeholder="Reservation Date" name="bdate">
            </div>
 <div class="inputBox">
                <input type="time" placeholder="Reservation Time" name="btime">
            </div>
 <div class="inputBox">
                <input type="int" placeholder="How Many person with you" name="np">
            </div>
 <div class="inputBox">
                <input type="textarea" placeholder="Special Request" name="sr">
            </div>
                 <div class="inputBox">
              <input type="submit" value="Reserve" name="sbm">
</div>
<div class="inputBox">
               <input type="submit" value="Update" name="sbm">
</div>
<div class="inputBox">

               <input type="submit" value="Cancle" name="sbm">
</div>

        </div>

</div>

          
 

<?php
$e1="";
$e2="";
$e3="";
$e4="";
$e5="";
$e6="";
$e7="";
$fl=0;
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Reserve"||$_POST['sbm']=="ChangeReservation")
{
if(empty($_POST['user']))
{
$e1="username must be exist";
$fl=1;
}
if(empty($_POST['em']))
{
$e2="Email must be exist";
$fl=1;
}
if(empty($_POST['ph']))
{
$e3="Phone must be exist";
$fl=1;
}
if(empty($_POST['bdate']))
{
$e4="Reservation date must be exist";
$fl=1;
}
if(empty($_POST['btime']))
{
$e5="Reservation time must be exist";
$fl=1;
}
if(empty($_POST['np']))
{
$e6="Number of person must be exist";
$fl=1;
}
if(empty($_POST['sr']))
{
$e6="Number of person must be exist";
$fl=1;
}
}
}

$host="localhost";
$user="root";
$pass="";
$db="hotel";
$cn=mysqli_connect($host,$user,$pass,$db);
//mysql_select_db("hotel",$cn);
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="Reserve")
{
$sql="insert into book values('$_POST[user]','$_POST[em]','$_POST[ph]','$_POST[bdate]','$_POST[btime]','$_POST[np]','$_POST[sr]')";

mysqli_query($cn,$sql);

echo "record is saved";
}
else
if($_POST['sbm']=="Update")
{
$sql="update book set username='$_POST[user]',Email='$_POST[em]',Phone='$_POST[ph]',ReservationDate='$_POST[bdate]',ReservationTime='$_POST[btime]',
Numberofperson='$_POST[np]',SpecialRequest='$_POST[sr]'";
mysqli_query($cn,$sql);
echo "record is updated";
}
else
if($_POST['sbm']=="Cancle")
{
$sql="delete from book where username='$_POST[user]'";
mysqli_query($cn,$sql);
echo "record is deleted";
}
if(isset($_POST['sbm'])){

$to = "yaminichaudhari990@gmail.com";
$subject = "You Successfully Reserve your table";
//$from="yaminichaudhari2001@gmail.com";
$msg="thank you";
$headers = "From: yaminichaudhari2001@gmail.com";
if(mail($to,$subject,$msg,$headers))
{
echo "Email successfully sent.";
}else
{
echo "Email successfully sent.";
}
}

}


?>
</form>
    </section>
</body>  
</html>