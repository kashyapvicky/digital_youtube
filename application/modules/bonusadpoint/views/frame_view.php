<!doctype html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php //echo $site_url; die;?>
<div >
    <a href='<?php echo base_url()?>bonusadpoint/confirm_button?url_id=<?php echo $url_id?>' id='confirmbtn' class='btn btn-success' style='display:none'>confirm add</a>
    <font color='red'>
    <span id='countdown' class='timer'></span>
    </font>
</div>



<div style='overflow:hidden'>
<iframe src='<?php echo $site_url; ?>' frameborder='0' style='width:100%; height:100%;'>   
</iframe>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    
function timer(){
    var sec = 30;
    var timer = setInterval(function(){
        document.getElementById('safeTimerDisplay').innerHTML='00:'+sec;
        sec--;
        if (sec < 0) {
            clearInterval(timer);
        }
    }, 1000);
}
    
</script>

<script>
var seconds = 20;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('confirmbtn').style.display="block";
    } else {
        seconds--;
    }
} 
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
</body>
</html>