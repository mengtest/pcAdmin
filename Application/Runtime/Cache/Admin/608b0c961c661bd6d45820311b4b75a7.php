<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><title>Forms | Amanda Admin Template</title><link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" /><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.validate.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/jquery.tagsinput.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/charCount.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/ui.spinner.min.js"></script><script type="text/javascript" src="/Public/Admin/js/plugins/chosen.jquery.min.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script><script type="text/javascript" src="/Public/Admin/js/custom/forms.js"></script><!--[if IE 9]>    <!--<link rel="stylesheet" media="screen" href="css/style.ie9.css"/>--><![endif]--><!--[if IE 8]>    <!--<link rel="stylesheet" media="screen" href="css/style.ie8.css"/>--><![endif]--><!--[if lt IE 9]>	<!--<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>--><![endif]--></head><body class="withvernav"><div class="bodywrapper">    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--<link rel="stylesheet" href="/Public/Admin/css/style.blueline.css">-->
</head>
<body>
    <div class="topheader">
    <div class="left">
        <h1 class="logo"><span><img src="/Public/Admin/images/logo.png" alt="" height="28px"/></span></h1>
        <span class="slogan">后台管理系统</span>

        <div class="search">
            <form action="" method="post">
                <input type="text" name="keyword" id="keyword" value="请输入" />
                <button class="submitbutton"></button>
            </form>
        </div><!--search-->

        <br clear="all" />

    </div><!--left-->

    <div class="right">
        <!--<div class="notification">
            <a class="count" href="ajax/notifications.html"><span>9</span></a>
        </div>-->
        <div class="userinfo">
            <?php if($_SESSION['picurl']== ''): ?><img src="/Public/Admin/images/thumbs/avatar.png" alt="" />
                <?php else: ?>
                <img src="<?php echo (session('picurl')); ?>"  width="30px" alt="" /><?php endif; ?>

            <?php if($_SESSION['username']== ''): ?><span>游客</span>
                <?php else: ?>
                <span><?php echo (session('username')); ?></span><?php endif; ?>
        </div><!--userinfo-->

        <div class="userinfodrop">
            <div class="avatar">
                <a href="">
                    <?php if($_SESSION['picurl']== ''): ?><img src="/Public/Admin/images/thumbs/avatarbig.png"  width="80px" height="100px" alt="" />
                        <?php else: ?>
                        <img src="<?php echo (session('picurl')); ?>" width="80px" height="100px" alt="" /><?php endif; ?>
                </a>
                <div class="changetheme">
                    切换主题: <br />
                    <a class="default"></a>
                    <a class="blueline"></a>
                    <a class="greenline"></a>
                    <a class="contrast"></a>
                    <a class="custombg"></a>
                </div>
            </div><!--avatar-->
            <div class="userdata">
                <h4><?php echo (session('nickname')); ?></h4>
                <span class="email"><?php echo (session('email')); ?></span>
                <ul>
                    <li><a href="<?php echo U('Rbac/reset');?>?id=<?php echo (session('uid')); ?>">密码重置</a></li>
                    <li><a href="<?php echo U('Rbac/edit');?>?id=<?php echo (session('uid')); ?>">账号设置</a></li>
                    <li><a href="help.html">帮助</a></li>
                    <li><a href="javascript:;" class="exit">退出</a></li>
                </ul>
            </div><!--userdata-->
        </div><!--userinfodrop-->
    </div><!--right-->
</div><!--topheader-->
</body>
</html>   <!--包含网页头文件-->    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/Public/Admin/css/font_424100_bdb2xt0k59g4x6r/iconfont.css">
</head>
<body>

    </body><div class="header">
    <ul class="headermenu">
        <li><a href="<?php echo U('Index/index');?>"><span class="iconfont icon-xitongguanli"></span>系统管理</a></li>
        <li><a href="<?php echo U('Index/battle');?>"><span class="iconfont icon-duizhan"></span>对战中心</a></li>
        <li><a href="<?php echo U('Index/bigdata');?>"><span class="iconfont icon-dashuju"></span>大数据</a></li>
        <li><a href="<?php echo U('Index/guess');?>"><span class="iconfont icon-jingcai"></span>竞猜</a></li>
        <li><a href="<?php echo U('Index/mall');?>"><span class="iconfont icon-store"></span>商城</a></li>
        <li><a href="<?php echo U('Index/news');?>"><span class="iconfont icon-zixun"></span>咨讯</a></li>
        <li><a href="<?php echo U('Index/active');?>"><span class="iconfont icon-huodongzhongxin"></span>活动管理</a></li>
        <li><a href="<?php echo U('Index/member');?>"><span class="iconfont icon-wode"></span>会员管理</a></li>
        <!--<li><a href="<?php echo U('Index/task');?>"><span class="iconfont icon-chart"></span>任务管理</a></li>-->
    </ul>


    <!--<div class="headerwidget">-->
        <!--<div class="earnings">-->
            <!--<div class="one_half">-->
                <!--<h4>Today's Earnings</h4>-->
                <!--<h2>$640.01</h2>-->
            <!--</div>&lt;!&ndash;one_half&ndash;&gt;-->
            <!--<div class="one_half last alignright">-->
                <!--<h4>Current Rate</h4>-->
                <!--<h2>53%</h2>-->
            <!--</div>&lt;!&ndash;one_half last&ndash;&gt;-->
        <!--</div>&lt;!&ndash;earnings&ndash;&gt;-->
    <!--</div>&lt;!&ndash;headerwidget&ndash;&gt;-->

</div><!--header-->
</html>
   <!--包含导航文件-->    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商城左侧栏</title>
</head>
<body>
    <div class="vernav2 iconmenu">
    <ul>
        <li><a href="#goods" class="drafts">商品管理</a>
            <span class="arrow"></span>
            <ul id="goods">
                <li><a href="<?php echo U('Goods/showList');?>">商品列表</a></li>
                <li><a href="<?php echo U('Goods/add');?>">添商品加</a></li>
            </ul>
        </li>

        <li><a href="#goodsattr" class="elements">商品详情</a>
            <span class="arrow"></span>
            <ul id="goodsattr">
                <li><a href="<?php echo U('Goodsattr/showList');?>">详情列表</a></li>
                <li><a href="<?php echo U('Goodsattr/add');?>">添加详情</a></li>
            </ul>
        </li>

        <li><a href="#goodssell" class="sent">出售管理</a>
            <span class="arrow"></span>
            <ul id="goodssell">
                <li><a href="<?php echo U('Goodssell/showList');?>">出售列表</a></li>
                <li><a href="<?php echo U('Goodssell/add');?>">添加出售</a></li>
            </ul>
        </li>

        <li><a href="#goodswant" class="inbox">求购管理</a>
            <span class="arrow"></span>
            <ul id="goodswant">
                <li><a href="<?php echo U('Goodswant/showList');?>">求购列表</a></li>
                <li><a href="<?php echo U('Goodswant/add');?>">添加求购</a></li>
            </ul>
        </li>

    </ul>
    <a class="togglemenu"></a>
    <br /><br />
</div><!--商城左侧栏-->
</body>
</html>    <div class="centercontent">        <div class="pageheader">            <h1 class="pagetitle">商品编辑</h1>            <span class="pagedesc">修改商品信息</span>           <!--  <ul class="hornav">                <li class="current"><a href="#basicform">Basic</a></li>                <li><a href="#validation">Validation</a></li>            </ul> -->        </div><!--pageheader-->        <div id="contentwrapper" class="contentwrapper">        	<div id="basicform" class="subcontent">                    <div class="contenttitle2">                        <h3>编辑商品</h3>                    </div><!--contenttitle-->                    <form class="stdform" action="<?php echo U('editOk');?>" method="post" enctype="multipart/form-data">                        <p>                            <label>商品名称</label>                            <span class="field"><input type="text" name="good_name" value="<?php echo ($data["good_name"]); ?>" class="smallinput" /></span>                            <input type="hidden" name="gid" value="<?php echo ($data["gid"]); ?>">                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <?php if($data["icon"] == ''): ?><p>                                <label>上传图片</label>                                <span class="field">                                    <input type="file" name="icon" />                                </span>                            </p>                        <?php else: ?>                            <p>                                <label>商品图片</label>                                <span class="field">                                    <img src="<?php echo ($data["icon"]); ?>" alt="" height="100px"/>                                <!--<input type="file" name="icon" />-->                                </span>                            </p>                            <p>                                <label>更换图片</label>                                <span class="field">                                <!--<img src="<?php echo ($data["icon"]); ?>" alt=""/>-->                                    <input type="file" name="icon" />                                </span>                            </p><?php endif; ?>                        <p>                            <label>商品价格</label>                            <span class="field"><input type="text" name="price" value="<?php echo ($data["price"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>库存</label>                            <span class="field"><input type="text" name="stock" value="<?php echo ($data["stock"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>商品分类</label>                            <span class="formwrapper">                                <select name="g_class" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value="-1">请选择商品类型</option>                                    <?php if(is_array($class)): foreach($class as $key=>$vol): ?><option value="<?php echo ($vol["ga_id"]); ?>" <?php if($vol['ga_id'] == $data['g_class']): ?>selected="selected"<?php endif; ?>>                                       <?php echo ($vol["ga_name"]); ?>                                        </option><?php endforeach; endif; ?>                                </select>                            </span>                        </p>                        <p>                            <label>商品等级</label>                            <span class="formwrapper">                                <select name="g_grand" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value="-1">请选择商品类型</option>                                    <?php if(is_array($grand)): foreach($grand as $key=>$vol): ?><option value="<?php echo ($vol["ga_id"]); ?>" <?php if($vol['ga_id'] == $data['g_grand']): ?>selected="selected"<?php endif; ?>>                                        <?php echo ($vol["ga_name"]); ?>                                        </option><?php endforeach; endif; ?>                                </select>                            </span>                        </p>                        <p>                            <label>所属部位</label>                            <span class="formwrapper">                                <select name="g_position" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value="-1">请选择商品类型</option>                                    <?php if(is_array($position)): foreach($position as $key=>$vol): ?><option value="<?php echo ($vol["ga_id"]); ?>" <?php if($vol['ga_id'] == $data['g_position']): ?>selected="selected"<?php endif; ?>>                                        <?php echo ($vol["ga_name"]); ?>                                        </option><?php endforeach; endif; ?>                                </select>                            </span>                        </p>                        <p>                            <label>商品所在售卖区</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛机制" name="g_part" value="<?php echo ($data["g_part"]); ?>" class="chzn-select" style="width:350px;" tabindex="2">                                    <option value=""></option>                                    <option <?php if($data["g_part"] == 1 ): ?>selected="selected"<?php endif; ?> >推荐区</option>                                    <option value="2" <?php if($data["g_part"] == 2 ): ?>selected="selected"<?php endif; ?>>打折区</option>                                    <option value="3" <?php if($data["g_part"] == 3 ): ?>selected="selected"<?php endif; ?>>人气区</option>                                    <option value="4" <?php if($data["g_part"] == 4 ): ?>selected="selected"<?php endif; ?>>土豪区</option>                                    <option value="5" <?php if($data["g_part"] == 5 ): ?>selected="selected"<?php endif; ?> >求购区</option>                                </select>                            </span>                        </p>                        <p>                            <label>可否竞猜</label>                            <span class="formwrapper">                                <select data-placeholder="请选择比赛类型" name="guess" class="chzn-select" style="width:350px;" tabindex="2">                                    <!--<option value=""></option>-->                                    <option value="1" <?php if($data["guess"] == 1 ): ?>selected="selected"<?php endif; ?>>可竞猜</option>                                    <option value="2" <?php if($data["guess"] == 2 ): ?>selected="selected"<?php endif; ?>>不可竞猜</option>                                </select>                            </span>                        </p>                        <p>                            <label>市场估值</label>                            <span class="field"><input type="text" name="valuation" value="<?php echo ($data["valuation"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>累计成交量</label>                            <span class="field"><input type="text" name="saled_num" value="<?php echo ($data["saled_num"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>商品所属游戏</label>                            <span class="formwrapper">                                <select data-placeholder="请选择竞猜类型" name="gameOwner" class="chzn-select" style="width:350px;" tabindex="2">                                    <!--<option value=""></option>-->                                    <option value="1" <?php if($data["gameOwner"] == 1 ): ?>selected="selected"<?php endif; ?>>dota2</option>                                    <option value="2" <?php if($data["gameOwner"] == 2 ): ?>selected="selected"<?php endif; ?>>csgo</option>                                </select>                            </span>                        </p>                        <p>                            <label>所属英雄ID</label>                            <span class="field"><input type="text" name="heroOwner" value="<?php echo ($data["heroOwner"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>所属者id</label>                            <span class="field"><input type="text" name="oid" value="<?php echo ($data["oid"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p>                            <label>商品属性id</label>                            <span class="field"><input type="text" name="pid" value="<?php echo ($data["pid"]); ?>" class="smallinput" /></span>                            <!-- <small class="desc">Small description of this field.</small> -->                        </p>                        <p class="stdformbutton">                        	<button class="submit radius2" id="btnSubmit">提交</button>                            <input type="reset" class="reset radius2" id="btnReset" value="清空" />                        </p>                    </form>            </div><!--subcontent--> -->        </div><!--contentwrapper-->	</div><!-- centercontent --></div><!--bodywrapper--></body><script type="text/javascript">    jQuery.noConflict();    jQuery(document).ready(function($){        $(function(){            $('#btnSubmit').on('click',function(){                $('form').submit();            });            $('#btnReset').on('click',function(){                $('form')[0].reset();            });            $('.exit').click(function () {                window.location.href = "/index.php/Admin/Public/logout";            });            $(".headermenu>li").eq(4).addClass("current").siblings().removeClass("current")        });    });</script></html>