<?php
    session_start();
    /* REMOVE THE FOLLOWING LINES IN PRODUCTION ENVIRONMENT */
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    /*                                                      */
    
    require_once("helpers/startup.php");
    
    
    //##########################################################################
    // COOKIE MANAGEMENT
    // First cookie is user/system preferences
    // Second cookie is current status, history, filter settings etc.
    $myDomain = preg_replace("/^[^.]*.([^.]*).(.*)$/", '1.2', $_SERVER['HTTP_HOST']);
    $setDomain = ($_SERVER['HTTP_HOST']) != "localhost" ? ".$myDomain" : false;
    //print_r($prefs);
    $cookieOptions=array(
        "expires"=>time()+3600*24*(2),
        "path"=>'/',
        "domain"=>$setDomain,
        "secure"=>false,
        "httponly"=>false,
        "samesite"=>"Strict"
    );
    
    // Read status cookie
    $status=isset($_COOKIE['OpenCaseTrackerStatus']) ? $_COOKIE['OpenCaseTrackerStatus'] : array();
    if(!is_array($status)) {
        $status=stripslashes($status);
        $status=json_decode($status, true);
        if(empty($status)) {
            $status=array("caseviews"=>array());
        }
        if(isset($_GET['case'])) {
            if(isset($status['caseviews'][0]) && $status['caseviews'][0] != $_GET['case']) {
                array_unshift($status['caseviews'], $_GET['case']);
            }
            if(isset($status['caseviews']) && count($status['caseviews']) > 10) {
                array_pop($status['caseviews']);
            }
        }
    }

    
    // Make any changes/alterations to status cookie
        
    if(PHP_VERSION_ID < 70300) {
        setCookie("OpenCaseTrackerSystem", json_encode($_SESSION), $cookieOptions['expires'], $cookieOptions['path']."; samesite=".$cookieOptions['samesite'], $cookieOptions['domain'], $cookieOptions['secure'], $cookieOptions['httponly']);
        setCookie("OpenCaseTrackerStatus", json_encode($status), $cookieOptions['expires'], $cookieOptions['path']."; samesite=".$cookieOptions['samesite'], $cookieOptions['domain'], $cookieOptions['secure'], $cookieOptions['httponly']);
    } else {
        setCookie("OpenCaseTrackerSystem", json_encode($_SESSION), $cookieOptions);
        setCookie("OpenCaseTrackerStatus", json_encode($status), $cookieOptions);
    }
    
    
    
    
    
    
    
    
    
    // #########################################################################
        
    $user_id=isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    $user_name=isset($_SESSION['user_name']) ? $_SESSION['user_name'] : null;
    $user_real_name=isset($_SESSION['real_name']) ? $_SESSION['real_name'] : null;
    $is_admin=isset($_SESSION['is_admin']) ? $_SESSION['is_admin'] : null;
    //NAVIGATION
    $page=isset($_GET['page']) ? $_GET['page'] : "dashboard";
    
    //Some useful values for each page
    $todaystart=mktime(0, 0, 0, date("m"), date("d"), date("Y"));
    $todayend=mktime(23,59,59, date("m"), date("d"), date("Y"));
    
?>
<html>
    <head>
        <title>
            OpenCaseTracker 3
        </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">        
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/default.css" />
    <script src="js/jquery/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="js/jquery/jquery-ui-1.12.1/jquery-ui.min.css" />
    <script src="js/jquery/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
    </script>
    <script src="js/default.js"></script>
    <script src="js/index.js"></script>
    <script>
        globals=getSettings();
        status=getStatus();    
    </script>
    </head>
    <body>

    <input type='hidden' name='today_start' id='today_start' value='<?php echo $todaystart ?>' />
    <input type='hidden' name='today_end' id='today_end' value='<?php echo $todayend ?>' />
    
    <input type='hidden' name='attachments_dir' id='attachments_dir' value='/var/attachments/' />
        <?php
            if(!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']){
                include("pages/login.php");
            } else {
            ?>
         
            <?php
                include("pages/navbar.php");
            ?>

            <?php
                include("pages/header.php");
            ?>
            
            <?php
                include("pages/".$page.".php");
            ?>
            
            <?php    
            }
            ?>

    </body>
</html>
