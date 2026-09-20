<?php
require 'Connect.php';
   
if(isset($_POST['submit_btn'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users (first_name, last_name, email, password, birth_month, birth_day, birth_year, phone, address) VALUES ('$first_name', '$last_name', '$email', '$password', '$month', '$day', '$year', '$phone', '$address')";
    $result=mysqli_query($conn,$sql);
    if($result) {
        header("Location:pageLogin.php");
        } else {
        mysqli_error($conn);
        }
       }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS/cssHome2.css"> 
    <link rel="stylesheet" href="CSS/cssPage.css">
    <script src="JavaScript/pageHome.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/cssSignUp.css">
</head>
<body>
<header>
    <?php
       require 'navbar.php';
       ?>
    </header>
    <div class="signup-container" id="signup">
        <div class="signup-form">
            <img src="Assets/white logo.png" alt="Logo" class="signup-logo">
            <h2>Sign Up</h2>
            <form  method="post">
                <div class="mb-3">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first-name" name="first_name" required>
                </div>
                <div class="mb-3">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last-name" name="last_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Birthday</label>
                    <div class="d-flex gap-2">
                        <select class="form-select" name="month" required>
                            <option value="" disabled selected>Month</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                        <select class="form-select" name="day" required>
                            <option value="" disabled selected>Day</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>

                        </select>
                        <select class="form-select" name="year" required>
                            <option value="" disabled selected>Year</option>
                            <option>1930</option>
                            <option>1931</option>
                            <option>1932</option>
                            <option>1933</option>
                            <option>1934</option>
                            <option>1935</option>
                            <option>1936</option>
                            <option>1937</option>
                            <option>1938</option>
                            <option>1939</option>
                            <option>1940</option>
                            <option>1941</option>
                            <option>1942</option>
                            <option>1943</option>
                            <option>1944</option>
                            <option>1945</option>
                            <option>1946</option>
                            <option>1947</option>
                            <option>1948</option>
                            <option>1949</option>
                            <option>1950</option>
                            <option>1951</option>
                            <option>1952</option>
                            <option>1953</option>
                            <option>1954</option>
                            <option>1955</option>
                            <option>1956</option>
                            <option>1957</option>
                            <option>1958</option>
                            <option>1959</option>
                            <option>1960</option>
                            <option>1961</option>
                            <option>1962</option>
                            <option>1963</option>
                            <option>1964</option>
                            <option>1965</option>
                            <option>1966</option>
                            <option>1967</option>
                            <option>1968</option>
                            <option>1969</option>
                            <option>1970</option>
                            <option>1971</option>
                            <option>1972</option>
                            <option>1973</option>
                            <option>1974</option>
                            <option>1975</option>
                            <option>1976</option>
                            <option>1977</option>
                            <option>1978</option>
                            <option>1979</option>
                            <option>1980</option>
                            <option>1981</option>
                            <option>1982</option>
                            <option>1983</option>
                            <option>1984</option>
                            <option>1985</option>
                            <option>1986</option>
                            <option>1987</option>
                            <option>1988</option>
                            <option>1989</option>
                            <option>1990</option>
                            <option>1991</option>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            <option>1995</option>
                            <option>1996</option>
                            <option>1997</option>
                            <option>1998</option>
                            <option>1999</option>
                            <option>2000</option>
                            <option>2001</option>
                            <option>2002</option>
                            <option>2003</option>
                            <option>2004</option>
                            <option>2005</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                            <option>2021</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>

                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                </div>
                <a href="pagehome2.php">
                    <button type="submit" class="btn btn-primary w-100" name="submit_btn" >Sign Up & Accept</button>
                </a>
            </form>
            <p class="text-center mt-3">Already have an account? <a href="pageLogin.php">Log In</a></p>
        </div>
    </div>
</body>
</html>
