<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "wristiquedb";

// Procedural Style Connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Menu</title>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-button {
            background-color: rgb(76, 121, 52);
            border: none;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #444;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }
        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #555;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .search-results {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ddd;
            max-height: 200px;
            overflow-y: auto;
            width: 300px;
            z-index: 1;
        }
        .search-results p {
            margin: 0;
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #ddd;
        }
        .search-results p:hover {
            background-color: #f1f1f1;
        }

        .hr-custom {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
            margin: 0; /* Reset margin */
            padding: 0; /* Reset padding */
        }


    </style>
</head>
<body>
    <div class="top-border">
        <div class="dropdown">
            <button class="dropdown-button"><ion-icon name="menu"></ion-icon></button>
            <div class="dropdown-content">
                <a href="?page=home" class="btn btn-link" style="text-decoration: none; color: white; font-family: 'Montserrat';">
                    <ion-icon name="home-outline"></ion-icon> Home
                </a>
                <a href="?page=cart" class="btn btn-link" style="text-decoration: none; color: white; font-family: 'Montserrat';">
                    <ion-icon name="cart-outline"></ion-icon> Cart
                </a>
                <a href="?page=myorder" class="btn btn-link" style="text-decoration: none; color: white; font-family: 'Montserrat';">
                    <ion-icon name="bag-outline"></ion-icon> My Order
                </a>

                <hr class="hr-custom">

                <a href="?logout" class="btn btn-link" style="text-decoration: none; color: white; font-family: 'Montserrat';">
                    <ion-icon name="log-out-outline"></ion-icon>Logout 

                <a href="signup.php" class="btn btn-link" style="text-decoration: none; color: white; font-family: 'Montserrat';">
                 <ion-icon name="person-add-outline"></ion-icon> Sign up    
                
                 
</a>

            </div>
        </div>
