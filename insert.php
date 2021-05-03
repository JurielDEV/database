<?php
				include 'index.html';
				error_reporting(0);
				//Make a MySQL Connection
				//server
				mysql_connect("localhost", "root", "");
				//database
				mysql_select_db("db_stored");
				
				$user=$_POST['username'];
				$pass=$_POST['password'];
				
				//Insert to database
				mysql_query("INSERT INTO tb_info(username, password) VALUES('$user','$pass')");
?>