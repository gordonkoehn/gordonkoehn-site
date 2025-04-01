<?php
    #=======DESCRIPTION=======
    #This script contains just functions to supply other scripts.
    #=========================

      #test wenn true umgeht key sicherung
    $test = true;
// Konstanten zur Datenbankverbindung
    define('DATABASE_USERNAME', 'root');
    define('DATABASE_PASSWORD', 'Nor215rington');
    define('DATABASE_ADDRESS', 'localhost');
    define('DATABASE_NAME', 'Linearity');
    
    connect();
    
//detects mobile devices
    function isMobile() {
    return          preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

//Funktion zur Anmeldung und Auswahl Datenbank 
    function connect() {
        mysql_connect(DATABASE_ADDRESS, DATABASE_USERNAME, DATABASE_PASSWORD) or 
             die("Error:".mysql_error());
                
        mysql_select_db(DATABASE_NAME) or
            die("Error:".mysql_error());
    }

    
    
      function query() {
        $result = mysql_query($query) or die("Error:".mysql_error());
        $item = mysql_fetch_array($result);
        echo $result;
    }
        
    function best($level) {
                //echo $level;
                $query = "SELECT `username`,`".$level."` FROM `user_data` ORDER BY `".$level."` DESC, `username` ASC LIMIT 0,1;";
               // echo $query;
                $result = mysql_query($query) or die("Error:".mysql_error());
        
                $item = mysql_fetch_array($result);
                echo "<td>".$level."</td>";
                echo "<td>".$item['username']."</td>";
                echo "<td>".$item[$level]."</td>";                    
        }

 

 function sum($field){
        $result = mysql_query("SELECT SUM(`" . $field . "`) as count FROM  `user_data`;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        $output =  $item['count'];
        echo $output;
    }

 
    
    function new_registations($days){
        $result = mysql_query("SELECT COUNT(*) FROM (SELECT  DATE_FORMAT(registration_date, '%m/%d/%Y')FROM    `user_data` WHERE   registration_date BETWEEN NOW() - INTERVAL ". $days ." DAY AND NOW()) AS count;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        
        $new_reg = $item['COUNT(*)'];
         echo $new_reg;
       
    }
    
    function total_reg(){
        $result = mysql_query("SELECT COUNT(*) FROM `user_data`;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        
        $total_reg_user = $item['COUNT(*)'];
        $total_reg_user = $total_reg_user - 101;
        echo $total_reg_user;
    }

?>

