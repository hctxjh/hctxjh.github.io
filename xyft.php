<?php
require("config.php");
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>幸运飞艇</title>
	<link href="images/style1.css" rel="stylesheet" />
	<script language="javascript" src="images/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
    <div class="width_1000">
        <div class="count">
            <div class="firstcount">
                <div class="pic">
                    <img alt="img" src="images/xyft-logo.png" width="90" height="91" />
                </div>
                <div class="text">
                    <h2>幸运飞艇</h2>
                    <p>
                        <span>09:07--23:57/五分钟开奖</span><br />
                        <span></span>
                    </p>
                </div>
            </div>
            <div class="middlecount">
                <div id="cqsscdt">正在获取开奖数据...</div>
            </div>
            <div class="lastcount">
                <?php echo $qun ?>
                <div id="bottom">
                    <div id="countdown">
						<span>高手精英俱乐部</span><br />
						<span>赚钱就在这里！</span>

                    </div>
                </div>
            </div>
        </div>
        <div id="NewNumbers"></div>
    </div>
</div>
<script language="javascript" type="text/javascript">
/*开奖声音*/
function play_Good() {
    var div = document.getElementById('NewNumbers');
    if (div != null) {
        div.innerHTML = '<embed src="images/NewNumbers.wav" loop="0" autostart="true" hidden="true"></embed>';
    }
}

function playsoundtime()
{
    var pnow=new Date();
    var ph=pnow.getHours();
    var pm=pnow.getMinutes();
    var ps=pnow.getSeconds();
    if (ph>"10" && ph<"22")
    {
        if (pm=="1" && ps=="59" || pm=="11" && ps=="59" || pm=="21" && ps=="59" || pm=="31" && ps=="59" || pm=="41" && ps=="59" || pm=="51" && ps=="59")
        {
            play_Good();
        }
    }
    if (ph=="22" || ph=="23" || ph=="00" || ph=="1")
    {
        if (pm=="1" && ps=="59"  || pm=="6" && ps=="59" || pm=="11" && ps=="59" || pm=="16" && ps=="59" || pm=="21" && ps=="59" || pm=="26" && ps=="59" || pm=="31" && ps=="59" || pm=="36" && ps=="59" || pm=="41" && ps=="59" || pm=="46" && ps=="59" || pm=="51" && ps=="59" || pm=="56" && ps=="59")
        {
            play_Good();
        }
    }
}
setInterval(playsoundtime,1000);
function cqssccont()
{
    $("#cqsscdt").css("display","none");
    var htmlobj=$.ajax({url:"xyft_api.php",async:false});
    if(htmlobj.responseText!="0")
    {
        $("#cqsscdt").css("display","");
        $("#cqsscdt").html(htmlobj.responseText);
    }
}
setInterval("cqssccont()",10000);
function getif()
{
    var now=new Date();
    var h=now.getHours();
    var m=now.getMinutes();
    var s=now.getSeconds();
    if (h>"10" && h<"22")
    {
        if (m>="1" && m<"2" || m>="11" && m<"12" || m>="21" && m<"22" || m>="31" && m<"32" || m>="41" && m<"42" || m>="51" && m<"52")
        {
            setTimeout("cqssccont()",10000);
        }
    }
    if (h=="22" || h=="23" || h=="00" || h=="1")
    {
        if (m>="1" && m<"2" || m>="6" && m<"7" || m>="11" && m<"12" || m>="16" && m<"17" || m>="21" && m<"22" || m>="26" && m<"27" || m>="31" && m<"32" || m>="36" && m<"37" || m>="41" && m<"42" || m>="46" && m<"47" || m>="51" && m<"52" || m>="56" && m<"57")
        {
            setTimeout("cqssccont()",10000);
        }
    }
}
</script>
<div id="NewNumbers"></div>
<script language="javascript" type="text/javascript">cqssccont();</script>
</body>
</html>