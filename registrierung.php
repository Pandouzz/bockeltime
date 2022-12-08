<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=bockeltime', 'root', '');
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Registrierung</title>    
</head> 
<body>
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $error = false;
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];
  
    if(!filter_var($vorname)) {
        echo 'Bitte einen gültigen Vornamen eingeben<br>';
        $error = true;
    }     
    if(!filter_var($nachname)) {
        echo 'Bitte einen gültigen Nachnamen eingeben<br>';
        $error = true;
    }   
    if(strlen($passwort) == 0) {
        echo 'Bitte ein Passwort angeben<br>';
        $error = true;
    }
    if($passwort != $passwort2) {
        echo 'Die Passwörter müssen übereinstimmen<br>';
        $error = true;
    }
    
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
            $error = true;
        }    
    }
    
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $pdo->prepare("INSERT INTO teilnehmer (vorname, nachname, passwort) VALUES (:vorname, :nachname, :passwort)");
        $result = $statement->execute(array('vorname' => $vorname, 'nachname' => $nachname, 'passwort' => $passwort_hash));
        
        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
            $showFormular = false;
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
        }
    } 
}
 
if($showFormular) {
?>
 
<form action="?register=1" method="post">
Vorname:<br>
<input type="vorname" size="40" maxlength="250" name="email"><br><br>

Nachname:<br>
<input type="nachname" size="40" maxlength="250" name="email"><br><br>

Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="passwort2"><br><br>
 
<input type="submit" value="Abschicken">
</form>
 
<?php
} //Ende von if($showFormular)
?>
 
</body>
</html>