<?php
include("database.php"); // Dołącza plik z połączeniem do bazy danych

$username = "Squidward";// Ustawia nazwę użytkownika
$password = "clarinet2";  // Ustawia hasło użytkownika

$hash = password_hash($password, PASSWORD_DEFAULT); // Haszuje hasło

$sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')"; // Tworzy zapytanie SQL do dodania użytkownika

if (mysqli_query($conn, $sql)) {
    echo "User is now registered";
} else {
    echo "Could not register user. Error: " . mysqli_error($conn);
}

mysqli_close($conn); // Zamyka połączenie z bazą danych

//  http://localhost/PHP/connecttomysgl/index.php    // adres do pliku wklej w prtzeglądarke aby dodać użytkownika do bazy danych
?>
 