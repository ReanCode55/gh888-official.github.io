function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("myclock").innerText = time;
    document.getElementById("myclock").textContent = time;
    
    setTimeout(showTime, 1000);
    
}
showTime();

// user member click button
$("#signin").click(function(){
    $("#main-box-user").fadeIn(100);
});
$("#signin").click(function(){
    $("#user-signin-for-desktop").show();
});
$("#signin").click(function(){
    $("#user-signup-for-desktop").hide();
});

$("#signup").click(function(){
    $("#main-box-user").fadeIn(100);
});
$("#signup").click(function(){
    $("#user-signup-for-desktop").show();
});
$("#signup").click(function(){
    $("#user-signin-for-desktop").hide();
});


$("#close-user-signup").click(function(){
    $("#main-box-user").fadeOut(100);
});
$("#close-user-signin").click(function(){
    $("#main-box-user").fadeOut(100);
});

// menu click for mobile
function openNav() {
    document.getElementById("myNav").style.width = "70%";
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
