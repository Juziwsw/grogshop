<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="basic.css"/>

<title>保存手机号</title>
</head>

<body>
<?php
	//判断是否有数据上传
	if(isset($_POST['submit'])){
		//获取手机号
		$number = $_POST['number'];
		if (empty($number)) {
		    //echo "<script> {window.alert('发布成功')} </script>";
		    echo "<script>alert('请输入手机号！')</script>";
		    /* echo "<script>alert('请输入手机号！');location.href='".$_SERVER["HTTP_REFERER"]."'</script>";  
		    return ; */
		}elseif (strlen($number) != 11){
		    echo "<script>alert('请输入正确的手机号！')</script>";
		}elseif (strlen($number) == 11){
		    date_default_timezone_set(‘PRC’);
		    $date = date('Y-m-d H:i:s',time());
		    //mysql_connect('127.0.0.1','root','wushiwei100408') or die(mysql_error());
		    //mysql_select_db('user');//选择数据库
		    mysql_connect('localhost','h5d','h5d') or die(mysql_error());
		    mysql_select_db('h5db');//选择数据库
		    mysql_query('set names utf8');//设置客户端字符编码
		    
		    $sql="SELECT * FROM number_user WHERE number='$number'";
		    $rs=mysql_query($sql);
		    //获取结果集的记录数
		    $num = mysql_num_rows($rs);
		    if( $num == 1){
		        header('Location:signsucc.php?number='.$number);
		    }elseif($num == 0){
		        $sql = "insert into number_user values('','{$number}','{$date}')";
		        $rs=mysql_query($sql);
		        if ($rs){
		        	 header('Location:signsucc2.php');
		            //Header("Location:signsucc2.php?number=");
		        }else{
		            echo "<script>alert('报名失败！')</script>";
		        }
		    
		    }
		    
		}
	}
?>
<div class="all">
		<img class="headimg" src="image/20130929172648_0213.jpg"/>
		<div class="describe-div">
				<strong class="describe-strong">重磅福利/上海浦东丽思卡尔顿酒店豪华夜景套房+海鲜自助餐，免费体验豪华享受 </strong>	
		</div>

		<div class="input-div">
				<form id="form1" name="form1" method="post" action="">
					<label for="number"></label>
					<div>
						<input class="input-input" type="text" name="number" id="number" placeholder="请输入手机号"/>
					</div>
					<font>中奖后，我们将通过以上资料联系您，请如实填写</font>
					<div>
						<input class="submit-input"type="submit" name="submit" id="submit" value="立即参与" />
					</div>
				</form>
		</div>
		<div class="foot-div">
			<p>-活动-</p>
		</div>
</div>
</body>
</html>