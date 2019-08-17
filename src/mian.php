<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 主页</title>
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
    <a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">主页</a>
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
	<div class="mdui-tab mdui-color-theme-accent mdui-tab-centered" mdui-tab>
       <a href="#example1-tab1" class="mdui-ripple mdui-ripple-white">Course</a>
       <a href="#example1-tab2" class="mdui-ripple mdui-ripple-white">Basic</a>
       <a href="#example1-tab3" class="mdui-ripple mdui-ripple-white">Cards</a>
    </div>
	</header>
	
	<?php
	//引入侧滑
	require("./official/php/cehua.php");
	?>
  
    
    <!-- 主界面内容开始 -->
  	<!-- 基础网格 -->
	<div class="mdui-container">
	    <!-- Tab切换 -->
		<!-- 选项卡 教程 -->
	    <div id="example1-tab1" class="mdui-p-a-2">
		<br>
		<br>
		<br>

		
		<?php
  	  	  /*
		  //限制长度输出字符串
  	  	  function subtext($text, $length)
  	  	  {
  	  	   if(mb_strlen($text,'utf8')>$length){
  	  	    return mb_substr($text, 0, $length, 'utf8').'...';
   	  	  }else{
   	  	   return $text;
   	  	  }
  	  	  }
		  */
		  
		  require("./my/php/course.php");//引入数据库
  	  	  $sql="SELECT id,title,content  FROM course";
  	  	  $result=mysqli_query($gb_conn,$sql);
		  //echo('标题 内容 '). "<br/>";
  	  	  while($row=mysqli_fetch_assoc($result))
  	  	  {
  	  	  //暂停执行
		  usleep(1000);
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
		  /*关闭连接*/
		  mysqli_close($gb_conn);
  	  	?>


		</div>
		<!-- 选项卡 基础 -->
        <div id="example1-tab2" class="mdui-p-a-2">
		<br>
		<br>
		<br>


		
		<?php
  	  	  require("./my/php/basic.php");//引入数据库
  	  	  $sql="SELECT id,title,content  FROM basic";
  	  	  $result=mysqli_query($gb_conn,$sql);
		  //echo('标题 内容 '). "<br/>";
  	  	  while($row=mysqli_fetch_assoc($result))
  	  	  {
		  //暂停执行
		  usleep(1000);
  	  	  //echo  $row['标题'], "&nbsp;", $row['内容'], "<br/>";
		  
		  $show=htmlspecialchars($row['content']);
		  $id=$row['id']-1;
		  //示列卡片
		  echo "<div class=\"mdui-card mdui-hoverable\" onclick=\"window.open('./show.php?class=basic&id=".$id."');\">";
  
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
		  /*关闭连接*/
		  mysqli_close($gb_conn);
  	  	?>
		

		</div>
		<!-- 选项卡 卡片 -->
        <div id="example1-tab3" class="mdui-p-a-2">
		<br>
		<br>
		<br>
		<!-- 卡片 源码下载 -->
		<div class="mdui-card mdui-ripple mdui-hoverable">
		<style>
		
		</style>
  		   <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
  		   <div class="mdui-card-media">
		   <div class="card-cloud-download mdui-color-theme-accent">
    		   <i class="mdui-icon material-icons mdui-center">cloud_download</i>
			   </div>
  		   </div>
  
 		    <!-- 卡片的标题和副标题 -->
 		    <div class="mdui-card-primary">
  		    <!-- <div class="mdui-card-primary-title">源码下载</div> -->
   		    <div class="mdui-typo-title">源码下载</div>
			<!-- <div class="mdui-card-primary-subtitle">Subtitle</div> -->
  		   </div>
		   
  		   <!-- 卡片的按钮 -->
  		   <div class="mdui-card-actions">
    		   <button class="mdui-btn mdui-ripple" id="创意工坊">创意工坊</button>
    		   <button class="mdui-btn mdui-ripple" id="源码下载">源码下载</button>
			   <button class="mdui-btn mdui-ripple" id="克隆按钮">从Github克隆</button>
  		   </div>
  
		   </div>
		<br>
		<br>
		<br>
		   <!-- 卡片 MD配色 -->
		<div class="mdui-card mdui-ripple mdui-hoverable" id="配色卡片">
  		   <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
  		   <div class="mdui-card-media">
		   <div class="card-mdps mdui-color-theme-accent">
			   <i class="mdui-icon material-icons mdui-center">color_lens</i>
			   </div>
  		   </div>
  
 		    <!-- 卡片的标题和副标题 -->
 		    <div class="mdui-card-primary">
  		    <!-- <div class="mdui-card-primary-title">源码下载</div> -->
   		    <div class="mdui-typo-title">Material Design主题配色</div>
  		   </div>
		   
		   </div>
		<br>
		<br>
		<br>
		     <!-- 卡片 氢应用 -->
		<div class="mdui-card mdui-ripple mdui-hoverable" onclick="window.open('./tools_mian.php');">
  		   <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
  		   <div class="mdui-card-media">
		   <div class="card-qyy">
			   <i class="mdui-icon material-icons  mdui-center">polymer</i>
			   </div>
  		   </div>
  
 		    <!-- 卡片的标题和副标题 -->
 		    <div class="mdui-card-primary">
  		    <!-- <div class="mdui-card-primary-title">源码下载</div> -->
   		    <div class="mdui-typo-title">氢应用————比轻更轻</div>
  		   </div>
		   
		   </div>
		<br>
		<br>
		<br>
		    <!-- 卡片 空白 -->
		<div class="mdui-card mdui-ripple mdui-hoverable" id="空白卡片">
  		   <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
  		   <div class="mdui-card-media">
		   <div class="card-qyy">
			   
			   </div>
  		   </div>
  
 		    <!-- 卡片的标题和副标题 -->
 		    <div class="mdui-card-primary">
   		    <!-- <div class="mdui-typo-title">氢应用————比轻更轻</div> -->
  		   </div>
		   
		   </div>
		<br>
		<br>
		<br>
		    <!-- 卡片 等待添加 -->
		<div class="mdui-card mdui-ripple mdui-hoverable" id="等待添加卡片">
  		   <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
  		   <div class="mdui-card-media">
		   <div class="card-qyy">
			   <div class="mdui-spinner mdui-center"></div>
			   </div>
  		   </div>
  
 		    <!-- 卡片的标题和副标题 -->
 		    <div class="mdui-card-primary">
   		    <div class="mdui-typo-title">等待添加</div>
  		   </div>
		   
		   </div>
		   <!-- 圆形进度条<div class="mdui-spinner"></div> -->
		   
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
  <script src="./my/js/mian.js"></script>
  <script src="./my/js/title.js"></script>  
</body>
</html>