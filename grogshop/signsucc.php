<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />

<link rel="stylesheet" type="text/css" href="basic.css"/>
<title>无标题文档</title>
</head>

<body>
<?php
	$number = $_GET['number'];
	echo $number;
?>
<div ="all">
	<img class="headimg" src="image/20130929172648_0213.jpg"/>
	<div class="succ-describe-div">
		<strong >恭喜您报名成功</strong>
		<p>-即刻查看您的抽奖码-</p>
	</div>
	<div class="QR-code-div">
		<div class="code-left-div" >
			<p class="one1">1.请长按识别右方二维码</p>
			<p class="one2">[家居帮]</p>
		</div>
		<div class="code-right-div">
		   <img src="image/qcode.png" width="120" height="120" />
		</div>
	</div>
	<div class="c">
		<div class="code-left-div">
			<p class="one1">2.请在公共号查看您的抽奖码</p>
			<img src="image/guidance.png" width="487" height="149" />
		</div>
	</div>
	<div class="foot-div">
		<p>-活动-</p>
	</div>
</div>
</body>
</html>