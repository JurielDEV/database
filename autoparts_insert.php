<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <title>Auto Parts</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="tire.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="tire.png" alt="Juriel" width="150" height="70"/>
            <h1 class="logo">Auto Parts</h1>
        </div>
    </header>
    <main>
        <section class="presentation" id="presentation">
            <div class="php-code">
				<div class="form-container">
					<form action="autoparts_insert.php" method="POST">
						<div class="input-label">
						<div class="l-i">
						<label>Product No.</label>
						<br>
						<input class="input-all" type="text" name=ProductNo>
						</div>
						
						<div class="l-i">
						<label>Product Name</label>
						<br>
						<input class="input-pname" type="text" name=ProductName>
						</div>
						
						<div class="l-i">
						<label>Code</label>
						<br>
						<input class="input-all" type="text" name=Code>
						</div>
						
						<div class="l-i">
						<label>Net Price</label>
						<br>
						<input class="input-all" type="text" name=NetPrice>
						</div>
						
						<div class="l-i">
						<label>Price</label>
						<br>
						<input class="input-all" type="text" name=Price>
						</div> 
						
						<br>
						<input class="button-submit" type="submit" name="Submit" value="Submit">
						</div>
					</form>
				</div>
			<div class="table-all">
				<table>
				<tr>

				<?php
				//Make a MySQL Connection
				//server
				mysql_connect("localhost", "root", "");
				//database
				mysql_select_db("db_autoparts");

				$prodno=$_POST['ProductNo'];
				$prodname=$_POST['ProductName'];
				$code=$_POST['Code'];
				$netprice=$_POST['NetPrice'];
				$price=$_POST['Price'];

				mysql_query("INSERT INTO tb_autopart(ProductNo, ProductName, Code, NetPrice, Price) VALUES('$prodno','$prodname','$code','$netprice', '$price')");

				$result=mysql_query("SELECT * FROM tb_autopart") or die("Error");
				$row=mysql_fetch_array($result);

				echo"<th>Product No.</th><th>Product Name</th><th>Code</th><th>Net Price</th><th>Price</th></tr>";

				while($row=mysql_fetch_array($result))
				{

				echo"<tr><td>".$row['ProductNo'];
				echo"</td><td>".$row['ProductName'];
				echo"</td><td>".$row['Code'];
				echo"</td><td>".$row['NetPrice'];
				echo"</td><td>".$row['Price'];
				echo"</td></tr>";
				}
				?>

				</table>
				</div>
            </div>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>
