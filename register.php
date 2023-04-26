<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-*">
    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
    <title>Complete Responsive Design</title>
    <link rel="stylesheet" href="style.css">

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
    <section class="banner" id="banner">
        <div class="content">
           
             <section class="contactus" id="contactus">
        <div class="title">
            <h2 class="titleText"><span>R</sapn>egister</h2>
            <p>Please ,Register yourself</p>
        </div>
        <div class="contactform">
         
  
   <p> <a href="login.php">Already have Account</a></p>  
            <h3>Register first</h3>
         <form action="" method="POST">
            <div class="inputBox">
                <input type="text" placeholder="Username" name="user">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Password" name="pass">
            </div>
                       <div class="inputBox">
                <input type="submit" value="login" name="submit">
<br>
<br>
<center><p> <a href="login.php">Already have Account</a></p> <center>
            </div>
        </div>

          
 
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    $db="hotel";
    $con=mysqli_connect('localhost','root','',$db); 
   
  
    $query1=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");  
   $numrows =mysqli_num_rows($query1); 
    
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  
</form>
    </section>
</body>  
</html>   
