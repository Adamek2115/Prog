<?php
    // Dołączenie pliku z konfiguracją i połączeniem do bazy danych
    include("database.php");

    // Definicja zapytania SQL pobierającego wszystkie rekordy z tabeli users
    $sql = "SELECT * FROM users where user='Patrick'";

    // Wykonanie zapytania SQL na połączeniu $conn i zapisanie wyniku w $result
    $result = mysqli_query($conn, $sql);

    // Sprawdzenie, czy zapytanie zwróciło jakieś wiersze (czy są użytkownicy)
    if(mysqli_num_rows($result) > 0){
        // Pętla przechodząca przez każdy wiersz wyniku zapytania
        while($row = mysqli_fetch_assoc($result)){
            // Wyświetlenie wartości pola id z aktualnego wiersza
            echo $row["id"] . "<br>";
            // Wyświetlenie wartości pola user (nazwa użytkownika)
            echo $row["user"] . "<br>";
            // Wyświetlenie wartości pola reg_date (data rejestracji)
            echo $row["reg_date"] . "<br>";
        };
    }
    else{
        // Komunikat wyświetlany, gdy nie znaleziono żadnych użytkowników
        echo "No user found";
    }

    // Zamknięcie połączenia z bazą danych
    mysqli_close($conn);
?>
