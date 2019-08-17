<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 设置</title>
  <link rel="stylesheet" href="./css/mdui.min.css">
  <style  type="text/css">
   .选项
   {
   padding-top: 8px;
   padding-bottom: 8px;
   }
   .text-hint
   {
   padding-top: 20px;
   padding-left: 50px;
   padding-bottom: 8px;
   }
   .色块
   {
   padding-top: 16px;
   padding-left: 16px;
   padding-right: 16px;
   padding-bottom: 16px;
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
    <a href="javascript:;" class="mdui-typo-title">设置</a>
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
    <!-- 侧滑 -->
    <div class="mdui-drawer mdui-color-white mdui-appbar-inset mdui-drawer-close" id="drawer">
	
	
	<div class="drawer-billboard drawer-item">
    <a href="javascript:;"><img class="drawer-logo border-radius mdui-img-fluid" src="./imgs/cehua.png"></a>
    </div>
	
	
    <!-- 主页按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
        <a href="./mian.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;主页</a>
    </div>
	<!-- 搜索按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">search</i>
        <a href="./search.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;搜索</a>
    </div>
    <!-- 检查更新按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">file_upload</i>
        <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading"id="检查更新">&nbsp;&nbsp;&nbsp;检查更新</a>
    </div>
	<!-- 我的收藏按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple disabled">
        <i class="mdui-list-item-icon mdui-icon material-icons">book</i>
        <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading disabled" id="无功能">&nbsp;&nbsp;&nbsp;我的收藏</a>
    </div>
	<div class="mdui-divider"></div>
	<!-- 悬浮窗按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple disabled">
        <i class="mdui-list-item-icon mdui-icon material-icons">android</i>
        <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading disabled" id="无功能1">&nbsp;&nbsp;&nbsp;悬浮窗</a>
    </div>
	<!-- 设置按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">settings</i>
        <a href="./set.html" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;设置</a>
    </div>
	<!-- 关于按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">message</i>
        <a href="./about.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;关于</a>
    </div>
	<!--  -->
	<!-- 侧滑结束 -->
  </div>
  
    
    <!-- 主界面内容开始 -->
  	<!-- 基础网格 -->
	<div class="mdui-container">
			 <!-- 分类标签 -->
			 <div class="mdui-typo-headline-opacity mdui-text-color-black-secondary mdui-col-xs-12 mdui-text-color-theme-icon-disabled text-hint">首选项</div>

			 <!-- 自动检测更新 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项">&nbsp;&nbsp;自动检测更新</a>
             </div>
			  <!-- 自动弹出公告 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项">&nbsp;&nbsp;自动弹出公告</a>
             </div>
			 <!-- 分类标签 -->
			 <div class="mdui-typo-headline-opacity mdui-text-color-black-secondary mdui-col-xs-12 mdui-text-color-theme-icon-disabled text-hint">常用选项</div>
			 <!-- 主题颜色 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="主题颜色">&nbsp;&nbsp;主题颜色</a>
			 <div class="色块 mdui-color-theme-accent"></div>
			 </div>
			 <!-- 悬浮图标 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="悬浮图标">&nbsp;&nbsp;悬浮图标</a>
			 <img class="mdui-img-rounded mdui-img-fluid" src="./imgs/icon.png" height="32" width="32"/>
			 </div>
			 <!-- 分类标签 -->
			 <div class="mdui-typo-headline-opacity mdui-text-color-black-secondary mdui-col-xs-12 mdui-text-color-theme-icon-disabled text-hint">路径</div>
			 <!-- 工程路径 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="工程路径">&nbsp;&nbsp;工程路径&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="mdui-typo-body-1-opacity">./iApp/ProjectApp</div></a>
			 </div>
			 <!-- 备份路径 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="备份路径">&nbsp;&nbsp;备份路径&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="mdui-typo-body-1-opacity">./iApp/iAppDir</div></a>
			 </div>
			 <!-- 分类标签 -->
			 <div class="mdui-typo-headline-opacity mdui-text-color-black-secondary mdui-col-xs-12 mdui-text-color-theme-icon-disabled text-hint">其它</div>
			 <!-- 关于 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="./about.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项">&nbsp;&nbsp;关于</a>
			 </div>
			 <!-- 账户管理 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="账户管理">&nbsp;&nbsp;账户管理</a>
			 </div>
			 <!-- 基础手册文件 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="javascript:;" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="基础手册文件">&nbsp;&nbsp;基础手册文件&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="mdui-typo-body-1-opacity">./iyu-helpV3.0.txt</div></a>
			 </div>
			 <!-- 开发者选项 选项 -->
             <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
             <a href="./api.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading 选项" id="开发者选项">&nbsp;&nbsp;开发者选项</a>
			 </div>
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
  <script src="./my/js/set.js"></script>
  
</body>
</html>