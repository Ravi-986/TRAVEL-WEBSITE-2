<?php
 include ('header.php'); 
 include ('nav.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<div class="services">
<h2>About Us</h2>
    <div class="row1">
      
        <div >
          <p>History of Indian literature 
            The earliest Indian literature was passed down orally.
            The Rig Veda, a collection of literature from 1500–1200 BCE, is the beginning of Sanskrit literature.
            The Ramayana and Mahabharata are Sanskrit epics that were codified towards the end of the 2nd millennium BCE.
            The Pāli Canon and Tamil Sangam literature also developed during this time.<br>

            Indian English literature 
Indian English literature, also known as Indian Writing in English (IWE), is a body of work by Indian writers who write in English.
The works of Henry Louis Vivian Derozio, Michael Madhusudan Dutt, Rabindranath Tagore, and Sri Aurobindo are early examples of Indian English literature.
R. K. Narayan, Mulk Raj Anand, and Raja Rao contributed to the popularity of Indian English fiction in the 1930s.
        
        </p>
        </div>
  
        
        <div class="row2">
           <img src="https://cdn.pixabay.com/photo/2022/11/08/06/05/read-7577787_640.jpg"></img> 
        </div>
      </div>
</div>
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


  
