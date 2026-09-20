<?php
require 'Connect.php';
session_start();

$email = isset($_SESSION['laprima']) ? $_SESSION['laprima'] : '';

if ($email) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $userinfo = mysqli_fetch_assoc($result);
        $user_id = $userinfo['id'];
        $sql_designs = "SELECT * FROM designs WHERE user_id='$user_id'";
        $result_designs = mysqli_query($conn, $sql_designs);
        if ($result_designs) {
            $designs = mysqli_fetch_all($result_designs, MYSQLI_ASSOC);
        } else {
            echo "Error fetching designs: " . mysqli_error($conn) . "<br>";
        }
    }
} else {
    echo "No email parameter in session.<br>";
}

if(isset($_POST['edit_btn'])){
  $design_id = $_POST['design_id'];
  $name = $_POST['app_name'];
  $time = $_POST['app_time'];
  $sql = "UPDATE designs SET name='$name', appointment_time='$time' WHERE design_id='$design_id'";
  $result = mysqli_query($conn, $sql);
  if ($result) { 
      echo "<script>alert('Design information updated successfully!');</script>";
  } else { 
      echo "Error updating design information: " . mysqli_error($conn) . "<br>";
  }
}

if(isset($_POST['delete_btn'])){
  $design_id = $_POST['design_id'];

  $sql = "DELETE FROM designs WHERE design_id='$design_id'"; 
  $result = mysqli_query($conn, $sql);
  if ($result) { 
      echo "<script>alert('Design information deleted successfully!');</script>";
  } else { 
      echo "Error updating design information: " . mysqli_error($conn) . "<br>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Edit Design</title>
  <script src="JavaScript/pageHome.js"></script>
  <script src="LogOut.js"></script>
  <link rel="stylesheet" href="cssLogOut.css">
  <script src="LogOut.js"></script>
  <link rel="stylesheet" href="CSS/cssHome2.css"> 
  <link rel="stylesheet" href="CSS/cssPage.css">
  <link rel="stylesheet" href="CSS/cssDesign1.css">
</head>
<body>
  <header>
  <?php
       require 'navbar.php';
       ?>
  </header>

  <main>
  <?php
    if (isset($designs)) {
        foreach ($designs as $design) {
            $design_id = $design['design_id'];
            $name = $design['name'];
            $app = $design['appointment_time'];
            echo " 
            <section class='form-section'>
            <h2>Edit Your Design</h2>
            <form method='post'>
            <div class='reservation-card'>
                <div class='reservation-details'>
                    <input type='text' class='design-name' name='app_name' value='$name'><br> 
                    <input type='text' class='appointment-time' name='app_time' value='$app'><br> 
                </div>
                <div class='reservation-actions'>
                    <button type='submit' class='edit-button' name='edit_btn'>Edit</button>
                    <button type='submit' class='delete-button' name='delete_btn'>Delete</button>
                    <input type='hidden' name='design_id' value='$design_id'><br>
                </div>
            </div>
            </form>
            </section>
            ";
        }
    }    
  ?>
  </main>

  <footer style="margin-top: 150px;">
    <div class="column">
        <h4>Contact Us</h4>
        <p><i class="fa-solid fa-envelope"></i> Email: 
            <a href="mailto:laprima_dress@gmail.com">laprima_dress@gmail.com</a>
        </p>
        <p><i class="fa-solid fa-phone"></i> Phone: 
            <a href="tel:+0797505036">07 9750 5036</a>
        </p>
        <p><i class="fa-solid fa-map-pin"></i> Location: 
            <a href="https://g.co/kgs/RBQD5NA" target="_blank">Our location</a>
        </p>
    </div>
    <p style="text-align: center; color: #000; margin-bottom: 20px;">
        &copy; 2024 La Prima Haute Couture
    </p>
    <div class="column">
        <h4>Follow Us</h4>
        <div class="social-icons">
            <a href="https://www.facebook.com/laprima.jo/?locale=ar_AR"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.instagram.com/la.prima/?hl=ar"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
  </footer>
 </body>
</html>
