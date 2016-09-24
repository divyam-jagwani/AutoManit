



<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>THE AUTO_MANIT</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script type="text/javascript" src="js/jquery.core.js"></script>
<script type="text/javascript" src="js/jquery.superfish.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/jquery.scripts.js"></script>
</head>

<body>
<div id="wrap">
    <div class="top_corner"></div>
    <div id="main_container">

        <div id="header">
            <div id="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>

            <a href="make-a-donation.html" class="make_donation"></a>

            <div id="menu">
                <ul>
                    <li><a href="#" title=""></a></li>
                    <li><a href="#" title=""></a></li>
                    <li><a href="#" title=""></a></li>
                    <li><a href="#" title=""></a></li>
                    <li><a href="index.html" title="">Home</a></li>
                    <li><a href="about.html" title="">About Company</a></li>
                    <li><a href="book.php" title="">Book an Auto!</a></li>

                    <li><a class="current" href="contact.php" title="">Sign In</a></li>
                </ul>
            </div>


        </div>


        <div class="center_content_pages">

              <div class="financial-application-form">
             <h2>Sign In/Sign Up</h2>

             <p>
             You must be a student of MANIT to use our service. Sign in with your registered scholar number and password.
             If you're are a new user, you must sign up with your information.

             </p>

                      <?php echo @$_GET['logged']; ?>



                        <form method="POST" action="direct.php">
                <div class="form" method="POST">


                    <div class="form_row">
                    <label>Scholar Number:</label>
                    <input type="text" name="sno" class="main_input" />
                    </div>

                    <div class="form_row">
                    <label>Password:</label>
                    <input type="password" name="pass" class="main_input" />
                    </div>




                    <div class="form_row">
                     <input type="submit" name="" class="submit" value="Sign In" />
                    </div>

                </div>
                </form>

             </div>


              <img src="images/2.png">
              <img src="images/3.png">

              <img src="images/1.png">  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <img src="images/asd.jpg">

              <br>





                   </p>

                        <form method="POST" action="direct2.php">


                                           <div class="form">
                    <div class="form_row">
                    <label>Name:</label>
                    <input type="text" name="name" class="main_input" />
                    </div>

                    <div class="form_row">
                    <label>Scholar Number:</label>
                    <input type="text" name="sno" class="main_input" />
                    </div>

                    <div class="form_row">
                    <label>Phone No:</label>
                    <input type="text" name="phone" class="main_input" />
                    </div>


                    <div class="form_row">
                    <label>Email:</label>
                    <input type="text" name="email" class="main_input" />
                    </div>

                    <div class="form_row">
                    <label>Password:</label>
                    <input type="password" name="pass" class="main_input" />
                    </div>
                    <div class="form_row">
                    <label>Confirm Password:</label>
                    <input type="password" name="cpass" class="main_input" />
                    </div>




                    <div class="form_row">
                     <input type="submit" name="" class="submit" value="Sign up" />
                    </div>


                </div>
                </form>
             </div>







             <div class="testimonials">
                    <h2>Vision and Mission </h2>
                    <p>
                    Our vision is to create technology that makes life better for everyone, everywhere...every person, every organization, and every community around the globe. This motivates us, inspires us, to do what we do. To make what we make. To invent, and to reinvent. To engineer experiences that amaze. We won't stop pushing ahead, because you won't stop pushing ahesad. You're reinventing how you work. How you play. How you live. With our technology, you'll reinvent your world.
                    </p>



             </div>





        <div class="clear"></div>
        </div>

        <div class="footer">
        	<div class="copyright"><a href="http://csstemplatesmarket.com/" target="_blank">The_Auto_Manit</a> | <a href="http://csstemplatesmarket.com/" target="_blank">CSE7</a></div>

        	<div class="footer_links">
                <a class="current" href="index.html" title="">Home</a>
                <a href="#" title="">About Company</a>
                <a href="#" title="">Projects</a>
                <a href="#" title="">Clients</a>
                <a href="#" title="">Testimonials</a>
                <a href="contact.php" title="">Sign In</a>
            </div>
        </div>



    </div>
</div>
</body>
</html>
