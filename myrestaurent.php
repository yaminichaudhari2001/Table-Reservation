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
            <li><a href="#banner" onclick="toggleMenu();">Home</a></li>
            <li><a href="#about" onclick="toggleMenu();">About</a></li>
            <li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
            <li><a href="#expert" onclick="toggleMenu();">Expert</a></li>
            <li><a href="#testimonials" onclick="toggleMenu();">Testimonials</a></li>
            <li><a href="queryreport.php" onclick="toggleMenu();">Query Report</a></li>
            <li><a href="logout.php" onclick="toggleMenu();">Logout</a></li>
        </ul>
    </header>
    <section class="banner" id="banner">
        <div class="content">
            <h2>
                Always Choose Good.
            </h2>
            <p>Make Arrangement for upcoming reservation.
                Reserve the table as customer requirment.
            </p>
            <a href="report.php" class="btn">Reservation Report</a>
        </div>
    </section>
    <section class="about" id="about">
        <div class="row">

            <div class="col50">
                <h2 class="titleText"><span>A</span>bout Us</h2>
                <p>
                    Maialino (vicino) has returned to bring the familiar trattoria classics of our Gramercy Park
                    original to a new location at The Redbury, New York.Just a few blocks north of our home, Maialino
                    (vicino), which translates to "nearby,” remains true
                    to its Roman and Gramercy Park roots and occupies the former Caffé Marchio and Vini e Fritti spaces
                    on 30th Street near Madison Avenue.
                    For additional updates, follow along at @maialino_nyc.
                    to its Roman and Gramercy Park roots and occupies the former Caffé Marchio and Vini e Fritti spaces
                    on 30th Street near Madison Avenue.
                    For additional updates, follow along at @maialino_nyc.
                    to its Roman and Gramercy Park roots and occupies the former Caffé Marchio and Vini e Fritti spaces
                    on 30th Street near Madison Avenue.
                    For additional updates, follow along at @maialino_nyc.


                    WE LOOK FORWARD TO WELCOMING YOU BACK!
                    Our Team
                    thank you! for joinin us

                </p>
            </div>
            <div class="col50">
                <div class="imgBx">
                    <img src="img1.jpg">
                </div>
            </div>

        </div>
    </section>
    <section class="menu" id="menu">
        <div class="title">
            <h2 class="titleText">Our<span>M</span>enu</h2>
            <p>Each menu has own test and speciality.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="menu1.jpg">
                </div>
                <div class="text">
                    <h3>Special Salad</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="menu2.jpg">
                </div>
                <div class="text">
                    <h3>Special Soup</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="menu3.jpg">
                </div>
                <div class="text">
                    <h3>Special Pasta</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="menu4.jpg">
                </div>
                <div class="text">
                    <h3>Souso</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="menu5.jpg">
                </div>
                <div class="text">
                    <h3>Fanssy</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="menu6.jpg">
                </div>
                <div class="text">
                    <h3>Doocodo</h3>
                </div>
            </div>
        </div>
        <div class="title">
            <a href="#" class="btn">View All</a>
        </div>
    </section>
    <section class="expert" id="expert">
        <div class="title">

            <h2 class="titleText">They<span>S</span>aid About us</h2>
            <p>Expert put their own speciality in food.which differ the test.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="expert1.jpg">
                </div>
                <div class="text">
                    <h3>Someone Famous</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="expert2.jpg">
                </div>
                <div class="text">
                    <h3>Someone Famous</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="expert3.jpg">
                </div>
                <div class="text">
                    <h3>Someone Famous</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="expert4.jpg">
                </div>
                <div class="text">
                    <h3>Someone Famous</h3>
                </div>
            </div>

        </div>
        <div class="title">
            <a href="#" class="btn">View All</a>
        </div>
    </section>
    <section class="testimonials" id="testimonials">
        <div class="title white">
            <h2 class="titleText">Our Kitchen<span>E</span>xpert</h2>
            <p>Expert put their own speciality in food.which differ the test.</p>
        </div>
        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <img src="testi1.jpg">
                </div>
                <div class="text">
                    <p>
                       The Food we had enjoyed at the time of dinner.It was really delicious taste with great quality, everything had unique taste which we had ordered,nice arrangement and services from the staff while eating,we found nothing bad about this hotel.

                    </p>
                    <h3>Someone Famous</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="testi2.jpg">
                </div>
                <div class="text">
                    <p> I and my friend had dinner here one of the nights we were in Kalpetta.The ambiance was good and the food recommendations were great. We had a traditional Arabian rice and chicken preparation,Kuzhi Manthi.It was our first experience having this dish,and although a bit dry,it tasted great. Would recommend this place that's easily noticed from a vehicle and has ample parking.


                    </p>
                    <h3>Someone Famous</h3>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <img src="testi3.jpg">
                </div>
                <div class="text">
                    <p> The Food we had enjoyed at the time of dinner.It was really delicious taste with great quality, everything had unique taste which we had ordered,nice arrangement and services from the staff while eating,we found nothing bad about this hotel.

                    </p>
                    <h3>Someone Famous</h3>
                </div>
            </div>

        </div>
        <div class="title">
            <a href="#" class="btn">View All</a>
        </div>
    </section>
    <section class="contactus" id="contactus">
        <div class="title">
            <h2 class="titleText"><span>C</span>ontact Us</h2>
            <p>Feel free to contact us.Team Always with you</p>
        </div>
        <div class="contactform">
            <h3>Send Message</h3>
            <div class="inputBox">
                <input type="text" placeholder="Name">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Email">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Enter the Query">
    
            </div>
            <div class="inputBox">
                <input type="submit" value="Send">
            </div>
        </div>
    </section>
    <div class="copyright">
        <p>copyright 2023<a href="#">online tutorial.All Right Reserve</a></p>
    </div>

    <script type="text/javascript">
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
        function toggleMenu(){
            const menuToggle = document.querySelector('.menuToggle');
            const navigation = document.querySelector('.navigation');
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
    </script>
</body>

</html>