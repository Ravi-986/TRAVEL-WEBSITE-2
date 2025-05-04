<?php
 include ('header.php'); 
 include ('nav.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Homepage</title>
    <link href="style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>




    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .hero {
            background-image: url('https://i.pinimg.com/564x/e5/15/5f/e5155fde000d8088b153efb626fa71ce.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .featured-destinations {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .destination {
            margin: 20px;
            width: calc(33.33% - 40px);
            background-color: #f7f7f7;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .testimonial {
            background-color: #f7f7f7;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);

            footer {
    background-color: #343a40;
    color: white;
    padding: 50px 0;
}


        }

    </style>
</head>
<body>
 
    <section class="hero">
        <h1>Welcome to Travel india</h1></br>
        
       
    </section>
    <section class="featured-destinations">
        <div class="destination" >
            <h4>NCR DELHI </h4></a>
            
            <a href="delhi.php">
            <img src="https://www.collidu.com/media/catalog/product/img1/b/7/b73923f9ef74f219f4b56be3ebd2995c0c87b5e37b6576f508eee98d3943482c/delhi-map-slide1.png" height="300px" width="400px" alt="NEW DELHI">
    </a>
        </div>
        <div class="destination">
            <h4>UTTARAKHAND</h4>
            
            <a href="uttarakhand.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeO98br0puX9D3e0cIiumy0SwkFbwKOsCIw5Lu_zUTOWGnflCL-ZynQgOhGKkwQzhhnrk&usqp=CAU" height="300px" width="400px" alt="UTTARAKHAND">
    </a>
        </div>
        <div class="destination">
            <h4>MUMMBAI</h4>
            
            <a href="mumbai.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPbvWLcLlnGyZjAoHhc--Tc3ves_EHjsBOiZLecX1ahy-76qehiEfNn9bQupUAuDPZvQ0&usqp=CAU" height="300px" width="400px" alt="mumbai">
    </a>
        </div>
        <div class="destination" >
            <h4>GOA</h4>
            
            <a href="goa.php">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGsqwr9vuAAQ166Ybh4opDHiqJ2OVLpoA5Mg&s" height="300px" width="400px" alt="goa">
    </a>
        </div>
        <div class="destination">
            <h4>UTTAR PRADESH</h4>
            
            <a href="up.php">
            <img src="https://media.istockphoto.com/id/585074528/vector/uttar-pradesh-india-map-grey.jpg?s=612x612&w=0&k=20&c=hv0KQtuCGBMX1LECkeFa0dSyfoLuKsZXTAwmT5Qo--c=" height="300px" width="400px" alt="UTTAR PRADESH">
    </a>
        </div>
        <div class="destination">
            <h4>GUJARAT</h4>
           
            <a href="Gujarat.php">
            <img src="https://t3.ftcdn.net/jpg/04/70/41/68/360_F_470416867_cjmxRNSARCQNjuh4uR9X69eOnEIg822S.jpg" height="300px" width="400px" alt="Gujarat">
    </a>
        </div>
  
    

            

</body>
</html>



