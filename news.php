<style type="text/css">

#marqueecontainer{
position: relative;
width: 450px; 
height: 450px;
border: 100px solid green;
background-color: green;
color: white;
overflow: hidden;
border: 3px solid orange;
padding: 10px;
padding-left: 4px;
margin-left: 20px;
left: 330px;
top: -520px;
}
</style>

<script type="text/javascript">

var delayb4scroll=2000 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=2 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?

////NO NEED TO EDIT BELOW THIS LINE////////////

var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8)) //if scroller hasn't reached the end of its height
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px" //move scroller upwards
else //else, reset to original position
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight //height of marquee content (much of which is hidden from view)
if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>


<div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 98%;">

<!--YOUR SCROLL CONTENT HERE-->
<li><span>2/10/2017</span> - FILE UPLOAD IN NODEJS
                        WITH PROGRESS BAR</li>
                <li><span>10/10/2017</span> -ANGULAR.JS ROUTING AND
                        TEMPLATING EXAMPLE</li>
                <li><span>5/10/2017</span>
                        INTEGRATE PAYPAL PAYMENT GATEWAY IN NODEJS</li>
                <li><span>08/6/2017</span> -HOW TO SEND
                        EMAIL IN NODEJS</li>
                <li><span>08/10/2017</span> -
                        OOPS BASED LOGIN AND REGISTRATION SCRIPT IN PHP AND MYSQL</li>
                <li><span>2/10/2017</span> -FILE UPLOAD IN NODEJS
                        WITH PROGRESS BAR</li>
                <li><span>10/10/2017</span> -ANGULAR.JS ROUTING AND
                        TEMPLATING EXAMPLE</li>
                <li><span>5/10/2017</span>-HOW TO
                        INTEGRATE PAYPAL PAYMENT GATEWAY IN NODEJS</li>
                <li><span>08/6/2017</span> -HOW TO SEND
                        EMAIL IN NODEJS</li>
                <li><span>08/10/2017</span> - SIMPLE
                        OOPS BASED LOGIN AND REGISTRATION SCRIPT IN PHP AND MYSQL</li>
                <li><span>2/10/2017</span> - FILE UPLOAD IN NODEJS
                        WITH PROGRESS BAR</li>
                <li><span>10/10/2017</span> - ANGULAR.JS ROUTING AND
                        TEMPLATING EXAMPLE</li>
                <li><span>5/10/2017</span>-HOW TO
                        INTEGRATE PAYPAL PAYMENT GATEWAY IN NODEJS</li>
                <li><span>08/6/2017</span> -HOW TO SEND
                        EMAIL IN NODEJS</li>
                <li><span>08/10/2017</span> -
                        OOPS BASED LOGIN AND REGISTRATION SCRIPT IN PHP AND MYSQL</li>

                

<!--YOUR SCROLL CONTENT HERE-->

</div>
</div>