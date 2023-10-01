<?php
if (isset($_POST['original_url'])) {
    $original_url = $_POST['original_url'];
    // You should implement actual URL shortening logic here and store it in a database.
    // For this example, we'll generate a random short code.
    $short_code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
    $shortened_url = "https://sjklbhhj.github.io/chatrapatisamraj-//$short_code";

    // Redirect back to the index page with the shortened URL as a query parameter.
    header("Location: index.php?shortened=$shortened_url");
    exit();
}
?>
