<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form | Read Only Mode</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Profile2.css">
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
            <a href="Contact.php" style="--i:5">Contacts</a>
            <a href="Login.php" style="--i:6" class="login">Login</a>
        </nav> 
    </header> 
    <section class="profile2">
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
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="House/Unit Number, Street" readonly>
                    </div>
                    <div class="input-group">
                        <label for="barangay">Barangay</label>
                        <input type="text" id="barangay" name="barangay" placeholder="Barangay" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="city">City/Municipality</label>
                        <input type="text" id="city" name="city" placeholder="City/Municipality" readonly>
                    </div>
                    <div class="input-group">
                        <label for="province">Province</label>
                        <input type="text" id="province" name="province" placeholder="Province" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" id="occupation" name="occupation" placeholder="Occupation" readonly>
                    </div>
                    <div class="input-group">
                        <label for="monthly_income">Monthly Income</label>
                        <input type="number" id="monthly_income" name="monthly_income" placeholder="Monthly Income" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="relationship">Relationship to Resident</label>
                        <input type="text" id="relationship" name="relationship" placeholder="Relationship to Resident" readonly>
                    </div>
                    <div class="input-group">
                        <label for="contact_number">Contact Number</label>
                        <input type="tel" id="contact_number" name="contact_number" placeholder="Contact Number" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="allergies_conditions">Allergies or Medical Conditions</label>
                        <input type="text" id="allergies_conditions" name="allergies_conditions" placeholder="Allergies or Medical Conditions" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <label for="education">Educational Attainment</label>
                        <input type="text" id="education" name="education" placeholder="Educational Attainment" readonly>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" onclick="redirectToPreviousPage()">
                        <i class="bi bi-arrow-left"></i> Back
                    </button>
                    <button type="button" class="btn btn-primary" onclick="redirectToNextPage()">
                        Next <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </form>            
        </div>          
    </section>
    <footer> 
        <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p> 
    </footer>
    <script>
        function redirectToNextPage() {
            window.location.href = "Profile3.html";
        }
        
        function redirectToPreviousPage() {
            window.location.href = "Profile.html";
        }
    </script>
    <script src="index.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
