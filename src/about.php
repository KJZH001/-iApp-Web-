<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 关于</title>
  <link rel="stylesheet" href="./css/mdui.min.css">
  <style  type="text/css">
   .手册logo
   {
   padding-top: 80px;
   padding-bottom: 20px;
   }
   .选项
   {
   padding-top: 8px;
   padding-bottom: 8px;
   }
   .关于手册标题
   {
   padding-bottom: 40px;
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
    <a href="javascript:;" class="mdui-typo-title">关于</a>
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
	       <!-- 手册Logo -->
		   <div class="mdui-col-xs-12  mdui-color-theme-accent">
		   <img class="mdui-img-rounded mdui-center 手册logo" height="128" width="128" src="imgs/icon.png"/>
		   <center><div class="mdui-typo-subheading 关于手册标题">晓空iApp手册 Web-beta</div></center>
		   </div>
		   <!-- 检查更新 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="检查更新1">&nbsp;&nbsp;检查更新</a>
			 </div>
			 <!-- 常见问题 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="./question.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="常见问题">&nbsp;&nbsp;常见问题</a>
			 </div>
			 <!-- 官方Q群 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="https://jq.qq.com/?_wv=1027&k=51eoWwW" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="官方Q群">&nbsp;&nbsp;官方Q群</a>
			 </div>
		    <!-- 捐赠&Pro 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="捐赠&Pro">&nbsp;&nbsp;捐赠&Pro</a>
			 </div>
			  <!-- Android版本 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-3 mdui-typo-subheading 选项" id="Android版本">&nbsp;&nbsp;Android版本</a>
			 <div class="mdui-text-color-black-secondary">WebView Google Chrome</div>
			 </div>
			  <!-- 软件版本 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-3 mdui-typo-subheading 选项" id="软件版本">&nbsp;&nbsp;软件版本</a>
			 <div class="mdui-text-color-black-secondary">晓空iApp手册 Web-beta,在线开发版本</div>
			 </div>
			 <!-- 开发者模式 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-3 mdui-typo-subheading 选项" id="开发者模式">&nbsp;&nbsp;开发者模式</a>
			  <div class="mdui-text-color-black-secondary">否</div>
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
  <script src="./my/js/about.js"></script>
</body>
</html>