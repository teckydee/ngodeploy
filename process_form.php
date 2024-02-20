<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $file = 'contacts.txt';
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    
    // Append data to the file
    file_put_contents($file, $data, FILE_APPEND);
    
    // Display JavaScript alert
    echo "<script>alert('Thank you for your time');</script>";
}
?>
