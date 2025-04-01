<?php
    
        ob_start();
        system("free");

        $output = ob_get_clean();

        echo '<pre>';
        echo $output; 
        echo '</pre>';

        echo "<br/>";
        
        ob_start();
        system("free");

        $output1 = ob_get_clean();

        echo '<pre>';
        echo $output1; 
        echo '</pre>';
?>  