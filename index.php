<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security System</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-pink">
 
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">Security System</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="camera-types.php">Camera Types</a></li>
                <li class="nav-item"><a class="nav-link" href="contact-form.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            </ul>
        </div>
    </nav>

  
    <div class="container mt-5 text-center">
        <h1>Welcome to the Security System Website</h1>
        <p>Your safety is our priority. Explore our camera types to secure your premises.</p>
        <div class="row">
            <div class="col-md-4">
                <h3>Why Choose Us?</h3>
                <p>We provide the best security solutions using advanced technology and high-quality cameras. Stay safe with our reliable systems.</p>
                <a href="camera-types.php" class="btn btn-pink">Explore Camera Types</a>
            </div>
            <div class="col-md-4">
                <h3>Our Services</h3>
                <ul>
                    <li>24/7 Security Monitoring</li>
                    <li>Advanced Motion Detection</li>
                    <li>Remote Viewing and Control</li>
                    <li>Custom Security Solutions</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Latest Technologies</h3>
                <p>We offer a wide range of cameras including IP, HD, and PTZ cameras for modern surveillance needs. Find out more about each type on the camera types page.</p>
                <a href="camera-types.php" class="btn btn-pink">Discover More</a>
            </div>
        </div>
    </div>


    <div class="container mt-5">
    <h2 class="text-center">Featured Camera Models</h2>
    <div class="row">
    
        <div class="col-md-4">
            <img src="R.jfif" class="img-fluid camera-img" alt="IP Camera">
            <h5 class="text-center">IP Camera</h5>
            <p>Reliable and connected to the internet for easy access from anywhere. Ideal for modern surveillance needs.</p>
            <a href="camera-details.php?camera=ip" class="btn btn-pink">Learn More</a>
        </div>
        
        <div class="col-md-4">
            <img src="R (1).jfif" class="img-fluid camera-img" alt="HD Camera">
            <h5 class="text-center">HD Camera</h5>
            <p>Captures high-definition images, ensuring clarity and precision for all monitoring situations.</p>
            <a href="camera-details.php?camera=hd" class="btn btn-pink">Learn More</a>
        </div>
       
        <div class="col-md-4">
            <img src="R (2).jfif" class="img-fluid camera-img" alt="PTZ Camera">
            <h5 class="text-center">PTZ Camera</h5>
            <p>Pan, tilt, and zoom for comprehensive surveillance, perfect for large areas and flexible monitoring.</p>
            <a href="camera-details.php?camera=ptz" class="btn btn-pink">Learn More</a>
        </div>
    </div>
    
    
    <div class="row mt-4">
        
        <div class="col-md-4">
            <img src="intown-cctv-dome-security-camera-.jpg" alt="Dome Camera" class="img-fluid camera-img">
            <h3 class="text-center">Dome Camera</h3>
            <p>Compact and discreet, ideal for indoor and outdoor surveillance. Often used in malls, offices, and other public spaces.</p>
            <a href="camera-details.php?camera=dome" class="btn btn-pink">Learn More</a>
        </div>
       
        <div class="col-md-4">
            <img src="deedab8c-44e2-43d4-9a56-3cf4cdf2a1e7-1000x1000-1YtPMdMqjXyH4fPtQKdjqAyd5ts4aqgAIIoWL2Yc.webp" alt="Bullet Camera" class="img-fluid camera-img">
            <h3 class="text-center">Bullet Camera</h3>
            <p>Known for its long-range capabilities, bullet cameras are designed to capture clear footage over long distances.</p>
            <a href="camera-details.php?camera=bullet" class="btn btn-pink">Learn More</a>
        </div>
        
        <div class="col-md-4">
            <img src="51Uyc1UK5uL.jpg" alt="Wireless Camera" class="img-fluid camera-img">
            <h3 class="text-center">Wireless Camera</h3>
            <p>Easy to install and connect without the need for cables. Perfect for situations where cabling is difficult or impractical.</p>
            <a href="camera-details.php?camera=wireless" class="btn btn-pink">Learn More</a>
        </div>
    </div>
</div>

<style>

    .camera-img {
        height: 250px; 
        width: 100%;   
        object-fit: cover; 
    }

    .btn-pink {
        background-color: #ff69b4;
        color: white;
        border: none;
    }

    h5, h3 {
        text-align: center; 
        margin-top: 10px;
    }

    p {
        text-align: center;
        margin-top: 10px;
    }

    
    @media (max-width: 768px) {
        .col-md-4 {
            margin-bottom: 20px;
        }
    }
</style>


   
    <div class="container mt-5">
        <h2 class="text-center">What Our Clients Say</h2>
        <div class="row">
            <div class="col-md-4">
                <blockquote>"The best security system I've ever used. Highly recommend for anyone looking for reliable surveillance." - John Doe</blockquote>
            </div>
            <div class="col-md-4">
                <blockquote>"Great customer service and cutting-edge technology. Very satisfied with my camera installation!" - Sarah Smith</blockquote>
            </div>
            <div class="col-md-4">
                <blockquote>"Quick setup and easy to manage from my phone. I feel secure 24/7." - Michael Johnson</blockquote>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center p-3 mt-5">
        <p>&copy; 2024 Security System | All Rights Reserved</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

