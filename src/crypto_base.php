<!DOCTYPE html>
<!--  -->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>晓空iApp手册Web版 Base64加解密</title>
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
    <a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">Base64加解密</a>
	</div>
	
    <!-- 标题自适应 小屏幕 -->
	<div class="mdui-hidden-sm-up">
	<!-- 标题 -->
    <a href="javascript:;" class="mdui-typo-title 去超链接下划线 mdui-text-color-white">晓空iApp-Base64</a>
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
	        <!--获取内容-->
			<div class="mdui-textfield mdui-textfield-floating-label">
  			 <label class="mdui-textfield-label">需要加解密的文本</label>
 			 <textarea id="content" class="mdui-textfield-input" type="text"></textarea>
			</div>
			<!--按钮-->
			<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="jiaMi()">加密</button>
			<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="jieMi()">解密</button>
			<!--输出内容-->
	       	<div class="mdui-textfield" id="resultShow">
        	 <textarea type="text" class="mdui-textfield-input" placeholder="输出的内容在这里" disabled></textarea>
       	    </div>
			  
			  <script>
			  
		    // 创建Base64对象
			var Base64 = {
			 _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
			 encode: function(e) {
			  var t = "";
			  var n, r, i, s, o, u, a;
			  var f = 0;
			  e = Base64._utf8_encode(e);
			  while (f < e.length) {
			   n = e.charCodeAt(f++);
			   r = e.charCodeAt(f++);
			   i = e.charCodeAt(f++);
			   s = n >> 2;
			   o = (n & 3) << 4 | r >> 4;
			   u = (r & 15) << 2 | i >> 6;
			   a = i & 63;
			   if (isNaN(r)) {
				u = a = 64
			   } else if (isNaN(i)) {
				a = 64
			   }
			   t = t + this._keyStr.charAt(s) + this._keyStr.charAt(o) + this._keyStr.charAt(u) + this._keyStr.charAt(a)
			  }
			  return t
			 },
			 decode: function(e) {
			  var t = "";
			  var n, r, i;
			  var s, o, u, a;
			  var f = 0;
			  e=e.replace(/[^A-Za-z0-9+/=]/g,"");
			  while (f < e.length) {
			   s = this._keyStr.indexOf(e.charAt(f++));
			   o = this._keyStr.indexOf(e.charAt(f++));
			   u = this._keyStr.indexOf(e.charAt(f++));
			   a = this._keyStr.indexOf(e.charAt(f++));
			   n = s << 2 | o >> 4;
			   r = (o & 15) << 4 | u >> 2;
			   i = (u & 3) << 6 | a;
			   t = t + String.fromCharCode(n);
			   if (u != 64) {
				t = t + String.fromCharCode(r)
			   }
			   if (a != 64) {
				t = t + String.fromCharCode(i)
			   }
			  }
			  t = Base64._utf8_decode(t);
			  return t
			 },
			 _utf8_encode: function(e) {
			  e = e.replace(/rn/g, "n");
			  var t = "";
			  for (var n = 0; n < e.length; n++) {
			   var r = e.charCodeAt(n);
			   if (r < 128) {
				t += String.fromCharCode(r)
			   } else if (r > 127 && r < 2048) {
				t += String.fromCharCode(r >> 6 | 192);
				t += String.fromCharCode(r & 63 | 128)
			   } else {
				t += String.fromCharCode(r >> 12 | 224);
				t += String.fromCharCode(r >> 6 & 63 | 128);
				t += String.fromCharCode(r & 63 | 128)
			   }
			  }
			  return t
			 },
			 _utf8_decode: function(e) {
			  var t = "";
			  var n = 0;
			  var r = c1 = c2 = 0;
			  while (n < e.length) {
			   r = e.charCodeAt(n);
			   if (r < 128) {
				t += String.fromCharCode(r);
				n++
			   } else if (r > 191 && r < 224) {
				c2 = e.charCodeAt(n + 1);
				t += String.fromCharCode((r & 31) << 6 | c2 & 63);
				n += 2
			   } else {
				c2 = e.charCodeAt(n + 1);
				c3 = e.charCodeAt(n + 2);
				t += String.fromCharCode((r & 15) << 12 | (c2 & 63) << 6 | c3 & 63);
				n += 3
			   }
			  }
			  return t
			 }
			}
			  
			  function jiaMi()
			    {
					
					//获取编辑框内容
 			   	    var content=document.getElementById("content").value;
					var encodedString = Base64.encode(content);
 				    document.getElementById("resultShow").innerHTML = 
					"<textarea type=\"text\" class=\"mdui-textfield-input\" id=\"resultText\" placeholder=\"输出的内容在这里\" disabled>"+encodedString+"</textarea>";
					mdui.updateTextFields();
					
				}
				function jieMi()
			    {
					var content=document.getElementById("content").value;
					var decodedString = Base64.decode(content);
					document.getElementById("resultShow").innerHTML = 
					"<textarea type=\"text\" class=\"mdui-textfield-input\" id=\"resultText\" placeholder=\"输出的内容在这里\" disabled>"+decodedString+"</textarea>";
					mdui.updateTextFields();
				}
				
			  </script>
		   
		   <br>
		   <br>
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