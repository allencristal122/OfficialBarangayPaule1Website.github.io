<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Contact1.css">
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
              <a href="UserProfile.html"><i class="bi bi-person"></i> Profile</a>
              <a href="ForgotPassword.html"><i class="bi bi-key"></i> Reset Password</a>
              <hr>
              <a href="Login.html"><i class="bi bi-box-arrow-right"></i> Log Out</a>
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
      <a href="Admin.php" class="a1"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
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
          <a href="Contact1.php" class="contact1" id="cont"><i class="fas fa-chevron-right"></i>Contact</a>
        </div>
      </div>            
      <a href="Logs.php" class="a1"><i class="fas fa-history"></i> Log</a>
      <a href="Login.php" class="a1"><i class="fas fa-sign-out-alt"></i> Log Out</a>
    </div>
  </div>

  <div class="title-with-icon">
    <a href="Admin.php" title="Dashboard"><i class="bi bi-house"></i></a>
    <p>Contact</p>
  </div>
  
  <div class="overlay" id="overlay" onclick="hideForm()"></div>
  
  <?php
    // Include the database connection file
    include 'connection.php';
            
    // Query to count the total number of residents
    $sql = "SELECT COUNT(*) AS totalmessages FROM receivemessages ";
    $result = $conn->query($sql);
            
    // Check if the query was successful
    if ($result->num_rows > 0) {
      // Fetch the row count
      $row = $result->fetch_assoc();
      $countreceivemessages = $row['totalmessages'];
    } else {
      // If no residents found, set count to 0
      $countreceivemessages = 0;
    }
            
    // Close database connection
    $conn->close();
  ?>
  
  <div class="contact" id="barangayOfficialsDashboard">
    <div class="title-with-icon1">
      <i class="fas fa-chart-line"></i>
      <h3>List Chart</h3>
    </div>
    <hr>
    <div class="heading-and-buttons">
      <div class="show-entries">
        <label for="entries">Show Entries: </label>
        <input type="number" title="number" placeholder="0" value="<?php echo $countreceivemessages; ?>">
      </div>    
      <div class="search-bar">
            <p>Search: </p><input type="text" id="searchInput1" onkeyup="searchTable()" placeholder="Search for names...">
      </div>
    </div><hr>
    <table class="table-no-border">
        <thead>
            <tr>
                <th>Name of Sender</th>
                <th>Age</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
          include 'connection.php';

          $sql = "SELECT * FROM receivemessages";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["name"] . "</td>";
                  echo "<td>" . $row["age"] . "</td>";
                  echo "<td>" . $row["email"] . "</td>";
                  echo "<td>" . $row["message"] . "</td>";
                  echo "<td>" . $row["created_at"] . "</td>";
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
      <p>Showing <?php echo $countreceivemessages; ?> of <?php echo $countreceivemessages; ?> entries.</p>
      <button type="button" class="btn btn-secondary btn2">Previous</button>
      <button type="button" class="btn btn-primary btn1">Next</button>
    </div>
  </div>
  
  <div class="overlay" id="overlay" onclick="hideContactForm()"></div>
  
  <?php
    include 'connection.php';

    $sql = "SELECT COUNT(*) AS totalcontacts FROM contacts ";
    $result = $conn->query($sql);
            
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $countcontacts = $row['totalcontacts'];
    } else {
      $countcontacts = 0;
    }
            
    $conn->close();
  ?>

  <div class="contact" id="contact1Dashboard">
    <div class="title-with-icon1">
      <i class="fas fa-chart-line"></i>
      <h3>List Chart</h3>
    </div>
    <hr>
    <div class="heading-and-buttons">
      <div class="show-entries">
        <label for="entries">Show Entries: </label>
        <input type="number" title="number" placeholder="0" value="<?php echo $countcontacts; ?>">
      </div>    
      <div class="search-bar">
            <p>Search: </p><input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search for names...">
      </div>
    </div><hr>
    <table class="table-no-border">
        <thead>
            <tr>
                <th>Label</th>
                <th>Description</th>
                <th>Contacts</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
          include 'connection.php';

          $sql = "SELECT * FROM contacts";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["label"] . "</td>";
                  echo "<td>" . $row["description"] . "</td>";
                  echo "<td style='width: 20px !important;'>" . $row["contact"] . "</td>";
                  echo "<td>";
                  echo "<button class='btn btn-primary' onclick='showContactForm()'>Edit</button>";
                  echo "</td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='4'>No Data Available</td></tr>";
          }

          $conn->close();
        ?>
        </tbody>
    </table>
    <div class="navigation-buttons">
      <p>Showing <?php echo $countcontacts; ?> of <?php echo $countcontacts; ?> entries.</p>
      <button type="button" class="btn btn-secondary btn2">Previous</button>
      <button type="button" class="btn btn-primary btn1">Next</button>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
        <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p>
    </div>
  </footer>
  
  <div class="form-container" id="contactForm" style="display: none;">
    <div class="heading-with-icon"><i class="fas fa-running"></i><h2>Edit Activity</h2>
        <button type="button" class="btn-close" aria-label="Close" onclick="hideContactForm()"></button>
    </div>
    <form action="contact_update.php" method="POST" enctype="multipart/form-data">
        <?php
          include 'connection.php';

          $sql = "SELECT id FROM contacts";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $contactId  = $row["id"];
          } else {
            $contactId  = "";
          }

          $conn->close();
        ?>
    <input type="hidden" name="contact_id" value="<?php echo $contactId; ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="editLabel" class="lab">Label</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-pen"></i></span>
                <?php
                  include 'connection.php';

                  $sql = "SELECT label FROM contacts";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $labels  = $row["label"];
                  } else {
                    $labels  = "";
                  }

                  $conn->close();
                ?>
                    <input type="text" class="form-control" id="editLabel" name="label" placeholder="Choose photo" value="<?php echo $labels; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="editDescription" class="lab">Description</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-pen"></i></span>
                <?php
                  include 'connection.php';

                  $sql = "SELECT description FROM contacts";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $descriptions  = $row["description"];
                  } else {
                    $descriptions  = "";
                  }

                  $conn->close();
                ?>
                    <input type="text" class="form-control" id="editDescription" name="description" placeholder="Enter description" value="<?php echo $descriptions; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="editContact" class="lab">Contact</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                <?php
                  include 'connection.php';

                  $sql = "SELECT contact FROM contacts";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $contact  = $row["contact"];
                  } else {
                    $contact  = "";
                  }

                  $conn->close();
                ?>
                <input type="text" class="form-control" id="editContact" name="contact" placeholder="Enter address" value="<?php echo $contact; ?>">
                </div>
            </div>
        </div>
        <div class="form-group text-center">
            <div class="col">
                <button type="button" class="btn btn-secondary btn3" onclick="hideContactForm()"> Close</button>
                <button type="submit" class="btn btn-primary btn4">Submit</button>
            </div>
        </div>
    </div>
</form>
</div>
<script>
function showContactForm() {
  var overlay = document.getElementById('overlay');
  var formContainer = document.getElementById('contactForm');
  var blurredBackground = document.createElement('div'); 
  blurredBackground.classList.add('blurred-background'); 

  document.body.appendChild(blurredBackground);

  overlay.style.display = 'block';
  formContainer.style.display = 'block';
}

function hideContactForm() {
  var overlay = document.getElementById('overlay');
  var formContainer = document.getElementById('contactForm');
  var blurredBackground = document.querySelector('.blurred-background'); 

  blurredBackground.parentNode.removeChild(blurredBackground);

  overlay.style.display = 'none';
  formContainer.style.display = 'none';
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-euKpLsYQJz5jE0EEOxnTPI1a2ybp4QA9QfsB1LD73pI95/02djN3eVkD5bZlNumj" crossorigin="anonymous"></script>
<script src="Admin.js"></script>
</body>
</html>