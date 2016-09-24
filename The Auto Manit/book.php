<?php
  session_start();
  ?>
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
                    <li><a class="current" href="#" title="">Book an Auto!</a></li>

                    <li><a  href="contact.php" title="">Sign In</a></li>
                    <li><a href="logout.php" title="">Log Out</a></li>
                </ul>
            </div>


        </div>


        <div class="center_content_pages">

              <div class="financial-application-form">
             <h2>Book an Auto!</h2>

             <p> Select your nearest landmark as Source and Destination.
             </p>
            <h2> <?php echo @$_GET['logged'];?>    </h2>
                        <form method="POST" action="direct3.php">
                <div class="form" method="POST">


                    <div class="form_row">
                    <label>Source:</label>
                    <select name="source" class="main_input" />
                    <option value="1">Hostel-1/2</option>
                    <option value="2">Hostel-3/4</option>
                    <option value="3">Hostel-5/6</option>
                    <option value="4">Hostel-7</option>
                    <option value="5">Hostel-8</option>
                    <option value="6">Hostel-9/10</option>
                    <option value="7">SBI Bank</option>
                    <option value="8">Chemical Dept</option>
                    <option value="9">Dastoor</option>
                    <option value="10">Main Gate</option>

                    </select>
                    </div>

                    <div class="form_row">
                    <label>Destination</label>
                    <select name="dest" class="main_input" />
                    <option value="1">Hostel-1/2</option>
                    <option value="2">Hostel-3/4</option>
                    <option value="3">Hostel-5/6</option>
                    <option value="4">Hostel-7</option>
                    <option value="5">Hostel-8</option>
                    <option value="6">Hostel-9/10</option>
                    <option value="7">SBI Bank</option>
                    <option value="8">Chemical Dept</option>
                    <option value="9">Dastoor</option>
                    <option value="10">Main Gate</option>
                    </select>
                    </div>




                    <div class="form_row">
                     <input type="submit" name="" class="submit" value="Ride Now" />
                    </div>
                      </form>

                </div>
                </form>
                <div>
                 <form method="POST" action="direct5.php">
                 <div class="form_row">
                    <label>Source:</label>
                    <select name="source" class="main_input" />
                    <option value="1">Hostel-1/2</option>
                    <option value="2">Hostel-3/4</option>
                    <option value="3">Hostel-5/6</option>
                    <option value="4">Hostel-7</option>
                    <option value="5">Hostel-8</option>
                    <option value="6">Hostel-9/10</option>
                    <option value="7">SBI Bank</option>
                    <option value="8">Chemical Dept</option>
                    <option value="9">Dastoor</option>
                    <option value="10">Main Gate</option>

                    </select>
                    </div>

                    <div class="form_row">
                    <label>Destination</label>
                    <select name="dest" class="main_input" />
                    <option value="1">Hostel-1/2</option>
                    <option value="2">Hostel-3/4</option>
                    <option value="3">Hostel-5/6</option>
                    <option value="4">Hostel-7</option>
                    <option value="5">Hostel-8</option>
                    <option value="6">Hostel-9/10</option>
                    <option value="7">SBI Bank</option>
                    <option value="8">Chemical Dept</option>
                    <option value="9">Dastoor</option>
                    <option value="10">Main Gate</option>
                    </select>
                    </div>

                    <div class="form_row">
                    <label>Time:</label>
                    <input type="time" name="time" class="main_input" />
                    </div>
                       <div class="form_row">
                     <input type="submit" name="" class="submit" value="Ride Later" />
                    </div>
             </div>  </div>







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
