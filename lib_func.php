<?php
	function header_web()
	{?>
		<font color="white" size=6> SKUMPTK </font>
		<?php
	}
	function footer_web()
	{?>
		<center>
		<small><font color="white">Developed By Mhs Unikom</font></small>
		</center>
		<?php
	}
	function menu()
	{?>
		<table>
			<tr><td align="center"><a href="index.php"><font color="white">Menu</font></a></td></tr>
			<tr><td align="center"><b><font color="white">=========================</font></b></td></tr>
			<tr><td><a href="id.php"><font color="white">Identitas</font></a></td></tr>
			<tr><td><a href="id_view.php"><font color="white">Lihat Data</font></a></td></tr>			
		</table>
		<?php
	}
	function koneksi_db(){
		$host = "localhost";
		$database = "db_skumptk";
		$user = "root";
		$password = "";

		$link=mysql_connect($host,$user,$password);
		/*
			kalo yang atas MYSQL_connect,
			pas select db juga harus MYSQL_select_db bukan MYSQLI_select_db
		*/
		mysql_select_db($database);
		if(!$link)
			echo "Error : ".mysql_error();
		return $link;
	}
?>