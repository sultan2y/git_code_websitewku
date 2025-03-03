<html>
<head>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<div style="font-size:20pt;font-family:cambria;font-weight:bold;font-style:oblique;text-align:center">

</head>
<body class="slider">
<div class="outbox">
 <div class="sliderbox">
 
<img src="image/st.jpg" width="700" height="300" alt="E-learning System For Gamby medical and Business College" title="E-learning System" id="wows1_0" />
<img src="image/lm.png" width="700" height="300" alt="E-learning System For Gamby medical and Business College" title="E-learning System" id="wows1_2"/>
<img src="image/lm2.png" width="700" height="300" alt="E-learning System For Gamby medical and Business College" title="E-learning System" id="wows1_3"/>
<img src="image/g7.jpg" width="700" height="300" alt="E-learning System For Gamby medical and Business College" title="E-learning System" id="wows1_4" />
 </div>
</div>
<script>
var text="Welcome to Gamby medical and Business College"
var speed=50 // SPEED OF FADE

if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=6
var g=8
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script>
</div>
</body>
</html>