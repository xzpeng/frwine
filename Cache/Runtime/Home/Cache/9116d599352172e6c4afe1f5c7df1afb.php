<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($pagetitle); ?></title>
<meta name="keywords" content="法国葡萄酒关键词"/>
<meta name="description" content="《法国葡萄酒关键词》是由法国食品协会推出的葡萄酒词汇在线查询产品。总结收集了海量葡萄酒术语相关词汇"/>
<script type="text/javascript" src="/Public/Min/?f=/Public/Js/jquery-1.9.0.min.js|/Public/Js/dic/jquery-ui-1.10.4.custom.min.js|/Public/Js/dic/dictionary.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/Min/?f=/Public/Css/reset-min.css|/Public/Css/common.css|/Public/Css/style.css|/Public/Css/dic/ui-lightness/jquery-ui-1.10.4.custom.min.css" />
</head>
<body>
<div class="head">
	<div class="c2">
		<div class="logo flower"><a href="/"><img src="/Public/Img/logo.png" /></a></div>
        <ul class="nav">
        	<li><a href="/">首页</a></li>
            <li class="on"><a href="<?php echo U('Dictionary/index');?>">在线词典</a></li>
            <li class="nobg"><a href="<?php echo U('Index/contactus');?>">联系我们</a></li>
        </ul>
        <div class="seek">
        	<form action="<?php echo U('Dictionary/search');?>" method="POST">
            	<input id="dictionarykw" name="kw2search" type="text" class="seekTxt" placeholder="输入要查找的关键字">
            </form>
        
        </div>
    </div>
</div>
<div class="box c2 clearfix">
	<div class="boxL">
    	<h1>01/ 查询结果</h1>
        <?php if(is_array($entryLists)): foreach($entryLists as $key=>$entryList): ?><ul>
        	<li>法语名称：<?php echo ($entryList["frname"]); ?></li>
            <li>中文名称：<?php echo ($entryList["chname"]); ?></li>
            <li>产区：<?php echo ($entryList["region"]); ?></li>
            <li>简介：<?php echo ($entryList["description"]); ?></li>
        </ul><?php endforeach; endif; ?>
    </div>
    <div class="boxR">
    	<h1>02/ 联系方式</h1>
    	<ul class="contact">
            <li class="address">
                <h2>地址</h2>
                <p>北京市朝阳区朝阳公园西路</p>
            </li>
            <li class="email">
                <h2>邮箱</h2>
                <p>abc@163.com</p>
            </li>
            <li class="phone">
                <h2>电话</h2>
                <p>12345678910</p>
            </li>
            <li class="fax">
                <h2>传真</h2>
                <p>12345678910</p>
            </li>
        </ul>
    </div>
</div>
<div class="footer">
	<div class="c2">
    	<ul class="endNav clearfix">
        	<li><a href="#">在线词典</a><em>/</em></li>
            <li><a href="#">服务条款</a><em>/</em></li>
            <li><a href="#">联系我们</a><em>/</em></li>
            <li><a href="#">客服中心</a><em>/</em></li>
            <li><a href="#">网站导航</a></li>
        </ul>
        <div class="endInfo">
        	<p>京ICP证100054号  新出网证 <京> 字011号 京网文【2011】0509-172号 京ICP备06025896号 京公网安备</p>
            <p>Copyright  © 2012 - 2014  France   All Rights Reserved.</p>
        </div>
    </div>
</div>
</body>
</html>