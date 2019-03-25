<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require("config.php"); 
$ac=$_GET['ac'];
if($ac=='gw_getplandata'){	
$url="http://www.15050.com/gw_getplandata.html";			
}elseif ($ac=='h2zx_getplandata'){
$url="http://www.15050.com/h2zx_getplandata.html";		
}elseif ($ac=='h3zx_getplandata'){
$url="http://www.15050.com/h3zx_getplandata.html";	
}elseif ($ac=='h3z6_getplandata'){
$url="http://www.15050.com/h3z6_getplandata.html";	
}elseif ($ac=='pk10_getplandata'){
$url="http://www.15050.com/pk10_getplandata.html";		
}elseif($ac=='xyft-plan'){	
$url="http://www.xuyedu.com/data.php?ac=gjw";			
}elseif($ac=='txff-plan'){	
$url="http://www.ljt001.com/data.php?ac=plan";			
}elseif ($ac=='txff-h2zx'){
$url="http://www.ljt001.com/data.php?ac=h2zx";		
}elseif ($ac=='txff-h3zx'){
$url="http://www.ljt001.com/data.php?ac=h3zx";	
}elseif ($ac=='txff-h3z6'){
$url="http://www.ljt001.com/data.php?ac=h3z6";	
}else{
$url="http://www.15050.com/gw_getplandata.html";	
}



$contents = file_get_contents($url);
$contents = preg_replace('/<span style=\"color:blue;font-size:16px\".*<\/span>/isU',$db_name,$contents);
$contents = preg_replace('/<span style="color:DeepPink;font-size:16px;font-weight: bold;" onclick=\".*<\/span>/isU',$db_name,$contents);
$contents = str_replace('领头羊团队',$titel,$contents);
$contents = str_replace('9彩彩票',$titel,$contents);
$contents = str_replace('<span style="color:red;font-size:24px;font-weight: bold;" onclick="jump3()"><img  src="https://568kj1.com/images/38011.png" /></span><br></a>
',$titel,$contents);
$contents = str_replace('<script src="https://www.568kj1.com/images/qcq.js" type="text/javascript"></script>',$titel,$contents);
echo $contents;	
?>