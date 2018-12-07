<?php 
	global $koneksi;

	$koneksi = mysqli_connect("localhost", "root", "", "mpr");
	
	/*$hostname= "localhost";
	$username= "root";
	$password= "japan999kogga";
	$db= "account";*/

	if(!$koneksi){
		echo "Database tidak termuat";
	}
 ?>