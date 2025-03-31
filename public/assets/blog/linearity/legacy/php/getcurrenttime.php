<?php
    
    $eventTime = $_GET['datetime'];
    
    
    //$eventTime = '2015-09-2 10:25:43';
    $age = time() - strtotime($eventTime);

    echo ($age/60);
    
    

?>