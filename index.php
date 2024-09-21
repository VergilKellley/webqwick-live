<!DOCTYPE html>
<html lang="en">

<head>
    <!-- https://www.youtube.com/watch?v=Ms6dJu7xr14 left off at 31:57-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQ I'm inXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- favicon cross-browser -->
    <link rel="shortcut icon" href="images/color_running_logo.png">

    <!-- favicon IOS devices -->
    <link rel="apple-touch-icon" href="images/color_running_logo.png">

    <title>WebQwick</title>
</head>

<body>
    <!-- header section start-->
    <header>
        <!-- <a href="#" class="logo"><span>Web</span>Qwick</a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars"></label>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#about">about</a>
            <a href="#review">review</a>
            <a href="#pricing">pricing</a>
            <a href="#contact">contact</a>
            
        </nav> -->



        <!-- NEW RESPONSIVE NAV -->
        <div class="topnav" id="myTopnav">
            <!-- <a href="#home" class="active">Home</a> -->
            <a href="#" class="logo"><img loading="lazy" src="images/color_running_logo.png" alt="webqwick logo"></a>
            <!-- <a href="#" class="logo"><span>Web</span>Qwick</a> -->
            <div id="nav-links">
                <br>
                <a href="#home">Home</a>
                <!-- <a href="book_appointment_4.php">Book Appointment</a> -->
                <a href="#about">About</a>
                <a href="#features">Features</a>
                <a href="#review">Reviews</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact Us</a>
                <!--<a href="contact_form.php">contact form</a>-->
            </div>
            <!-- <div class="dropdown">
                <button class="dropbtn">Dropdown 
                 <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                </div>
            </div>  -->
            <!-- <a href="#about">About</a> -->
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </header>
    <!-- header section end-->

    <!-- home section starts -->


    <section class="home " id="home">
        <div class="overlay"></div>
        <div class="content">
            <h1 style="font-family: Coiny;" class="app-name">Web<span
                    style="color:var(--purple); font-family: Rosario;">Qwick</span></h1>
            <!-- <h1 style="position:relative; z-index:3; font-size: 12rem; color:var(--pink);" >Web<span style="color:var(--purple)">Qwick</span></h1> -->
            <br>
            <h3 class="header-text">Create a salon website easy as posting to social media!</h3>
            <br>
            <a href="#features" class="btn">Learn More</a>
        </div>
        <!-- <div class="image">
            <img src="images/home-img.png" alt="">
        </div> -->
    </section>
    <!-- home section ends -->

    <!-- about section starts -->

    <!-- <div class="rotate-top-svg">
        <img src="images/top-wave.svg" alt="">
    </div> -->
    <section class="about" id="about">
        <div style="text-align: center; margin-bottom: 50px">
            <h2 style="font-size: 3.5rem;">Websites made easy!</h2>
            <p>We offer salon and barbershop websites, that are easy to use and affordable! Updates to your site are
                easy as posting to your favorite social media platform. <a href="#contact">Contact</a> us today and have
                your site up and running in no time.</p>
        </div>

        <div class="column">

            <div class="image" style="text-align: center;">
                <img loading="lazy" src="images/about-img-1.png" alt="">
                <h3 class="pink" style="font-size: 2.5rem; font-style:italic">Looks great on all screen sizes!</h3>
            </div>

            <div class="content">
                <h3 style="font-size: 2.5rem; padding-bottom: 1rem">Easy to Use</h3>
                <p style="padding-bottom: 1rem;">The days of having to decide whether to spend countless hours trying to
                    build a website for your business or spend large amounts of money hiring a web developer are over.
                </p>
                <p>If you can post to social media, you really can build a website, customized to suite your businsess.
                </p>
                <div class="buttons">
                    <!-- <a href="#pricing" class="btn">get started</a> -->
                    <!-- <a href="#" class="btn"><i class="fab fa-apple"></i>app store</a>
            <a href="#" class="btn"><i class="fab fa-google-play"></i>google-play</a> -->
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>

    <section class="parallax-container" style="padding: 0;">
        <div class="parallax-img"></div>
        <div class="social-media-overlay"></div>
        <div class="column">
            <div class="parrallx-img-txt display:block">
                <span style="text-align:center; position:relative; ">
                    <h3 style="font-size: 3.5rem; color:#fff">Don't rely on social media.</h3>
                    <p style="font-size: 2.5rem; color:#fff">Relying only on social media to promote your business
                        limits the amount of exposure your business has to potential customers. Having a <span
                            style="font-style: italic; font-weight:600">website</span> ensures you reach the largest
                        audience possible.</p>
                </span>
                <div class="buttons">
                    <!-- <a href="#pricing" class="btn">get started</a> -->
                    <!-- <a href="#" class="btn"><i class="fab fa-apple"></i>app store</a>
            <a href="#" class="btn"><i class="fab fa-google-play"></i>google-play</a> -->
                </div>
            </div>

            <!-- <div class="image">
                <img src="images/about-img.png" alt="">
            </div> -->
        </div>
    </section>

    <!-- about section ends -->

    <!-- features section starts -->

    <section class="features" id="features">

        <h1 class="heading" style="font-size: 3.5rem;"> Features</h1>

        <div class="box-container box-container-2">

            <div class="box">
                <!-- <img src="images/f-icon1" alt=""> -->
                <img loading="lazy" class="cellphone" src="images/choose_colors.png" alt="">
                <h3>easy to use</h3>
                <p>If you can post to social media, you can create a custom website for your business.</p>
                <!-- <a href="#pricing" class="btn">Pricing Plans</a> -->
            </div>

            <div class="box">
                <!-- <img src="images/f-icon1" alt=""> -->
                <img loading="lazy" class="cellphone" src="images/cellphone.png" alt="">
                <h3>amazing designs</h3>
                <p>Professionally designed templates take the guess work out of building a website for your business!
                </p>
                <!-- <a href="#pricing" class="btn">See Demo</a> -->
            </div>
            <div class="box">
                <!-- <img src="images/f-icon1" alt=""> -->
                <img loading="lazy" class="cellphone" src="images/google_search.png" alt="">
                <h3>built-in SEO</h3>
                <p>Seach Engine Optimization (SEO), helps your website rank higher on google searches.</p>
                <!-- <a href="#pricing" class="btn">SEO Explained</a> -->
            </div>
        </div>

        <div style="text-align:center; margin-top: 5rem; font-size: 2.5rem">
            <h1>Our template designs are versatile. Use as a Barbershop, Nail or Hair Salon website.</h1>
        </div>

        <div style="display:flex; flex-wrap: wrap; gap: 4rem; justify-content:center; align-items:center">
            <div style="text-align: center; margin-top: 50px; display:flex; flex-direction:column">
                <img class="demo-images" style=" max-width: 550px" src="images/your-barbershop-landing-page.png"
                    alt="barbershop hair cut">
                <a href="https://your.barbershop.vergildkelley.com/" class="btn"
                    style="width:fit-content; padding: 15px 50px" target="_blank">View Demo</a>
            </div>
            <div style="text-align: center; margin-top: 50px; display:flex; flex-direction:column">
                <img class="demo-images" style="max-width: 550px" src="images/your-nail-salon-landing-page.png"
                    alt="red fingernails">
                <a href="https://your.salon.vergildkelley.com/" class="btn"
                    style="width:fit-content; padding: 15px 50px" target="_blank">View Demo</a>
            </div>
        </div>
    </section>
    <!-- features section ends -->

    <!-- reviews section starts -->

    <section class="review" id="review">

        <h1 class="heading">What Users are saying...</h1>

        <div class="box-container">

            <div class="box">
                <!-- <i class="fas fa-quote-right"></i> -->
                <div class="user">
                    <img loading="lazy" src="images/pic1.jpg" alt="">
                    <h3>Joann</h3>
                    <!-- <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div> -->
                    <div class="comment">
                        <p>I never imagined creating a website could be this simple? They took all the complication out
                            of building a website!
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <!-- <i class="fas fa-quote-right"></i> -->
                <div class="user">
                    <img loading="lazy" src="images/pic2.jpg" alt="">
                    <h3>Alice</h3>
                    <!-- <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div> -->
                    <div class="comment">
                        <p>
                            At first I was skeptical. I never thought I had the time let alone the technical skill to
                            build a website for my business.
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <!-- <i class="fas fa-quote-right"></i> -->
                <div class="user">
                    <img loading="lazy" src="images/pic3.jpg" alt="">
                    <h3>Marry</h3>
                    <!-- <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div> -->
                    <div class="comment">
                        <p>
                            Creating a website for my nail salon was as easy as posting to social media. WebQwick saved
                            me time and money.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- reviews section ends -->

    <!-- newsletter starts -->
    <!-- <div class="newsletter">
        <h3>Have Questions?</h3>
        <p>Contact a Salon Web representative for more details or click get started and start building your website today.</p>
        <form action="">
            <input type="email" placeholder="enter your email">
            <input type="submit" value="Send">
        </form>
    </div> -->
    <!-- newsletter ends -->

    <!-- pricing section starts -->

    <section class="pricing" id="pricing">

        <div class="heading">pricing plans</div>

        <!-- <div class="box-container"> -->
        <div class="box-container box-container-2">

            <div class="box">
                <h3 class="title">basic</h3>
                <div class="price">$19 <span>/monthly</span></div>
                <ul>
                    <!-- <li><i class="fas fa-check">billed annually</i></li> -->
                    <li><i class="fas fa-check"> Built-in SEO</i></li>
                    <li><i class="fas fa-check"> Phone Support</i></li>
                    <li><i class="fas fa-check"> Business Email</i></li>
                    <li><i class="fas fa-check"> 10GB storage</i></li>
                    <li><i class="fas fa-check"> Custom Domain Name</i></li>
                    <li><i style="text-decoration:line-through" class="fas fa-times"> Book Appointments</i></li>
                    <li><i style="text-decoration:line-through" class="fas fa-times"> Accept Payments Online</i></li>
                </ul>
                <a style="margin-top: 30px;" href="#contact" class="btn">Get Started</a>
            </div>
            <div class="box">
                <h3 class="title">standard</h3>
                <div class="price">$29 <span>/monthly</span></div>
                <ul>
                    <!-- <li><i class="fas fa-check">billed annually</i></li> -->
                    <li><i class="fas fa-check"> Built-in SEO</i></li>
                    <li><i class="fas fa-check"> Phone Support</i></li>
                    <li><i class="fas fa-check"> Business Email</i></li>
                    <li><i class="fas fa-check"> 30GB storage</i></li>
                    <li><i class="fas fa-check"> Custom Domain Name</i></li>
                    <li><i class="fas fa-check"> Book Appointments</i></li>
                    <li><i style="text-decoration:line-through" class="fas fa-times"> Accept Payments Online</i></li>
                </ul>
                <a style="margin-top: 30px;" href="#contact" class="btn">Get Started</a>
            </div>
            <div class="box">
                <h3 class="title">premium</h3>
                <div class="price">*$39 </span><span>/monthly</span></div>
                <ul>
                    <!-- <li><i class="fas fa-check">billed annually</i></li> -->
                    <li><i class="fas fa-check"> Built-in SEO</i></li>
                    <li><i class="fas fa-check"> Phone Support</i></li>
                    <li><i class="fas fa-check"> Business Email</i></li>
                    <li><i class="fas fa-check"> 50GB storage</i></li>
                    <li><i class="fas fa-check"> Custom Domain Name</i></li>
                    <li><i class="fas fa-check"> Book Appointments</i></li>
                    <li><i class="fas fa-check"> Accept Payments Online</i></li>
                    <p style="font-size: 12px !important;"><span class="pink">*</span> payment gateway charges not
                        included</p>
                </ul>
                <a href="#contact" class="btn">Get Started</a>
            </div>
        </div>
    </section>

    <!-- pricing section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">

        <div class="image">
            <img loading="lazy" src="images/contact-img.png" alt="">
        </div>

        <div>
            <h2>To get started call</h2>
            <h2><a href="tel:+12244187037">(224)418-7037</a></h2>
            <p style="font-size: 2rem;">Or email info@webqwick.com</p>
            <p style="font-size: 2rem;">In your email let us know what questions you have and the best time to contact
                you.</p>
        </div>
        <!-- <form action="">

            <h1 class="heading">contact us</h1>

            <div class="inputBox">
                <input type="text" required>
                <label for="">name</label>
            </div>

            <div class="inputBox">
                <input type="email" required>
                <label for="">email</label>
            </div>

            <div class="inputBox">
                <input type="text" required>
                <label for="">phone</label>
            </div>

            <div class="inputBox">
                <textarea required name="" id="" cols="30" rows="10"></textarea>
                <label for="">message</label>
            </div>

            <input type="submit" class="btn" value="send message">

        </form> -->
    </section>
    <!-- contact section ends -->

    <!-- footer section starts -->

    <div class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>WebQwick offers Salon website templates, that are easy to use and affordable! Updates to your site
                    are as easy as posting to your favorite social media platform. Contact us today and have your site
                    up and running in no time.</p>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#features">features</a>
                <a href="#review">reviews</a>
                <a href="#pricing">pricing</a>
                <a href="#contact">contact</a>
            </div>

            <!-- <div class="box">
                <h3>follow us</h3>
                <a href="#home">home</a>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#review">pintrest</a>
                <a href="#pricing">pricing</a>
                <a href="#contact">twitter</a>
            </div> -->

            <div class="box">
                <h3>contact us</h3>
                <div class="info">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+12244187037">(224)418-7037</a>
                </div>
                <div class="info">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@webqwick.com">info@webqwick.com</a>
                </div>
                <div class="info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>555 Broadway <br>Chicago, IL 60640 </p>
                </div>
            </div>
        </div>
        <h1 class="credit">Copyright &copy; 2024 <a href="https://webqwick.com/"
                style="color:#fff; text-decoration:underline">WebQwick</a> | Website designed and powered by WebQwick.
            All other trademarks, service marks and trade names referenced in this material are the property of their
            respective owner.</h1>
        <a
            href="https://www.freepik.com/free-psd/isolated-tablet-laptop-smartphone-composition_40505824.htm#query=laptop&position=10&from_view=search&track=sph&uuid=a8ac0564-55c9-4ee9-b7a1-416891011306">Image
            by Vectonauta</a> on Freepik
    </div>
    <!-- footer section ends -->


    <!-- <section>
        <div class="image">
            <img class="cellphone" src="images/cellphone.png" alt="">
        </div>
    </section> -->

    <script src="js/navbar.js"></script>
</body>

</html>