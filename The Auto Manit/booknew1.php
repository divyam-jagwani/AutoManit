                                                      <?php
  session_start();
  ?>







<!DOCTYPE html>
<html>
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
                    <li><a class="current" href="book.php" title="">Book an Auto!</a></li>

                    <li><a href="contact.php" title="">Sign In</a></li>
                    <li><a href="logout.php" title="">Log Out</a></li>
                </ul>
            </div>


        </div>


        <div class="center_content_pages">

              <div class="financial-application-form">
             <h2>Booking!</h2>

             <p>


             </p>
                        <form method="POST" action="booklast1.php">
                <div class="form" method="POST">

                    <div class="form_row">
                           <?php
                                    require 'connect.inc.php';

                                     $query="SELECT * FROM locations WHERE Value=1";
                                     $query2="SELECT * FROM locations WHERE Value=2";
                                     $query_run=mysql_query($query);
                                     $query2_run=mysql_query($query2);
                                     if($query_run === FALSE && $query2_run === FALSE) {
                                       die(mysql_error()); //
                                     }
                                     $row=mysql_fetch_array($query_run);
                                     $run=mysql_num_rows($query_run);
                                     $row2=mysql_fetch_array($query2_run);
                                     $run2=mysql_num_rows($query2_run);
                                     if($run>=1)
                                     {
                                     ?>
                                       <div class="core">
                                       <h2>Source:<?php echo $row[2];?></h2>
                                       <h2>Destination:<?php echo $row2[2];?></h2>
                                       </div>
                                     <?php
                                     }
                                     $fare=abs($row[0]-$row2[0])*5;
                                     ?>
                                     <div class="core">
                                       <h2>Ride Fare:<?php echo $fare;?></h2>
                                       </div>


                                     <?php
                                     $query3="UPDATE locations SET Value=0 WHERE Value=1 OR Value=2";
                                     $query3_run=mysql_query($query3);

                                     ?>


                    <div class="form_row">
                          <form method="POST" action="booklast1.php">
                                       <div class="form" method="POST" action="booklast1.php">
                                              <div class="form_row">
                                              <input type="submit" name="" class="submit" value="Confirm Ride" />
                                              </div>
                                        </div>
                          </form>
                     </div>

                    </div>











                </div>
             </div>







             <div class="testimonials">
                  <h2>Vision and Mission </h2>
                    <p>
Our vision is to create technology that makes life better for everyone, everywhere...every person, every organization, and every community around the globe. This motivates us, inspires us, to do what we do. To make what we make. To invent, and to reinvent. To engineer experiences that amaze. We won't stop pushing ahead, because you won't stop pushing ahesad. You're reinventing how you work. How you play. How you live. With our technology, you'll reinvent your world.

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
*/