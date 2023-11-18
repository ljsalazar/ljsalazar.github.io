<!-- handleForm.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["preciousName"]);

    if ($username === "Angelika" || $username === "ANGELIKA" || $username === "Angelika Evangelista" || $username === "ANGELIKA EVANGELISTA" || $username === "Angelika Boncacas Evangelista" || $username === "ANGELIKA BONCACAS EVANGELISTA") {
        // Redirect to the second HTML page with the username as a query parameter
        header("Location: insideOfmyChest.html?herName=" . urlencode($username));
        exit();
    } else{
                // Add more validation if needed
            echo '<script>alert("YOU ARE NOT MY POTCHI !");</script>';
            return false; // Allow the form submission
            }
}
?>
