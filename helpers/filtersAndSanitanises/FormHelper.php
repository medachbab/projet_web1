<?php 
namespace helpers\filtersAndSanitanises;
use Exception;
class FormHelper {

  public static function validateFloatInput($inputText, $redirectUrl = "/") {
    if (empty($inputText) || !filter_var($inputText, FILTER_VALIDATE_FLOAT)) {
      header("Location: $redirectUrl ");
      exit; 
    }

    return (float) $inputText;
  }
  public function validatetextinput($inputText, $redirectUrl = "/"){
    $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

  if (strlen($comment) > 200) {
    die("Comment is too long! Please keep it under 200 characters.");
  }
  
  }
}
// class InputValidator {
//     public static function validateAndSanitizePasswordFirstConn($password, $redirectUrl = "../") {
//         if (empty($password)) {
//           header("Location: $redirectUrl");
//           exit; 
//         }
    
//         $pattern = "(?=.*\d)(?=.*[A-Z])(?=.*[@#$%^&+=])(?=.*\w{8,})";
    
//         if (!preg_match($pattern, $password)) {
//           header("Location: $redirectUrl?error=password_weak");
//           exit;
//         }
//         $sanitizedPassword = filter_var($password, FILTER_SANITIZE_SPECIAL_CHARS);

    
//         return $sanitizedPassword;
//     }

//     public static function validateAndSanitizeusername($username, $password, $redirectUrl = "/") {
//         if (empty($username) || empty($password)) {
//         header("Location: $redirectUrl");
//         exit;
//         }
//         $sanitizedUsername = filter_var($username, FILTER_SANITIZE_SPECIAL_CHARS);
//         $sanitizedPassword = filter_var($password, FILTER_SANITIZE_SPECIAL_CHARS);
//         // Allowed characters depend on your password policy (consider using a stronger filter like FILTER_SANITIZE_FULL_SPECIAL_CHARS)

//         // Additional validation (optional)
//         // You can add regular expressions or custom logic here
//         // - Minimum username length
//         // - Password complexity requirements

//         return array(
//         'username' => $sanitizedUsername,
//         'password' => $sanitizedPassword,
//         );
//     }
//     public static function validateAndSanitizeCredentials($username, $password, $redirectUrl = "/") {
//         if (empty($username) || empty($password)) {
//         header("Location: $redirectUrl");
//         exit;
//         }
//         $sanitizedUsername = filter_var($username, FILTER_SANITIZE_SPECIAL_CHARS);
//         $sanitizedPassword = filter_var($password, FILTER_SANITIZE_SPECIAL_CHARS);
//         // Allowed characters depend on your password policy (consider using a stronger filter like FILTER_SANITIZE_FULL_SPECIAL_CHARS)

//         // Additional validation (optional)
//         // You can add regular expressions or custom logic here
//         // - Minimum username length
//         // - Password complexity requirements

//         return array(
//         'username' => $sanitizedUsername,
//         'password' => $sanitizedPassword,
//         );
//     }
// }

// // Example usage
// $username = trim($_POST["username"]); // Assuming username comes from a POST parameter, trim extra spaces
// $password = trim($_POST["password"]);

// try {
//   $credentials = InputValidator::validateAndSanitizeCredentials($username, $password);
//   $sanitizedUsername = $credentials['username'];
//   $sanitizedPassword = $credentials['password'];

//   // Now you have sanitized username and password for further processing
//   echo "Sanitized username: $sanitizedUsername, Sanitized password: $sanitizedPassword";

// } catch (Exception $e) {
//   // Handle potential exceptions during redirection (optional)
//   echo "Error during validation: " . $e->getMessage();
// }
