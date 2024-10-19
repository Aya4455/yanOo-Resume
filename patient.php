<?php
if (isset($_POST['submit'])) {
    
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $dob = $_POST['dob'];
    $cnic = $_POST['cnic'];
    $gender = $_POST['gen'];
    $bloodg = $_POST['bg'];
    $ptype = $_POST['pt'];
    $pdis = $_POST['pd'];
    $contact = $_POST['cn'];
    $adress = $_POST['add'];
    $hospital = $_POST['hs'];
    $city = $_POST['city'];
      
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'Blood_Bank';
      $conn=mysqli_connect($servername,$username,$password, $database);

       $sql = "INSERT INTO patient(first_name, last_name, date_of_birth,cnic, gender,blood_group, patient_type, patient_disease, contact_number,p_address,hospital_name, city)
       VALUES ('$fname', '$lname', '$dob','$cnic', '$gender','$bloodg','$ptype','$pdis', '$contact','$adress','$hospital','$city');";
   //   mysqli_query($conn, $sql);
      if ($conn->query($sql) === TRUE) {
        header("Location: register.html");
    } else {
        header("Location: notregister.html");
    }
    
   }
?>