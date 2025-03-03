


<?php

/*
***************************************************
*** Online Examination System                   ***
***---------------------------------------------***
*** License: GNU General Public License V.3     ***
*** Author: Manjunath Baddi                     ***
*** Title: Test Conductor                       ***
***************************************************
*/

error_reporting(0);
session_start();
include_once 'oesdb.php';
$final=false;
if(!isset($_SESSION['stdname'])) {
    $_GLOBALS['message']="Session Timeout.Click here to <a href=\"index.php\">Re-LogIn</a>";
}
else if(isset($_REQUEST['logout']))
{
    //Log out and redirect login page
       unset($_SESSION['stdname']);
       header('Location: index.php');

}
else if(isset($_REQUEST['dashboard'])){
    //redirect to dashboard
    //
     header('Location: stdwelcome.php');

    }else if(isset($_REQUEST['next']) || isset($_REQUEST['summary']) || isset($_REQUEST['viewsummary']))
    {
        //next question
        $answer='unanswered';
        if(time()<strtotime($_SESSION['endtime']))
        {
            if(isset($_REQUEST['markreview']))
            {
                $answer='review';
            }
            else if(isset($_REQUEST['answer']))
            {
                $answer='answered';
            }
            else
            {
                $answer='unanswered';
            }
            if(strcmp($answer,"unanswered")!=0)
            {
                if(strcmp($answer,"answered")==0)
                {
                    $query="update studentquestion set answered='answered',stdanswer='".htmlspecialchars($_REQUEST['answer'],ENT_QUOTES)."' where stdid=".$_SESSION['stdid']." and testid=".$_SESSION['testid']." and qnid=".$_SESSION['qn'].";";
                }
                else
                {
                    $query="update studentquestion set answered='review',stdanswer='".htmlspecialchars($_REQUEST['answer'],ENT_QUOTES)."' where stdid=".$_SESSION['stdid']." and testid=".$_SESSION['testid']." and qnid=".$_SESSION['qn'].";";
                }
                if(!executeQuery($query))
                {
                // to do
                $_GLOBALS['message']="Your previous answer is not updated.Please answer once again";
                }
                closedb();
            }
            if(isset($_REQUEST['viewsummary']))
            {
                 header('Location: summary.php');
            }
            if(isset($_REQUEST['summary']))
             {
                     //summary page
                     header('Location: summary.php');
             }
        }
        if((int)$_SESSION['qn']<(int)$_SESSION['tqn'])
        {
        $_SESSION['qn']=$_SESSION['qn']+1;
       
        }
        if((int)$_SESSION['qn']==(int)$_SESSION['tqn'])
        {
           $final=true;
        }

    }
    else if(isset($_REQUEST['previous']))
    {
    // Perform the changes for current question
        $answer='unanswered';
        if(time()<strtotime($_SESSION['endtime']))
        {
            if(isset($_REQUEST['markreview']))
            {
                $answer='review';
            }
            else if(isset($_REQUEST['answer']))
            {
                $answer='answered';
            }
            else
            {
                $answer='unanswered';
            }
            if(strcmp($answer,"unanswered")!=0)
            {
                if(strcmp($answer,"answered")==0)
                {
                    $query="update studentquestion set answered='answered',stdanswer='".htmlspecialchars($_REQUEST['answer'],ENT_QUOTES)."' where stdid=".$_SESSION['stdid']." and testid=".$_SESSION['testid']." and qnid=".$_SESSION['qn'].";";
                }
                else
                {
                    $query="update studentquestion set answered='review',stdanswer='".htmlspecialchars($_REQUEST['answer'],ENT_QUOTES)."' where stdid=".$_SESSION['stdid']." and testid=".$_SESSION['testid']." and qnid=".$_SESSION['qn'].";";
                }
                if(!executeQuery($query))
                {
                // to do
                $_GLOBALS['message']="Your previous answer is not updated.Please answer once again";
                }
                closedb();
            }
        }
        //previous question
        if((int)$_SESSION['qn']>1)
        {
            $_SESSION['qn']=$_SESSION['qn']-1;
        }

    }
    else if(isset($_REQUEST['fs']))
    {
        //Final Submission
        header('Location: testack.php');
    }
?>
<?php
header("Cache-Control: no-cache, must-revalidate");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>OES-Test Conducter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE"/>
    <meta http-equiv="PRAGMA" content="NO-CACHE"/>
    <meta name="ROBOTS" content="NONE"/>
    <link rel="stylesheet" type="text/css" href="oes.css"/>
    <script type="text/javascript" src="validate.js" ></script>
    <script type="text/javascript" src="cdtimer.js" ></script>
    <script type="text/javascript" >
    <!--
        <?php
                $elapsed=time()-strtotime($_SESSION['starttime']);
                if(((int)$elapsed/60)<(int)$_SESSION['duration'])
                {
                    $result=executeQuery("select TIME_FORMAT(TIMEDIFF(endtime,CURRENT_TIMESTAMP),'%H') as hour,TIME_FORMAT(TIMEDIFF(endtime,CURRENT_TIMESTAMP),'%i') as min,TIME_FORMAT(TIMEDIFF(endtime,CURRENT_TIMESTAMP),'%s') as sec from studenttest where stdid=".$_SESSION['stdid']." and testid=".$_SESSION['testid'].";");
                    if($rslt=mysql_fetch_array($result))
                    {
                     echo "var hour=".$rslt['hour'].";";
                     echo "var min=".$rslt['min'].";";
                     echo "var sec=".$rslt['sec'].";";
                    }
                    else
                    {
                        $_GLOBALS['message']="Try Again";
                    }
                    closedb();
                }
                else
                {
                    echo "var sec=01;var min=00;var hour=00;";
                }
        ?>
        
    -->
    </script>

    </head>
  <body >
      <noscript><h2>For the proper Functionality, You must use Javascript enabled Browser</h2></noscript>
       <?php

        if($_GLOBALS['message']) {
            echo "<div class=\"message\">".$_GLOBALS['message']."</div>";
        }
        ?>
      <div id="container">
      <div class="header">
                <img style="margin:10px 2px 2px 10px;float:left;" height="80" width="200" src="images/logo.gif" alt="OES"/><h3 class="headtext"> &nbsp;Online Examination System </h3><h4 style="color:#ffffff;text-align:center;margin:0 0 5px 5px;"><i>...because Examination Matters</i></h4>
            </div>
           <form id="testconducter" action="testconducter.php" method="post">
          <div class="menubar" style="text-align:center;">
              <h2 style="font-family:helvetica,sans-serif;font-weight:bolder;font-size:120%;color:#f50000;padding-top:0.3em;letter-spacing:1px;">OES:Test Conducter</h2>
          </div>
      <div class="page">
          <?php
         
          if(isset($_SESSION['stdname']))
          {
                $result=executeQuery("select stdanswer,answered from studentquestion where stdid=".$_SESSION['stdid']." and testid=".$_SESSION['testid']." and qnid=".$_SESSION['qn'].";");
                $r1=mysql_fetch_array($result);
                $result=executeQuery("select * from question where testid=".$_SESSION['testid']." and qnid=".$_SESSION['qn'].";");
                $r=mysql_fetch_array($result);
          ?>
          <div class="tc">

              <table border="0" width="100%" class="ntab">
                  <tr>
                      <th style="width:40%;"><h3><span id="timer" class="timerclass"></span></h3></th>
                      <th style="width:40%;"><h4 style="color: #af0a36;">Question No: <?php echo $_SESSION['qn']; ?> </h4></th>
                      <th ~dulla^@204~ ~dulla^@204~ le="color: #af0a36;"><input type="che~dulla^@204~ markreview" value="mark"> Mark for Re~dulla^@204~ /h4></th>
                  </tr>
   ~dulla^@204~ table>
             <textarea cols="1~dulla^@204~ name="question" readonly style="width~dulla^@204~ lign:left;margin-left:2%;margin-top:2~dulla^@204~ 120%;font-weight:bold;margin-bottom:0~dulla^@204~ f;padding:2px 2px 2px 2px;"><?php ech~dulla^@204~ chars_decode($r['question'],ENT_QUOTE~dulla^@204~ rea>
              <table border="0" ~dulla^@204~ class="ntab">
                  <tr><~dulla^@204~ ></tr>
                  <tr><td >1. ~dulla^@204~ radio" name="answer" value="optiona" ~dulla^@204~ cmp(htmlspecialchars_decode($r1['answ~dulla^@204~ OTES),"review")==0 ||strcmp(htmlspeci~dulla^@204~ e($r1['answered'],ENT_QUOTES),"answer~dulla^@204~ rcmp(htmlspecialchars_decode($r1['std~dulla^@204~ QUOTES),"optiona")==0 ){echo "checked~dulla^@204~  echo htmlspecialchars_decode($r['opt~dulla^@204~ OTES); ?></input></td></tr>
         ~dulla^@204~ <td >2. <input type="radio" name="ans~dulla^@204~ ptionb" <?php if((strcmp(htmlspecialc~dulla^@204~ r1['answered'],ENT_QUOTES),"review")=~dulla^@204~ tmlspecialchars_decode($r1['answered'~dulla^@204~ ,"answered")==0)&& strcmp(htmlspecial~dulla^@204~ $r1['stdanswer'],ENT_QUOTES),"optionb~dulla^@204~ "checked";} ?>> <?php echo htmlspecia~dulla^@204~ ($r['optionb'],ENT_QUOTES); ?></input~dulla^@204~                  <tr><td >3. <input t~dulla^@204~ ame="answer" value="optionc" <?php if~dulla^@204~ specialchars_decode($r1['answered'],E~dulla^@204~ eview")==0 ||strcmp(htmlspecialchars_~dulla^@204~ nswered'],ENT_QUOTES),"answered")==0)~dulla^@204~ lspecialchars_decode($r1['stdanswer']~dulla^@204~ "optionc")==0 ){echo "checked";} ?>> ~dulla^@204~ mlspecialchars_decode($r['optionc'],E~dulla^@204~ ></input></td></tr>
                 ~dulla^@204~ <input type="radio" name="answer" val~dulla^@204~ <?php if((strcmp(htmlspecialchars_dec~dulla^@204~ ered'],ENT_QUOTES),"review")==0 ||str~dulla^@204~ alchars_decode($r1['answered'],ENT_QU~dulla^@204~ ed")==0)&& strcmp(htmlspecialchars_de~dulla^@204~ answer'],ENT_QUOTES),"optiond")==0 ){~dulla^@204~ ";} ?>> <?php echo htmlspecialchars_d~dulla^@204~ iond'],ENT_QUOTES); ?></input></td></~dulla^@204~          <tr><td>&nbsp;</td></tr>
   ~dulla^@204~   <tr>
                      <th styl~dulla^@204~ "><h4><input type="submit" name="<?ph~dulla^@204~ true){ echo "viewsummary" ;}else{ ech~dulla^@204~ " value="<?php if($final==true){ echo~dulla^@204~ y" ;}else{ echo "Next";} ?>" class="s~dulla^@204~ </th>
                      <th style~dulla^@204~ ext-align:right;"><h4><input type="su~dulla^@204~ revious" value="Previous" class="subb~dulla^@204~ h>
                      <th style="w~dulla^@204~ align:right;"><h4><input type="submit~dulla^@204~ ry" value="Summary" class="subbtn" />~dulla^@204~                 </tr>
               ~dulla^@204~      </table>
              

       ~dulla^@204~        <?php
          closedb();
   ~dulla^@204~       ?>
      </div>

           </f~dulla^@204~ v id="footer">
          <p style="fo~dulla^@204~ olor:#ffffff;"> Developed By-<b>Manju~dulla^@204~ ><br/> </p><p>Released under the GNU ~dulla^@204~ c License v.3</p>
      </div>
      </div>
  </body>
</html>

