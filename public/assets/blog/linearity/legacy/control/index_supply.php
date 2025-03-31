<?php
// Konstanten zur Datenbankverbindung
    define('DATABASE_USERNAME', 'root');
    define('DATABASE_PASSWORD', 'Nor215rington');
    define('DATABASE_ADDRESS', 'localhost');
    define('DATABASE_NAME', 'Linearity');
//Funktion zur Anmeldung und Auswahl Datenbank 
    
    $days = 1;

    function connect() {
        mysql_connect(DATABASE_ADDRESS, DATABASE_USERNAME, DATABASE_PASSWORD) or 
             die("Error:".mysql_error());
                
        mysql_select_db(DATABASE_NAME) or
            die("Error:".mysql_error());
    }

    connect();
    
    function top10_allover(){
        $i = 0;
        $query = "SELECT `username`,`score` FROM `default_level` ORDER BY `score` DESC, `username` ASC LIMIT 0,5;";
        $result = mysql_query($query) or die("Error:".mysql_error());
        
        while ($i < 6){
            $item = mysql_fetch_array($result);
            echo $item['username'];
            echo "   ";
            echo $item['score'];
            echo "<br/>";
            $i++;
        }
    }
    
    function top10_week(){
         $i = 0;
        $query = "SELECT `username`,`week_hg` FROM `default_level` ORDER BY `week_hg` DESC, `username` ASC LIMIT 0,5;";
        $result = mysql_query($query) or die("Error:".mysql_error());
        
        while ($i < 6){
            $item = mysql_fetch_array($result);
            echo $item['username'];
            echo "   ";
            echo $item['week_hg'];
            echo "<br/>";
            $i++;
        } 
    }

    function top10_day(){
          $i = 0;
        $query = "SELECT `username`,`day_hg` FROM `default_level` ORDER BY `day_hg` DESC, `username` ASC LIMIT 0,5;";
        $result = mysql_query($query) or die("Error:".mysql_error());
        
        while ($i < 6){
            $item = mysql_fetch_array($result);
            echo $item['username'];
            echo "   ";
            echo $item['day_hg'];
            echo "<br/>";
            $i++;
        }
    }
    
    function sum($field){
        $result = mysql_query("SELECT SUM(`" . $field . "`) as count FROM  `default_level`;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        $output =  $item['count'];
        echo $output;
    }

 
    
    function new_registations($days){
        $result = mysql_query("SELECT COUNT(*) FROM (SELECT  DATE_FORMAT(registration_date, '%m/%d/%Y')FROM    `default_level` WHERE   registration_date BETWEEN NOW() - INTERVAL ". $days ." DAY AND NOW()) AS count;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        
        $new_reg = $item['COUNT(*)'];
         echo $new_reg;
       
    }
    
    function total_reg(){
        $result = mysql_query("SELECT COUNT(*) FROM `default_level`;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        
        $total_reg_user = $item['COUNT(*)'];
        $total_reg_user = $total_reg_user - 101;
        echo $total_reg_user;
    }

?>