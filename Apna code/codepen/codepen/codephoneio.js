function loader(){
   loader = setTimeout(showPage, 36000)
}
function showPage(){
   document.getElementById("title").style.display = "none"
}

var n = new Date();
var days = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
var months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
document.getElementById("days_").innerHTML = document.getElementById("days").innerHTML = days[n.getDay()];
document.getElementById("mdy_").innerHTML = document.getElementById("mdy").innerHTML = months[n.getMonth()] + "," + " " + n.getDate() + " " + n.getFullYear();
document.getElementById("times_").innerHTML = document.getElementById("times").innerHTML = n.getHours() + ":" + n.getMinutes();

function close_lockScreen(){
   document.getElementById("lockScreen").classList.add("close-lock")
   }

function showApps(){
   document.getElementById("homeScreen").classList.add("close-home");
   document.getElementById("myApps").classList.add("show-apps")
   }

function showHome(){
   document.getElementById("homeScreen").classList.remove("close-home");
   document.getElementById("myApps").classList.remove("show-apps")
   }