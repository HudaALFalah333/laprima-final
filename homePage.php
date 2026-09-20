<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Prima Haute Couture</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="JavaScript/pageHome.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lora:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="CSS/cssPage.css">
    <link rel="stylesheet" href="CSS/cssHome2.css">
    <link rel="stylesheet" href="home2.php">

</head>
<body>
    <div class="side-images">
        <img src="Assets/white bachground.jpeg" alt="Right Image" class="right-image">
        <img src="Assets/white bachground.jpeg" alt="Left Image" class="left-image">
    </div>


    <header class="hero-section">  
    <?php
       require 'navbar.php';
       ?>
    </header>


    <main>
        <div class="page-wrapper">
            <section id="home"> 
                <h1 style="font-family: 'font-family: 'Playfair Display">Welcome to La Prima Haute Couture</h1>
                <p>
                    At La Prima Haute Couture, we take pride in crafting exquisite, bespoke dresses for women, meticulously designed to celebrate the most memorable moments of your life. 
                    Our collection encompasses an array of sophisticated gowns, from bridal attire to elegant evening dresses, each created with the utmost care and an unwavering attention to detail.
                </p>
                <div class="button-container">
                    <a href="pageLogin.php">
                        <button class="btn" style="background-color: #000; color: white; padding: 15px 30px; border-radius: 45px; font-family: 'Playfair Display', serif; " >Start Design Your Dresses</button>
                    </a>
                </div>
            </section>
            
            <section id="about">
                <video autoplay muted loop id="background-video">
                    <source src="Assets/video_about_us_LaPrima.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="content">
                    <h2> Abdeen Qaddoumi</h2>
                    <p>La Prima Haute Couture brings over 30 years of expertise in creating luxurious, one-of-a-kind dresses.</p>
                    <p id="animated-text">
                    Our lead designer, Abdeen Qaddoumi, brings unparalleled attention to detail, creating bespoke gowns that reflect each client's unique style. Using the finest fabrics and jewelry, every piece is meticulously handcrafted by a skilled team of artisans, ensuring elegance and sophistication for every special moment.
                    </p>
                </div>
            </section>

            <section id="services">
                <h2> Our Services </h2>
                <ul>
                    <li class="service-item">
                        <strong>Wedding Dresses</strong>
                    </li>
                    <div class="service-description">
                        We offer a service that allows clients to fully design their wedding dress to perfectly fit their vision. Our team is committed to making your special day truly unforgettable.
                    </div> 
                    <li class="service-item">
                        <strong>Occasion Dresses</strong>
                    </li>
                    <div class="service-description">
                        Whether it's an elegant dress for a special occasion or a sophisticated evening gown, we offer customization options that give clients the freedom to choose fabrics, styles, and embellishments to reflect their unique style.
                    </div>
                </ul>
                
                <div id="description-box"></div>
            </section>

            <section id="gallery">
                <h2>Gallery</h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="Assets/dress3.png" class="d-block carousel-image" alt="Dress 1">
                    </div>
                    <div class="carousel-item">
                    <img src="Assets/dress4.jpg" class="d-block carousel-image" alt="Dress 2">
                    </div>
                    <div class="carousel-item">
                    <img src="Assets/dress1.png" class="d-block carousel-image" alt="Dress 3">
                    </div>
                    <div class="carousel-item">
                    <img src="Assets/dress22.png" class="d-block carousel-image" alt="Dress 4">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </section>
       </div>
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