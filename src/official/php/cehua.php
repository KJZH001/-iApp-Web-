<?php
//此处为侧滑的html代码
print <<<EOT
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
        <a href="./set.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;设置</a>
    </div>
	<!-- 关于按钮 -->
    <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons">message</i>
        <a href="./about.php" class="mdui-list-item mdui-ripple mdui-color-transparent mdui-text-color-black-text mdui-col-xs-12 mdui-typo-subheading">&nbsp;&nbsp;&nbsp;关于</a>
    </div>
	<!--  -->
	<!-- 侧滑结束 -->
  </div>
EOT;
?>