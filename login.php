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
            <li><a href="index2.html" onclick="toggleMenu();">Home</a></li>
            <li><a href="#about" onclick="toggleMenu();">About</a></li>
            <li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
            <li><a href="#expert" onclick="toggleMenu();">Expert</a></li>
            <li><a href="#testimonials" onclick="toggleMenu();">Testimonials</a></li>
            <li><a href="#contactus" onclick="toggleMenu();">ContactUs</a></li>
            <li><a href="logout.php" onclick="toggleMenu();">Logout</a></li>
        </ul>
    </header>
    <section class="banner" id="banner">
        <div class="content">
           
             <section class="contactus" id="contactus">
        <div class="title">
            <h2 class="titleText"><span>L</sapn>ogin</h2>
            <p>Please ,login yourself</p>
        </div>
        <div class="contactform">
         
  
    
            <h3>Login first</h3>
         <form action="" method="POST">
            <div class="inputBox">
                <input type="text" placeholder="Username" name="user">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Password" name="pass">
            </div>
                       <div class="inputBox">
                <input type="submit" value="login" name="submit">
             <p><a href="register.php">New User?</a> 
            </div>
        </div>

          
 
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','');  
    mysqli_select_db($con,'hotel');  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
if($user == "admin" && $pass == "admin")  
{
 header("Location: myrestaurent.php");
}
  else
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location:index.html");  
    }  
    } else {  
    echo "Invalid username or password!";  
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