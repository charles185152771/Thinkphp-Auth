<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?>|Usaedu管理平台</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- basic styles -->

    <link href="/tk-xm/usaedu/Public/Statics/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/tk-xm/usaedu/Public/Statics/Admin/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
      <link rel="stylesheet" href="/tk-xm/usaedu/Public/Statics/Admin/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- ace styles -->

    <link rel="stylesheet" href="/tk-xm/usaedu/Public/Statics/Admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/tk-xm/usaedu/Public/Statics/Admin/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/tk-xm/usaedu/Public/Statics/Admin/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="/tk-xm/usaedu/Public/Statics/Admin/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/tk-xm/usaedu/Public/Statics/Admin/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/tk-xm/usaedu/Public/Statics/Admin/assets/js/html5shiv.js"></script>
    <script src="/tk-xm/usaedu/Public/Statics/Admin/assets/js/respond.min.js"></script>
    <![endif]-->
    
</head>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>
    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    美中国际后台管理系统
                </small>
            </a><!-- /.brand -->
        </div><!-- /.头部-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-warning-sign"></i>
                            8条通知
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-xs no-hover btn-pink icon-comment"></i>
                                        新闻评论
                                    </span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                切换为编辑登录..
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
                                        新订单
                                    </span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">
                                        <i class="btn btn-xs no-hover btn-info icon-twitter"></i>
                                        粉丝
                                    </span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                查看所有通知
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/tk-xm/usaedu/Public/Statics/Admin/assets/avatars/user.jpg" alt="Jason's Photo" />
                        <span class="user-info">
                            <small>欢迎光临,</small>
                            Jason
                        </span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                设置
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                个人资料
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo U('Admin/Public/logout');?>">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>
        
        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>
            <ul class="nav nav-list">
                <li class="active">
                    <a href="<?php echo U('Index/index');?>">
                        <i class="icon-home"></i>
                        <span class="menu-text"> 控制台 </span>
                    </a>
                </li>
                <li class="active open">
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text"> 权限管理 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="<?php echo U('Auth/authCateList');?>">
                                <i class="icon-double-angle-right"></i>
                                权限分类列表
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Auth/addAuthCate');?>">
                                <i class="icon-double-angle-right"></i>
                                添加权限分类
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Auth/authList');?>">
                                <i class="icon-double-angle-right"></i>
                                权限列表
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Auth/addAuth');?>">
                                <i class="icon-double-angle-right"></i>
                                添加权限
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="active open">
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-group"></i>
                        <span class="menu-text"> 用户管理 </span>
                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="<?php echo U('User/index');?>">
                                <i class="icon-double-angle-right"></i>
                                查看用户
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('User/addUser');?>">
                                <i class="icon-double-angle-right"></i>
                                添加用户
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('User/groupList');?>">
                                <i class="icon-double-angle-right"></i>
                                用户组列表
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('User/addGroup');?>">
                                <i class="icon-double-angle-right"></i>
                                添加用户组
                            </a>
                        </li>
                        
                    </ul>
                </li>
            </ul>

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>
    

        <div class="main-content">

            
	<div class="page-content">
		<div class="page-header">
			<h1>
				权限管理
				<small>
					<i class="icon-double-angle-right"></i>
					 用户管理
				</small>
				<small>
					<i class="icon-double-angle-right"></i>
					 修改用户组
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<div class="widget-header widget-header-blue widget-header-flat">
					<h4 class="lighter">添加用户组</h4>
				</div>
				<div class="widget-body">
					<div class="widget-main">
					<form method="post" action="<?php echo U('updateGroup');?>" id="validation-form" class="form-horizontal" novalidate="novalidate">
						<?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($v['id']); ?>" />
						<div class="form-group">
							<label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">用户组名:</label>

							<div class="col-xs-12 col-sm-9">
								<div class="clearfix">
									<input type="text" class="col-xs-12 col-sm-4" id="name" value="<?php echo ($v['title']); ?>" name="title">
								</div>
							</div>
						</div>

						<div class="hr hr-dotted"></div>

						<div class="form-group">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right">是否开启用户组:</label>

							<div class="col-xs-12 col-sm-9">
								<div>
									<label class="blue">
										<input type="radio" class="ace" value="1" name="status" <?php if($v[status] == 1): ?>checked='checked'<?php endif; ?> />
										<span class="lbl"> 开放</span>
									</label>
								</div>

								<div>
									<label class="blue">
										<input type="radio" class="ace" value="0" name="status" <?php if($v[status] == 0): ?>checked='checked'<?php endif; ?> />
										<span class="lbl"> 关闭</span>
									</label>
								</div>
							</div>
						</div>

						<div class="space-2"></div>

						<div class="form-group">
							<label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">拥有权限（编号）:</label>

							<div class="col-xs-12 col-sm-9">
								<div class="clearfix">
									<input type="text" class="col-xs-12 col-sm-4" id="rule" name="rule" value="<?php echo ($v["rules"]); ?>" />
								</div>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
						<div class="row-fluid wizard-actions">
							<button data-last="Finish " class="btn btn-success btn-next">
								保存修改
							<i class="icon-arrow-right icon-on-right"></i></button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	

        
        </div>

        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        切换窄屏
                        <b></b>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->



<!--[if !IE]> -->

<script src="/tk-xm/usaedu/Public/Statics/Admin/assets/js/jquery-2.0.3.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.10.2.js"></script>
<![endif]-->

        <!--[if !IE]> -->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='/tk-xm/usaedu/Public/Statics/Admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/tk-xm/usaedu/Public/Statics/Admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='/tk-xm/usaedu/Public/Statics/Admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
</script>
<script src="/tk-xm/usaedu/Public/Statics/Admin/assets/js/bootstrap.min.js"></script>
<script src="/tk-xm/usaedu/Public/Statics/Admin/assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->



<!-- ace scripts -->

<script src="/tk-xm/usaedu/Public/Statics/Admin/assets/js/ace-elements.min.js"></script>
<script src="/tk-xm/usaedu/Public/Statics/Admin/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->




</body>
</html>