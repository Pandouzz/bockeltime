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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
    <div class="content">
        <h2 class="content-head is-center">Teilnehmerliste</h2>
    </div>
    <div class="container">
    <div class="row">
        <div class="col">
        <img src="pic/events/16.12.png" width=25% height=auto>
		<table class="table">
			<thead>
				<tr>
					<th>Vorname</th>
					<th>Nachname</th>
				</tr>
					</thead>
					<tbody>
						<?php
                            include("connection.php");

							$result = mysqli_query($dv,"SELECT * FROM event1612");
							while($row = mysqli_fetch_array($result))
							{
						?>
							<tr>
							<td>
								<?php 
									echo $row[0];
								?>
							</td>
							<td>
								<?php 
									echo $row[1];
								?>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
			</table><br><br>
        </div>
        
        <div class="col">
        <img src="pic/events/23.12.png" width=25% height=auto>
        <table class="table">
            <thead>
                <tr>
                    <th>Vorname</th>
                    <th>Nachname</th>
                </tr>
                    </thead>
                    <tbody>
                        <?php
                            include("connection.php");

                            $result = mysqli_query($dv,"SELECT * FROM event2312");
                            while($row = mysqli_fetch_array($result))
                            {
                        ?>
                            <tr>
                            <td>
                                <?php 
                                    echo $row[0];
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $row[1];
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
            </table><br><br>
        </div>
        
        <div class="col">
        <img src="pic/events/25.12.png" width=25% height=auto>
		<table class="table">
			<thead>
				<tr>
					<th>Vorname</th>
					<th>Nachname</th>
				</tr>
					</thead>
					<tbody>
						<?php
                             include("connection.php");

							$result = mysqli_query($dv,"SELECT * FROM event2512");
							while($row = mysqli_fetch_array($result))
							{
						?>
							<tr>
							<td>
								<?php 
									echo $row[0];
								?>
							</td>
							<td>
								<?php 
									echo $row[1];
								?>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
			</table><br><br>
        </div>
    
        <div class="col">
        <img src="pic/events/29.12.png" width=25% height=auto>
		<table class="table">
			<thead>
				<tr>
					<th>Vorname</th>
					<th>Nachname</th>
				</tr>
					</thead>
					<tbody>
						<?php
                             include("connection.php");

							$result = mysqli_query($dv,"SELECT * FROM event2912");
							while($row = mysqli_fetch_array($result))
							{
						?>
							<tr>
							<td>
								<?php 
									echo $row[0];
								?>
							</td>
							<td>
								<?php 
									echo $row[1];
								?>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
			</table><br><br>
        </div>
        </div>
    </div>			
    <div class="footer l-box is-center">
        Made with love by the Nuklearsuff Team.
    </div>
    
</div>

</body>
</html>