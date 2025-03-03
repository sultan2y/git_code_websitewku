


<?php
/*
 * **************************************************
 * ** Online Examination System                   ***
 * **---------------------------------------------***
 * ** License: GNU General Public License V.3     ***
 * ** Author: Manjunath Baddi                     ***
 * ** Title:  Test Environment Preparation        ***
 * **************************************************
 */

error_reporting(0);
session_start();
include_once 'oesdb.php';
if (!isset($_SESSION['stdname'])) {
    $_GLOBALS['message'] = "Session Timeout.Click here to <a href=\"index.php\">Re-LogIn</a>";
} else if (isset($_SESSION['starttime'])) {
    header('Location: testconducter.php');
} else if (isset($_REQUEST['logout'])) {
    //Log out and redirect login page
    unset($_SESSION['stdname']);
    header('Location: index.php');
} else if (isset($_REQUEST['dashboard'])) {
    //redirect to dashboard
    //
    header('Location: stdwelcome.php');
} else if (isset($_REQUEST['starttest'])) {
    //Prepare the parameters needed for Test Conducter and redirect to test conducter
    if (!empty($_REQUEST['tc'])) {
        $result = executeQuery("select DECODE(testcode,'oespass') as tcode from test where testid=" . $_SESSION['testid'] . ";");

        if ($r = mysql_fetch_array($result)) {
            if (strcmp(htmlspecialchars_decode($r['tcode'], ENT_QUOTES), htmlspecialchars($_REQUEST['tc'], ENT_QUOTES)) != 0) {
                $display = true;
                $_GLOBALS['message'] = "You have entered an Invalid Test Code.Try again.";
            } else {
                //now prepare parameters for Test Conducter and redirect to it.
                //first step: Insert the questions into table

                $result = executeQuery("select * from question where testid=" . $_SESSION['testid'] . " order by qnid;");
                if (mysql_num_rows($result) == 0) {
                    $_GLOBALS['message'] = "Tests questions cannot be selected.Please Try after some time!";
                } else {
                  //  executeQuery("COMMIT");
                    $error = false;
                //    executeQuery("delimiter |");
                 /*   if (!executeQuery("create event " . $_SESSION['stdname'] . time() . "
ON SCHEDULE AT (select endtime from studenttest where stdid=" . $_SESSION['stdid'] . " and testid=" . $_SESSION['testid'] . ") + INTERVAL (select duration from test where testid=" . $_SESSION['testid'] . ") MINUTE
DO update studenttest set correctlyanswered=(select count(*) from studentquestion as sq,question as q where sq.qnid=q.qnid and sq.testid=q.testid and sq.answered='answered' and sq.stdanswer=q.correctanswer and sq.stdid=" . $_SESSION['stdid'] . " and sq.testid=" . $_SESSION['testid'] . "),status='over' where stdid=" . $_SESSION['stdid'] . " and testid=" . $_SESSION['testid'] . "|"))
                        $_GLOBALS['message'] = "error" . mysql_error();
                    executeQuery("delimiter ;");*/
                    if (!executeQuery("insert into studenttest values(" . $_SESSION['stdid'] . "," . $_SESSION['testid'] . ",(select CURRENT_TIMESTAMP),date_add((select CURRENT_TIMESTAMP),INTERVAL (select duration from test where testid=" . $_SESSION['testid'] . ") MINUTE),0,'inprogress')"))
                        $_GLOBALS['message'] = "error" . mysql_error();
                    else {
                        while ($r = mysql_fetch_array($result)) {
                            if (!executeQuery("insert into studentquestion values(" . $_SESSION['stdid'] . "," . $_SESSION['testid'] . "," . $r['qnid'] . ",'unanswered',NULL)")) {
                                $_GLOBALS['message'] = "Failure while preparing questions for you.Try again";
                                $error = true;
                            }
                        }
                        if ($error == true) {
                      //      executeQuery("rollback;");
                        } else {
                            $result = executeQuery("select totalquestions,duration from test where testid=" . $_SESSION['testid'] . ";");
                            $r = mysql_fetch_array($result);
                            $_SESSION['tqn'] = htmlspecialchars_decode($r['totalquestions'], ENT_QUOTES);
                            $_SESSION['duration'] = htmlspecialchars_decode($r['duration'], ENT_QUOTES);
                            $result = executeQuery("select DATE_FORMAT(starttime,'%Y-%m-%d %H:%i:%s') as startt,DATE_FORMAT(endtime,'%Y-%m-%d %H:%i:%s') as endt from studenttest where testid=" . $_SESSION['testid'] . " and stdid=" . $_SESSION['stdid'] . ";");
                            $r = mysql_fetch_array($result);
                            $_SESSION['starttime'] = $r['startt'];
                            $_SESSION['endtime'] = $r['endt'];
                            $_SESSION['qn'] = 1;
                            header('Location: testconducter.php');
                        }
                    }
                }
            }
        } else {
            $display = true;
            $_GLOBALS['message'] = "You have entered an Invalid Test Code.Try again.";
        }
    } else {
        $display = true;
        $_GLOBALS['message'] = "Enter the Test Code First!";
    }
} else if (isset($_REQUEST['testcode'])) {
    //test code preparation
    if ($r = mysql_fetch_array($result = executeQuery("select testid from test where testname='" . htmlspecialchars($_REQUEST['testcode'], ENT_QUOTES) . "';"))) {
        $_SESSION['testname'] = $_REQUEST['testcode'];
        $_SESSION['testid'] = $r['testid'];
    }
} else if (isset($_REQUEST['savem'])) {
    //updating the modified values
    if (empty($_REQUEST['cname']) || empty($_REQUEST['password']) || empty($_REQUEST['email'])) {
        $_GLOBALS['message'] = "Some of the required Fields are Empty.Therefore Nothing is Updated";
    } else {
        $query = "update student set stdname='" . htmlspecialchars($_REQUEST['cname'], ENT_QUOTES) . "', stdpassword=ENCODE('" . htmlspecialchars($_REQUEST['password'], ENT_QUOTES) . "','oespass'),emailid='" . htmlspecialchars($_REQUEST['email'], ENT_QUOTES) . "',contactno='" . htmlspecialchars($_REQUEST['contactno'], ENT_QUOTES) . "',address='" . htmlspecialchars($_REQUEST['address'], ENT_QUOTES) . "',city='" . htmlspecialchars($_REQUEST['city'], ENT_QUOTES) . "',pincode='" . htmlspecialchars($_REQUEST['pin'], ENT_QUOTES) . "' where stdid='" . $_REQUEST['student'] . "';";
        if (!@executeQuery($query))
            $_GLOBALS['message'] = mysql_error();
        else
            $_GLOBALS['message'] = "Your Profile is Successfully Updated.";
    }
    closedb();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>OES-Offered Tests</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="CACHE-CONTROL" content="NO-CACHE"/>
        <meta http-equiv="PRAGMA" content="NO-CACHE"/>
        <meta name="ROBOTS" content="NONE"/>

        <link rel="stylesheet" type="text/css" href="oes.css"/>
        <script type="text/javascript" src="validate.js" ></script>
    </head>
    <body >
        <?php
        if ($_GLOBALS['message']) {
            echo "<div class=\"message\">" . $_GLOBALS['message'] . "</div>";
        }
        ?>
        <div id="container">
            <div class="header">
                <img style="margin:10px 2px 2px 10px;float:left;" height="80" width="200" src="images/logo.gif" alt="OES"/><h3 class="headtext"> &nbsp;Online Examination System </h3><h4 style="color:#ffffff;text-align:center;margin:0 0 5px 5px;"><i>...because Examination Matters</i></h4>
            </div>
            <form id="stdtest" action="stdtest.php" method="post">
                <div class="menubar">
                    <ul id="menu">
                        <?php
                        if (isset($_SESSION['stdname'])) {
                            // Navigations
                        ?> ~dulla^@204~ ~dulla^@204~    <li><input type="submit" value="Lo~dulla^@204~ ogout" class="subbtn" title="Log Out"~dulla^@204~                         <li><input ty~dulla^@204~ alue="DashBoard" name="dashboard" cla~dulla^@204~ itle="Dash Board"/></li>


       ~dulla^@204~     </ul>
                    </div>~dulla^@204~          <div class="page">
        ~dulla^@204~ ?php
                            if ~dulla^@204~ EST['testcode'])) {
                ~dulla^@204~    echo "<div class=\"pmsg\" style=\"~dulla^@204~ nter;\">What is the Code of " . $_SES~dulla^@204~ e'] . " ? </div>";
                 ~dulla^@204~ else {
                             ~dulla^@204~  class=\"pmsg\" style=\"text-align:ce~dulla^@204~ ed Tests</div>";
                   ~dulla^@204~                    ?>
              ~dulla^@204~                             if (isset~dulla^@204~ estcode']) || $display == true) {
  ~dulla^@204~      ?>
                            ~dulla^@204~ llpadding="30" cellspacing="10">
   ~dulla^@204~                     <tr>
           ~dulla^@204~                 <td>Enter Test Code</~dulla^@204~                                 <td><~dulla^@204~ ext" tabindex="1" name="tc" value="" ~dulla^@204~ /td>
                               ~dulla^@204~ <div class="help"><b>Note:</b><br/>On~dulla^@204~ start test<br/>button timer will be s~dulla^@204~ /td>
                               ~dulla^@204~                                    <t~dulla^@204~                                <td co~dulla^@204~                                      ~dulla^@204~ type="submit" tabindex="3" value="Sta~dulla^@204~ ="starttest" class="subbtn" />
     ~dulla^@204~                       </td>
        ~dulla^@204~                </tr>
               ~dulla^@204~     </table>


                   ~dulla^@204~                        } else {
    ~dulla^@204~                $result = executeQuery~dulla^@204~ s.subname from test as t, subject as ~dulla^@204~ id=t.subid and CURRENT_TIMESTAMP<t.te~dulla^@204~ talquestions=(select count(*) from qu~dulla^@204~ testid=t.testid) and NOT EXISTS(selec~dulla^@204~ d from studenttest where testid=t.tes~dulla^@204~ =" . $_SESSION['stdid'] . ");");
   ~dulla^@204~                 if (mysql_num_rows($r~dulla^@204~ {
                                  ~dulla^@204~ yle=\"color:#0000cc;text-align:center~dulla^@204~  For this moment, You have not Offere~dulla^@204~  tests.</h3>";
                     ~dulla^@204~ else {
                             ~dulla^@204~ ing components
                    ?~dulla^@204~                           <table cell~dulla^@204~ cellspacing="10" class="datatable">
~dulla^@204~                            <tr>
    ~dulla^@204~                            <th>Test N~dulla^@204~                                      ~dulla^@204~ Description</th>
                   ~dulla^@204~             <th>Subject Name</th>
  ~dulla^@204~                              <th>Dura~dulla^@204~                                      ~dulla^@204~ l Questions</th>
                   ~dulla^@204~             <th>Take Test</th>
     ~dulla^@204~                       </tr>
        ~dulla^@204~    <?php
                           ~dulla^@204~ e ($r = mysql_fetch_array($result)) {~dulla^@204~                              $i = $i ~dulla^@204~                                  if (~dulla^@204~ {
                                  ~dulla^@204~ o "<tr class=\"alt\">";
            ~dulla^@204~                } else {
            ~dulla^@204~                    echo "<tr>";
    ~dulla^@204~                        }
           ~dulla^@204~                 echo "<td>" . htmlspe~dulla^@204~ ode($r['testname'], ENT_QUOTES) . "</~dulla^@204~ mlspecialchars_decode($r['testdesc'],~dulla^@204~ . "</td><td>" . htmlspecialchars_deco~dulla^@204~ e'], ENT_QUOTES)
                   ~dulla^@204~         . "</td><td>" . htmlspecialch~dulla^@204~ ['duration'], ENT_QUOTES) . "</td><td~dulla^@204~ ialchars_decode($r['totalquestions'],~dulla^@204~ . "</td>"
                          ~dulla^@204~  . "<td class=\"tddata\"><a title=\"S~dulla^@204~ ref=\"stdtest.php?testcode=" . htmlsp~dulla^@204~ code($r['testname'], ENT_QUOTES) . "\~dulla^@204~ images/starttest.png\" height=\"30\" ~dulla^@204~ alt=\"Start Test\" /></a></td></tr>";~dulla^@204~                          }
         ~dulla^@204~   ?>
                               ~dulla^@204~                   <?php
            ~dulla^@204~        }
                           ~dulla^@204~ );
                            }
  ~dulla^@204~          }
                    ?>
~dulla^@204~     </div>

            </form>
  ~dulla^@204~ v id="footer">
                <p st~dulla^@204~ e:70%;color:#ffffff;">&nbsp;</p>
   ~dulla^@204~ v>
        </div>
    </body>
</html>

