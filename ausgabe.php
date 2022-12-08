<?php
	// Gesendeten Namen in der Variablen speichern
	$vorname = $_POST["vorname"];
	// Gesendeten Vornamen in der Variablen speichern
	$nachname = $_POST["nachname"];
	// Gesendete NFC-ID in der Variablen speichern
	$passwort = $_POST["passwort"];

	$tabelle = $_POST["tabelle"];
 
	if($tabelle == "Shots Shots Shots - FR|16|DEZ")
	{
		$tabelle = "event1612";
	}
	if($tabelle == "Geiz ist Geil - FR|23|DEZ")
	{
		$tabelle = "event2312";
	}
	if($tabelle == "Kult X-MAS-PARTY - SO|25|DEZ")
	{
		$tabelle = "event2512";
	}
	if($tabelle == "Jahresrückvergütung | Wir Sagen DANKE! - DO|29|DEZ")
	{
		$tabelle = "event2912";
	}

	// Verbindung zur Datenbank herstellen (Adresse, Benutzer, PW, Datenbank Name)
	$dv = mysqli_connect("localhost","user","nuklearsuff","bockeltime");

	// Verbindung ueberpruefen und Fehler, wenn vorhanden, ausgeben
	if (mysqli_connect_errno())
		{
			echo "Fehler bei der Verbindung zur Datenbank: " . mysqli_connect_error();
		}

		$sql = mysqli_query($dv, "SELECT id from user where vorname = '$vorname' and nachname = '$nachname' and passwort = '$passwort'");
		$row = mysqli_num_rows($sql);
 
     if ($row == 1) 
	 {
        // Die gesendeten Daten in der Datenbank (Tabelle Person) speichern (neuer Eintrag)
		$sql = "INSERT INTO $tabelle (vorname, nachname) VALUES ('$vorname' , '$nachname')"; 
		// Wenn SQL-Statement erfolgreich ausgeführt wurde, dann Weiterleitung zur Seite, sonst Fehlermeldung
		if ($dv->query($sql) === TRUE)
			{
				header("Location: liste.php");
			}
			else
				{
					echo "Error: " . $sql . "<br>" . $dv->error;
				}
     }
     else 
	 {
		header("Location: login_fail.php");
	 }

	// Datenbankverbindung schließen
	$dv->close();
 ?> 