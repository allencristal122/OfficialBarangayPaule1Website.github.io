<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Photos.css">
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
    <section id="photos" class="photos">
        <h3>Photo Albums</h3> 
        <p class="p1">Here are the photos of barangay.</p>
        <hr>
        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 gallery-column">
                      <div class="card">
                        <img src="images/logo.png" width="300px" height="180px" class="card-img-top" alt="Photo 4">
                        <div class="card-body">
                          <h5 class="card-title">Photo Title</h5>
                          <p class="card-text">Activity #1</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 gallery-column">
                      <div class="card">
                        <img src="images/logo.png" width="300px" height="180px" class="card-img-top" alt="Photo 5">
                        <div class="card-body">
                          <h5 class="card-title">Photo Title</h5>
                          <p class="card-text">Activity #1</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 gallery-column">
                      <div class="card">
                        <img src="images/logo.png" width="300px" height="180px" class="card-img-top" alt="Photo 6">
                        <div class="card-body">
                          <h5 class="card-title">Photo Title</h5>
                          <p class="card-text">Activity #1</p>
                        </div>
                      </div>
                    </div>
                  </div>
              <div class="row">
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" width="300px" height="180px" class="card-img-top" alt="Photo 4">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #2
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" width="300px" height="180px" class="card-img-top" alt="Photo 5">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #3</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" width="300px" height="180px" class="card-img-top" alt="Photo 6">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #4</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" width="300px" height="180px" class="card-img-top" alt="Photo 4">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #5</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" width="300px" height="180px" class="card-img-top" alt="Photo 5">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #6</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" width="300px" height="180px" class="card-img-top" alt="Photo 6">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #7</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 4">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #8</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 5">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #9</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 6">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #10</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 4">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #11</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 5">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Activity #12</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </section>
    <footer> 
      <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p> 
    </footer>
    <script src="index.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>