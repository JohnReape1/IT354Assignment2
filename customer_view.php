<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="includes/css/styles.css">
    </head>
    <body>
<div class="container">
<div class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="#">Assignment 2</a>
					</div><!-- end navbar-header -->

					<div id="navbar" class="navbar-collapse collapse">

						<ul class="nav navbar-nav">
							<li class="active">
								<a href="customer_view.php">View</a>
							</li>
							<li>
								<a href="customer_add.html">Add</a>
							</li>
						</ul><!-- end nav -->

					</div><!-- end nav-collapse -->
				</div><!-- end container -->
			</div><!-- end navbar -->         

        <?php

        $hn = 'www.it354.com';
        $db = 'it354_students';
        $un = 'it354_students';
        $pw = 'steinway';

        $conn = new mysqli($hn, $un, $pw, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT * FROM customers";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped' id='heading'><tr><th>Last Name</th><th>First Name</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Email</th><th>Phone</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["lastName"]."</td><td>".$row["firstName"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zip"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
</div>
        


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
