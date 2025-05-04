<?php
 include ('header.php'); 
 include ('nav.php'); 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Services</title>
    <link href="style/style.css" rel="stylesheet">
    
</head>
<body>
    <style>
        footer {
    background-color: #343a40;
    color: white;
    padding: 50px 0;
}

footer a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

footer a:hover {
    color: #f8f9fa;
    text-decoration: underline;
}

footer .container {
    max-width: 1100px;
    margin: 0 auto;
}

footer .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

footer .col-md-4 {
    flex: 1;
    min-width: 250px;
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    footer .row {
        flex-direction: column;
        text-align: center;
    }
}
        </style>

    <section class="services">
        <h2>OUR TRAVEL SERVICES</h2>
        <div class="services-container">
            <div class="service-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQirO87HqQxlrGTsJEAWVe4zGGgDPzDSp43P4HywTAyxBGi3m5IXHVovVEQylz_rQAJrrQ&usqp=CAU" alt="Flight Booking">
                <h3>Flight Bookings</h3>
                <p>We provide the best flight deals to your dream destinations at unbeatable prices.</p>
            </div>

            <div class="service-card">
                <img src="https://equalscollective.com/wp-content/uploads/2021/12/Booking-A-Hotel-Room.jpg" alt="Hotel Booking">
                <h3>Hotel Reservations</h3>
                <p>Find luxurious and budget-friendly hotels with our easy booking service.</p>
            </div>

            <div class="service-card">
                <img src="https://www.hlimg.com/images/deals/360X230/deal_image9818-1.jpg" alt="Tour Packages">
                <h3>Tour Packages</h3>
                <p>Explore exciting travel packages designed to create unforgettable experiences.</p>
            </div>

            <div class="service-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDYbpQIc_w6JVBn4bwY3ucdAed4Jo5f2YZZ3YL9nPBn365L-J2K5_HnuJeelBtwKyFDAM&usqp=CAU" alt="Car Rentals">
                <h3>Car Rentals</h3>
                <p>Enjoy your trip with hassle-free car rental services at affordable rates.</p>
            </div>

            <div class="service-card">
                <img src="https://cdn.pixabay.com/photo/2017/02/19/23/01/car-2086229_640.jpg" alt="Car Rentals">
                <h3>Car Rentals</h3>
                <p>Enjoy your trip with hassle-free car rental services at affordable rates.</p>
                </div>
        </div>
    </section>
    <footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>123 Main St, Anytown, USA 12345</p>
                <p>phone: 555-555-5555</p>
                <p>email: <a href="mailto:info@example.com">info@example.com</a></p>
            </div>
            <div class="col-md-4">
                <h5>Social Media</h5>
                <p><a href="#" class="text-white">Facebook</a></p>
                <p><a href="#" class="text-white">Twitter</a></p>
                <p><a href="#" class="text-white">Instagram</a></p>
            </div>
            <div class="col-md-4">
                <h5>Copyright</h5>
                <p>&copy; 2024 Company Name. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
