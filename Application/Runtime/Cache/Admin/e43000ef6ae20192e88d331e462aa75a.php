<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>查看消息页面_AmaAdmin后台管理系统模板 - 源码之家</title>
<link rel="stylesheet" href="/Public/Admin/css/style.default.css" type="text/css" />
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.alerts.js"></script>
<script type="text/javascript" src="/Public/Admin/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/Public/Admin/js/custom/general.js"></script>
<script type="text/javascript" src="/Public/Admin/js/custom/messages.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">
<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">Wnv.<span>Admin</span></h1>
            <span class="slogan">后台管理系统</span>
            
            <div class="search">
            	<form action="" method="post">
                	<input type="text" name="keyword" id="keyword" value="Enter keyword(s)" />
                    <button class="submitbutton"></button>
                </form>
            </div><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<!--<div class="notification">
                <a class="count" href="notifications.html"><span>9</span></a>
        	</div>
			-->
        	<div class="userinfo">
            	<img src="/Public/Admin/images/thumbs/avatar.png" alt="" />
                <span>Juan Dela Cruz</span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">
            	<div class="avatar">
                	<a href=""><img src="/Public/Admin/images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                    	Change theme: <br />
                    	<a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
                <div class="userdata">
                	<h4>Juan Dela Cruz</h4>
                    <span class="email">youremail@yourdomain.com</span>
                    <ul>
                    	<li><a href="editprofile.html">Edit Profile</a></li>
                        <li><a href="accountsettings.html">Account Settings</a></li>
                        <li><a href="help.html">Help</a></li>
                        <li><a href="index.html">Sign Out</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
        	<li><a href="index.html"><span class="icon icon-flatscreen"></span>Dashboard</a></li>
            <li><a href="manageblog.html"><span class="icon icon-pencil"></span>Manage Blog</a></li>
            <li class="current"><a href="messages.html"><span class="icon icon-message"></span>Messages</a></li>
            <li><a href="reports.html"><span class="icon icon-chart"></span>Reports</a></li>
        </ul>
        
        <div class="headerwidget">
        	<div class="earnings">
            	<div class="one_half">
                	<h4>Today's Earnings</h4>
                    <h2>$640.01</h2>
                </div><!--one_half-->
                <div class="one_half last alignright">
                	<h4>Current Rate</h4>
                    <h2>53%</h2>
                </div><!--one_half last-->
            </div><!--earnings-->
        </div><!--headerwidget-->
        
    </div><!--header-->
    
    <div class="vernav iconmenu">
    	<ul>
        	<li class="current"><a href="manageblog.html" class="inbox">Inbox</a></li>
            <li><a href="newpost.html" class="drafts">Drafts</a></li>
            <li><a href="" class="sent">Sent Mail</a></li>
            <li><a href="" class="trash">Trash</a></li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
    
    <div class="centercontent">
    
        <div class="pageheader">
            <h1 class="pagetitle">Messages</h1>
            <span class="pagedesc">The content below are loaded using ajax</span>
            
            <ul class="hornav">
                <li class="current"><a href="#inbox">Inbox</a></li>
                <li><a href="#compose">Compose New</a></li>
            </ul>
        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
             
             <div id="inbox" class="subcontent">
             
                <div class="msghead">
                    <ul class="msghead_menu">
                        <li><a class="reportspam">Report Spam</a></li>
                        <li class="marginleft5 dropdown" id="actions">
                            <a class="dropdown_label" href="#actions">
                            Actions
                            <span class="arrow"></span>
                            </a>
                            <ul>
                                <li><a href="">Mark as Read</a></li>
                                <li><a href="">Mark as Unread</a></li>
                                <li><a href="">Move to Folder</a></li>
                                <li><a href="">Add Star</a></li>
                            </ul>
                        </li>
                        <li class="marginleft5"><a class="msgtrash" title="Trash"></a></li>
                    	<li class="right"><a class="next"></a></li>
                        <li class="right"><a class="prev prev_disabled"></a></li>
                        <li class="right"><span class="pageinfo">1-10 of 2,139</span></li>
                    </ul>
                    <span class="clearall"></span>
                </div><!--msghead-->
                
                <table cellpadding="0" cellspacing="0" border="0" class="stdtable mailinbox">
                    <colgroup>
                        <col class="con1" width="4%"/>
                        <col class="con0" width="4%" />
                        <col class="con1" width="15%"/>
                        <col class="con0" width="63%"/>
                        <col class="con1" width="4%"/>
                        <col class="con1" width="10%"/>
                    </colgroup>
                    <thead>
                    <tr>
                        <th width="20" class="head1 aligncenter"><input type="checkbox" name="checkall" class="checkall" /></th>
                        <th class="head0">&nbsp;</th>
                        <th class="head1">Sender</th>
                        <th class="head0">Subject</th>
                        <th class="head1 attachement">&nbsp;</th>
                        <th class="head0">Date</th>
                    </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="head1 aligncenter"><input type="checkbox" name="checkall" class="checkall2" /></th>
                            <th class="head0"></th>
                            <th class="head1">Sender</th>
                            <th class="head0">Subject</th>
                            <th class="head1 attachement">&nbsp;</th>
                            <th class="head0">Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr class="unread">
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Hiccup Haddock</td>
                            <td><a href="" class="title">Ut enim ad minim veniam, quis nostrud exercitation</a></td>
                            <td class="attachment"><img src="/Public/Admin/images/icons/attachment.png" alt="" /></td>
                            <td class="date">July 1</td>
                        </tr>
                        <tr class="unread">
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>themepixels</td>
                            <td><a href="" class="title">Ullamco laboris nisi ut aliquip ex ea commodo consequat. </a></td>
                            <td class="attachment"></td>
                            <td class="date">June 30</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Puss in Boots</td>
                            <td><a href="" class="title">Sed ut perspiciatis unde omnis iste natus error</a></td>
                            <td class="attachment"></td>
                            <td class="date">June 28</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Humpty Dumpty</td>
                            <td><a href="" class="title">Sit voluptatem accusantium doloremque laudantium</a></td>
                            <td class="attachment"><img src="/Public/Admin/images/icons/attachment.png" alt="" /></td>
                            <td class="date">June 20</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar starred"></a></td>
                            <td>themepixels</td>
                            <td><a href="" class="title">Totam rem aperiam, eaque ipsa quae ab illo inventore</a></td>
                            <td class="attachment"></td>
                            <td class="date">June 19</td>
                        </tr>
                        <tr class="unread">
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Hiccup Haddock</td>
                            <td><a href="" class="title">Ut enim ad minim veniam, quis nostrud exercitation</a></td>
                            <td class="attachment"><img src="/Public/Admin/images/icons/attachment.png" alt="" /></td>
                            <td class="date">July 1</td>
                        </tr>
                        <tr class="unread">
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>themepixels</td>
                            <td><a href="" class="title">Ullamco laboris nisi ut aliquip ex ea commodo consequat. </a></td>
                            <td class="attachment"></td>
                            <td class="date">June 30</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Puss in Boots</td>
                            <td><a href="" class="title">Sed ut perspiciatis unde omnis iste natus error</a></td>
                            <td class="attachment"></td>
                            <td class="date">June 28</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar"></a></td>
                            <td>Humpty Dumpty</td>
                            <td><a href="" class="title">Sit voluptatem accusantium doloremque laudantium</a></td>
                            <td class="attachment"><img src="/Public/Admin/images/icons/attachment.png" alt="" /></td>
                            <td class="date">June 20</td>
                        </tr>
                        <tr>
                            <td class="aligncenter"><input type="checkbox" name="" /></td>
                            <td class="star"><a class="msgstar starred"></a></td>
                            <td>themepixels</td>
                            <td><a href="" class="title">Totam rem aperiam, eaque ipsa quae ab illo inventore</a></td>
                            <td class="attachment"></td>
                            <td class="date">June 19</td>
                        </tr>

                    </tbody>
                </table>             
             </div>
             <div id="compose" class="subcontent" style="display: none">&nbsp;</div>
        </div><!--contentwrapper-->
    
    </div><!--centercontent-->
    
    
</div><!--bodywrapper-->

</body>
</html>