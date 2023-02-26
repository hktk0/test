<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<html>
<head>
<title>提交成功！</title>
</head>
<body>
<h2>提交成功！</h2><br />
<h2><a href="/">返回首页</a></h2>

<?php
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message'])){
$log=fopen("liuyan.txt","a");
fwrite($log,$_POST['name']."\r\n");
fwrite($log,$_POST['email']."\r\n");
fwrite($log,$_POST['message']."\r\n");
fclose($log);
}
?>
</body>
</html>
