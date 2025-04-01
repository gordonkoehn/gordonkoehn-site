<?php
#test wenn true umgeht key sicherung
    $test = false;
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
    
    
    $key = 1;

    function WWWKey($args) {        //generiert key aus url-parametern und zeit                   
      global $key;
        //echo count($args)."</br>";
       // print_r ($args);
       for ($i = 0; $i < count($args); $i++) {
           //echo $args[$i]; // gibt die inputs aus
           //echo "</br>";
           
            $numberOfCurrentString = 0;
                //echo "</br>"."Argument:".$args[$i]."</br>";
                for ($j = 0; $j < strlen($args[$i]); $j++) {
                    $numberOfCurrentString += ord($args[$i][$j]);
                }
           
            //echo $numberOfCurrentString;
            $number = sqrt(abs(cos($numberOfCurrentString)));
            
            $number2 = $number * 100000;
           
            //$key *= $number2%1000;
            
            if($number2%100 != 0){
                $key *= $number2%100;
            }
           else
           {
                $key *= 78;
           }
            //echo "key: ".$key."</br>";
       }
       
       
    }
  
//Variablen für WWWKey()
    $hours = (time()/3600);                  //gibt Zeitvarriabel aus
    $hours = floor($hours);
    $args;


//deklariert alle Parameter der Url
    $urlkey = $_GET['key'];
        
    $modus = $_GET['modus'];

    $query = "";
    $sortedby = "";

    $username = $_GET['username'];
    $input = $_GET['input'];
    $value = $_GET['value'];
    $field = $_GET['field'];
    #
    $allover = $_GET['allover']; 
    $week = $_GET['week'];
    $day = $_GET['day'];

    
    $output = $_GET['output']; //eg.: score by username or score, rank, rank_week, rank_days
    $rank =$_GET['rank']; 
    


        function keyinput($hours) {
            global $modus, $username, $output, $input, $value, $args, $allover, $week, $day, $field;
                //$inputs werden gebildet mit den url-parameter
                    switch ($modus) {
                          case "get":
                                //modus=get&username=jep7&output=score
                                    $input1 = $modus;
                                    $input2 = $username;
                                    $input3 = $output;
                                    //array wird mit werden parameter übergeben
                                    $args = array($input1, $input2, $input3, $hours.""); 
                                break;
                            case "set":
                                //modus=set&input=username&value=esel&username=GrandKo
                                    $input1 = $modus;
                                    $input2 = $input;
                                    $input3 = $value;
                                    $input4 = $username;
                                    //array wird mit werden parameter übergeben
                                    $args = array($input1, $input2, $input3, $input4, $hours."");
                                break;
                            case "create_user":
                                //modus=create_user&username=hanelore69
                                    $input1 = $modus;
                                    $input2 = $username;
                                    //array wird mit werden parameter übergeben
                                    $args = array($input1, $input2, $hours.""); 
                                break;
                            case "get_rank":
                                //modus=get_rank&username=jep7&output=rank
                                    $input1 = $modus;
                                    $input2 = $username;
                                    $input3 = $field;
                                    //array wird mit werden parameter übergeben
                                    $args = array($input1, $input2, $input3, $hours.""); 
                                break;
                            case "retrieve":
                                //modus=retrieve&output=rank
                                    $input1 = $modus;
                                    $input2 = $field;
                                    //array wird mit werden parameter übergeben
                                    $args = array($input1, $input2, $hours.""); 
                                break;
                            case "set_highscore":
                                    $input1 = $modus;
                                    $input2 = $username;
                                    $input3 = $allover;
                                    //echo "allover: ".$input3;
                                    $input4 = $week;
                                    //echo "week: ".$input4;                                  
                                    $input5 = $day;
                                    //echo "day: ".$input5;
                                    //array wird mit werden parameter übergeben
                                    $args = array($input1, $input2, $input3, $input4, $input5, $hours.""); 
                                break;
                            default:
                                echo "fail";
                    } 
        }

//Funktionsaufruf mit args übergabe --> Key wird generiert
        
        //berechnet key für meine Zeit
        keyinput($hours);
         WWWKey($args);
        $currentkey = $key;
        //echo $currentkey."</br>";
        //berechnet key für letzte Stunde
        $key = 1;
        $hours--;
        keyinput($hours);
        WWWKey($args); 
        $latelykey = $key;
        //echo $latelykey;
        

        //echo $currentkey."</br>".$latelykey."</br>"; //gibt zu Testzwecken die aktuell gültigen keys aus

//verwehrt Zugang bei falschem key
    if (($urlkey == $currentkey) or ($urlkey == $latelykey) or ($test)) {   //gewährt nur zugang wenn entweder der aktuelle oder der key von vor einer stunde übergeben wurde 
        // stellt Verbindung zur Datenbank.Tabelle her
            connect();
        
/*      function sortedby (){
          global  $output, $sortedby;
            
            if ($output == "rank"){$sortedby = "score";}
            elseif ($output == "rank_week") {$sortedby = "week_hg";}
            elseif ($output == "rank_day") {$sortedby = "day_hg";}
            else {
                echo "<h1>shut up<h2>";
                echo "<br/><br/>";
                echo "possible parameter: 'rank', 'rank_week', 'rank_day'";}
      }*/

      function split_string ($string) {
            #$string  = "day_0,day_1";
            $string_splitted = explode(",", $string);
            return $string_splitted;
      }
        
        
      function get () {   
            global $query, $output, $username; //verschafft dieser Funktion zurgiff auf die globalen Varriablen
          
            $query = "SELECT `". $output ."` FROM `user_data` WHERE `username`='". $username ."';";
            query();
        
        }

        function set () {
           global $input, $value, $query, $username;
            
          
             
            $query = "UPDATE  `Linearity`.`user_data` SET  `".$input."` =  '" . $value . "' WHERE  `user_data`.`username` =  '" . $username . "';";
            // echo $query;	
            query();
            
    
        }

        function set_highscore () {
            global $allover, $week, $day, $query, $username;

            $i = 0;
            while ($i < 3) {
                #0=allover #1=week #2=day
                switch ($i) {
                    case "0":
                        $awd = "allover";
                        $string_splitted = split_string($allover);
                        $length = sizeof(split_string($allover));
                        $length--;
                        break;
                    case "1":
                        $awd = "week";
                        $string_splitted = split_string($week);
                        $length = sizeof(split_string($week));
                        $length--;
                        break;
                    case "2":
                        $awd = "day";
                        $string_splitted = split_string($day);
                        $length = sizeof(split_string($day));
                        $length--;
                        break;
                    default:
                        echo "fail";
                            }
                #echo $i."</br>";
                #echo $length."</br>";

                while ($length >= 0) {
                  $query = "UPDATE `Linearity`.`user_data` SET  `".$awd."_".$length."` =  '" . $string_splitted[$length]. "' WHERE  `user_data`.`username` =  '" . $username . "';";
          
                    #echo $query."</br>";
                    query ();
                    //echo $query."</br>";
                    $length--;
                }
                unset($string_splitted);
                
                $i++;
            }

            
        }

        function create_user (){
            global $query, $username;
            
            $query = "INSERT INTO user_data (username) VALUES ('" . $username . "')" ;
            query ();
            //create user - re:username
        }

        function get_rank () {
            global $query, $username, $field;
            
            
            $query = "SELECT `x`.`rank` FROM (SELECT `t`.`username`,`t`.`". $field ."`, @rownum := @rownum + 1 AS rank FROM (SELECT `username`,`". $field ."` FROM `user_data` ORDER BY `". $field ."` DESC, `username` ASC) `t`, (SELECT @rownum := 0) `r`) `x` WHERE `x`.`username` ='". $username ."';";
            
            query ();
            //rank
            //ransk day
            
            //rank week
        }

        function retrieve () {
            global $query, $output, $field;
            
            $query = "SELECT `username`,`". $field ."` FROM `user_data` ORDER BY `". $field ."` DESC, `username` ASC LIMIT 0,100;";
            
            query();
            //all over
            //day
            //week
        }
        
        function query () {
            global $query, $modus, $output, $sortedby, $field;  
                        
            switch ($modus) {
                case ("get" or "get_rank" or "retrieve"):
                        $result = mysql_query($query) or die("Error:".mysql_error());
                        $item = mysql_fetch_array($result);
                        switch ($modus){
                            case "get":
                                echo $item[$output];
                                break;
                            case "get_rank":
                                echo $item['rank'];
                                break;
                            case "retrieve":
				                $i = 0;
                                while ($i < 101) {      
                                            echo $item['username'];
                                            echo "|";
                                            echo $item[$field];                                             
                                            echo ',';
                                            $i = $i + 1;
                                           $item = mysql_fetch_array($result);            
                                } 
                                break;
                         }
                        break;
                case ("set" or "create_user" or "set_highscore"):
			             echo "debug1";
                         mysql_query($query) or die("invalid");
                         echo  "query executed";
                         echo $query."</br>";
                         /* echo "successfully saved"; //irgendwo ist hier ein fehler (also, selbst wenn man die Auskommentierung aufheben würde, würde hier vermutlich nichts passieren)
                         echo "<br/>";
                         echo "<br/>";
                         echo "executed query: ";
                         echo $query;*/
                         break;
                default:
                    echo "massiv error";
            }
        }
        
#================= Main =======================

        switch ($modus) {
            case "get":
                get();
                break;
            case "set":
                set();
                break;
            case "create_user":
                create_user();
                break;
            case "get_rank":
                get_rank();
                break;
            case "retrieve":
                retrieve();
                break;
            case "set_highscore":
                set_highscore();
                break;
            default:
                echo "<h2>)-:    Sorry, I didnt get what you wanted from me<h2/>";
        }
   
    }
    else { //output if no or wrong  key entered
        echo "permission denied";
        echo "</br>";
        echo "key required or wrong";


        //echo "</br>".$currentkey."</br>";
        //echo $latelykey;
    }
     
?>     
