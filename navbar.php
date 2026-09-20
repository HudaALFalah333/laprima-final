<?php
require 'connect.php';
?>
<nav class="dior-navbar" style="padding: 5px 0px;">
<div class="menu-icon" onclick="toggleMenu()">
              <i class="fas fa-bars"></i>
          </div>
          <div class="logo">LA PRIMA HAUTE COUTURE</div>
          <ul class="nav-menu">
                <li><a href="homePage.php">Home</a></li>
                <li><a href="#about">Abdeen Qaddoumi</a></li>
                <li><a href="#services">Our Services</a></li>
                <li><a href="#gallery">Gallery</a></li>
            <?php
            if (isset($_SESSION['laprima'])) {
                $loggedIn = $_SESSION['laprima'];
                echo " 
                    <li><a href='DesignCard.php'>Design Card</a></li>
                   <li><a href='page1Design.php'>Design Dresses</a></li>
                    <li class='logout-button'><a href='logout.php'>Logout</a> </li>

                     ";
            } else {
                echo "
                   <li class='login-button'><a href='pageLogin.php'>Login</a> </li>
                ";
            }
            ?>
          </ul>
      </nav>

      
