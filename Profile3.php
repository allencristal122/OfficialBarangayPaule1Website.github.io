<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form | Read Only</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Profile3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
</head> 
<body> 
    <header class="header">
        <a href="#" class="logo">
            <img src="images/logo.png" alt="Error Image" height="60px" width="60px"/>
            <h2>Barangay Paule 1</h2>
        </a>
        <button class="hamburger" onclick="toggleMenu()"> 
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </button>
        <nav class="navigation"> 
            <a href="index.php" style="--i:1">Home</a>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Our Barangay</button>
                <div class="dropdown-content">
                  <a href="GenInfo.php">General Information</a>
                  <a href="History.php">History</a>
                  <a href="Maps.php">Maps</a>
                  <a href="Photos.php">Photo Album</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Services</button>
                <div class="dropdown-content">
                  <a href="Certificate.html">Certification</a>
                  <a href="Profile.html">Profile</a>
                </div>
            </div>
            <a href="FAQ.php" style="--i:4">FAQ</a>
            <a href="Contact.php" style="--i:4">Contacts</a>
        </nav> 
    </header> 
    <section class="profile3">
        <h3 class="h31">Profile Form</h3>
        <p>Here is the profile for residents of barangay</p>
        <hr>
        <div class="container">
            <div class="numbers">
                <span class="number first-child">
                    1
                    <p>Personal Data</p>
                </span>
                <span class="number">2<p>Important Info
                </p></span>
                <span class="number">3<p>Proof of Identity</p></span>
            </div>
            <div class="container1">
                <div class="upload-box">
                    <label for="file1">Upload 2 x 2 Picture</label>
                    <ul>
                        <li>The dimensions of a 2x2 picture are typically 2 inches by 2 inches.</li>
                        <li>The background of the photo is usually required to be plain white or off-white.</li>
                        <li>The subject should have a neutral facial expression with their eyes open and visible. </li>
                    </ul>
                    <input type="file" id="file1" accept="image/*" disabled>
                    <div class="upload-status" id="uploadStatus">
                        <span id="file-name"></span>
                        <div class="progress-container">
                            <div class="progress-bar" id="upload-progress"></div>
                            <div class="loading-indicator"></div>
                        </div>
                        <span id="upload-progress-text"></span>
                    </div>
                </div>
                <div class="upload-box">
                    <label for="file2">Upload Valid ID</label>
                    <ul>
                        <li>Valid ID should be verified based on the Philipines. </li>
                        <li>Ensure that the uploaded document is clear and legible.</li>
                        <li>Uploaded file should be in PDF or image format.</li>
                    </ul>
                    <input type="file" id="file2" accept="image/*" disabled>
                    <div class="upload-status" id="uploadStatus">
                        <span id="file-name"></span>
                        <div class="progress-container">
                            <div class="progress-bar" id="upload-progress"></div>
                            <div class="loading-indicator"></div>
                        </div>
                        <span id="upload-progress-text"></span>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" onclick="redirectToPreviousPage()">
                        <i class="bi bi-arrow-left"></i> Back
                    </button>
                    <button type="submit" class="btn btn-primary">
                        Submit <i class="bi bi-check"></i>
                    </button>                    
                </div>
            </div>      
        </div>          
    </section>
    <footer> 
        <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p> 
    </footer>
    <script>
        function redirectToPreviousPage() {
            window.location.href = "Profile.html";
        }
    </script>
    <script src="index.js"></script>    
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></s>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html> 