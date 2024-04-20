<!DOCTYPE html> 
<html lang="en"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificates</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Certificate.css">
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
    <section class="certificate">
        <h3 class="h31">Certificates</h3>
        <p>Here are the downloadable certificates</p>
        <hr>
        <h3 class="h32">General Services</h3>
        <div class="container">
            <div class="box">
                <a href="pdf_file/CRISTAL PORTFOLIO.pdf" target="_blank"><h2>Barangay Clearance</h2></a>
                <ul>
                    <li>Proof of residency from DVA (for resident)</li>
                    <li>Certificate of Employment (Kasambahay, driver etc.)</li>
                    <li>Xerox copy of DVA ID or any valid government ID</li>
                </ul>
                <a href="download.php" class="a1"><em>Download</em></a>
            </div>
            <div class="box">
                <a href="pdf_file/CRISTAL PORTFOLIO.pdf" target="_blank"><h2>Barangay Indigency</h2></a>
                <ul>
                    <li>Proof of residency from DVA (for resident)</li>
                    <li>Certificate of Employment (Kasambahay, driver etc.)</li>
                    <li>Xerox copy of DVA ID or any valid government ID</li>
                </ul>
                <a href="download.php" class="a1"><em>Download</em></a>
            </div>
        </div>
        <div class="container">
            <div class="box">
                <a href="pdf_file/CRISTAL PORTFOLIO.pdf" target="_blank"><h2>Barangay Permit</h2></a>
                <ul>
                    <li>Proof of residency from DVA (for resident)</li>
                    <li>Certificate of Employment (Kasambahay, driver etc.)</li>
                    <li>Xerox copy of DVA ID or any valid government ID</li>
                </ul>
                <a href="download.php" class="a1"><em>Download</em></a>
            </div>
            <div class="box">
                <a href="pdf_file/CRISTAL PORTFOLIO.pdf" target="_blank"><h2>Certificate of Residency</h2></a>
                <ul>
                    <li>Proof of residency from DVA (for resident)</li>
                    <li>Certificate of Employment (Kasambahay, driver etc.)</li>
                    <li>Xerox copy of DVA ID or any valid government ID</li>
                </ul>
                <a href="download.php" class="a1"><em>Download</em></a>
            </div>
        </div>        
    </section>
    <footer> 
      <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p> 
    </footer>
    <script src="index.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body> 
</html> 
