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
font-size: 1em;
border: 1px solid #b5b4b4;
background:#f9f7f7;
}
</style>
</head>

<body>
    <header class="sticky">
        <a href="#" class="logo">Food<span>.</span></a>
        <div class="menuToggle active" onclick="toggleMenu();"></div>
        <ul class="navigation active">
           <li><a href="myrestaurent.php" onclick="toggleMenu();">Back to Home page</a></li>
                        <li><a href="logout.php" onclick="toggleMenu();">Logout</a></li>
        </ul>
    </header>
   <section class="banner" id="banner">
        <div class="content">
           
             <section class="contactus" id="contactus">
        <div class="title">
            <h2 class="titleText"><span>R</sapn>eservation Report</h2>
<center>";
<table class="demo">
<thead>
<tr>
<th>username</th>
<th>Email</th>
<th>Phone</th>
<th>Reservation Date</th>
<th>Reservation time</th>
<th>Number of person</th>
<th>Special Request</th>
</tr>
</thead>
<?php
$host="localhost";
$user="root";
$pass="";
$db="hotel";
$c="demo";
$cn=mysqli_connect($host,$user,$pass,$db);
//if($_POST['sbm']=="Display")
//{
$sql="select * from book";
$result=mysqli_query($cn,$sql);

while($row=mysqli_fetch_array($result))
{
echo "<tbody>";
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "<td>$row[6]</td>";

echo "</tr>";
echo "</tbody>";
}
echo "</table>";
echo "</center>";


?>


           
        </div>
</section>
</section>
</body>  
</html>   