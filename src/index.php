<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版</title>
  <link rel="stylesheet" href="./css/mdui.min.css">
  <style  type="text/css">
   .top_text
   {
   padding-top: 80px;
   padding-bottom: 80px;
   }
   .top_icon
   {
   padding-top: 24px;
   }
   .正文间距
   {
   padding-top: 16px;
   }
   .立即体验
   {
   padding-top: 8px;
   padding-bottom: 8px;
   }
   .去超链接下划线
   {
   text-decoration:none;
   }
  </style>
</head>
<!-- 声明主体 -->
<body id="body" class="mdui-appbar-with-toolbar mdui-theme-primary-blue mdui-theme-accent-blue mdui-loaded" style="">
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
    <a href="javascript:;" class="mdui-typo-headline 去超链接下划线 mdui-text-color-white">晓空iApp手册Web版</a>
	</div>
	
    <!-- 标题自适应 小屏幕 -->
	<div class="mdui-hidden-sm-up">
	<!-- 标题 -->
    <a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">晓空iApp手册</a>
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
	       
		   <div class="mdui-color-theme mdui-center mdui-text-center top_text">
		   <img class="mdui-img-rounded" src="./imgs/icon.png" height="140px" width="140px"/>
		   <p class="mdui-text-color-white-text top_icon mdui-typo-headline">晓空iApp手册Web版，全新的iApp手册查询方案</p>
		   <a href="./mian.php"><button class="mdui-btn mdui-btn-raised mdui-color-white mdui-ripple">立即体验</button></a>
		   </div>
		   <!-- 基础网格 -->
		   <div class="mdui-container">
		   <p class="top_icon mdui-typo-title">什么是晓空iApp手册？</p>
		   <p class="正文间距 mdui-typo-body-2-opacity">晓空iApp手册是由晓空（贴吧@RPT0001）制作的一款快速查询iApp代码手册的工具，其中包含了大量优秀的实例代码和源码供大家使用，做到“一册到位”，方便大家进行讨论和学习</p>
		   
		   <p class="top_icon mdui-typo-title">什么是晓空iApp手册Web版？</p>
		   <p class="正文间距 mdui-typo-body-2-opacity">Web版手册即网页版的手册，主要针对的是桌面用户和平板用户，可以在线使用，是一个做到了真正的跨平台的手册。</p>
		   
		   <p class="top_icon mdui-typo-title">为什么选择晓空iApp手册？我们可以为你提供哪些服务？</p>
		   <p class="正文间距 mdui-typo-body-2-opacity">我们可以让您在网页上即可体验到查询iApp手册的便利，还有一些其他的功能，敬请期待！</p>
		   
		   <p class="top_icon mdui-typo-title">既然可以用网页版，那我还需要下载完整版的手册吗？</p>
		   <p class="正文间距 mdui-typo-body-2-opacity">对于这一点，我想是肯定的，web版仅仅只是一个在线体验的Demo，是用来延伸手册的平台扩展性的，很多功能都还不全面，所以还是请安装完整版的手册！
		   <br>如果您单纯的想要在网页上查询手册，请使用@lincannm编写的
		   <a href="http://iapn.top">iApn<a>。
		   </p>
		   
		   
		   </div>
		</div>
	   <!-- 主界面内容基础网格结束 -->
    </div>

	<!--  -->
	<!-- 最大基础网格结束 -->
	</div>
	<!-- 最大容器结束 -->
	</div>
	<?php
	//引入页脚
	require("./official/php/footer.php");
	?>
  <!-- 载入js -->
  <script src="./my/js/snackbar.js"></script>
  <script src="./my/js/search.js"></script>
</body>
</html>