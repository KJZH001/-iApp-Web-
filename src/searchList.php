<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 搜索结果</title>
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
   .卡片文本
   {
   white-space: nowrap;                    //文本不换行。
   overflow: hidden;                       //超过部分隐藏
   text-overflow: ellipsis;                //超过部分用...代替
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
    <a href="javascript:;" class="mdui-typo-title">搜索结果</a>
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
		   <?php
		   //获取从链接中传来的参数
		   $word=$_REQUEST["word"];
		   
		   //查询数据库 表 course

			   require("./my/php/course.php");//引入数据库
			   $sql="select * from `course` where `title` like '%".$word."%'";
  	  	       $result=mysqli_query($gb_conn,$sql);
			   
			   while($row=mysqli_fetch_assoc($result))
  	  	       {
  	  	       //echo  $row['标题'], "&nbsp;", $row['内容'], "<br/>";
		       
		       $show=htmlspecialchars($row['content']);
		       $id=$row['id']-1;
		       //示列卡片
		       echo "<div class=\"mdui-card mdui-hoverable\"  onclick=\"window.open('./show.php?class=course&id=".$id."');\">";
			   
 	           //卡片的标题和副标题
 	           echo "<div class=\"mdui-card-primary\">";
 	           echo "<div class=\"mdui-card-primary-title\" > <div class=\"mdui-text-color-blue-accent\">",$row['title'],"</div></div>";
 	           echo "</div>";
			   
 	           //卡片的内容
 	           echo "<div class=\"mdui-card-content mdui-text-truncate\">",$show,"</div>";
	           echo "</div>";
               //卡片结束
		       echo "<br>";
		       echo "<br>";
  	  	       }
			   
		   //查询数据库 表 basic
		   
			   require("./my/php/basic.php");//引入数据库
			   $sql="select * from `basic` where `title` like '%".$word."%'";
  	  	       $result=mysqli_query($gb_conn,$sql);
			   
			   while($row=mysqli_fetch_assoc($result))
  	  	       {
  	  	       //echo  $row['标题'], "&nbsp;", $row['内容'], "<br/>";
		       
		       $show=htmlspecialchars($row['content']);
		       $id=$row['id']-1;
		       //示列卡片
		       echo "<div class=\"mdui-card mdui-hoverable\"  onclick=\"window.open('./show.php?class=basic&id=".$id."');\">";
			   
 	           //卡片的标题和副标题
 	           echo "<div class=\"mdui-card-primary\">";
 	           echo "<div class=\"mdui-card-primary-title\" > <div class=\"mdui-text-color-blue-accent\">",$row['title'],"</div></div>";
 	           echo "</div>";
			   
 	           //卡片的内容
 	           echo "<div class=\"mdui-card-content mdui-text-truncate\">",$show,"</div>";
	           echo "</div>";
               //卡片结束
		       echo "<br>";
		       echo "<br>";
  	  	       }
			   
			   
		   mysqli_close($gb_conn);
		   ?>
		   
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