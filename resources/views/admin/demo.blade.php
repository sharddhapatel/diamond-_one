
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <section id="time">
    <section id="timer1" state="">
      <span>0:00</span>
      <div onClick="time[this.innerHTML]('timer1')">start</div>
      <div onClick="time.cancel('timer1')">cancel</div>
    </section>


  
<script>
var interval;

var countdown1 = {
    minutes:0,
    seconds: 10
};

var countdown2 = {
    minutes:0,
    seconds: 2
}

function countdown(element) {
    alert(element);
    var cd;
    element === 'countdown1' ? cd = countdown1 : cd = countdown2;
    interval = setInterval(function(timer) {
        var el = document.getElementById(element);
        if(cd.seconds == 0) {
            if(cd.minutes == 0) {
                (el.innerHTML = "STOP!");     

                clearInterval(interval);
                return;
            } else {
                cd.minutes--;
                cd.seconds = 60;
            }
        }
        if(cd.minutes > 0) {
            var minute_text = cd.minutes + (cd.minutes > 1 ? ' minutes' : ' minute');
        } else {
            var minute_text = '';
        }
        var second_text = seconds > 1 ? '' : '';
        el.innerHTML = minute_text + ' ' + cd.seconds + ' ' + second_text + '';
        cd.seconds--;
    }, 1000);
}
var start = document.getElementById('start');


 <div id='countdown'></div>
 <input type="button" onclick="countdown('countdown1');this.disabled = true;" value="Start" />
 <div id="countdown1"></div>

 <input type="button" onclick="countdown('countdown2');this.disabled = true;" value="Start" />
 <div id="countdown2"></div>
</script>
</body>
</html>