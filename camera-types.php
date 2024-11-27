<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Types</title>
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

    <div class="container mt-5">
    <h2 class="text-center">Camera Types</h2>
    <div class="row">
        <!-- IP Camera -->
        <div class="col-md-4">
            <img src="R.jfif" class="img-fluid camera-img" alt="IP Camera">
            <h3>IP Camera</h3>
            <p>Reliable and connected to the internet for easy access from anywhere. Ideal for modern surveillance needs.</p>
            <a href="camera-details.php?camera=ip" class="btn btn-pink">Learn More</a>
        </div>
        <!-- HD Camera -->
        <div class="col-md-4">
            <img src="R (1).jfif" class="img-fluid camera-img" alt="HD Camera">
            <h3>HD Camera</h3>
            <p>Captures high-definition images, ensuring clarity and precision for all monitoring situations.</p>
            <a href="camera-details.php?camera=hd" class="btn btn-pink">Learn More</a>
        </div>
        <!-- PTZ Camera -->
        <div class="col-md-4">
            <img src="R (2).jfif" class="img-fluid camera-img" alt="PTZ Camera">
            <h3>PTZ Camera</h3>
            <p>Pan, tilt, and zoom for comprehensive surveillance, perfect for large areas and flexible monitoring.</p>
            <a href="camera-details.php?camera=ptz" class="btn btn-pink">Learn More</a>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Dome Camera -->
        <div class="col-md-4">
            <img src="intown-cctv-dome-security-camera-.jpg" alt="Dome Camera" class="img-fluid camera-img">
            <h3 class="text-center">Dome Camera</h3>
            <p>Compact and discreet, ideal for indoor and outdoor surveillance. Often used in malls, offices, and other public spaces.</p>
            <a href="camera-details.php?camera=dome" class="btn btn-pink">Learn More</a>
        </div>
        <!-- Bullet Camera -->
        <div class="col-md-4">
            <img src="deedab8c-44e2-43d4-9a56-3cf4cdf2a1e7-1000x1000-1YtPMdMqjXyH4fPtQKdjqAyd5ts4aqgAIIoWL2Yc.webp" alt="Bullet Camera" class="img-fluid camera-img">
            <h3 class="text-center">Bullet Camera</h3>
            <p>Known for its long-range capabilities, bullet cameras are designed to capture clear footage over long distances.</p>
            <a href="camera-details.php?camera=bullet" class="btn btn-pink">Learn More</a>
        </div>
        <!-- Wireless Camera -->
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
        height: 250px; /* Make sure all images are the same height */
        object-fit: cover; /* Keeps the image ratio intact */
        border-radius: 8px; /* Optional: Add some border radius for a sleek look */
    }
    .btn-pink {
        background-color: #ff69b4; /* Set the button color to pink */
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        text-align: center;
    }
    .btn-pink:hover {
        background-color: #ff3385; /* Darker pink on hover */
    }
</style>



    <footer class="bg-dark text-white text-center p-3 mt-5">
        <p>&copy; 2024 Security System | All Rights Reserved</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
