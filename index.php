<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Official Website of Barangay Paule 1</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                <button class="btn btn-primary dropdown-toggle" title="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
        </nav> 
    </header> 
    <section id="home" class="home"> 
        <div class="hc"> 
            <p class="before-line">Welcome and Discover</p><br> 
            <h1>Barangay Paule of <br>Rizal, Laguna</h1> 
            <br>
            <br>
            <p>
                Located in the vibrant city of Rizal, Laguna, our barangay invites you 
                to join us in embracing progress and unity as we move forward together towards 
                a brighter future.
            </p><br><br>
            <a href="GenInfo.html" class="button_box"><p>Learn More</p><i class="bi bi-arrow-right"></i></a> 
        </div> 
        <div class="picture"> 
            <img src="images/logo.png" alt="Your Picture"> 
        </div> 
    </section> 
    <section id="about" class="about">
        <div class="picture1"> 
            <img src="images/download.jpg" alt="Your Picture"> 
        </div> 
        <div class="hc1"> 
            <p class="before-line">About Us</p> 
            <h2>By reshaping our city, we transform the world.</h2><br>
            <h4>Barangay Paule 1 is committed to overcoming every obstacle on its path to excellence.</h4>
        </div> 
    </section>
    <section id="statistics" class="statistics">
        <h3>Foundational Statistics</h3>
        <p class=".p1">Statistics in Barangay Paule 1.</p>
        <hr>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <i class="bi bi-calendar icon"></i>
                      <div class="text-right">
                        <?php
                            include 'connection.php';
        
                            $sql = "SELECT * FROM statistics";
                            $result = $conn->query($sql);
        
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $foundingyears  = $row["founding_years"];
                            } else {
                                $foundingyears  = "";
                            }
        
                            $conn->close();
                        ?>
                        <p class="value"><?php echo $foundingyears; ?></p>
                        <h5 class="label">Foundating Years</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <i class="bi bi-geo-alt icon"></i>
                      <div class="text-right">
                        <?php
                            include 'connection.php';
        
                            $sql = "SELECT * FROM statistics";
                            $result = $conn->query($sql);
        
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $environmental_health_status  = $row["environmental_health_status"];
                            } else {
                                $environmental_health_status  = "";
                            }
        
                            $conn->close();
                        ?>
                        <p class="value"><?php echo $environmental_health_status . '%'; ?></p>
                        <h5 class="label"> Environmental Health Status</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <i class="bi bi-people icon"></i>
                      <div class="text-right">
                        <?php
                            include 'connection.php';
        
                            $sql = "SELECT * FROM statistics";
                            $result = $conn->query($sql);
        
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $partnerships_organization  = $row["partnerships_organization"];
                            } else {
                                $partnerships_organization  = "";
                            }
        
                            $conn->close();
                        ?>
                        <p class="value"><?php echo $partnerships_organization; ?></p>
                        <h5 class="label">Partnerships Organization</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <i class="bi bi-list-task icon"></i>
                      <div class="text-right">
                          <?php
                            include 'connection.php';
        
                            $sql = "SELECT * FROM statistics";
                            $result = $conn->query($sql);
        
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $projects_made  = $row["projects_made"];
                            } else {
                                $projects_made  = "";
                            }
        
                            $conn->close();
                        ?>
                        <p class="value"><?php echo $projects_made; ?></p>
                        <h5 class="label">Projects Made</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section id="officials" class="officials">
        <h3>Meet Our Barangay Officials</h3>
        <p class="p1">Here are the barangay captain and councilors of barangay.</p>
        <hr>
        <section class="gallery">
            <div class="container">
              <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                      <div class="card">
                        <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                        <div class="card-body">
                          <h5 class="card-title">Nestor S. Mojado</h5>
                          <p class="card-text">Barangay Captain</p>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Rohm Patrickson R. Isleta</h5>
                      <p class="card-text">Barangay Kagawad</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Eunice Kathleen Oro</h5>
                      <p class="card-text">Jared T. Formales</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Arwin C. Sombilla</h5>
                      <p class="card-text">Barangay Kagawad</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Barangay Kagawad</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Barangay Kagawad</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Barangay Kagawad</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Barangay Kagawad</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Barangay Kagawad</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Ramon Lyndon M. Suniega</h5>
                      <p class="card-text">Barangay Secretary</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Barangay Treasurer</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 gallery-column">
                  <div class="card">
                    <img src="images/logo.png" class="card-img-top" alt="Photo 2">
                    <div class="card-body">
                      <h5 class="card-title">Photo Title</h5>
                      <p class="card-text">Barangay SK Chairman</p>
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
    <script src="map.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>