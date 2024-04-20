<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="Contact.css">
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
    <section class="contact">
        <h3 class="h31">Contacts</h3>
        <p>Here are the contacts within the barangay</p>
        <hr>
        <div class="container">
            <div class="contact-info">
                <div class="box">
                    <?php
                    include 'connection.php';

                    $sql = "SELECT * FROM contacts where id=1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $label  = $row["label"];
                        $contact  = $row["contacts"];
                    } else {
                        $label  = "";
                        $contact  = "";
                    }

                    $conn->close();
                   ?>
                    <a href="<?php echo $contact;?>" target="_blank">
                        <h3><i class='bi bi-telephone'></i><?php echo $label;?></h3>
                        <p><?php echo $contact;?></p>
                    </a>                    
                </div>
                <div class="box">
                    <?php
                    include 'connection.php';

                    $sql = "SELECT * FROM contacts where id=2";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $labels  = $row["label"];
                        $contacts  = $row["contacts"];
                    } else {
                        $labels  = "";
                        $contacts  = "";
                    }

                    $conn->close();
                   ?>
                    <a href="<?php echo $contacts;?>">
                        <h3><i class='bi bi-envelope'></i><?php echo $labels;?></h3>
                        <p><?php echo $contacts;?></p>
                    </a>
                </div>
                <div class="box">
                    <?php
                    include 'connection.php';

                    $sql = "SELECT * FROM contacts where id=3";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $fblabels  = $row["label"];
                        $fbcontacts  = $row["contacts"];
                    } else {
                        $fblabels  = "";
                        $fbcontacts  = "";
                    }

                    $conn->close();
                   ?>
                    <a href="<?php echo $fbcontacts;?>" target="_blank">
                        <h3><i class='bi bi-facebook'></i><?php echo $fblabels;?></h3>
                        <p><?php echo $fbcontacts;?></p>
                    </a>
                </div>
                <div class="box">
                    <a href="https://www.google.com/maps/place/Paule+1,+Rizal,+Laguna/@14.109326,121.4010232,16z/data=!3m1!4b1!4m6!3m5!1s0x33bd5a4cc34d11a3:0x15f01b4eabdbeee8!8m2!3d14.1073484!4d121.4013285!16s%2Fg%2F1tgn74f0?entry=ttu" target="_blank">
                        <h3><i class='bi bi-geo-alt'></i> Location</h3>
                        <p>Barangay Paule 1, Rizal, Laguna</p>
                    </a>
                </div>
            </div>  
            <div class="form-container">
                <form action="contact_insert.php" method="POST">
                    <h3>Send Message</h3>
                    <div class="form-group">
                        <div class="input-group" style="width: 48%; border-radius:8px;" id="name">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div class="input-group" style="width: 48%;" id="age">
                            <label for="age">Age:</label>
                            <input type="number" id="age" name="age" placeholder="Age" required>
                        </div>
                    </div>
                    <div class="form-group" id="email">
                        <div class="input-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" placeholder="Type any message" required></textarea>
                    </div>
                    <button type="submit">
                        Send Message <i class="bi bi-envelope-fill"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Barangay Paule 1. All rights reserved.</p>
    </footer>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7RduPuemT//+jJXB16zg6i8UQD3lV4bMtLoH5rDg7Dc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>