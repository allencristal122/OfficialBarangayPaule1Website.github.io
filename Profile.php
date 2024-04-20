<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form | Read Only</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body> 
    <header class="header"> 
        <a href="#" class="logo"> 
            <img src="images/logo.png" alt="Error Image" height="60px" width="60px"/>
            <h2>Barangay Paule 1</h2> 
        </a>
        <button class="hamburger" title="hamburger" onclick="toggleMenu()"> 
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
                  <a href="Certificate.php">Certification</a>
                  <a href="Profile.php">Profile</a>
                </div>
            </div>
            <a href="FAQ.php" style="--i:4">FAQ</a>
            <a href="Contact.php" style="--i:4">Contacts</a>
        </nav> 
    </header> 
    <section class="profile">
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
            <form>
                <div class="form-group">
                    <div class="input-group">
                        <label for="name">First Name</label>
                        <input type="text" id="name" name="name" placeholder="First Name" readonly>
                    </div>
                    <div class="input-group">
                        <label for="middlename">Middle Name</label>
                        <input type="text" id="middlename" name="middlename" placeholder="Middle Name" readonly>
                    </div>
                    <div class="input-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Last Name" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="gender">Gender</label>
                        <input type="text" id="gender" name="gender" placeholder="Gender" readonly>
                    </div>
                    <div class="input-group">
                        <label for="birthdate">Birth Date</label>
                        <input type="date" id="birthdate" name="birthdate" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email Address" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="contact">Contact</label>
                        <input type="tel" id="contact" name="contact" placeholder="Contact Number" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="religion">Religion</label>
                        <input type="text" id="religion" name="religion" placeholder="Religion" readonly>
                    </div>
                    <div class="input-group">
                        <label for="status">Status</label>
                        <input type="text" id="status" name="status" placeholder="Status" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="name">Emergency Person</label>
                        <input type="text" id="name" name="name" placeholder="Emergency Person" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="contact">Emergency Contact</label>
                        <input type="tel" id="contact" name="contact" placeholder="Contact Number" readonly>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-block" onclick="redirectToNextPage()">
                    Next <i class="bi bi-arrow-right"></i>
                </button>        
            </form>
        </div>          
    </section>
    <footer> 
        <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p> 
    </footer>
    <script>
        function redirectToNextPage() {
            window.location.href = "Profile2.html";
        } 
    </script>
    <script src="index.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>
