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
    } else {
        echo "Error executing query: " . mysqli_error($conn) . "<br>";
    }
} else {
    echo "<script>alert('Please Login First');</script>";
}

if(isset($_POST['submit_design'])){
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $size = $_POST['size'];
    $overall_length = $_POST['overall_length'];
    $arm_length = $_POST['arm_length'];
    $waist_circumference = $_POST['waist_circumference'];
    $bust_circumference = $_POST['bust_circumference'];
    $hip_circumference = $_POST['hip_circumference'];
    $neck_circumference = $_POST['neck_circumference'];
    $fabric = isset($_POST['fabric']) ? $_POST['fabric'] : '';
    $color = isset($_POST['color']) ? $_POST['color'] : '';
    $jewelry = $_POST['jewelry'];
    $appointment_time = $_POST['appointment_time'];
    $upload_design = '';

    if (isset($_FILES['upload']) && $_FILES['upload']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        $upload_file = $upload_dir . basename($_FILES['upload']['name']);
        
        if (move_uploaded_file($_FILES['upload']['tmp_name'], $upload_file)) {
            $upload_design = $upload_file;
        } else {
            echo "Failed to upload file.<br>";
        }
    }

    if ($conn) {
        $sql = "INSERT INTO designs (user_id, name, weight, size, overall_length, arm_length, waist_circumference, bust_circumference, hip_circumference, neck_circumference, fabric, color, jewelry, appointment_time, upload_design) VALUES ('$user_id', '$name', '$weight', '$size', '$overall_length', '$arm_length', '$waist_circumference', '$bust_circumference', '$hip_circumference', '$neck_circumference', '$fabric', '$color', '$jewelry', '$appointment_time', '$upload_design')";

        if(mysqli_query($conn, $sql)){
            echo "Design submission successful!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        header("Location: Submission.php");
    } else {
        echo "Database connection error.<br>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Your Dress Page</title>
    <link rel="stylesheet" href="CSS/cssPage.css">
    <link rel="stylesheet" href="CSS/cssDesign1.css">
    <script src="JavaScript/pageHome.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="CSS/cssHome2.css">
    <link rel="stylesheet" href="CSS/cssLogOut.css">
    <script src="LogOut.js"></script>
    
</head>
<body>
    <header>
    <?php
       require 'navbar.php';
       ?>
    </header>
    <main>
        <section class="form-section">
            <form method="post">
                <div class="design"><h1>Design Your Dress</h1></div>
                <div class="name-section">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name">
                </div>
                
                <div class="measurements">
                    <div>
                        <label for="weight">Weight</label>
                        <input type="text" id="weight" name="weight">
                    </div>
                    <div>
                        <label for="size">Size</label>
                        <input type="text" id="size" name="size">
                    </div>
                    <div>
                        <label for="overall-length">Overall Length</label>
                        <input type="text" id="overall-length" name="overall_length">
                    </div>
                    <div>
                        <label for="arm-length">Arm Length</label>
                        <input type="text" id="arm-length" name="arm_length">
                    </div>
                    <div>
                        <label for="waist-circumference">Waist Circumference</label>
                        <input type="text" id="waist-circumference" name="waist_circumference">
                    </div>
                    <div>
                        <label for="bust-circumference">Bust Circumference</label>
                        <input type="text" id="bust-circumference" name="bust_circumference">
                    </div>
                    <div>
                        <label for="hip-circumference">Hip Circumference</label>
                        <input type="text" id="hip-circumference" name="hip_circumference">
                    </div>
                    <div>
                        <label for="neck-circumference">Neck Circumference</label>
                        <input type="text" id="neck-circumference" name="neck_circumference">
                    </div>
                </div>                

                <div class="fabric">
                    <h2>Fabric</h2>
                    <div class="fabric">
                        <label><input type="checkbox" name="fabric" value="satin"> Satin</label>
                        <label><input type="checkbox" name="fabric" value="silk"> Silk</label>
                        <label><input type="checkbox" name="fabric" value="chiffon"> Chiffon</label>
                        <label><input type="checkbox" name="fabric" value="lace"> Lace</label>
                    </div>
                </div>
                
                <div class="colors">
                    <h2>Colors</h2>
                    <div class="colors">
                        <label><input type="checkbox" name="color" value="white"> White</label>
                        <label><input type="checkbox" name="color" value="gold"> Gold</label>
                        <label><input type="checkbox" name="color" value="silver"> Silver</label>
                        <label><input type="checkbox" name="color" value="black"> Black</label>
                    </div>
                </div>

                <div class="jewelry">
                    <h2>Jewelry</h2>
                    <input type="radio" id="full-rhinestones" name="jewelry" value="full-rhinestones">
                    <label for="full-rhinestones">Full Rhinestones</label><br>
                    <input type="radio" id="no-rhinestones" name="jewelry" value="no-rhinestones">
                    <label for="no-rhinestones">No Rhinestones</label><br>
                    <input type="radio" id="specific-areas" name="jewelry" value="specific-areas">
                    <label for="specific-areas">Specific Areas</label>
                </div>
                
                <div class="upload-design">
                    <label for="upload"><h2>Upload Design</h2></label>
                    <input type="file" id="upload" name="upload">
                </div>

                <div class="schedule">
                    <label for="appointment-time"><h2>Schedule An Appointment<h2></label>
                    <select id="appointment-time" name="appointment_time" required>
                        <option value="" disabled selected>Choose a time</option>
                        <option value="2025-01-20-08:00">January 20, 2025 - 8:00 AM</option>
                        <option value="2025-01-20-12:00">January 20, 2025 - 12:00 PM</option>
                        <option value="2025-01-21-10:00">January 21, 2025 - 10:00 AM</option>
                        <option value="2025-01-21-14:00">January 21, 2025 - 2:00 PM</option>
                    </select>

                </div>
                                
                <button type="submit" name="submit_design">Send Your Design</button>
            </form>
        </section>
    </main>
    <footer>
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
