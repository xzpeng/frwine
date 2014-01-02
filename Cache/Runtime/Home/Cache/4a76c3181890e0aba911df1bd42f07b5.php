<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
</head>
<body>
		<div id="title">
			<?php echo ($article["title"]); ?>
		</div>
		
		<div id="info">
			编辑时间：<?php echo (date("Y-m-d  H:i",$article["update_time"])); ?>
		</div>
		<?php echo ($article["content"]); ?>
</body>
</html>