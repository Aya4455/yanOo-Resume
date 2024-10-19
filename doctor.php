<?php
if (isset($_POST['submit'])) {

    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $spec = $_POST['sp'];
    $email = $_POST['em'];
    $contact = $_POST['cn'];
    $cnic = $_POST['cni'];
    $hospital = $_POST['hn'];
      
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'Blood_Bank';
      $conn=mysqli_connect($servername,$username,$password, $database);

       $sql = "INSERT INTO doctor (first_name, last_name, specialization, email, contact_number, cnic, hospital_name)
         VALUES ('$fname', '$lname', '$spec', '$email','$contact', '$cnic', '$hospital');";
   //   mysqli_query($conn, $sql);
      if ($conn->query($sql) === TRUE) {
        header("Location: register.html");
    } else {
        header("Location: notregister.html");
    }
    
   }
?>