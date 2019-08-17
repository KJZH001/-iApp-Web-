<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 氢应用</title>
  <link rel="stylesheet" href="./css/mdui.min.css">
  <style  type="text/css">
   .card-cloud-download
   {
   padding-top: 100px;
   padding-bottom: 100px;
   }
   .card-mdps
   {
   padding-top: 100px;
   padding-bottom: 100px;
   }
   .card-qyy
   {
   padding-top: 100px;
   padding-bottom: 100px;
   }
   .去超链接下划线
   {
   text-decoration:none;
   }
  </style>
</head>
<!-- 声明主体 -->
<body id="body" class="mdui-appbar-with-toolbar mdui-theme-primary-blue mdui-theme-accent-blue mdui-loaded" style="">
<?php
require("./my/php/global.php");
?>
<!--  -->
<!-- 声明颜色 -->
<!-- 声明主色 -->
<div class="mdui-theme-primary-blue">
<!-- 声明突出色 -->
<div class="mdui-theme-accent-blue">
<!--最大容器 -->
  <div class="mdui-container-fluid">
  <!-- 基础网格 -->
    <div class="mdui-row">
	<!-- 应用栏 -->
	<header class="mdui-appbar mdui-appbar-fixed">
	<!-- 工具栏 -->
    <div class="mdui-toolbar mdui-color-theme-accent">
	<!-- 侧滑菜单按钮 -->
    <a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons" mdui-drawer="{target: '#drawer'}">menu</i></a>
    
	<!-- 标题自适应 大屏幕 -->
	<div class="mdui-hidden-xs-down">
	<!-- 标题 -->
    <a href="javascript:;" class="mdui-typo-headline 去超链接下划线 mdui-text-color-white">晓空iApp手册Web版&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	<!-- 副标题 -->
    <a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">氢应用</a>
	</div>
	
    <!-- 标题自适应 小屏幕 -->
	<div class="mdui-hidden-sm-up">
	<!-- 标题 -->
    <a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">晓空iApp-氢应用</a>
	</div>
	
	<!-- 将元素向两边推去 -->
    <div class="mdui-toolbar-spacer"></div>
	<!-- 右菜单按钮 -->
    <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#example-attr'}"><i class="mdui-icon material-icons">more_vert</i></a>
    <!-- 菜单 -->	
    <ul class="mdui-menu" id="example-attr">
    <li class="mdui-menu-item">
    <a href="javascript:;" id="选项1">选项1</a>
    </li>
	<li class="mdui-divider"></li>
    <li class="mdui-menu-item">
    <a href="javascript:;">选项2</a>
    </li>
    </ul>
    </div>
	</header>
	
	<?php
	//引入侧滑
	require("./official/php/cehua.php");
	?>
    
    <!-- 主界面内容开始 -->
  	<!-- 基础网格 -->
	<div class="mdui-container">
	       
		   <br>
		   <ul class="mdui-list">
 		    <li class="mdui-subheader">算法加解密</li>
 		    <li class="mdui-list-item mdui-ripple" onclick="window.open('./crypto_aes.php');">AES</li>
			<li class="mdui-list-item mdui-ripple" onclick="window.open('./crypto_des.php');">DES</li>
			<li class="mdui-list-item mdui-ripple" onclick="window.open('./crypto_md5.php');">MD5</li>
			<li class="mdui-list-item mdui-ripple" onclick="window.open('./crypto_hmacmd5.php');">HmacMD5</li>
			<li class="mdui-list-item mdui-ripple" onclick="window.open('./crypto_utf8.php');">RUL（即 UTF-8）</li>
			<li class="mdui-list-item mdui-ripple" onclick="window.open('./crypto_sha.php');">HmacSHA（支持SHA1、SHA224、SHA256、SHA384、SHA512）</li>

			
 		    <li class="mdui-subheader">在线工具</li>
  		    <li class="mdui-list-item mdui-ripple">Friends</li>
			<li class="mdui-list-item mdui-ripple">
    	       <div class="mdui-list-item-content" onclick="window.open('http://iapn.top/');">iApn for Web(不建议桌面设备访问)</div>
			   <i class="mdui-list-item-icon mdui-icon material-icons">open_in_new</i>
  	        </li>
			
		    <li class="mdui-subheader">开发者工具</li>
			<li class="mdui-list-item mdui-ripple" onclick="window.open('./api.php');">本站API</li>
			
			<li class="mdui-subheader">支持与帮助</li>
			<li class="mdui-list-item mdui-ripple">
    	       <div class="mdui-list-item-content" onclick="window.open('http://blog.rcraft.ml/');">访问 晓空blog</div>
			   <i class="mdui-list-item-icon mdui-icon material-icons">open_in_new</i>
  	        </li>
		    <li class="mdui-list-item mdui-ripple">
    	       <div class="mdui-list-item-content" onclick="window.open('http://bbs.rcraft.ml/');">访问 Rcraft官方站</div>
			   <i class="mdui-list-item-icon mdui-icon material-icons">open_in_new</i>
  	        </li>
			<li class="mdui-list-item mdui-ripple">
    	       <div class="mdui-list-item-content" onclick="window.open('https://github.com/KJZH001/XiaoKongIappCoursesForWeb');">
			   访问 Github 克隆本站源码
			   </div>
			   <i class="mdui-list-item-icon mdui-icon material-icons">open_in_new</i>
  	        </li>
			<li class="mdui-list-item mdui-ripple">
    	       <div class="mdui-list-item-content" onclick="window.open('http://web.xksc.rcraft.ml/');">访问 晓空iApp手册Web版 官方站点</div>
			   <i class="mdui-list-item-icon mdui-icon material-icons">open_in_new</i>
  	        </li>
			
		   </ul>
		   
		   <br>
		   <br>
		    <div class="mdui-typo">
 		    <hr/>
		   </div>
		   <br>
		   <center><div class="mdui-typo-caption-opacity">晓空iApp手册Web版 Powered by Rcraft TWIE,. Inc.</div></center>
		   <br>
		   
		</div>
	   <!-- 主界面内容基础网格结束 -->
    </div>

	<!--  -->
	<!-- 最大基础网格结束 -->
	</div>
	<!-- 最大容器结束 -->
	</div>
  <!-- 载入js -->
    <?php
	//引入页脚
	require("./official/php/footer.php");
	?>
  <script src="./my/js/snackbar.js"></script>
  <script src="./my/js/search.js"></script>
  
</body>
</html>