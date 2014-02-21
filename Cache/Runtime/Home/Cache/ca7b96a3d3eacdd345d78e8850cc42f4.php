<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
         <script type="text/javascript" src="/Public/Min/?f=/Public/Js/jquery-1.9.0.min.js|/Public/Js/region.js"></script>
    </head>
    <body>
        <select name="province" id="province" onchange="loadRegion('province',2,'city','<?php echo U('Base/getRegion');?>');">
            <option value="0" selected>省份/直辖市</option><?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <select name="city" id="city"  onchange="loadRegion('city',3,'town','<?php echo U('Base/getRegion');?>');">
            <option value="0">市/县</option>
        </select>
        <select name="town" id="town">
            <option value="0">镇/区</option>
        </select>
    </body>
</html>