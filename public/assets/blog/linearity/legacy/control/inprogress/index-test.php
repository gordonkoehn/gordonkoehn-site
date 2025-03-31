<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="NyxX_favicon.ico" />

    <title>Control Linearity</title>

    <!-- Bootstrap core CSS -->
    <link href="Theme%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="Theme%20Template%20for%20Bootstrap_files/bootstrap-theme.css" rel="stylesheet">
    
    <link href="supply.css" rel="stylesheet">  


    <!-- Custom styles for this template -->
    <link href="Theme%20Template%20for%20Bootstrap_files/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Theme%20Template%20for%20Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
        $supply = "function_supply.php";
        include $supply;
        //require 'function_supply.php'; //muss ich später noch 
  
        header("refresh: 30;");
        ?>

    
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Control Linearity</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
            <li class="active"><a href="https://www.google.com/analytics/web/?et=&authuser=1#report/app-visitors-overview/a62491892w97678518p101785800/" target="_blank"><img src="img/google_analytics.png" class="img-rounded"></a></li>
            <li><a href="http://nyxxstudios.com/phpmyadmin/index.php?token=1518b5e00d3afb5488a994bb5f3a7371" target="_blank"><img src="img/phpmyadmin.png" class="img-rounded"></a></li>
            <li><a href="https://unityads.unity3d.com/admin/#/" target="_blank"><img src="img/unity.jpg" class="img-rounded"></a></li>
             <li><a href="https://play.google.com/apps/publish/?dev_acc=07132712396775735458#AppListPlace" target="_blank"><img src="img/Play_Store_icon.png" class="img-rounded"></a></li>
            <li><a href="https://sealion.com/app#orgs/55ccb897e2c3efe55100832a/overview/?metric=loadAvg15Min,cpuUsage,memUsage" target="_blank"><img src="img/sealion.png" class="img-rounded"></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Advanced Options<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><b>Not so far!!</b></a></li>
                <li><a href="#">Shut down</a></li>
                <li><a href="#">Reboot</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Refresh</li>
                <li><a href="#">all 30 sek</a></li>
                <li><a href="#">all 10 sek</a></li>
                <li><a href="#">all 5 sek</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      
   

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1 class = "text-center">No Idea???.</h1>
        <p class = "text-center">Quorra</p>
      </div>
    
        
         <!-- Example row of columns -->
              <div class="row">
                <div class="col-lg-4">
                  <h2>Server Status</h2>
               <div class="panel panel-default" id="panel1">
        <div class="panel-heading">
             <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseOne" 
           href="#collapseOne">
            Good
        </a>
      </h4>

        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                
             <p class="text-center"><kbd>CPU Usage</kbd></p>
                   <p class="text-center"><b><?php
                    echo round(exec("grep 'cpu ' /proc/stat | awk '{usage=($2+$4)*100/($2+$4+$5)} END {print usage \"%\"}'"), 2);
                    echo "%";
                ?></b></p>
            <p class="text-center"><kbd>CPU Temp</kbd></p>    
              <p class="text-center"><b> 
                  <?php
                $temp = exec('cat /sys/class/thermal/thermal_zone0/temp');
                echo $temp/1000 ."°C";
                ?></b></p>
                 <p class="text-center"><kbd>Uptime</kbd></p>    
              <p class="text-center"><b> 
                  <?php
                $uptime = exec("uptime");
                echo $uptime;
                ?></b></p>
                    
                 <p class="text-center"><kbd>Memory Usage(ram)</kbd></p>    
              <p class="text-center"><b> 
                  <?php
                 echo exec(" free | grep Mem | awk '{print $3/$2 * 100.0}'")."%";
                ?></b></p>
            </div>
        </div>
    </div>
                </div>
                <div class="col-lg-4">
                  <h2>Game Statistics</h2>
                  <div class="panel panel-default" id="panel2 ">
        <div class="panel-heading">
             <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseTwo" 
           href="#collapseTwo" class="collapsed">
          hype
        </a>
      </h4>

        </div>
        <div id="collapseTwo" class="panel-collapse collapse in">
            <div class="panel-body">
                 <div class="row-fluid">
                     <div class="row-fluid text-center">
                        <div class="col-lg-4  col-md-3">
                            <p class="bold"><b>ALLOVER</b></p>
                        </div>                
                   
                    <div class="col-lg-4  col-md-3 ">
                           <p class="bold"><b>WEEK</b></p>
                        </div>                
                    
                    <div class="col-lg-4  col-md-3 ">
                           <p class="bold"><b>DAY</b></p>
                        </div>                
                    </div>
                     
                     <br/><br/>
                     <p class="text-center"><kbd>games played</kbd></p>

      
                    
                          <div class="row-fluid text-center">
                        <div class="col-lg-4  col-md-3">
                            <?php
                                sum("games_played");
                                ?>
                        </div>                
                   
                    <div class="col-lg-4  col-md-3 ">
                            <?php
                                sum("games_played_week");
                                ?>
                        </div>                
                    
                    <div class="col-lg-4  col-md-3 ">
                            <?php
                                sum("games_played_day");
                                ?>
                        </div>                
                    </div>
                    <br/>
                      <hr>
                      <div class="row-fluid">
                     <p class="text-center"><kbd>Registrations</kbd></p>
                     <div class="row-fluid text-center">
                        <div class="col-lg-4  col-md-3">
                            <?php
                                total_reg();
                                ?>
                        </div>                
                   
                    <div class="col-lg-4  col-md-3 ">
                            <?php
                                new_registations(7)
                            ?>
                        </div>                
                    
                    <div class="col-lg-4  col-md-3 ">
                           <?php
                                new_registations(1)
                            ?>
                        </div>                
                    </div>
                    <br/>
                      <hr>      
                      <div class="row-fluid">
                    <div class="text-center">      
                     <p class="text-center"><kbd>Ads seen</kbd></p>
                            <div class="col-lg-4  col-md-3">
                            <?php
                                sum("seen_adds");
                                ?>
                        </div>                
                   
                    <div class="col-lg-4  col-md-3 ">
                           <?php
                                sum("seen_adds_week");
                                ?>
                        </div>                
                    
                    <div class="col-lg-4  col-md-3 ">
                            <?php
                                sum("seen_adds_day");
                                ?>
                        </div>
                        
                    </div> 
                </div>
                <br/> 
                </br>
            </div>
        </div>
    </div>
</div>
               </div>
</div>
                <div class="col-lg-4">
                  <h2>Highscores</h2>
                  <div class="panel panel-default" id="panel3">
        <div class="panel-heading">
             <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseThree"
           href="#collapseThree" class="collapsed">
         all realistic
        </a>
      </h4>

        </div>
        <div id="collapseThree" class="panel-collapse collapse in">
            <div class="panel-body">
                <div class="container">
                  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#allover">allover</button>
                  <div id="allover" class="collapse">
 
                      </br>
                        <table>
                            <tr>
                                <th>-Level Name- </th>
                                
                                 <th>-Username-</th>
                                
                                 <th>-Score-</th>
                            </tr>
                          <tr>
                              <?php
                            best("allover_0");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("allover_1");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("allover_2");
                                ?>
                          </tr>
                             <tr>
                              <?php
                            best("allover_3");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("allover_4");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("allover_5");
                                ?>
                          </tr>
                        <tr>
                              <?php
                            best("allover_6");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("allover_7");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("allover_8");
                                ?>
                          </tr>
                             <tr>
                              <?php
                            best("allover_9");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("allover_10");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("allover_11");
                                ?>
                          </tr>
                                               <tr>
                              <?php
                            best("allover_12");
                                ?>
                          </tr>
                        </table>
                      
                          </div>
                        </div>
                        </br>
                        <div class="container">
                          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#week">week</button>
                          <div id="week" class="collapse">
                              </br>
                            <table>
                            <tr>
                                <th>-Level Name- </th>
                                
                                 <th>-Username-</th>
                                
                                 <th>-Score-</th>
                            </tr>
                          <tr>
                              <?php
                            best("week_0");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("week_1");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("week_2");
                                ?>
                          </tr>
                             <tr>
                              <?php
                            best("week_3");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("week_4");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("week_5");
                                ?>
                          </tr>
                        <tr>
                              <?php
                            best("week_6");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("week_7");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("week_8");
                                ?>
                          </tr>
                             <tr>
                              <?php
                            best("week_9");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("week_10");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("week_11");
                                ?>
                          </tr>
                                               <tr>
                              <?php
                            best("week_12");
                                ?>
                          </tr>
                        </table>
                          </div>
                        </div>
                           </br>
                       
                        <div class="container">
                          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#day">day</button>
                          <div id="day" class="collapse">
                              </br>
                               <table>
                            <tr>
                                <th>-Level Name- </th>
                                
                                 <th>-Username-</th>
                                
                                 <th>-Score-</th>
                            </tr>
                          <tr>
                              <?php
                            best("day_0");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("day_1");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("day_2");
                                ?>
                          </tr>
                             <tr>
                              <?php
                            best("day_3");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("day_4");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("day_5");
                                ?>
                          </tr>
                        <tr>
                              <?php
                            best("day_6");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("day_7");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("day_8");
                                ?>
                          </tr>
                             <tr>
                              <?php
                            best("day_9");
                                ?>
                          </tr>
                          <tr>
                             <?php
                            best("day_10");
                                ?>
                          </tr>
                          <tr>
                           <?php
                            best("day_11");
                                ?>
                          </tr>
                                               <tr>
                              <?php
                            best("day_12");
                                ?>
                          </tr>
                        </table>
                          </div>
                        </div>
                          </br>


                    </div>
                </div>

            </div>
                </div>
            


              <div class="col-lg-12">
                  <h2>Server Status - More</h2>
               <div class="panel panel-default" id="panel1">
        <div class="panel-heading">
             <h4 class="panel-title">
        <a data-toggle="collapse" data-target="#collapseOne" 
           href="#collapseOne">
            Good
        </a>
      </h4>

        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                
                <kbd>free -m</kbd>
                <?php
                    ob_start();
                    system("free");

                    $output1 = ob_get_clean();

                    echo '<pre>';
                    echo $output1; 
                    echo '</pre>';
                ?>
                
                         <kbd>Top 10 CPU</kbd>
                <?php
                    ob_start();
                    system("ps auxww --sort=-pcpu|head -n10");

                    $output2 = ob_get_clean();

                    echo '<pre>';
                    echo $output2; 
                    echo '</pre>';
                ?>
                
                
                    <kbd>Top 10 Mem</kbd>
                <?php
                    ob_start();
                    system("ps auxww --sort=-rss|head -n10");

                    $output3 = ob_get_clean();

                    echo '<pre>';
                    echo $output3; 
                    echo '</pre>';
                ?>
                
                 <kbd>INTERFACE STATUS</kbd>
                <?php
                    ob_start();
                    system('/sbin/ifconfig');

                    $output4 = ob_get_clean();

                    echo '<pre>';
                    echo $output4; 
                    echo '</pre>';
                ?>

                <kbd>NETWORK SUMMARY</kbd>
                <?php
                    ob_start();
                    system("netstat -s");

                    $output5 = ob_get_clean();

                    echo '<pre>';
                    echo $output5; 
                    echo '</pre>';
                ?>

                
              
            </div>
        </div>
    </div>
                </div>


              </div>
            <hr>
        </br></br>       
                     
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Theme%20Template%20for%20Bootstrap_files/jquery.js"></script>
    <script src="Theme%20Template%20for%20Bootstrap_files/bootstrap.js"></script>
    <script src="Theme%20Template%20for%20Bootstrap_files/docs.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Theme%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

<div data-original-title="Copy to clipboard" title="" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" class="global-zeroclipboard-container" id="global-zeroclipboard-html-bridge">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" height="100%" width="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1440767046792">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="Theme%20Template%20for%20Bootstrap_files/ZeroClipboard.swf" loop="false" menu="false" quality="best" bgcolor="#ffffff" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit" height="100%" width="100%">                </object></div><svg style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;" preserveAspectRatio="none" viewBox="0 0 1140 500" height="500" width="1140"><defs><style type="text/css"></style></defs><text style="font-weight:bold;font-size:57pt;font-family:Arial, Helvetica, Open Sans, sans-serif" y="57" x="0">Thirdslide</text></svg></body></html>