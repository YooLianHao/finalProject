<?php
 $servername = "localhost";  //localost for local PC or use IP
 $username = "root";
 $password = "";
 $database = "e_voting";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password,$database);
 
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }