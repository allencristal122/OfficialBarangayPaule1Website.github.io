<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <div>
        <div class="header">
          <i class="fas fa-bars hamburger" onclick="toggleNavigation()"></i>
          <div class="profile-icon" onclick="toggleProfileDetails()">
              <i class="fas fa-user"></i>
              <div class="profile-details-container" id="profileDetailsContainer">
                  <div class="profile">
                    <img src="images/brgyhall.jpg" alt="Barangay Hall of Paule 1" width="80px" height="80px">
                    <div class="adminname">
                      <p class="p1">Vince Allen Cristal</p>
                      <p class="p2">Admin</p>
                    </div>
                  </div>
                  <hr>
                  <a href="UserProfile.php"><i class="bi bi-person"></i> Profile</a>
                  <a href="ForgotPassword.php"><i class="bi bi-key"></i> Reset Password</a>
                  <hr>
                  <a href="Login.php"><i class="bi bi-box-arrow-right"></i> Log Out</a>
              </div>
          </div>
        </div>
        <div class="navigation" id="navigation">
          <div class="logo">
            <img src="images/logo.png" alt="Barangay Logo" height="40px" width="40px">
            <p>Barangay Records</p>
          </div>
          <div class="administrators">
            <p><em> Administrator</em></p>
          </div>
          <a href="Admin.php" class="a1" id="dashb"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          <a href="Barangay.php" class="a1"><i class="fas fa-users"></i> Barangay Officials</a>
          <a href="Blotter.php" class="a1"><i class="fas fa-book"></i> Blotter</a>
          <a href="Resident.php" class="a1"><i class="fas fa-users"></i> Residents</a>
          <a href="Users.php" class="a1"><i class="fas fa-users-cog"></i> Users</a>
          <a href="Document.php" class="a1"><i class="far fa-file-alt"></i> Document Request</a>
          <a href="Activity.php" class="a1"><i class="bi bi-activity"></i> Activity</a>
          <div class="dropdown" onclick="toggleDropdown()">
            <button class="btn btn-primary plus-toggle" type="button" id="dropdownMenuButton" >
              <i class="fas fa-cog"></i>Page <i class="bi bi-plus"></i>
            </button>
            <div class="dropdown-content" id="dropdownContent">
              <a href="Information.php"><i class="fas fa-chevron-right"></i>Information</a>
              <a href="Forms.php"><i class="fas fa-chevron-right"></i>Forms</a>
              <a href="FAQ1.php"><i class="fas fa-chevron-right"></i>FAQ</a>
              <a href="Contact1.php" class="contact1"><i class="fas fa-chevron-right"></i>Contact</a>
            </div>
          </div>            
          <a href="Logs.php" class="a1"><i class="fas fa-history"></i> Log</a>
          <a href="Login.php" class="a1"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
      </div>

      <div class="title-with-icon">
        <a href="Admin.php" title="Dashboard"><i class="bi bi-house"></i></a>
        <p>Welcome, Admin.</p>
      </div>

      <div class="dashboard-box-container1">
        <div class="dashboard-box1" id="db1">
            <?php
            // Include database connection
            $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Query to count the total number of residents
            $sql = "SELECT COUNT(*) AS totalOfficials FROM barangay_officials";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result->num_rows > 0) {
                // Fetch the row count
                $row = $result->fetch_assoc();
                $countOfficial = $row['totalOfficials'];
            } else {
                // If no residents found, set count to 0
                $countOfficial = 0;
            }
            
            // Close database connection
            $conn->close();
            ?>
          <div class="i"><i class="fas fa-landmark"></i></div>
          <div class="box-title7"><p><?php echo $countOfficial; ?></p><h3>TOTAL BRGY. OFFICIALS</h3></div>
          <div class="info"><a href="Barangay.php">More Info</a></div>
      </div>
        <div class="dashboard-box1" id="db2">
            <?php
            // Include database connection
            $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Query to count the total number of residents
            $sql = "SELECT COUNT(*) AS totalResidents FROM residents";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result->num_rows > 0) {
                // Fetch the row count
                $row = $result->fetch_assoc();
                $rowCount = $row['totalResidents'];
            } else {
                // If no residents found, set count to 0
                $rowCount = 0;
            }
            
            // Close database connection
            $conn->close();
            ?>
            <div class="i"><i class="fas fa-map-marker-alt"></i></div>
            <div class="box-title7"><p><?php echo $rowCount; ?></p><h3>TOTAL RESIDENTS</h3></div>
            <div class="info"><a href="Residents.html">More Info</a></div>
        </div>
        <div class="dashboard-box1" id="db3">
            <div class="i"><i class="fas fa-file"></i></div>
            <div class="box-title7"><p>0</p><h3>TOTAL DOCUMENTS</h3></div>
            <div class="info"><a href="Barangay.html">More Info</a></div>
        </div>
      </div>
      <div class="dashboard-box-container2">
        <div class="dashboard-box2" id="db4">
            <?php
            // Include database connection
            $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Query to count the total number of residents
            $sql = "SELECT COUNT(*) AS totalBlotter FROM blotterrecords";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result->num_rows > 0) {
                // Fetch the row count
                $row = $result->fetch_assoc();
                $countBlotter = $row['totalBlotter'];
            } else {
                // If no residents found, set count to 0
                $countBlotter = 0;
            }
            
            // Close database connection
            $conn->close();
            ?>
            <div class="i"><i class="fas fa-gavel"></i></div>
            <div class="box-title7"><p><?php echo $countBlotter; ?></p><h3>TOTAL BLOTTER</h3></div>
            <div class="info"><a href="Barangay.html">More Info</a></div>
        </div>
        <div class="dashboard-box2" id="db5">
            <?php
            // Include database connection
            $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Query to count the total number of residents
            $sql = "SELECT COUNT(*) AS totalUsers FROM users";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result->num_rows > 0) {
                // Fetch the row count
                $row = $result->fetch_assoc();
                $countUsers = $row['totalUsers'];
            } else {
                // If no residents found, set count to 0
                $countUsers = 0;
            }
            
            // Close database connection
            $conn->close();
            ?>
            <div class="i"><i class="fas fa-user-tie"></i></div>
            <div class="box-title7"><p><?php echo $countUsers; ?></p><h3>TOTAL USERS</h3></div>
            <div class="info"><a href="Barangay.html">More Info</a></div>
        </div>
        <div class="dashboard-box2" id="db6">
            <?php
            // Include database connection
            $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Query to count the total number of residents
            $sql = "SELECT COUNT(*) AS totalActivity FROM Activity";
            $result = $conn->query($sql);
            
            // Check if the query was successful
            if ($result->num_rows > 0) {
                // Fetch the row count
                $row = $result->fetch_assoc();
                $countActivity = $row['totalActivity'];
            } else {
                // If no residents found, set count to 0
                $countActivity = 0;
            }
            
            // Close database connection
            $conn->close();
            ?>
            <div class="i"><i class="fas fa-running"></i></div>
            <div class="box-title7"><p><?php echo $countActivity; ?></p><h3>TOTAL ACTIVITY</h3></div>
            <div class="info"><a href="Barangay.html">More Info</a></div>
        </div>
      </div>

      <div class="dashboard" id="barangayOfficialsDashboard">
        <div class="title-with-icon1">
          <i class="fas fa-chart-line"></i>
          <h3>Barangay List Chart</h3>
        </div>
        <hr>
        <div class="heading-and-buttons">
          <div class="show-entries">
            <label for="entries">Show Entries: </label>
            <input type="number" title="number" placeholder="0">
          </div>    
          <div class="search-bar">
                <p>Search: </p><input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names...">
          </div>
        </div><hr>
        <table class="table-no-border">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Position</th>
                    <th>Full Name </th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Start of Term</th>
                    <th>End of Term </th>
                </tr>
            </thead>
            <tbody>
                <?php
          $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');

          if ($conn->connect_error) {
              die("Connection failed: ". $conn->connect_error);
          }

          $sql = "SELECT * FROM barangay_officials";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo"<td><img src='photos/".$row['photo']."' alt='Photo' style='max-width: 70px; max-height: 70px; border-radius:50%'></td>";
                  echo "<td>".$row['position']."</td>";
                  echo "<td>".$row['fullName']."</td>";
                  echo "<td>".$row['contact']."</td>";
                  echo "<td>".$row['address']."</td>";
                  echo "<td>".$row['startOfTerm']."</td>";
                  echo "<td>".$row['endOfTerm']."</td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='8'>No records found</td></tr>";
          }

          $conn->close();
        ?>
            </tbody>
        </table>
        <div class="navigation-buttons">
          <p>Showing 0 of 0 entries.</p>
          <button type="button" class="btn btn-secondary btn2">Previous</button>
          <button type="button" class="btn btn-primary btn1">Next</button>
        </div>
      </div>

      <div class="dashboard" id="residentDashboard">
        <div class="title-with-icon1">
          <i class="fas fa-chart-line"></i>
          <h3>Resident List Chart</h3>
        </div>
        <hr>
        <div class="heading-and-buttons">
          <div class="show-entries">
            <label for="entries">Show Entries: </label>
            <input type="number" title="number" placeholder="0">
          </div>    
          <div class="search-bar">
                <p>Search: </p><input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names...">
          </div>
        </div><hr>
        <table class="table-no-border">
            <thead>
                <tr>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Occupation</th>
                  <th>Address</th>
                  <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php
         $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM residents";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><img src='resident_photo/" . ($row["photo"] ?? '') . "' alt='Photo' style='max-width: 70px; max-height: 70px; border-radius:50%'></td>";
                echo "<td>".$row['full_name']."</td>";
                echo "<td>".$row['age']."</td>";
                echo "<td>".$row['occupation']."</td>";
                echo "<td>".$row['birth_place']."</td>";
                echo "<td>".$row['contact']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No Data Available</td></tr>";
        }

        $conn->close();
        ?>
            </tbody>
        </table>
        <div class="navigation-buttons">
          <p>Showing 0 of 0 entries.</p>
          <button type="button" class="btn btn-secondary btn2">Previous</button>
          <button type="button" class="btn btn-primary btn1">Next</button>
        </div>
      </div>

      <div class="dashboard" id="blotterDashboard">
        <div class="title-with-icon1">
          <i class="fas fa-chart-line"></i>
          <h3>Blotter List Chart</h3>
        </div>
        <hr>
        <div class="heading-and-buttons">
          <div class="show-entries">
            <label for="entries">Show Entries: </label>
            <input type="number" title="number" placeholder="0">
          </div>    
          <div class="search-bar">
                <p>Search: </p><input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names...">
          </div>
        </div><hr>
        <table class="table-no-border">
            <thead>
                <tr>
                  <th>Status</th>
                  <th>Complainant</th>
                  <th>Age</th>
                  <th>Contact</th>
                  <th>Person to Complaint</th>
                  <th>Age</th>
                  <th>Contact</th>
                  <th>Action Taken</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM blotterrecords";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["status"] . "</td>";
                            echo "<td>" . $row["complainant"] . "</td>";
                            echo "<td>" . $row["age1"] . "</td>";
                            echo "<td>" . $row["contact1"] . "</td>";
                            echo "<td>" . $row["personToComplaint"] . "</td>";
                            echo "<td>" . $row["age2"] . "</td>";
                            echo "<td>" . $row["contact2"] . "</td>";
                            echo "<td>" . $row["actionTaken"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9'>No Data Available</td></tr>";
                    }

                    $conn->close();
                ?>
            </tbody>
        </table>
        <div class="navigation-buttons">
          <p>Showing 0 of 0 entries.</p>
          <button type="button" class="btn btn-secondary btn2">Previous</button>
          <button type="button" class="btn btn-primary btn1">Next</button>
        </div>
      </div>

      <div class="dashboard" id="usersDashboard">
        <div class="title-with-icon1">
          <i class="fas fa-chart-line"></i>
          <h3>Users List Chart</h3>
        </div>
        <hr>
        <div class="heading-and-buttons">
          <div class="show-entries">
            <label for="entries">Show Entries: </label>
            <input type="number" title="number" placeholder="0">
          </div>    
          <div class="search-bar">
                <p>Search: </p><input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names...">
          </div>
        </div><hr>
        <table class="table-no-border">
            <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Type</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td style='width: 25%;'>" . $row["fullName"] . "</td>";
                echo "<td>" . $row["userName"] . "</td>";
                echo "<td>" . $row["password"] . "</td>";
                echo "<td>" . $row["userType"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No Data Available</td></tr>";
        }

        $conn->close();
        ?>
            </tbody>
        </table>
        <div class="navigation-buttons">
          <p>Showing 0 of 0 entries.</p>
          <button type="button" class="btn btn-secondary btn2">Previous</button>
          <button type="button" class="btn btn-primary btn1">Next</button>
        </div>
      </div>

      <div class="dashboard" id="activityDashboard">
        <div class="title-with-icon1">
          <i class="fas fa-chart-line"></i>
          <h3>Activity List Chart</h3>
        </div>
        <hr>
        <div class="heading-and-buttons">
          <div class="show-entries">
            <label for="entries">Show Entries: </label>
            <input type="number" title="number" placeholder="0">
          </div>    
          <div class="search-bar">
                <p>Search: </p><input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names...">
          </div>
        </div><hr>
        <table class="table-no-border">
            <thead>
                <tr>
                  <th>Photos</th>
                  <th>Date of Activity</th>
                  <th>Activity Name</th>
                  <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli('localhost', 'id22036007_root', 'Vince_122', 'id22036007_barangay_paule1');
                
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $sql = "SELECT * FROM Activity";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo"<td><img src='activity_photos/".$row['photos']."' alt='Photo' style='max-width: 70px; max-height: 70px; border-radius:50%'></td>";
                        echo "<td>" . $row["date"] . "</td>";
                        echo "<td>".$row['activity']."</td>";
                        echo "<td>" . $row["description"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No Data Available</td></tr>";
                }
                
                $conn->close();
            ?>
            </tbody>
        </table>
        <div class="navigation-buttons">
          <p>Showing 0 of 0 entries.</p>
          <button type="button" class="btn btn-secondary btn2">Previous</button>
          <button type="button" class="btn btn-primary btn1">Next</button>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p>
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-euKpLsYQJz5jE0EEOxnTPI1a2ybp4QA9QfsB1LD73pI95/02djN3eVkD5bZlNumj" crossorigin="anonymous"></script>
      <script src="Admin.js"></script>
</body>
</html>