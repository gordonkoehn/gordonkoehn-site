<?php
// Konstanten zur Datenbankverbindung
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

    $metric = true; //<-- true wenn metric db Einträge erstellt werden sollen
    
     $query = "";

    $key = $_GET['key'];
        
    $modus = $_GET['modus']; // day, week, 

if ($key == "Y5UEdst7R2w7mbu") {   //verwehrt Zugang bei falschem key
    connect();
    
//nurse week 
//  -day hg, day seen adds, day games played,
    
    function week() {
        echo "week";
        global $query;
        $query = "UPDATE `user_data` SET 
                `week_hg` = '0',
                `games_played_week` = '0',
                `seen_adds_week` = '0',
                `week_0` = '0',
                `week_1` = '0',
                `week_2` = '0',
                `week_3` = '0',
                `week_4` = '0',
                `week_5` = '0',
                `week_6` = '0',
                `week_7` = '0',
                `week_8` = '0',
                `week_9` = '0',
                `week_10` = '0',
                `week_11` = '0',
                `week_12` = '0',
                `week_13` = '0',
                `week_14` = '0',
                `week_15` = '0',
                `week_16` = '0',
                `week_17` = '0',
                `week_18` = '0',
                `week_19`= '0';";
        query();
    }

//nurse day 
//  -day hg, day seen adds, day games played,
     
    function day() {
        echo "day";
        global $query;
        $query = "UPDATE `user_data` SET 
                `day_hg` = '0',
                `games_played_day` = '0',
                `seen_adds_day` = '0',
                `day_0`= '0',
                `day_1`= '0',
                `day_2`= '0',
                `day_3`= '0',
                `day_4`= '0',
                `day_5`= '0',
                `day_6`= '0',
                `day_7`= '0',
                `day_8`= '0',
                `day_9`= '0',
                `day_10`= '0',
                `day_11`= '0',
                `day_12`= '0',
                `day_13`= '0',
                `day_14`= '0',
                `day_15`= '0',
                `day_16`= '0',
                `day_17`= '0',
                `day_18`= '0',
                `day_19`= '0';";
        query();
    }
    function metric() {
        echo "metric <br/>";
        global $query;
        $result = mysql_query("SELECT COUNT(*) FROM `user_data`;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        
        $total_reg_user = $item['COUNT(*)'];
        $total_reg_user = $total_reg_user - 101;
        echo $total_reg_user;
        echo "<br/>";
        
        $result = mysql_query("SELECT SUM(  `games_played_day` ) AS total FROM  `user_data`;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        
        $played_games = $item['total'];
        echo $played_games;
        echo "<br/>";
        
        $result = mysql_query("SELECT SUM(  `seen_adds_day` ) AS total FROM  `user_data`;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        
        $seen_adds = $item['total'];
        echo $seen_adds;
        echo "<br/>";
        
        $result = mysql_query("SELECT COUNT(*) FROM (SELECT  DATE_FORMAT(registration_date, '%m/%d/%Y')FROM    `user_data` WHERE   registration_date BETWEEN NOW() - INTERVAL 1 DAY AND NOW()) AS count;") or die("Error:".mysql_error());
        $item = mysql_fetch_array($result) ;
        
        $new_reg = $item['COUNT(*)'];
        echo $new_reg;
        echo "<br/>";
        
        
        
        $query = "INSERT INTO `metric`( `total_reg_user`, `seen_adds`, `played_games`, `new_reg`) VALUES (" .$total_reg_user. ",".$seen_adds.",". $played_games .",". $new_reg.")";
        echo $query;
        echo "<br/>";
        query();
    }
    
    
    function system_string($str){
         ob_start();
        system($str);
        $output = ob_get_clean();

        return $output;
    }
    
    function status() {
        global $query;
       
        $CPU_Usage = round(exec("grep 'cpu ' /proc/stat | awk '{usage=($2+$4)*100/($2+$4+$5)} END {print usage \"%\"}'"), 2);               
        $RAM_Usage = exec(" free | grep Mem | awk '{print $3/$2 * 100.0}'");
        $CPU_Temp = (exec('cat /sys/class/thermal/thermal_zone0/temp')/1000);
            
        $Top10CPU = system_string("ps auxww --sort=-pcpu|head -n10");
        $Top10mem = system_string("ps auxww --sort=-rss|head -n10");      
        $Free_mem = system_string("free -m");
        $Interface_status = system_string("/sbin/ifconfig");
        $Netword_summary = system_string("netstat -s");
        $Uptime = system_string("uptime");
            
            
        $query ="INSERT INTO `Linearity`.`status`(`CPU_Usage`, `RAM_Usage`, `CPU_Temp`, `Top10mem`, `Top10CPU`, `Free_mem`, `Interface_status`, `Network_summary`, `Uptime`) VALUES (\"".$CPU_Usage."\",\"".$RAM_Usage."\",\"".$CPU_Temp."\",\"".$Top10mem."\",\"".$Top10CPU."\",\"".$Free_mem."\",\"".$Interface_status."\",\"".$Netword_summary."\",\"".$Uptime."\");"; 
        
        echo $query."</br></br>";
        
        query();
    }
        
       function query () {
            global $query;
                mysql_query($query) or die("Error:".mysql_error());    
                echo "all updated - all resetted";
        }
    
    switch ($modus) {
            case "metric":
                metric();
                break;
            case "week":
                week();
                break;
            case "day":
                day();
                break;
            case "status":
                status();
                echo "called";
                break;
            default:
                echo "<h2>)-:    Sorry, I didnt get what you wanted from me<h2/>";
        }

}
 else { //output if no or wrong  key entered
        echo "permission denied";
        echo "</br>";
        echo "key required";
    }

?>     