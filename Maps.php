<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Maps.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                  <a href="Certificate.php">Certification</a>
                  <a href="Profile.php">Profile</a>
                </div>
            </div>
            <a href="FAQ.php" style="--i:4">FAQ</a>
            <a href="Contact.php" style="--i:4">Contacts</a>
        </nav> 
    </header> 
    <section id="location" class="location">
        <h3>Location</h3>
        <p class="p2">Here is the location of Barangay Paule 1, Rizal, Laguna</p>
        <hr>
        <div id="map"></div> 
    </section>
    <section id="land-area" class="land-area">
        <h3>Land Area</h3>
        <p class="p2">Here is the total land area of Barangay Paule 1.</p>
        <hr>
        <table>
          <thead>
            <tr>
                <th>Total Land Area</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>1.9033 square kilometers</td>
            </tr>
            </tbody>
        </table>
    </section>
    <section id="land-use" class="land-use">
        <h3>Land Used</h3>
        <p class="p2">Here is the total land used of Barangay Paule 1.</p>
        <hr>
        <table>
          <thead>
            <tr>
                <th>Total Land Used</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>1.9033 square kilometers</td>
            </tr>
            </tbody>
        </table>
    </section>      
    <footer> 
      <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p> 
    </footer>    
    <script src="map.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 