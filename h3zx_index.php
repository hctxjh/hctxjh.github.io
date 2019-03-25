<?php
require("config.php");
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Trancsitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="images/css.css" rel="stylesheet" type="text/css">
    <title><?php echo $title?></title>
	<meta name="Keywords" content="<?php echo $Keywords?>" />
	<meta name="Description" content="<?php echo $Description?>" />
	<link rel="Shortcut Icon"  href="images/favicon.ico" />
    <script language="javascript" src="images/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="images/common.js"></script>
</head>
<body leftmargin="0" topmargin="0">
<div class="header_top">欢迎您访问<?php echo $title?>-重庆彩全天计划表网页版 易记网址：<span id="ftcolor"><?php echo $web?> </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </div>
<iframe src="cpssc.php" width="100%" height="180" frameborder="0" scrolling="no"></iframe>
  <div class="ad">
    <?php echo $ad?>
  </div>
<table border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>    
    <td><a href="/index.php"><img src="images/cqssc.png" width="140" height="64" alt="重庆时时彩" /></a></td>
    <td><a href="/pk10_index.php"><img src="images/pk10.png" width="164" height="64" alt="北京赛车" /></a></td>
    <td><a href="/txff_index.php"><img src="images/txff.png" width="167" height="64" alt="腾讯分分" /></a></td>
    <td><a href="/xyft_index.php"><img src="images/xyft.png" width="167" height="64" alt="幸运飞艇" /></a></td> 
  </tr>
  <tr>
    <td><a href="/index.php"><img src="images/gwjh.png" width="140" height="64" alt="定位胆个位计划" /></a></td>
    <td><a href="/h2zx_index.php"><img src="images/h2zx.png" width="164" height="64" alt="后二直选" /></a></td>
    <td><a href="/h3zx_index.php"><img src="images/h3zx.png" width="167" height="64" alt="后三直选" /></a></td>
    <td><a href="/h3z6_index.php"><img src="images/h2z6.png" alt="后三组六" width="167" height="64" border="0" /></a></td>	
  </tr>
</table>
<div id="plandt">正在更新后三直选计划，请稍后...</div>
<div class="s-bg-2a" style="font-family:微软雅黑;">
    <div class="g-b-banner">
        <ul>
            <li class="u_mr52">
                <p>7X16 <span>小时</span></p>
                <p class="f-pa1   s-d1">全年无休</p>
            </li>
            <li class="u_mr60">
                <p>群体服务</p>
                <p class="f-pa1   s-d1">管理员全程教学</p>
            </li>
            <li class="u_mr72">
                <p>网赚领先者</p>
                <p class="f-pa1   s-d1">行业排名TOP1</p>
            </li>
            <li>
                <p>7年服务经验</p>
                <p class="f-pa1   s-d1">服务超百万客户</p>
            </li>
        </ul>
    </div>
</div>

<script language="javascript" type="text/javascript">
    function plancont()
    {
        $("#plandt").css("display","none");
        var htmlobj=$.ajax({url:"ssc_jh.php?ac=h3zx_getplandata",async:false});
        if(htmlobj.responseText!="0")
        {
            $("#plandt").css("display","");
            $("#plandt").html(htmlobj.responseText);
        }
    }
	plancont();
	setInterval("plancont()",10000); 
</script>



</div>
</body>
</html>