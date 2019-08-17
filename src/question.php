<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 帮助</title>
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
	<!-- 标题 -->
    <a href="javascript:;" class="mdui-typo-headline">晓空iApp手册Web版</a>
	<!-- 副标题 -->
    <a href="javascript:;" class="mdui-typo-title">帮助</a>
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
	       
		   		   <p class="top_icon mdui-typo-title">什么是晓空iApp手册？</p>
		  	       <p class="正文间距 mdui-typo-body-2-opacity">晓空iapp手册是一个完全重写的手册，它的前身是iapr，后来服务器到期了，我也把数据全部迁移了出来，现在的手册的数据和原先的手册相比只有多没有少，现在本手册还出在于测试开发阶段，bug还很多,敬请大家谅解！</p>
				   <br>
				   
		  	       <p class="top_icon mdui-typo-title">什么是晓空iApp手册Web版？</p>
		  	       <p class="正文间距 mdui-typo-body-2-opacity">Web版手册即网页版的手册，主要针对的是桌面以及平板等大屏用户，您仅需使用一台可以联网的设备即可使用，这同时也意味着您无需安装也无需考虑系统平台的兼容问题。</p>
				   <p class="正文间距 mdui-typo-body-2-opacity">此外，本项目为开源项目，您也可以使用本项目的源码自行快速搭建起一个属于您自己的手册。并且本源码自带有api可供调用，欢迎使用！</p>
				   <br>
				   
		  	       <p class="top_icon mdui-typo-title">为什么选择晓空iApp手册？我们可以为你提供哪些服务？</p>
		 	       <p class="正文间距 mdui-typo-body-2-opacity">我们可以让您在网页上即可体验到查询iApp手册的便利，还有一些其他的功能，敬请期待！</p>
				   <br>
				   
			       <p class="top_icon mdui-typo-title">既然可以用网页版，那我还需要下载完整版的手册吗？</p>
			       <p class="正文间距 mdui-typo-body-2-opacity">对于这一点，我想是肯定的，web版仅仅只是一个在线体验的Demo，是用来延伸手册的平台扩展性的，很多功能都还不全面，所以还是请安装完整版的手册！
			       <br>如果您单纯的想要在网页上查询手册，请使用@lincannm编写的
			       <a href="http://iapn.top">iApn<a>。
			       </p>
				   <br>
				   
				   <p class="top_icon mdui-typo-title">为什么我们会一些设置会员专属服务?</p>
		  	       <p class="正文间距 mdui-typo-body-2-opacity">因为我们现在的手册以及其他的服务器都是在依靠作者和其他的一些人自发的无偿维护下去，这样必然不会持久的，所以我们需要一些收入来维护服务器和手册的运行。</p>
				   <br>
				   
				   <p class="top_icon mdui-typo-title"></p>
		  	       <p class="正文间距 mdui-typo-body-2-opacity"></p>
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
  <script src="./my/js/snackbar.js"></script>
  <script src="./my/js/search.js"></script>
    <?php
	//引入页脚
	require("./official/php/footer.php");
	?>
</body>
</html>