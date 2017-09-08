<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Forms | Amanda Admin Template</title><link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" /><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.validate.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.tagsinput.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/charCount.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/ui.spinner.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/chosen.jquery.min.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/forms.js"></script><!--[if IE 9]>    <!--<link rel="stylesheet" media="screen" href="css/style.ie9.css"/>--><![endif]--><!--[if IE 8]>    <!--<link rel="stylesheet" media="screen" href="css/style.ie8.css"/>--><![endif]--><!--[if lt IE 9]>	<!--<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>--><![endif]--></head><body class="withvernav"><div class="bodywrapper">    <div class="topheader">        <div class="left">            <h1 class="logo">Aman.<span>da</span></h1>            <span class="slogan">admin template</span>            <div class="search">            	<form action="" method="post">                	<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />                    <button class="submitbutton"></button>                </form>            </div><!--search-->            <br clear="all" />        </div><!--left-->        <div class="right">        	<div class="notification">                <a class="count" href="/Public/Admin/ajax/notifications.html"><span>9</span></a>        	</div>            <div class="userinfo">            	<img src="/Public/Admin/images/thumbs/avatar.png" alt="" />                <span>Juan Dela Cruz</span>            </div><!--userinfo-->            <div class="userinfodrop">            	<div class="avatar">                	<a href=""><img src="/Public/Admin/images/thumbs/avatarbig.png" alt="" /></a>                    <div class="changetheme">                    	Change theme: <br />                    	<a class="default"></a>                        <a class="blueline"></a>                        <a class="greenline"></a>                        <a class="contrast"></a>                        <a class="custombg"></a>                    </div>                </div><!--avatar-->				<div class="userdata">                	<h4>Juan Dela Cruz</h4>                    <span class="email">youremail@yourdomain.com</span>                    <ul>                    	<li><a href="editprofile.html">Edit Profile</a></li>                        <li><a href="accountsettings.html">Account Settings</a></li>                        <li><a href="help.html">Help</a></li>                        <li><a href="index.html">Sign Out</a></li>                    </ul>                </div><!--userdata-->            </div><!--userinfodrop-->        </div><!--right-->    </div><!--topheader-->    <div class="header">    	<ul class="headermenu">            <li><a href="<?php echo U('Index/index');?>"><span class="icon icon-flatscreen"></span>首页</a></li>            <li><a href="<?php echo U('Index/battle');?>"><span class="icon icon-flatscreen"></span>对战中心</a></li>            <li><a href="<?php echo U('Index/bigdata');?>"><span class="icon icon-pencil"></span>大数据</a></li>            <li class="current"><a href="<?php echo U('Index/guess');?>"><span class="icon icon-message"></span>竞猜</a></li>            <li><a href="<?php echo U('Index/mall');?>"><span class="icon icon-chart"></span>商城</a></li>            <li><a href="<?php echo U('Index/news');?>"><span class="icon icon-flatscreen"></span>咨讯</a></li>            <li><a href="<?php echo U('Index/active');?>"><span class="icon icon-flatscreen"></span>活动管理</a></li>            <li><a href="<?php echo U('Index/member');?>"><span class="icon icon-chart"></span>会员管理</a></li>        </ul>        <div class="headerwidget">        	<div class="earnings">            	<div class="one_half">                	<h4>Today's Earnings</h4>                    <h2>$640.01</h2>                </div><!--one_half-->                <div class="one_half last alignright">                	<h4>Current Rate</h4>                    <h2>53%</h2>                </div><!--one_half last-->            </div><!--earnings-->        </div><!--headerwidget-->    </div><!--header-->    <div class="vernav2 iconmenu">        <ul>            <li><a href="#guess" class="editor">竞猜比赛管理</a>                <span class="arrow"></span>                <ul id="guess">                    <li><a href="<?php echo U('Guess/showList');?>">竞猜比赛列表</a></li>                    <li><a href="<?php echo U('Guess/add');?>">添加竞猜比赛</a></li>                </ul>            </li>            <li><a href="#guessdata" class="error">竞猜比赛数据</a>                <span class="arrow"></span>                <ul id="guessdata">                    <li><a href="<?php echo U('Guessdata/showList');?>">数据列表</a></li>                    <li><a href="<?php echo U('Guessdata/add');?>">添加比赛数据</a></li>                </ul>            </li>            <li><a href="#guessteam" class="error">竞猜队伍管理</a>                <span class="arrow"></span>                <ul id="guessteam">                    <li><a href="<?php echo U('Guessteam/showList');?>">队伍列表</a></li>                    <li><a href="<?php echo U('Guessteam/add');?>">添加队伍</a></li>                </ul>            </li>            <li><a href="#guessuser" class="error">竞猜用户管理</a>                <span class="arrow"></span>                <ul id="guessuser">                    <li><a href="<?php echo U('Guessuser/showList');?>">用户列表</a></li>                    <li><a href="<?php echo U('Guessuser/add');?>">添加用户</a></li>                </ul>            </li>            <li><a href="#addons" class="addons">其他页面</a>                <span class="arrow"></span>                <ul id="addons">                    <li><a href="newsfeed.html">新闻订阅</a></li>                    <li><a href="profile.html">资料页面</a></li>                    <li><a href="productlist.html">产品列表</a></li>                    <li><a href="photo.html">图片视频分享</a></li>                    <li><a href="gallery.html">相册</a></li>                    <li><a href="invoice.html">购物车</a></li>                </ul>            </li>        </ul>        <a class="togglemenu"></a>        <br /><br />    </div><!--leftmenu-->    <div class="centercontent">        <div class="pageheader">            <h1 class="pagetitle">竞猜编辑</h1>            <span class="pagedesc">修改竞猜信息</span>           <!--  <ul class="hornav">                <li class="current"><a href="#basicform">Basic</a></li>                <li><a href="#validation">Validation</a></li>            </ul> -->        </div><!--pageheader-->        <div id="contentwrapper" class="contentwrapper">        	<div id="basicform" class="subcontent">                    <div class="contenttitle2">                        <h3>编辑竞猜</h3>                    </div><!--contenttitle-->                    <form class="stdform" action="<?php echo U('editOk');?>" method="post">                        <p>                            <label>竞猜比赛的ID</label>                            <span class="field"><input type="text" name="gid" value="<?php echo ($data["gid"]); ?>" class="smallinput" /></span>                            <input type="hidden" name="dgid" value="<?php echo ($data["dgid"]); ?>">                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜左边队伍的ID</label>                            <span class="field"><input type="text" name="ltid" value="<?php echo ($data["ltid"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜右边队伍的ID</label>                            <span class="field"><input type="text" name="rtid" value="<?php echo ($data["rtid"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜左边队伍的支持率</label>                            <span class="field"><input type="text" name="lrate" value="<?php echo ($data["lrate"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜左边队伍的支持率</label>                            <span class="field"><input type="text" name="rrate" value="<?php echo ($data["rrate"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>让分局中让分队伍的ID</label>                            <span class="field"><input type="text" name="gtid" value="<?php echo ($data["gtid"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>让分局中让的分数</label>                            <span class="field"><input type="text" name="score" value="<?php echo ($data["score"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>比赛机制</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛机制" name="part" value="<?php echo ($data["part"]); ?>" class="chzn-select" style="width:350px;" tabindex="2">                                    <option <?php if($data["part"] == 1 ): ?>selected="selected"<?php endif; ?> >BO1</option>                                    <option value="2" <?php if($data["part"] == 2 ): ?>selected="selected"<?php endif; ?>>BO2</option>                                    <option value="3" <?php if($data["part"] == 3 ): ?>selected="selected"<?php endif; ?>>BO3</option>                                    <option value="4" <?php if($data["part"] == 4 ): ?>selected="selected"<?php endif; ?>>BO4</option>                                    <option value="5" <?php if($data["part"] == 5 ): ?>selected="selected"<?php endif; ?> >BO5 </option>                                </select>                            </span>                        </p>                        <p>                            <label>竞猜类型</label>                            <span class="formwrapper">                                <select data-placeholder="请选择竞猜类型" name="type" class="chzn-select" style="width:350px;" tabindex="2">                                    <!--<option value=""></option>-->                                    <option value="1" <?php if($data["type"] == 1 ): ?>selected="selected"<?php endif; ?>>猜输赢</option>                                    <option value="2" <?php if($data["type"] == 2 ): ?>selected="selected"<?php endif; ?>>让分局</option>                                    <option value="3" <?php if($data["type"] == 3 ): ?>selected="selected"<?php endif; ?>>大小分</option>                                </select>                            </span>                        </p>                        <p>                            <label>比率</label>                            <span class="field"><input type="text" name="rate" value="<?php echo ($data["rate"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>竞猜状态</label>                            <span class="formwrapper">                                <select data-placeholder="请选择竞赛状态" name="status" class="chzn-select" style="width:350px;" tabindex="2">                                    <!--<option value=""></option>-->                                    <option value="1" <?php if($data["status"] == 1 ): ?>selected="selected"<?php endif; ?>>未开始</option>                                    <option value="2" <?php if($data["status"] == 2 ): ?>selected="selected"<?php endif; ?>>进行中</option>                                    <option value="3" <?php if($data["status"] == 3 ): ?>selected="selected"<?php endif; ?>>结束</option>                                </select>                            </span>                        </p>                        <label>创建时间</label>                        <span class="field"><input type="text" name="ctime" class="smallinput" /></span>                        <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>修改时间</label>                            <span class="field"><input type="text" name="mtime" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p class="stdformbutton">                        	<button class="submit radius2" id="btnSubmit">提交</button>                            <input type="reset" class="reset radius2" id="btnReset" value="清空" />                        </p>                    </form>            </div><!--subcontent--> -->        </div><!--contentwrapper-->	</div><!-- centercontent --></div><!--bodywrapper--></body><!--<script type="text/javascript" src="/Public/Admin/js/common.js"></script>--><!--<script type="text/javascript" src="/Public/Admin/js/WdatePicker.js"></script>--><script type="text/javascript">    jQuery(function(){        jQuery('#btnSubmit').on('click',function(){            jQuery('form').submit();        });        jQuery('#btnReset').on('click',function(){            jQuery('form')[0].reset();        });    });</script></html>