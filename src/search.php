<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 搜索</title>
  <link rel="stylesheet" href="./css/mdui.min.css">
  <style  type="text/css">

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
    <a href="javascript:;" class="mdui-typo-title">搜索</a>
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
	    <!-- 提交表单 -->
		<form action="./searchList.php" method="get">
	       <!-- 浮动标签文本框 -->
		   <div class="mdui-textfield mdui-textfield-floating-label">
  	       <label class="mdui-textfield-label">输入内容</label>
  	       <input class="mdui-textfield-input" name="word" type="text"/>
	       </div>
		   <!-- 搜索按钮 -->
		   <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent"  type="submit" id="">搜索</button>
		   <!-- 圆形进度条<div class="mdui-spinner"></div> -->
		</form>
		   
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