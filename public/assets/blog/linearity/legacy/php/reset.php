<?php

    $key = $_GET['key']; //reads parameters form th url

    define('DATABASE_USERNAME', 'root');
    define('DATABASE_PASSWORD', 'Nor215rington');
    define('DATABASE_ADDRESS', 'localhost');
    define('DATABASE_NAME', 'Linearity');
//Funktion zur Anmeldung und Auswahl Datenbank 

    function connect() {
        mysql_connect(DATABASE_ADDRESS, DATABASE_USERNAME, DATABASE_PASSWORD) or 
             die("Error:".mysql_error());
                
        mysql_select_db(DATABASE_NAME) or
            die("Error:".mysql_error());
    }
    connect(); 

if ($key == "DamnatioMemoriae"){
    
    //truncate tables
    $query = "TRUNCATE TABLE `default_level`;" ;
    mysql_query($query) or die(mysql_error());
    
    $query = "TRUNCATE TABLE `metric`;" ;
    mysql_query($query) or die(mysql_error());


    $i = 0;
    //create 100 unknowns
    while ($i <= 99) {
	$username = "unknown";
	$i = $i + 1;
          
    	
        $username = $username.$i; 
        echo $username;
	echo "</br>";
        
        $query = "INSERT INTO default_level (username) VALUES ('" . $username . "')" ;
        mysql_query($query) or die(mysql_error());
        
        
    }


}
else{
    echo "permission denied";
}
?>
