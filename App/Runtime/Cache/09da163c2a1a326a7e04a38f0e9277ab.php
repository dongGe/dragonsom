<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cn">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="keywords" content="邪恶漫画,dragonsom">
<meta name="description" content="邪恶漫画">
<meta name="author" content="" />
<meta name="copyright" content="www.dragonsom.com,版权所有">
<meta name="baidu-site-verification" content="iVvqEMxZQGW7JnG4" />
<meta name="360-site-verification" content="2eb84f4c1d73e4695ab35f0ed74f647a" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ($title); ?></title>
<link rel="stylesheet" type="text/css" href="http://libs.baidu.com/bootstrap/2.3.1/css/bootstrap.min.css">
  <style type="text/css">
    	body{padding-top:40px}
    	.brand{ -webkit-transition: all .5s linear 0.1s;-moz-transition: all .5s linear 0.1s;}
        .nav li{ -webkit-transition: all .5s linear 0.1s;-moz-transition: all .5s linear 0.1s;}
        <?php if(date('N')%2): ?>.brand:hover{ -webkit-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transition: all .5s linear 0.1s;-moz-transition: all .5s linear 0.1s;}
    	.nav li:hover{ -webkit-transform:scale(1.2);-moz-transform:scale(1.2);-webkit-transition: all .5s linear 0.1s;-moz-transition: all .5s linear 0.1s;}
    	<?php else: ?>
        .brand:hover{ -webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-webkit-transition: all .5s linear 0.1s;-moz-transition: all .5s linear 0.1s;}
    	.nav li:hover{ -webkit-transform:rotate(360deg);-moz-transform:rotate(360deg);-webkit-transition: all .5s linear 0.1s;-moz-transition: all .5s linear 0.1s;}<?php endif; ?>
  </style>
<link href="http://libs.baidu.com/bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="http://libs.baidu.com/bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.lazyload.min.js"></script>
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
  <div class="container">
    <a class="brand" href="http://www.dragonsom.com">dragonsom</a>
    <ul class="nav">
      <li <?php if($ac == 'Index') echo 'class="active"' ?> ><a href="<?php echo U('Index/index');?>">首页</a></li>
      <li><a target="_blank" href="__ROOT__/exchangePhoto">换照片</a></li>
      <li <?php if($ac == 'Html5') echo 'class="active"' ?> ><a href="__APP__/Html5">html5游戏</a></li>
      <li <?php if($ac == 'Xemh') echo 'class="active"' ?> ><a href="<?php echo U('Xemh/index');?>">邪恶漫画</a></li>
    </ul>
    </div>
  </div>
</div>
<!--<script type="text/javascript" src="https://raw.github.com/sbiermanlytle/iioengine/master/core/iioEngine.js"></script>-->
<script type="text/javascript" src="__PUBLIC__/js/iioEngine.js"></script>
<script type="text/javascript" src="http://iioengine.com/js/iioDebugger.js"></script>
<script type="text/javascript" src="__TMPL__/Public/SpaceShooter/SpaceShooter.js"></script>
<script type="text/javascript">iio.start(SpaceShooter);</script>
<div style="display:none;">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F52aa22b260ccf1aff9883b5f44382402' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
</body>
</html>