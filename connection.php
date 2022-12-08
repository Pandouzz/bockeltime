<?php
    // Verbindung zur Datenbank herstellen (Adresse, Benutzer, PW, Datenbank Name)
        $dv = mysqli_connect("localhost","user","nuklearsuff","bockeltime");

    // Verbindung ueberpruefen und Fehler, wenn vorhanden, ausgeben
    if (mysqli_connect_errno())
        {
            echo "Fehler bei der Verbindung zur Datenbank: " . mysqli_connect_error();
        }
?>