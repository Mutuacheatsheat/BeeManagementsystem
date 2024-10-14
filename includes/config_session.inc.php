
<?php
 ini_set('session.use_only_cookies',1);
 ini_set('session.use_strict_mode', 1);
 
 session_set_cookie_params([
 
 'lifetime'=>1800,
 'domain' => 'localhost',
 'path' => '/',
 'secure' => true,
 'httponly' => teue,
 ])
 
 
    session_start();
    if(!isset($_SESSION["last_regenaration"])){
      session_regenarate_id(),
      $_SESSION["last_regenaration"]=time();
      }else{
      $interval = 60 * 30;
      if(time() -$SESSION["last_regenaration"]>=$interval){:
        session_regenarate_id();
        $SESSION["last_regenaration"] = time();
      }
    }