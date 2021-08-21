<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Blog" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.8" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.52" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1502035140" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1502035140" rel="stylesheet" type="text/css" />
	<meta name="title" content="Martine Aoun Website - Personal Website"><link rel="shortcut icon" href="/gallery/favicon.jpg" type="image/jpeg" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance40" class="wb_element wb-menu wb-menu-mobile"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu menu-landing"><li><a href="#home" target="_self" title="Home">Home</a></li><li><a href="#my-story" target="_self" title="My Story">My Story</a></li><li><a href="#contact-me" target="_self" title="Contact Me">Contact Me</a></li></ul><div class="clearfix"></div></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance42" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance42");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance42").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 119px;">
	
<div id="wb_element_instance41" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://martineaoun.com">martineaoun.com</a></p>
</div><div id="wb_element_instance43" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
