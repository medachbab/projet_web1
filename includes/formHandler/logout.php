<?php
use includes\Logout;
require_once '../../helpers/autoloader.php';
Autoloader::register();

// Check for logout button submission
if (isset($_POST['logout'])) {
    Logout::logout(); // Call the logout function
}
?>

