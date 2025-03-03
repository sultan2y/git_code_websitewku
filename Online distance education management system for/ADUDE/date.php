<html>
<head>
        <script src="js/jquery.min.js"></script>
        <script src="js/print.js" type="text/javascript"></script>

        <script src="js/jquery.js"></script>
</head>
<body bgcolor=white>
    <script>
            function check() {
                if (document.rpo.uid.value == "") {
                    document.getElementById("ide").innerHTML = "please inter user id";
                    document.rpo.uid.focus();
                    return false;
                }

                return true;
            }
        </script>
		<script language="JavaScript">
                            if (document.all || document.getElementById)
                                document.write('<span id="worldclock" style="font:bold 25px Arial;"></span><br>')
                            zone = 0;
                            isitlocal = true;
                            ampm = '';
                            function updateclock(z) {
                                zone = z.options[z.selectedIndex].value;
                                isitlocal = (z.options[0].selected) ? true : false;
                            }
                            function WorldClock() {
                                now = new Date();
                                ofst = now.getTimezoneOffset() / 60;
                                secs = now.getSeconds();
                                sec = -1.57 + Math.PI * secs / 30;
                                mins = now.getMinutes();
                                min = -1.57 + Math.PI * mins / 30;
                                hr = (isitlocal) ? now.getHours() : (now.getHours() + parseInt(ofst)) + parseInt(zone);
                                hrs = -1.575 + Math.PI * hr / 6 + Math.PI * parseInt(now.getMinutes()) / 360;
                                if (hr < 0)
                                    hr += 24;
                                if (hr > 23)
                                    hr -= 24;
                                ampm = (hr > 11) ? "PM" : "AM";
                                statusampm = ampm.toLowerCase();

                                hr2 = hr;
                                if (hr2 == 0)
                                    hr2 = 12;
                                (hr2 < 13) ? hr2 : hr2 %= 12;
                                if (hr2 < 10)
                                    hr2 = "0" + hr2

                                var finaltime = hr2 + ':' + ((mins < 10) ? "0" + mins : mins) + ':' + ((secs < 10) ? "0" + secs : secs) + ' ' + statusampm;
                                if (document.all)
                                    worldclock.innerHTML = finaltime
                                else if (document.getElementById)
                                    document.getElementById("worldclock").innerHTML = finaltime
                                else if (document.layers) {
                                    document.worldclockns.document.worldclockns2.document.write(finaltime)
                                    document.worldclockns.document.worldclockns2.document.close()
                                }


                                setTimeout('WorldClock()', 1000);
                            }

                            window.onload = WorldClock
                        </script>

                        <form name="where" bgcolor="white" color="pink"> 
                            <select name="city" size="1" onchange="updateclock(this);"> 
                                <option value="" selected>Local time</option>
                                <option value="0">London GMT</option> 
                                <option value="1">Rome</option>
                                <option value="7">Bangkok</option>
                                <option value="8">Hong Kong</option>
                                <option value="9">Tokyo</option> 
                                <option value="10">Sydney</option>
                                <option value="-8">San Francisco</option> 
                                <option value="-5">New York</option>
                            </select>
                        </form>
                        <div class="well-sm" id="balem">
                            <table><tr><td>
                                        <script language="JavaScript" type="text/javascript">
                                            // This array holds the "friendly" day names
                                            var day_names = new Array(7)
                                            day_names[0] = "Sunday"
                                            day_names[1] = "Monday"
                                            day_names[2] = "Tuesday"
                                            day_names[3] = "Wednesday"
                                            day_names[4] = "Thursday"
                                            day_names[5] = "Friday"
                                            day_names[6] = "Saturday"
                                            // This array holds the "friendly" month names
                                            var month_names = new Array(12)
                                            month_names[0] = "January"
                                            month_names[1] = "February"
                                            month_names[2] = "March"
                                            month_names[3] = "April"
                                            month_names[4] = "May"
                                            month_names[5] = "June"
                                            month_names[6] = "July"
                                            month_names[7] = "August"
                                            month_names[8] = "September"
                                            month_names[9] = "October"
                                            month_names[10] = "November"
                                            month_names[11] = "December"
                                            // Get the current date
                                            date_now = new Date()
                                            // Figure out the friendly day name
                                            day_value = date_now.getDay()
                                            date_text = day_names[day_value]
                                            // Figure out the friendly month name
                                            month_value = date_now.getMonth()
                                            date_text += " " + month_names[month_value]
                                            // Add the day of the month
                                            date_text += " " + date_now.getDate()
                                            // Add the year
                                            date_text += ", " + date_now.getFullYear()
                                            // Get the minutes in the hour
                                            minute_value = date_now.getMinutes()
                                            if (minute_value < 10) {
                                                minute_value = "0" + minute_value
                                            }
                                            // Get the hour value and use it to customize the greeting
                                            hour_value = date_now.getHours()
                                            if (hour_value == 0) {
                                                greeting = "Good morning, "
                                                time_text = " at " + (hour_value + 12) + ":" + minute_value + " AM"
                                            } else if (hour_value < 12) {
                                                greeting = "Good morning!"
                                                time_text = " at " + hour_value + ":" + minute_value + " AM"
                                            } else if (hour_value == 12) {
                                                greeting = "Good afternoon!"
                                        ~dulla^@204~ ~dulla^@204~  + hour_value + ":" + minute_value + ~dulla^@204~                                      ~dulla^@204~ ur_value < 17) {
                    ~dulla^@204~                greeting = "Good after~dulla^@204~                                      ~dulla^@204~ t = " at " + (hour_value - 12) + ":" ~dulla^@204~ e + " PM"
                           ~dulla^@204~     } else {
                        ~dulla^@204~            greeting = "Good evening!"~dulla^@204~                                      ~dulla^@204~  at " + (hour_value - 12) + ":" + min~dulla^@204~  PM"
                                ~dulla^@204~ 
                                    ~dulla^@204~ ent.write(greeting + "<br>  " + date_~dulla^@204~  + time_text)

                      ~dulla^@204~      </script>
                      ~dulla^@204~  </td></tr></table>
                 ~dulla^@204~ 
                        <br>
       ~dulla^@204~     <div>
                           ~dulla^@204~ ="240px" bgcolor="white" border="whit~dulla^@204~                                      ~dulla^@204~ GUAGE="JavaScript">
                 ~dulla^@204~               monthnames = new Array(~dulla^@204~ ebrurary", "March", "April", "May", "~dulla^@204~ , "August", "September", "October", "~dulla^@204~ ecemeber");
                         ~dulla^@204~       var linkcount = 0;
            ~dulla^@204~                    function addlink(m~dulla^@204~ ef) {
                               ~dulla^@204~     var entry = new Array(3);
       ~dulla^@204~                             entry[0] ~dulla^@204~                                      ~dulla^@204~ 1] = day;
                           ~dulla^@204~         entry[2] = href;
            ~dulla^@204~                        this[linkcount~dulla^@204~                                      ~dulla^@204~                                      ~dulla^@204~ otype.addlink = addlink;
            ~dulla^@204~                    linkdays = new Arr~dulla^@204~                                      ~dulla^@204~ ew Array(12);
                       ~dulla^@204~         monthdays[0] = 31;
          ~dulla^@204~                      monthdays[1] = 2~dulla^@204~                                   mon~dulla^@204~ 1;
                                  ~dulla^@204~ thdays[3] = 30;
                     ~dulla^@204~           monthdays[4] = 31;
        ~dulla^@204~                        monthdays[5] =~dulla^@204~                                     m~dulla^@204~  31;
                                ~dulla^@204~ onthdays[7] = 31;
                   ~dulla^@204~             monthdays[8] = 30;
      ~dulla^@204~                          monthdays[9]~dulla^@204~                                      ~dulla^@204~ ] = 30;
                             ~dulla^@204~   monthdays[11] = 31;
               ~dulla^@204~                 todayDate = new Date(~dulla^@204~                                   thi~dulla^@204~ ate.getDay();
                       ~dulla^@204~         thismonth = todayDate.getMont~dulla^@204~                                     t~dulla^@204~ ayDate.getDate();
                   ~dulla^@204~             thisyear = todayDate.getY~dulla^@204~                                      ~dulla^@204~ hisyear % 100;
                      ~dulla^@204~          thisyear = ((thisyear < 50) ~dulla^@204~ syear) : (1900 + thisyear));
        ~dulla^@204~                        if (((thisyear~dulla^@204~                                      ~dulla^@204~ && !(thisyear % 100 == 0))
          ~dulla^@204~                              || (this~dulla^@204~  0))
                                ~dulla^@204~    monthdays[1]++;
                  ~dulla^@204~              startspaces = thisdate;
~dulla^@204~                                while ~dulla^@204~ > 7)
                                ~dulla^@204~    startspaces -= 7;
                ~dulla^@204~                startspaces = thisday ~dulla^@204~  + 1;
                               ~dulla^@204~ if (startspaces < 0)
                ~dulla^@204~                    startspaces += 7;
~dulla^@204~                                docume~dulla^@204~ ble border=2 bgcolor=white height=200~dulla^@204~                                      ~dulla^@204~ e("bordercolor=yellow width=250px><fo~dulla^@204~ >");
                                ~dulla^@204~ ocument.write("<tr><td colspan=7><cen~dulla^@204~ 
                                    ~dulla^@204~    + monthnames[thismonth] + " " + th~dulla^@204~                                      ~dulla^@204~ /strong></center></font></td></tr>");~dulla^@204~                                 docum~dulla^@204~ r>");
                               ~dulla^@204~ document.write("<td align=center>Su</~dulla^@204~                                      ~dulla^@204~ te("<td align=center>M</td>");
      ~dulla^@204~                          document.wri~dulla^@204~ =center>Tu</td>");
                  ~dulla^@204~              document.write("<td alig~dulla^@204~ d>");
                               ~dulla^@204~ document.write("<td align=center>Th</~dulla^@204~                                      ~dulla^@204~ te("<td align=center>F</td>");
      ~dulla^@204~                          document.wri~dulla^@204~ =center>Sa</td>");
                  ~dulla^@204~              document.write("</tr>");~dulla^@204~                                 docum~dulla^@204~ r>");
                               ~dulla^@204~ for (s = 0; s < startspaces; s++) {
 ~dulla^@204~                                   doc~dulla^@204~ <td> </td>");
                       ~dulla^@204~         }
                           ~dulla^@204~     count = 1;
                      ~dulla^@204~          while (count <= monthdays[th~dulla^@204~                                      ~dulla^@204~  (b = startspaces; b < 7; b++) {
    ~dulla^@204~                                    li~dulla^@204~ e;
                                  ~dulla^@204~      document.write("<td>");
        ~dulla^@204~                                for (c~dulla^@204~ kdays.length; c++) {
                ~dulla^@204~                            if (linkda~dulla^@204~ ) {
                                 ~dulla^@204~               if ((linkdays[c][0] == ~dulla^@204~ ) && (linkdays[c][1] == count)) {
   ~dulla^@204~                                      ~dulla^@204~ cument.write("<a href=\"" + linkdays[~dulla^@204~ );
                                  ~dulla^@204~                  linktrue = true;
   ~dulla^@204~                                      ~dulla^@204~                                      ~dulla^@204~   }
                                 ~dulla^@204~       }
                             ~dulla^@204~           if (count == thisdate) {
  ~dulla^@204~                                      ~dulla^@204~ write("<font color='FF0000'><strong>"~dulla^@204~                                      ~dulla^@204~                                      ~dulla^@204~ count <= monthdays[thismonth]) {
    ~dulla^@204~                                      ~dulla^@204~ ite(count);
                         ~dulla^@204~               } else {
              ~dulla^@204~                              document~dulla^@204~                                      ~dulla^@204~   }
                                 ~dulla^@204~       if (count == thisdate) {
      ~dulla^@204~                                      ~dulla^@204~ e("</strong></font>");
              ~dulla^@204~                          }
          ~dulla^@204~                              if (link~dulla^@204~                                      ~dulla^@204~ ocument.write("</a>");
              ~dulla^@204~                          document.wri~dulla^@204~                                      ~dulla^@204~   count++;
                          ~dulla^@204~          }
                          ~dulla^@204~          document.write("</tr>");
   ~dulla^@204~                                 docum~dulla^@204~ r>");
                               ~dulla^@204~     startspaces = 0;
                ~dulla^@204~                }
                    ~dulla^@204~            document.write("</table></~dulla^@204~                                  </script>
</body>
</html>