<?php
if (isset($_POST['submit'])) {
    $cnic = $_POST['cnic'];
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $dob = $_POST['dob'];
    $gender = $_POST['gen'];
    $bloodg = $_POST['bg'];
    $lastdd = $_POST['ldd'];
    $email = $_POST['email'];
    $contact = $_POST['cn'];
    $adress = $_POST['add'];
    $city = $_POST['city'];
      
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'Blood_Bank';
      $conn=mysqli_connect($servername,$username,$password, $database);

       $sql = "INSERT INTO donor (cnic, first_name, last_name, date_of_birth, gender,blood_group, last_donation_date, email, contact_number,address, city)
         VALUES ($cnic,'$fname', '$lname', '$dob', '$gender','$bloodg','$lastdd', '$email', '$contact','$adress','$city');";
   //   mysqli_query($conn, $sql);
      if ($conn->query($sql) === TRUE) {
        header("Location: register.html");
    } else {
        header("Location: notregister.html");
    }
    
   }
?>