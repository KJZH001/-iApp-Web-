<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 教程</title>
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
    <a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">教程</a>
	</div>
	
    <!-- 标题自适应 小屏幕 -->
	<div class="mdui-hidden-sm-up">
	<!-- 标题 -->
    <a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">晓空iApp-教程</a>
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
	       <?php
		   //获取从链接中传来的参数
		   $class=$_REQUEST["class"];
		   $id=$_REQUEST["id"];
		   
		   //查询数据库
		   //判断类型
		   //类型为course
		   if ($class=="course")
		   {
			   require("./my/php/course.php");//引入数据库
			   $sql="SELECT * FROM course limit ".$id.",1;";
  	  	       $result=mysqli_query($gb_conn,$sql);
			   $row=mysqli_fetch_assoc($result);
			   
		   }
		   //类型为basic
		   else
		   {
			   require("./my/php/basic.php");//引入数据库
			   $sql="SELECT * FROM basic limit ".$id.",1;";
  	  	       $result=mysqli_query($gb_conn,$sql);
			   $row=mysqli_fetch_assoc($result);
		   }
		   
		   
		   
		   //开始显示正文
		   $show=htmlspecialchars($row['content']);
		   $show=str_replace(PHP_EOL,"<br>", $show);
		   
		   echo "<div class=\"mdui-typo-display-1 教程标题\">".$row['title']."</div>";
		   echo "<div class=\"mdui-typo-body-2-opacity 教程内容 内容行距\"><font size=\"3\" id=\"show\">".$show."</font></div>";
		   
		   
		   
		   /*
		   echo "<script type=\"text/javascript\"> ";
		   echo "var txts = \"".$输出."\";";
		   echo "txts=txts.replace(/[]/g,'<br>');";
		   echo "document.getElementById(\"show\").innerHTML=txts;";
		   echo "</script>";
		   */
		   
		   
		   //echo "共计替换了: ".$计数." 次";
		   
		   /*
		   //测试输出的内容
		   echo "获取到的类别为 ".$class;
		   echo "<br>";
		   echo "获取到的id为 ".$id;
		   */
		   /*关闭连接*/
		   mysqli_close($gb_conn);
		   ?>
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