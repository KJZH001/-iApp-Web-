<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 Api</title>
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
   .教程标题
   {
   padding-top: 24px;
   padding-bottom: 20px;
   }
   .教程内容
   {
   padding-bottom: 16px;
   padding-left: 12px;
   padding-right: 12px;
   }
   .内容行距
   {
   line-height:25px;
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
	<!-- 标题 -->
    <a href="javascript:;" class="mdui-typo-headline">晓空iApp手册Web版</a>
	<!-- 副标题 -->
    <a href="javascript:;" class="mdui-typo-title">Api</a>
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
	       
		   <div class="mdui-typo-display-1 教程标题">晓空iApp手册Web版 Api列表</div>
		   
		   <div class="mdui-typo-body-2-opacity 教程内容 内容行距">
		   <font size="3" id="show">
		   
		    欢迎使用 晓空iApp手册Web版的Api！您可以通过本站的Api快速的为您的程序调用到您所需要的数据。
			<br>
			<br><font size="5">调用教程内容</font>
			<br>
			<br>Api接口：<strong>http://youedomain/show.php?class=[name]&id=[num]</strong>
			<br>在这这个Api中有两个参数，分别为<strong>class</strong>和<strong>id</strong>。
			<br>class参数代表您所指向的教程类别，用于服务器识别输出的类型
			<br>class有两个可供选择的参数，分别为<strong>course</strong>(教程类型)和<strong>basic</strong>(基础类型)
		    <br>返回值为html格式，您可以用iapp的<strong>hs()</strong>函数获取内容，并使用<strong>sj()</strong>函数截取出您所需要的内容
			<br>
			<br><font size="5">调用搜索内容</font>
			<br>
			<br>Api接口：<strong>http://youedomain/searchList.php?word=[name]</strong>
			<br>在这个Api中，您会看到只有一个参数，这个参数为搜索的项目标题
			<br>为了降低服务器负担，我们仅提供低级模糊搜索（即显示所有完全包含关键字的项目）
			<br>同样的，本Api返回值为html格式，您可以用iapp的<strong>hs()</strong>函数获取内容，并使用<strong>sj()</strong>函数截取出您所需要的内容
			<br>
			<br><font size="4">更多Api即将添加，敬请期待！</font>
		   </font>
		   </div>
		   
		   <br>
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
  
</body>
</html>