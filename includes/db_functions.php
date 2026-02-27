<?php
/**
 * @param $dbname
 * @return PDO|void
 */
function startConnection($dbname){
    $host = "localhost";
    //$dbname = "testdb";
    $username = "root";
    $password = ""; // standaard leeg bij XAMPP

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

        // Zet PDO foutmeldingen aan
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;

    }
    catch (PDOException $e) {
        echo "Verbinding mislukt: " . $e->getMessage();
    }
}
?>
