<?php 
ob_start();
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "/banhoa/function/dbconnection.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/banhoa/function/define.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Admin</title>
        <link rel="stylesheet" type="text/css" href="/banhoa/templates/admin/css/styles.css" media="screen" />
		<script type="text/javascript" src="/banhoa/libraries/ckeditor/ckeditor.js"/></script>
		<script type="text/javascript" src="/banhoa/libraries/jquery/jquery-2.1.4.min.js"/></script>
		<script type="text/javascript" src="/banhoa/libraries/jquery/jquery.validate.min.js"/></script>
	</head>
	<body>
    	<!-- Header -->
        <div id="header">
            <!-- Header. Status part -->
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_4">
                    	<ul class="user-pro">
							<li><a href="logout.php">Logout</a></li>
							<li>Chào, <a href="indexUser.php">admin</a></li>
                    	</ul>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div> <!-- End #header-status -->
            
            <!-- Header. Main part -->
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li id="current"><a href="index.php">Quản trị</a></li>
                                <li><a href="editUser.php?edit=<?php echo $_SESSION['id']?>">Tài khoản</a></li>
								<li><a href="indexUser.php">Người dùng</a></li>
                            </ul>
                        </div><!-- End. #Logo -->
                    </div><!-- End. .grid_12-->
                    <div style="clear: both;"></div>
                </div><!-- End. .container_12 -->
            </div> <!-- End #header-main -->
            <div style="clear: both;"></div>
            <!-- Sub navigation -->
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                            <li><a href="indexIntroduct.php">Hoa</a></li>
                            <li><a href="indexCat.php">Danh mục hoa</a></li>
							<li><a href="indexColor.php">Danh mục màu</a></li>
							<li><a href="indexContact.php">Liên hệ</a></li>
							
                        </ul>
                        
                    </div><!-- End. .grid_12-->
                </div><!-- End. .container_12 -->
                <div style="clear: both;"></div>
            </div> <!-- End #subnav -->
        </div> <!-- End #header -->
        
		<div class="container_12">