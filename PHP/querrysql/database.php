<?php
// Ustawienia połączenia z bazą danych
$db_server = "localhost"; // adres serwera bazy danych
$db_user = "root";        // nazwa użytkownika bazy danych
$db_pass = "";            // hasło użytkownika bazy danych
$db_name = "businessdb";  // nazwa bazy danych

// Nawiązanie połączenia z bazą danych MySQL
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Sprawdzenie, czy połączenie zostało nawiązane poprawnie
if (!$conn) {
    // W przypadku błędu połączenia wyświetl komunikat i zakończ skrypt
    die("Could not connect!<br>" . mysqli_connect_error());
} else {
    // Połączenie udane - wyświetl komunikat
    echo "Connected <br>";
}
?>
