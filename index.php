<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equive="X-UA-Compatible" contents="ie=edge">
    <title>Banking System | Banking.com</title>
    </meta>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width:1170px)" href="phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav id="navbar">
        <!-- //logo -->
        <div id="logo">
            <img src="images/60.png" alt="MyBanking.com">
        </div>
        <ul>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#services-container">Banking</a></li>
            <li class="item"><a href="#contact-box">Contact Us</a></li>
            <li class="item"><a href="https://www.sbi.co.in/portal/web/services/services?utm_source=branch-atm-locator&utm=branch-locator">About Us</a></li>
            <li class="item"><a href="https://www.sbi.co.in/portal/web/services/services?utm_source=branch-atm-locator&utm=branch-locator">Help</a></li>
            
        </ul>
    </nav>
    <section id="home">
        <h1 class="h-primary">Welcome to Online Banking</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi,
             beatae quis! Consequuntur hic ab totam itaque earum repellendus error
              accusantium, veritatis, beatae enim nihil atque provident a. Corporis,
               ipsam temporibus.</p>
               <center><button class="btn"><a href="user.php">Get Started</a></button></center>        
    </section>    

    <section id="services-container">
        <h1 class="h-primary center">Banking</h1>
        <div class="services">
            <div class="box">
                <img src="images/loans.png" alt="">
                <h2 class="h-secoundary center">Loans</h2>
                <p class="center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Unde sit ipsam eius, assumenda tempore et animi nulla odit pariatur recusandae vero autem labore,
                     .</p>
            </div>    
            <div class="box">
                <img src="images/CreditCards.png" alt="">
                <h2 class="h-secoundary center">Credit Cards </h2>
                <p class="center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Unde sit ipsam eius, assumenda tempore et animi nulla odit pariatur recusandae vero autem labore,
                     .</p>
            </div>   
            <div class="box">
                <img src="images/insurance.png" alt="">
                <h2 class="h-secoundary center">Insurance</h2>
                <p class="center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Unde sit ipsam eius, assumenda tempore et animi nulla odit pariatur recusandae vero autem labore
                </p>
            </div>           
            </div>
    </section>

    <!-- Sponsor -->
    <center>
       
        <div class="col-sm-4">
        <h2>Connect</h2>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
</div>
    </center>

    <!-- Contact Section -->
    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="name">Email Id</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" name="phone" placeholder="Enter your phone number">
                </div>
                  <div class="form-group">
                    <label for="name">Message</label>
                     <textarea name="message" cols="34" rows="10"></textarea>
                </div>
              
        </div>
    <center><input class="btn" type="submit" name="submit" value="submit"></center>
    </section>
            </form>
            
    
    <footer>
        <div class="center">
            Copyright &copy; www.Banking.com.  &nbsp; All right reserved
        </div>
    </footer>
</body>
</html>

