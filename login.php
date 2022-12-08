<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title>Landing Page &ndash; Layout Examples &ndash; Pure</title>
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="index.html">Bockeltime</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="liste.php" class="pure-menu-link">Liste</a></li>
            <li class="pure-menu-item"><a href="Bilder.html" class="pure-menu-link">Bilder</a></li>
            <li class="pure-menu-item"><a href="login.php" class="pure-menu-link">Eintragen</a></li>
        </ul>
    </div>
</div>

<div class="content-wrapper2">
    <h2 class="content-head is-center">Eintragen</h2>
        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="ausgabe.php" method="post">
                    <fieldset>
                        <label>Event
                            <select name="tabelle">
                            <option>Shots Shots Shots - FR|16|DEZ</option>
                            <option>Geiz ist Geil - FR|23|DEZ</option>
                            <option>Kult X-MAS-PARTY - SO|25|DEZ</option>
                            <option>Jahresrückvergütung | Wir Sagen DANKE! - DO|29|DEZ</option>
                            </select>
                        </label>

                        <label for="vorname">Vorname</label>
                        <input id="vorname" name="vorname" type="text" placeholder="Dein Vorname">

                        <label for="nachname">Nachname</label>
                        <input id="nachname" name="nachname" type="text" placeholder="Dein Nachname">

                        <label for="password">Passwort</label>
                        <input id="passwort" name="passwort" type="password" placeholder="Dein Passwort">

                        <button type="submit" class="pure-button">Abschicken</button>
                    </fieldset>
                </form>
            </div>

    </div>

    <div class="footer l-box is-center">
        Made with love by the Nuklearsuff Team.
    </div>

</div>

</body>
</html>