<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<link src="formEditor.js">
</head>
<body>
<div id="formEditor"></div>
<script>
$("#formEditor").formEditor();
</script>
<?php 
include_once("svnUtil.php");
$svn = new SvnUtil();
$svn->checkOut("","/vbmscms"); 
?>
</body>
</html>










