<?php
header("Content-type: text/css; charset: UTF-8");
require_once( dirname( __FILE__ ) . '/../../../../wp-load.php' );;
define('CSSBG', get_bloginfo('template_url') . '/img/bg');
?>
html {
	font-family: 'Open Sans', sans-serif;
	font-size: 62.5%; /* Corrects text resizing oddly in IE6/7 when body font-size is set using em units http://clagnut.com/blog/348/#c790 */
	overflow-y: scroll; /* Keeps page centred in all browsers regardless of content height */
	-webkit-text-size-adjust: 100%; /* Prevents iOS text size adjust after orientation change, without disabling user zoom */
	-ms-text-size-adjust: 100%; /* www.456bereastreet.com/archive/201012/controlling_text_size_in_safari_for_ios_without_disabling_user_zoom/ */
	
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
	display: block;
}
ol, ul {
	list-style: none;
}
table { /* tables still need 'cellspacing="0"' in the markup */
	border-collapse: separate;
	border-spacing: 0;
}
caption, th, td {
	font-weight: normal;
	text-align: left;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: "";
}
blockquote, q {
	quotes: "" "";
}
a:focus {
	outline: thin dotted;
}
a:hover,
a:active { /* Improves readability when focused and also mouse hovered in all browsers people.opera.com/patrickl/experiments/keyboard/test */
	outline: 0;
}
a img {
	border: 0;
}
/* =WordPress Core
-------------------------------------------------------------- */
.alignnone {
    margin: 5px 20px 20px 0;
}
.aligncenter,
div.aligncenter {
    display: block;
    margin: 5px auto 5px auto;
}
.alignright {
    float:right;
    margin: 5px 0 20px 20px;
}
.alignleft {
    float: left;
    margin: 5px 20px 20px 0;
}
.aligncenter {
    display: block;
    margin: 5px auto 5px auto;
}
a img.alignright {
    float: right;
    margin: 5px 0 20px 20px;
}
a img.alignnone {
    margin: 5px 20px 20px 0;
}
a img.alignleft {
    float: left;
    margin: 5px 20px 20px 0;
}
a img.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto
}
.wp-caption {
    background: #fff;
    border: 1px solid #f0f0f0;
    max-width: 96%; /* Image does not overflow the content area */
    padding: 5px 3px 10px;
    text-align: center;
}
.wp-caption.alignnone {
    margin: 5px 20px 20px 0;
}
.wp-caption.alignleft {
    margin: 5px 20px 20px 0;
}
.wp-caption.alignright {
    margin: 5px 0 20px 20px;
}
.wp-caption img {
    border: 0 none;
    height: auto;
    margin: 0;
    max-width: 98.5%;
    padding: 0;
    width: auto;
}
.wp-caption p.wp-caption-text {
    font-size: 11px;
    line-height: 17px;
    margin: 0;
    padding: 0 4px 5px;
}
/* =Global
----------------------------------------------- */
body,
button,
input,
select,
textarea {
	text-rendering: optimizelegibility;
	line-height: 1.68;
	font-family: 'Open Sans',Arial,sans-serif;
	text-shadow: 0 1px rgba(255, 255, 255, 0.75);
}
ul {
	
	text-shadow: none;
	}
footer {
	
	text-shadow: none;
	}
body{
		background-image: url(<?php echo CSSBG; ?>/bgnoise.png);
	
	}
h1 {
	
	font-size: 32px;
	font-weight: normal;
	
	}
h2, h3, h4, h5, h6 {
	font-weight: normal;
	font-size: 24px;
	color: #666;
	
	}
footer.site-footer {
	background-color: #F4F4F4;
	background-image: url(<?php echo CSSBG; ?>/type.png);
	border-top: 7px solid #333;
	padding: 20px 20px;
	color: #CCC;
	}
footer .footer_section{
	background-image: url(<?php echo CSSBG; ?>/transparent_dark.png);
	padding: 10px;
	border-radius:14px 14px;
	border: 1px solid #333;
	margin-bottom: 10px;
	}
footer .footer_info {
	background-image: url(<?php echo CSSBG; ?>/transparent_dark.png);
	padding: 10px 0;
	margin: 10px 0;
	text-align: center;	
	border: 1px solid #333;
	}	
.tags-links .icon-tag, .entry-meta .icon-tag{
	color: #999;
	}
.carousel .carousel-control {
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	}	
/* Alignment */
.alignleft {
	display: inline;
	float: left;
	margin-right: 1.5em;
}
.alignright {
	display: inline;
	float: right;
	margin-left: 1.5em;
}
.aligncenter {
	clear: both;
	display: block;
	margin: 0 auto;
}
/* Text meant only for screen readers */
.assistive-text {
	clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
	clip: rect(1px, 1px, 1px, 1px);
	position: absolute !important;
}
.site-header{
	background-color: transparent;
	
	}
/* =Menu
----------------------------------------------- */
.main-navigation {
	clear: both;
	display: block;
	float: left;
	width: 100%;
}
.main-navigation ul {
	list-style: none;
	margin: 0;
	padding-left: 0;
}
.main-navigation li {
	float: left;
	position: relative;
}
.main-navigation a {
	display: block;
	text-decoration: none;
}
.mobile_menu {
	background-color: #666;
	/*background-image: url(<?php echo CSSBG; ?>/transparent_dark.png);*/
	border-radius: 5px;
	margin-bottom: 10px;
	}
.mobile_menu form {
	padding: 10px 10px 0px 10px;
	margin: 0;
	}
	
.mobile_menu select {
	background-image: url(<?php echo CSSBG; ?>/bgnoise.png);
	width: 100%;
	}	
	
.main-navigation ul ul {
	-moz-box-shadow: 0 3px 3px rgba(0,0,0,0.2);
	-webkit-box-shadow: 0 3px 3px rgba(0,0,0,0.2);
	box-shadow: 0 3px 3px rgba(0,0,0,0.2);
	display: none;
	float: left;
	position: absolute;
		top: 1.5em;
		left: 0;
	z-index: 99999;
}
.main-navigation ul ul ul {
	left: 100%;
	top: 0;
}
.main-navigation ul ul a {
	width: 200px;
}
.main-navigation ul ul li {
}
.main-navigation li:hover > a {
}
.main-navigation ul ul :hover > a {
}
.main-navigation ul ul a:hover {
}
.main-navigation ul li:hover > ul {
	display: block;
}
.main-navigation li.current_page_item a,
.main-navigation li.current-menu-item a {
}
/* Small menu */
/*above header nav*/
.above-header-menu{
	float: right;
	border: 1px solid #CCC;
	border-width: 0 1px 1px 1px;
	-webkit-border-radius: 0px 0px 14px 14px;
        border-radius: 0px 0px 14px 14px;
		padding:0 20px 0 20px;
		width: 100%;
	}
ul.above-header-menu li{
	float: right;
	}
/*above header nav*/
.menu-toggle {
	cursor: pointer;
}
.main-small-navigation .menu {
	display: none;
}
.header-main-nav {
	border:1px solid #CCC;
	border-left:0;
	border-right:0;
	margin-bottom: 20px; 
	margin-top: 10px; 	
}
.header-main-nav ul li {
	border-right:dotted 1px #CCC;
	
}
.header-main-nav ul li a:link, .header-main-nav ul li a:visited {
	border-radius:0;
	text-transform:uppercase;
	color:#666;
	display:block;
	padding:20px;
	margin:2px;
	margin-bottom:3px;
	padding-top:18px;
	font-weight:bold;
	font-size:14px;
	text-align: center;
}
.header-main-nav ul li a:hover {
	color:#333;
	border-top:solid 3px #333;
	padding-top:15px;
	background-color: transparent;
}
.header-main-nav ul li i {
	display:block;
	font-size:12px;
	text-align:center;
	margin-left:auto;
	margin-right:auto;
	font-weight:normal;
	text-transform:lowercase;
	margin-top:5px
}
.header-main-nav ul li a i {
	color:#999;
}
.header-main-nav ul li a:hover i {
	color:#333;
}
.header-main-nav .icon-home, .header-main-nav .icon-chevron-down {
	display: inline;
	font-size: inherit;
	text-align: inherit;
	font-weight: inherit;
	text-transform: inherit;
	color: inherit;
	}
.header-main-nav .icon-chevron-down {
	padding-left: 8px;
	}
.dropdown-toggle a:link {
}
.dropdown-toggle .sub-menu {
	position:absolute;
	top:100%;
	border: #FFF 2px solid;
	border-radius:0 0 14px 14px;
	background-image: url(<?php echo CSSBG; ?>/transparent_dark3.png);
	padding-bottom:10px
}
.dropdown-toggle .sub-menu li {
	background-color:transparent;
	border:0
}
.dropdown-toggle .sub-menu li a {
	background-image:none;
	background-color:transparent
}
.dropdown-toggle .sub-menu li a:link, .dropdown-toggle .sub-menu li a:visited {
	color: #E2E2E2;
	font-size:12px;
	text-align:left;
	padding:0 20px 0 20px;
	background-color:none
}
.dropdown-toggle .sub-menu li a:hover {
	background-color:#666;
	color:#0088CC;
	border:0;
	background-color:transparent
}
.dropdown-toggle .sub-menu ul {
	top:0;
	border-width: 2px;
	border-color:#FFF;
	border-radius:14px 14px 14px 14px;
	background-color:#333;
	left:90%
}
.header-main-nav ul li.current-menu-item a:link, .header-main-nav ul li.current-menu-item a:visited, .header-main-nav ul li.current-menu-item a:hover, .header-main-nav ul li.current-menu-item a:active {
	border-top:solid 3px #333;
	padding-top:15px;
	background-color: transparent;
}
.header-main-nav ul li.current-menu-item ul a:link, .header-main-nav ul li.current-menu-item ul a:visited {
	border:0;
	background-color:transparent;
	color:#999
}
.header-main-nav ul li.current-menu-item ul a:hover {
	color:#FFF
}
.header-main-nav ul li.current-menu-item a:link i, .header-main-nav ul li.current-menu-item a:visited i, .header-main-nav ul li.current-menu-item a:hover i, .header-main-nav ul li.current-menu-item a:active i {
	color:#333
}
.header-main-nav ul li.current-menu-item ul li a:link, .header-main-nav ul li.current-menu-item ul li a:visited , .header-main-nav ul li.current-menu-item ul li a:hover , .header-main-nav ul li.current-menu-item ul li a:active {
	color:#333
}
 .header-main-nav ul li ul li.current-menu-item a:link, .header-main-nav ul li ul li.current-menu-item a:visited, .header-main-nav ul li ul li.current-menu-item a:hover, .header-main-nav ul li ul li.current-menu-item a:active{
	 padding-top: 0;
	 background-color: #202020;
	 }
/*--------------------------------------------------------------
SYMBIOSTOCK CONTENT
--------------------------------------------------------------*/
.content-wrap{
	clear: both;
	}
.item-preview img.photo {
	display: block;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}	
.site-main {
	border-top: #CCC 0px solid;
	}
.site-content:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
} 
.site-content{
	margin: 0px 0px 20px 0px;
	padding: 0px 20px 20px 0px;
	border: 1px solid #CCC;
	border-top: 0;
	border-bottom: 0;
	border-left: 0;
	
	}
	
.home .site-content	{
	margin: 0;
	padding: 0;
	border: 0;
	
	}
/*--------------------------------------------------------------
SYMBIOSTOCK WIDGETS
--------------------------------------------------------------*/	
.widget-area{
	color: #999;
	}
.widget-area aside{
	padding-bottom: 40px;
	}
.widget-area h1, .widget-area h2, .widget-area h3, .widget-area h4, .widget-area h5, .widget-area h6 {
	clear: both;
	font-size: 22px;
	color: #999;
	letter-spacing: 1px;
	border-bottom: 3px solid #CCC;
	padding: 5px 0 5px 0;
	margin: 5px 0 4px 0;
	line-height: 1.618;
	}
.widget-area ul li a:link, .widget-area ul li a:visted {
	color: #999;
	text-decoration: none;
	display: block;
	width: 100%;
	}
.widget-area ul {
	margin: 0;
	padding: 0;
	}	
	
.widget-area ul li{
	padding-top: 5px;
	padding-bottom: 4px;
	border-bottom: 1px #CCC solid;
	}
	
/*--------------------------------------------------------------
SYMBIOSTOCK CART
--------------------------------------------------------------*/	
#symbiostock_product_table tr{
	}
#symbiostock_product_table tr.in_cart td,
#symbiostock_product_table tr.in_cart label {
	font-style: oblique;
	background-color: #FFFF64;
	
	}	
span.compare_discount{
	text-decoration:line-through;
	color: #999;
	
	}
.not_available {
	color: #CCC;
	}
	
.not_available label {
	text-decoration: line-through;
	}	
	
 em.compare_discount {
	text-decoration: none;
	font-weight: bold;
	color: #06F;
	
	}	
	
.total{
	font-weight: bold;
	font-size: 16px;
	display: block;
	margin-bottom: 13px;
	
	}
.gotocart{
	font-size: 20px;
	}
a:link.remove_from_cart {
	color: #999;
	
	}
a:visited.remove_from_cart {
	color: #999;
	}	
a:hover.remove_from_cart {
	text-decoration: none;
	color: #F00;
	}	
a:active.remove_from_cart {}			
/*tags*/
#keywords-listing a:link {color: #666;} 
#keywords-listing  a:visited {color: #666;} 
#keywords-listing a:hover {color: #333;} 
#keywords-listing a:active {color: #666;}
/*--------------------------------------------------------------
SYMBIOSTOCK FEATURED POSTS
--------------------------------------------------------------*/	
#primary .widget-featured img {
	border: #FFF 2px solid;
	-webkit-border-radius: 12px;
border-radius: 12px; 
	}
.widget-area .widget-featured {
	height: 61px;
	}
.widget-area .widget-featured img{
	margin: 0 10px 0 0;
	padding: 0;
	display: block;
	height: 60px;
	padding-right: 10px;
	float: left;
	clear: both;
	}	
#primary .widget-featured {
	color: #666;
	
	}
#primary .widget-featured a:link, #primary .widget-featured a, .widget-area  a:link, .widget-area  a {
	font-size: 14px;
	color: #333;
	}
.widget-area  a:hover{
	color: #0088CC;
	}	
#primary .widget-featured p, .widget-area .widget-featured p{
	margin: 0;
	max-width: 220px;
	padding: 0;
	line-height: 1.618;
	font-size: 12px;
	
	
	}
#primary .widget-featured .entry-date, .widget-area .widget-featured .entry-date{
	color:  #999;
		
	}
#primary .widget-featured a:link.read-more{
	display: block;
	font-style: oblique;
	font-size: 12px;
	text-align: right;
	}
/*--------------------------------------------------------------
SYMBIOSTOCK SEARCH RESULTS
--------------------------------------------------------------*/	
.network_results_container{
	
	height: 270px;
	
	}
.search_page {
	border-right: 0;
	padding-top: 10px;
	
	}
.symbiostock_loader{
	}
.search-result{
	text-align: center;
	float: left;
	width: 170px;
	height: 170px;
	margin: 10px;
	}
.sscntrl{
	display: none;
	font-size: 18px;
	padding: 2px;
	
	}
.modal_control {
	
	font-size: 24px;
	}
.modal-preview {
	min-height: 400px;
	
	}
.modal-preview img {
	display: block;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
	}	
.results_for{
	text-align: center;
	}	
.results_info{
	
	}	
.search_minipic{
	border: 1px solid #DDDDDD;
    border-radius: 4px 4px 4px 4px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.055);
    padding: 4px;
	}
.symbiostock_pagination{
	margin: 0;
	clear: both;
	}	
	
.network_results{
	
	}
	
.network_results_header{
	}	
.network_results .pagination{
	margin: 0;
	}	
.network_results .pagination ul{
	margin: 15px 0 5px 0;
	}			
.purchased_file{
	text-align: center;
	float: left;
	width: 170px;
	margin: 10px;
	}
/* =Content
----------------------------------------------- */
.sticky {
}
.hentry {
	margin: 0 0 1.5em;
}
.entry-meta {
	clear: both;
}
.byline {
	display: none;
}
.single .byline,
.group-blog .byline {
	display: inline;
}
.entry-content,
.entry-summary {
	margin: 1.5em 0 0;
}
.page-links {
	clear: both;
	margin: 0 0 1.5em;
}
/* =Asides
----------------------------------------------- */
.blog .format-aside .entry-title,
.archive .format-aside .entry-title {
	display: none;
}
/* =Media
----------------------------------------------- */
.site-header img,
.entry-content img,
.comment-content img,
.widget img {
	max-width: 100%; /* Fluid images for posts, comments, and widgets */
}
.site-header img,
.entry-content img,
img[class*="align"],
img[class*="wp-image-"] {
	height: auto; /* Make sure images with WordPress-added height and width attributes are scaled correctly */
}
.site-header img,
.entry-content img,
img.size-full {
	max-width: 100%;
	width: auto; /* Prevent stretching of full-size images with height and width attributes in IE8 */
}
.entry-content img.wp-smiley,
.comment-content img.wp-smiley {
	border: none;
	margin-bottom: 0;
	margin-top: 0;
	padding: 0;
}
.wp-caption {
	border: 1px solid #ccc;
	max-width: 100%;
}
.wp-caption.aligncenter,
.wp-caption.alignleft,
.wp-caption.alignright {
	margin-bottom: 1.5em;
}
.wp-caption img {
	display: block;
	margin: 1.2% auto 0;
	max-width: 98%;
}
.wp-caption-text {
	text-align: center;
}
.wp-caption .wp-caption-text {
	margin: 0.8075em 0;
}
.site-content .gallery {
	margin-bottom: 1.5em;
}
.gallery-caption {
}
.site-content .gallery a img {
	border: none;
	height: auto;
	max-width: 90%;
}
.site-content .gallery dd {
	margin: 0;
}
.site-content .gallery-columns-4 .gallery-item {
}
.site-content .gallery-columns-4 .gallery-item img {
}
/* Make sure embeds and iframes fit their containers */
embed,
iframe,
object {
	max-width: 100%;
}
/* =Navigation
----------------------------------------------- */
.site-content .site-navigation {
	margin: 0 0 1.5em;
	overflow: hidden;
}
.site-content .nav-previous {
	float: left;
	width: 50%;
}
.site-content .nav-next {
	float: right;
	text-align: right;
	width: 50%;
}
#symbiostock_main_search{
	float: right;
}
#symbiostock_main_search form {
margin: 5px;
	}
#symbiostock_main_search #s {
color: #97be0e;
font-weight: bold;
font-style: oblique;
border-color: #009de0;
border-radius: 8px 0px 0px 8px; 
-moz-border-radius: 10px 0px 0px 10px; 
-webkit-border-radius: 8px 0px 0px 8px; 
padding-left: 10px;
	}
	
#symbiostock_main_search #select_type{
	border-color: #009de0;
	width:100px;
	border-left-width: 0;
	}
#symbiostock_main_search button {
	border-color:#009de0;
	width:100px;
	}	
/* =Comments
----------------------------------------------- */
.bypostauthor {
}
/* =Widgets
----------------------------------------------- */
.widget {
}
/* Search widget */
#searchsubmit {
	display: none;
}
/**
 * The following are CSS styles extrapolated from the bp-default theme.
 * Use these styles as a guideline. You will probably need to adjust some
 * declarations so they will gel with your WP theme.
 */
/*--------------------------------------------------------------
1 - Activity
--------------------------------------------------------------*/
#activity-stream {
	margin-top: -5px;
}
#item-body form#whats-new-form {
	border-bottom: 1px solid #ddd;
	margin: 20px 0 10px;
	padding-bottom: 20px;
}
.home-page form#whats-new-form {
	border-bottom: none;
	padding-bottom: 0;
}
form#whats-new-form h5 {
	font-weight: normal;
	font-size: 12px;
	color: #888;
	margin: 0;
	margin-left: 76px;
	padding: 0 0 3px 0;
}
form#whats-new-form #whats-new-avatar {
	float: left;
}
form#whats-new-form #whats-new-content {
	margin-left: 54px;
	padding-left: 22px;
}
form#whats-new-form textarea {
	background: #fff;
	border: 1px inset #ccc;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	color: #555;
	font-family: inherit;
	font-size: 14px;
	height: 20px;
	padding: 6px;
	width: 98%;
}
form#whats-new-form #whats-new-options select {
	max-width: 200px;
	margin-top: 12px;
}
form#whats-new-form #whats-new-submit {
	float: right;
	margin-top: 12px;
}
#whats-new-options {
	overflow: auto;
	height: 0;
}
#whats-new:focus {
	border-color: rgba(31, 179, 221, 0.9) !important;
	outline-color: rgba(31, 179, 221, 0.9);
	box-shadow: 0 0 7px         rgba(31, 179, 221, 0.7);
	-moz-box-shadow: 0 0 7px    rgba(31, 179, 221, 0.7);
	-webkit-box-shadow: 0 0 7px rgba(31, 179, 221, 0.7);
}
/*--------------------------------------------------------------
1.1 - Activity Listing
--------------------------------------------------------------*/
ul.activity-list li {
	overflow: hidden;
	padding: 15px 0 0;
}
.activity-list .activity-avatar {
	float: left;
}
ul.activity-list > li:first-child {
	padding-top: 5px;
}
ul.item-list.activity-list li.has-comments {
	padding-bottom: 15px;
}
body.activity-permalink ul.activity-list li.has-comments {
	padding-bottom: 0;
}
.activity-list li.mini {
	font-size: 11px;
	min-height: 35px;
	padding: 15px 0 0 0;
	position: relative;
}
.activity-list li.mini .activity-avatar img.avatar,
.activity-list li.mini .activity-avatar img.FB_profile_pic {
	height: 20px;
	margin-left: 30px;
	width: 20px;
}
.activity-permalink .activity-list li.mini .activity-avatar img.avatar,
.activity-permalink .activity-list li.mini .activity-avatar img.FB_profile_pic {
	height: auto;
	margin-left: 0;
	width: auto;
}
body.activity-permalink .activity-list > li:first-child {
	padding-top: 0;
}
.activity-list li .activity-content {
	position: relative;
}
.activity-list li.mini .activity-content p {
	margin: 0;
}
.activity-list li.mini .activity-comments {
	clear: both;
	font-size: 12px;
}
body.activity-permalink li.mini .activity-meta {
	margin-top: 4px;
}
.activity-list li .activity-inreplyto {
	background: url( ../buddypress/bp-themes/bp-default/_inc/images/replyto_arrow.gif ) 7px 0 no-repeat;
	color: #888;
	font-size: 11px;
	margin-left: 5px;
	margin-top: 5px;
	padding-left: 25px;
}
.activity-list li .activity-inreplyto > p {
	margin: 0;
	display: inline;
}
.activity-list li .activity-inreplyto blockquote,
.activity-list li .activity-inreplyto div.activity-inner {
	background: none;
	border: none;
	display: inline;
	margin: 0;
	overflow: hidden;
	padding: 0;
}
.activity-list .activity-content {
	margin-left: 70px;
	margin-bottom: 15px;
}
body.activity-permalink .activity-list li .activity-content {
	background: #fff;
	border-bottom: 1px solid #ddd;
	border-right: 1px solid #ddd;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	font-size: 16px;
	line-height: 150%;
	min-height: 35px;
	margin-left: 185px;
	margin-right: 0;
	padding: 15px;
}
body.activity-permalink .activity-list li .activity-header > p {
	background: url( ../buddypress/bp-themes/bp-default/_inc/images/activity_arrow.gif ) top left no-repeat;
	height: 35px;
	margin-bottom: 0;
	margin-left: -35px;
	padding: 5px 0 0 35px;
}
.activity-list .activity-content .activity-header,
.activity-list .activity-content .comment-header {
	color: #888;
	font-size: 11px;
	line-height: 220%;
}
.activity-header {
	margin-right: 20px;
}
.activity-header a,
.comment-meta a,
.acomment-meta a {
	text-decoration: none;
}
.activity-list .activity-content .activity-header img.avatar {
	float: none !important;
	margin: 0 5px -8px 0 !important;
}
a.bp-secondary-action,
span.highlight {
	font-size: 11px;
	padding: 0;
	margin-right: 5px;
	text-decoration: none;
}
.activity-list .activity-content .activity-inner,
.activity-list .activity-content blockquote {
	margin: 10px 10px 5px 0;
	overflow: hidden;
}
.activity-list li.new_forum_post .activity-content .activity-inner,
.activity-list li.new_forum_topic .activity-content .activity-inner {
	border-left: 2px solid #EAEAEA;
	margin-left: 5px;
	padding-left: 10px;
}
body.activity-permalink .activity-content .activity-inner,
body.activity-permalink .activity-content blockquote {
	margin-left: 0;
	margin-top: 5px;
}
.activity-inner > p {
	word-wrap: break-word;
}
.activity-inner > .activity-inner {
	margin: 0 !important;
}
.activity-inner > blockquote {
	margin: 0 !important;
}
.activity-list .activity-content img.thumbnail {
	border: 2px solid #eee;
	float: left;
	margin: 0 10px 5px 0;
}
.activity-read-launch_pad_featured_posts_sidebar {
	margin-left: 1em;
	white-space: nowrap;
}
.activity-list li.load-launch_pad_featured_posts_sidebar {
	background: #f0f0f0 !important;
	border-right: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	font-size: 1.2em;
	margin: 15px 0 !important;
	padding: 10px 15px !important;
	text-align: center;
}
.activity-list li.load-launch_pad_featured_posts_sidebar a {
	color: #4D4D4D;
}
/*--------------------------------------------------------------
1.2 - Activity Comments
--------------------------------------------------------------*/
div.activity-meta {
	margin: 18px 0;
}
body.activity-permalink div.activity-meta {
	margin-bottom: 6px;
}
div.activity-meta a {
	font: normal 11px/20px Arial, Tahoma, Verdana, sans-serif;
	padding: 4px 8px;
}
a.activity-time-since {
	color: #aaa;
	text-decoration: none;
}
a.activity-time-since:hover {
	color: #888;
	text-decoration: underline;
}
a.bp-primary-action,
#reply-title small a {
	font-size: 11px;
	margin-right: 5px;
	text-decoration: none;
}
a.bp-primary-action span,
#reply-title small a span {
	background: #999;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	color: #fff;
	font-size: 90%;
	margin-left: 2px;
	padding: 0 5px;
}
a.bp-primary-action:hover span,
#reply-title small a:hover span {
	background: #555;
	color: #fff;
}
div.activity-comments {
	margin: 0 0 0 70px;
	overflow: hidden; /* IE fix */
	position: relative;
	width: auto;
	clear: both;
}
body.activity-permalink div.activity-comments {
	background: none;
	margin-left: 185px;
	width: auto;
}
div.activity-comments > ul {
	background: #f5f5f5;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	padding: 0 0 0 10px;
}
div.activity-comments ul,
div.activity-comments ul li {
	border: none;
	list-style: none;
}
div.activity-comments ul {
	clear: both;
}
div.activity-comments ul li {
	border-top: 2px solid #fff;
	padding: 10px 0 0;
}
body.activity-permalink .activity-list li.mini .activity-comments {
	clear: none;
	margin-top: 0;
}
body.activity-permalink div.activity-comments ul li {
	border-width: 1px;
	padding: 10px 0 0 0;
}
div.activity-comments > ul > li:first-child {
	border-top: none;
}
div.activity-comments ul li:last-child {
	margin-bottom: 0;
}
div.activity-comments ul li > ul {
	margin-left: 30px;
	margin-top: 0;
	padding-left: 10px;
}
body.activity-permalink div.activity-comments ul li > ul {
	margin-top: 10px;
}
body.activity-permalink div.activity-comments > ul {
	padding: 0 10px 0 15px;
}
div.activity-comments div.acomment-avatar img {
	border-width: 2px !important;
	float: left;
	height: 25px;
	margin-right: 10px;
	width: 25px;
}
div.activity-comments div.acomment-content {
	font-size: 11px;
	margin: 5px 0 0 40px;
}
div.acomment-content .time-since,
div.acomment-content .activity-delete-link,
div.acomment-content .comment-header {
	display: none;
}
body.activity-permalink div.activity-comments div.acomment-content {
	font-size: 14px;
}
div.activity-comments div.acomment-meta {
	color: #888;
	font-size: 11px;
}
div.activity-comments form.ac-form {
	background: #fafafa;
	border: 1px solid #ddd;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	display: none;
	margin: 0 0 15px 33px;
	padding: 8px;
}
div.activity-comments li form.ac-form {
	margin-right: 15px;
	clear: both;
}
div.activity-comments form.root {
	margin-left: 0;
}
div.activity-comments div#message {
	margin-top: 15px;
	margin-bottom: 0;
}
div.activity-comments form.loading {
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif );
	background-position: 2% 95%;
	background-repeat: no-repeat;
}
div.activity-comments form .ac-textarea {
	background: #fff;
	border: 1px inset #ccc;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	margin-bottom: 10px;
	padding: 8px;
}
div.activity-comments form textarea {
	border: none;
	color: #555;
	font-family: inherit;
	font-size: 11px;
	height: 60px;
	padding: 0;
	width: 100%;
}
div.activity-comments form input {
	margin-top: 5px;
}
div.activity-comments form div.ac-reply-avatar {
	float: left;
}
div.ac-reply-avatar img {
	border: 2px solid #fff !important;
}
div.activity-comments form div.ac-reply-content {
	color: #888;
	font-size: 11px;
	margin-left: 50px;
	padding-left: 15px;
}
.acomment-options {
	float: left;
	margin: 5px 0 5px 40px;
}
.acomment-options a {
	color: #999;
}
.acomment-options a:hover {
	color: inherit;
}
/*--------------------------------------------------------------
2 - Admin Bar
--------------------------------------------------------------*/
#wp-admin-bar .padder {
	width: 95% !important; /* Line up the admin bar with the content body in this theme */
}
/*--------------------------------------------------------------
3 - Directories - Members, Groups, Blogs, Forums
--------------------------------------------------------------*/
div.dir-search {
}
div.dir-search input[type=text] {
	font-size: 12px;
	padding: 1px 3px;
}
/*--------------------------------------------------------------
4 - Errors / Success Messages
--------------------------------------------------------------*/
div#message {
	margin: 0 0 15px;
}
#message.info {
	margin-bottom: 0;
}
div#message.updated {
	clear: both;
}
div#message p {
	font-size: 12px;
	display: block;
	padding: 10px 15px;
}
div#message.error p {
	background-color: #db1717;
	border-color: #a71a1a;
	clear: left;
	color: #fff;
}
div#message.updated p {
	background-color: #8ff57a;
	border-color: #80cf70;
	color: #1a6a00;
}
.standard-form#signup_form div div.error {
	background: #e41717;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	color: #fff;
	margin: 0 0 10px 0;
	padding: 6px;
	width: 90%;
}
div.accept,
div.reject {
	float: left;
	margin-left: 10px;
}
ul.button-nav li {
	float: left;
	margin: 0 10px 10px 0;
}
ul.button-nav li.current a {
	font-weight: bold;
}
/*--------------------------------------------------------------
5 - Forms
--------------------------------------------------------------*/
.standard-form textarea,
.standard-form input[type=text],
.standard-form select,
.standard-form input[type=password],
.dir-search input[type=text] {
	border: 1px inset #ccc;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	color: #888;
	font: inherit;
	font-size: 14px;
	padding: 6px;
}
.standard-form select {
	padding: 3px;
}
.standard-form input[type=password] {
	margin-bottom: 5px;
}
.standard-form label,
.standard-form span.label {
	display: block;
	font-weight: bold;
	margin: 15px 0 5px 0;
}
.standard-form div.checkbox label,
.standard-form div.radio label {
	color: #888;
	font-size: 14px;
	font-weight: normal;
	margin: 5px 0 0 0;
}
.standard-form#sidebar-login-form label {
	margin-top: 5px;
}
.standard-form input[type=text] {
	width: 75%;
}
.standard-form#sidebar-login-form input[type=text],
.standard-form#sidebar-login-form input[type=password] {
	padding: 4px;
	width: 95%;
}
.standard-form #basic-details-section input[type=password],
.standard-form #blog-details-section input#signup_blog_url {
	width: 35%;
}
.standard-form#signup_form input[type=text],
.standard-form#signup_form textarea,
.form-allowed-tags,
#commentform input[type=text],
#commentform textarea {
	width: 90%;
}
.form-allowed-tags code{
	white-space: normal;
	}
.standard-form#signup_form div.submit {
	float: right;
}
div#signup-avatar img {
	margin: 0 15px 10px 0;
}
.standard-form textarea {
	width: 75%;
	height: 120px;
}
.standard-form textarea#message_content {
	height: 200px;
}
.standard-form#send-reply textarea {
	width: 97.5%;
}
.standard-form p.description {
	color: #888;
	font-size: 11px;
	margin: 5px 0;
}
.standard-form div.submit {
	clear: both;
	padding: 15px 0 0 0;
}
.standard-form p.submit {
	margin-bottom: 0;
	padding: 15px 0 0 0;
}
.standard-form div.submit input {
	margin-right: 15px;
}
.standard-form div.radio ul {
	margin: 10px 0 15px 38px;
	list-style: disc;
}
.standard-form div.radio ul li {
	margin-bottom: 5px;
}
.standard-form a.clear-value {
	display: block;
	margin-top: 5px;
	outline: none;
}
.standard-form #basic-details-section,
.standard-form #blog-details-section,
.standard-form #profile-details-section {
	float: left;
	width: 48%;
}
.standard-form #profile-details-section {
	float: right;
}
.standard-form #blog-details-section {
	clear: left;
}
.standard-form input:focus,
.standard-form textarea:focus,
.standard-form select:focus {
	background: #fafafa;
	color: #555;
}
form#send-invite-form {
	margin-top: 20px;
}
div#invite-list {
	background: #f5f5f5;
	border: 1px solid #e4e4e4;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	height: 400px;
	margin: 0 0 10px;
	overflow: auto;
	padding: 5px;
	width: 160px;
}
button,
a.button,
input[type=submit],
input[type=button],
input[type=reset],
ul.button-nav li a,
div.generic-button a,
.comment-reply-link {
	background: #fff; /* Old browsers */
	background: -moz-linear-gradient(top, #ffffff 0%, #ededed 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#ededed)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #ffffff 0%,#ededed 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #ffffff 0%,#ededed 100%); /* Opera11.10+ */
	background: -ms-linear-gradient(top, #ffffff 0%,#ededed 100%); /* IE10+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 ); /* IE6-9 */
	background: linear-gradient(top, #ffffff 0%,#ededed 100%); /* W3C */
	border: 1px solid #ccc;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	color: #777;
	cursor: pointer;
	font: normal 12px/20px Arial, Tahoma, Verdana, sans-serif;
	outline: none;
	padding: 4px 10px;
	text-align: center;
	text-decoration: none;
	line-height: 14px;
}
button:hover,
a.button:hover,
a.button:focus,
input[type=submit]:hover,
input[type=button]:hover,
input[type=reset]:hover,
ul.button-nav li a:hover,
ul.button-nav li.current a,
div.generic-button a:hover,
.comment-reply-link:hover {
	background: #ededed;
	background: -moz-linear-gradient(top, #ffffff 0%, #e0e0e0 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e0e0e0)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* Opera11.10+ */
	background: -ms-linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* IE10+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e0e0e0',GradientType=0 ); /* IE6-9 */
	background: linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* W3C */
	border: 1px solid #bbb;
	color: #555;
	outline: none;
	text-decoration: none;
}
/*--------------------------------------------------------------
6 - Ajax Loading
--------------------------------------------------------------*/
a.loading,
input.loading {
    background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif );
    background-position: 95% 50%;
    background-repeat: no-repeat;
    padding-right: 25px;
}
a.loading:hover,
input.loading:hover {
    background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif );
    background-position: 95% 50%;
    background-repeat: no-repeat;
    padding-right: 25px;
    color: #777;
}
a.button.loading,
input[type="submit"].loading,
input[type="button"].loading,
input[type="reset"].loading {
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -moz-linear-gradient(top, #ffffff 0%, #e0e0e0 100%); /* FF3.6+ */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e0e0e0)); /* Chrome,Safari4+ */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -webkit-linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* Chrome10+,Safari5.1+ */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -o-linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* Opera11.10+ */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -ms-linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* IE10+ */
	filter: progid:DXImageTransform.Microsoft.gradient( enabled=0 ); /* IE6-9 */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* W3C */
	background-position: 95% 50%;
	background-repeat: no-repeat;
	padding-right: 25px;
}
a.button.loading:hover,
input[type="submit"].loading:hover,
input[type="button"].loading:hover,
input[type="reset"].loading:hover {
  	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -moz-linear-gradient(top, #ffffff 0%, #e0e0e0 100%); /* FF3.6+ */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e0e0e0)); /* Chrome,Safari4+ */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -webkit-linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* Chrome10+,Safari5.1+ */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -o-linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* Opera11.10+ */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), -ms-linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* IE10+ */
	filter: progid:DXImageTransform.Microsoft.gradient( enabled=0 ); /* IE6-9 */
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif ), linear-gradient(top, #ffffff 0%,#e0e0e0 100%); /* W3C */
	border: 1px solid #ccc;
	padding-right: 25px;
}
input[type="submit"].pending,
input[type="button"].pending,
input[type="reset"].pending,
input[type="submit"].disabled,
input[type="button"].disabled,
input[type="reset"].disabled,
button.pending,
button.disabled,
div.pending a,
a.disabled {
    border-color: #eee;
    color: #bbb;
    cursor: default;
}
input[type="submit"]:hover.pending,
input[type="button"]:hover.pending,
input[type="reset"]:hover.pending,
input[type="submit"]:hover.disabled,
input[type="button"]:hover.disabled,
input[type="reset"]:hover.disabled,
button.pending:hover,
button.disabled:hover,
div.pending a:hover,
a.disabled:hover {
	background: -moz-linear-gradient(top, #ffffff 0%, #ededed 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#ededed)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #ffffff 0%,#ededed 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #ffffff 0%,#ededed 100%); /* Opera11.10+ */
	background: -ms-linear-gradient(top, #ffffff 0%,#ededed 100%); /* IE10+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 ); /* IE6-9 */
	background: linear-gradient(top, #ffffff 0%,#ededed 100%); /* W3C */
    border-color: #eee;
    color: #bbb;
}
/*--------------------------------------------------------------
7 - Forums, Tables and Topics
--------------------------------------------------------------*/
.forums label, .forums input {
	display: inline;
	
	}
.forums label{
	padding-right: 10px;
	}
ul#topic-post-list {
	margin: 0px 0px 15px;
	width: auto;
}
ul#topic-post-list li {
	padding: 15px;
	position: relative;
}
ul#topic-post-list li.alt {
	background: #f5f5f5;
}
ul#topic-post-list li div.poster-meta {
	color: #888;
	margin-bottom: 10px;
}
ul#topic-post-list li div.post-content {
	margin-left: 54px;
}
div.topic-tags {
	font-size: 11px;
	float: right;
	margin-top: -25px;
}
div.admin-links {
	color: #888;
	font-size: 11px;
	position: absolute;
	top: 15px;
	right: 25px;
}
div#topic-meta {
	margin: -10px 0px;
	padding: 5px 19px 30px;
	position: relative;
}
div#topic-meta div.admin-links {
	right: 19px;
	top: -36px;
}
div#topic-meta h3 {
	font-size: 20px;
	margin: 5px 0;
}
div#new-topic-post {
	display: none;
	margin: 20px 0 0 0;
	padding: 1px 0 0 0;
}
table {
	width: 100%;
}
table thead tr {
	background: #eaeaea;
}
table#message-threads {
	margin: 0 0px;
	width: auto;
}
table.profile-fields {
	margin-bottom: 20px;
}
table.profile-fields:last-child {
	margin-bottom: 0;
}
table.profile-fields p {
	margin-top: 15px;
}
table.profile-fields p:last-child {
	margin-top: 0;
}
div#sidebar table {
	margin: 0 -16px;
	width: 117%;
}
table tr td,
table tr th {
	vertical-align: middle;
}
table tr td.label {
	border-right: 1px solid #eaeaea;
	font-weight: bold;
	width: 25%;
}
table tr td.thread-info p {
	margin: 0;
}
table tr td.thread-info p.thread-excerpt {
	color: #888;
	font-size: 11px;
	margin-top: 3px;
}
div#sidebar table td,
table.forum td {
	text-align: center;
}
table tr.alt td {
	background: #f5f5f5;
}
table.notification-settings {
	margin-bottom: 20px;
	text-align: left;
}
#groups-notification-settings {
	margin-bottom: 0;
}
table.notification-settings th.icon,
table.notification-settings td:first-child {
	display: none;
}
table.notification-settings th.title {
	width: 80%;
}
table.notification-settings .yes,
table.notification-settings .no {
	text-align: center;
	width: 40px;
}
table.forum {
	margin: 0 0px;
	width: auto;
}
table.forum tr.sticky td {
	font-size: 1.2em;
	background: #fff9db;
	border-top: 1px solid #ffe8c4;
	border-bottom: 1px solid #ffe8c4;
}
table.forum tr.closed td.td-title {
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/closed.png );
	background-position: 15px 50%;
	background-repeat: no-repeat;
	padding-left: 35px;
}
table.forum td p.topic-text {
	color: #888;
	font-size: 13px;
}
table.forum tr > td:first-child,
table.forum tr > th:first-child {
	padding-left: 15px;
}
table.forum tr > td:last-child,
table.forum tr > th:last-child {
	padding-right: 15px;
}
table.forum tr th#th-title,
table.forum tr th#th-poster,
table.forum tr th#th-group,
table.forum td.td-poster,
table.forum td.td-group,
table.forum td.td-title {
	text-align: left;
}
table.forum tr td.td-title a.topic-title {
	font-size: 1.2em;
}
table.forum td.td-freshness {
	white-space: nowrap;
}
table.forum td.td-freshness span.time-since {
	font-size: 0.9em;
	color: #888;
}
table.forum td img.avatar {
	float: none;
	margin: 0 5px -8px 0;
}
table.forum td.td-poster,
table.forum td.td-group {
	min-width: 140px;
}
table.forum th#th-title {
	width: 80%;
}
table.forum th#th-freshness {
	width: 25%;
}
table.forum th#th-postcount {
	width: 15%;
}
table.forum p.topic-meta {
	font-size: 0.9em;
	margin: 5px 0 0 0;
}
/*--------------------------------------------------------------
8 - Headers, Lists and Tabs - Activity, Groups, Blogs, Forums
--------------------------------------------------------------*/
.item-body {
	margin: 20px 0;
}
span.activity {
	display: inline-block;
	font-size: 11px;
	opacity: 0.8;
	padding: 1px 8px;
}
span.user-nicename {
	color: #777;
	display: inline-block;
	font-size: 16px;
	font-weight: bold;
}
span.activity,
div#message p {
	border: 1px solid #e1ca82;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	font-weight: normal;
	margin-top: 3px;
	text-decoration: none;
	background: #ffeaa6;
	background-image: -webkit-linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, 0));
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255, 255, 255, .5)), color-stop(100%,rgba(255, 255, 255, 0))); /* Chrome,Safari4+ */
	background-image: -moz-linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, 0));
	background-image: -ms-linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, 0));
	background-image: -o-linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, 0));
	background-image: linear-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, 0));
}
div#item-header {
	overflow: hidden;
}
div#item-header div#item-header-content {
}
div#item-header h2 {
	font-size: 28px;
	line-height: 120%;
	margin: 0 0 15px 0;
}
div#item-header h2 a {
	color: #777;
	text-decoration: none;
}
div#item-header img.avatar {
	float: left;
	margin: 0 15px 19px 0;
}
div#item-header h2 {
	margin-bottom: 5px;
}
div#item-header span.activity,
div#item-header h2 span.highlight {
	font-size: 11px;
	font-weight: normal;
	line-height: 170%;
	margin-bottom: 7px;
	vertical-align: middle;
}
div#item-header h2 span.highlight {
	font-size: 16px;
}
div#item-header h2 span.highlight span {
	background: #a1dcfa;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	color: #fff;
	cursor: pointer;
	font-weight: bold;
	font-size: 11px;
	margin-bottom: 2px;
	padding: 1px 4px;
	position: relative;
	right: -2px;
	top: -2px;
	vertical-align: middle;
}
div#item-header div#item-meta {
	font-size: 14px;
	color: #aaa;
	overflow: hidden;
	margin: 15px 0 5px 0;
	padding-bottom: 10px;
}
div#item-header div#item-actions {
	float: right;
	margin: 0 0 15px 15px;
	text-align: right;
	width: 20%;
}
div#item-header div#item-actions h3 {
	font-size: 12px;
	margin: 0 0 5px 0;
}
div#item-header ul {
	margin-bottom: 15px;
	overflow: hidden;
}
div#item-header ul h5,
div#item-header ul span,
div#item-header ul hr {
	display: none;
}
div#item-header ul li {
	float: right;
}
div#item-header ul img.avatar,
div#item-header ul.avatars img.avatar {
	height: 30px;
	margin: 2px;
	width: 30px;
}
div#item-header div.generic-button,
div#item-header a.button {
	float: left;
	margin: 10px 10px 0 0;
}
div#item-header div#message.info {
	line-height: 80%;
}
ul.item-list {
	width: 100%;
}
ul.item-list li {
	border-bottom: 1px solid #eaeaea;
	padding: 15px 0;
	position: relative;
}
ul.item-list.activity-list li {
	padding-bottom: 0;
}
ul.single-line li {
	border: none;
}
ul.item-list li img.avatar {
	float: left;
	margin: 0 10px 0 0;
}
ul.item-list li div.item-title,
ul.item-list li h4 {
	font-weight: normal;
	font-size: 14px;
	margin: 0;
	width: 75%;
}
ul.item-list li div.item-title span {
	color: #999;
	font-size: 12px;
}
ul.item-list li div.item-desc {
	color: #888;
	font-size: 11px;
	margin: 10px 0 0 64px;
	width: 50%;
}
ul.item-list li div.action {
	position: absolute;
	top: 15px;
	right: 0;
	text-align: right;
}
ul.item-list li div.meta {
	color: #888;
	font-size: 11px;
	margin-top: 10px;
}
ul.item-list li h5 span.small {
	float: right;
	font-size: 11px;
	font-weight: normal;
}
div.item-list-tabs {
	background: #eaeaea;
	clear: left;
	margin: 25px 0px 20px 0px;
	overflow: hidden;
}
div.item-list-tabs ul li a {
	text-decoration: none;
	height: 20px;
}
div.item-list-tabs ul {
	width: 100%;
}
div.item-list-tabs ul li {
	float: left;
	list-style-type: none;
	margin: 5px 0 0 0px;
}
div.item-list-tabs#subnav ul li {
	margin-top: 0;
}
div.item-list-tabs ul li:first-child {
	margin-left: 20px;
}
div.item-list-tabs ul li.last {
	float: right;
	margin: 7px 20px 0 0;
}
div.item-list-tabs#subnav ul li.last {
	margin-top: 4px;
}
div.item-list-tabs ul li.last select {
	max-width: 175px;
}
div.item-list-tabs ul li a,
div.item-list-tabs ul li span {
	display: block;
	padding: 5px 10px;
	text-decoration: none;
}
div.item-list-tabs ul li a span {
	background: #1fb3dd;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	color: #fff;
	display: inline;
	font-size: 90%;
	margin-left: 2px;
	padding: 1px 6px;
}
div.item-list-tabs ul li.selected a,
div.item-list-tabs ul li.current a {
	background-color: #fff;
	-moz-border-radius-topleft: 3px;
	-webkit-border-top-left-radius: 3px;
	-moz-border-radius-topright: 3px;
	-webkit-border-top-right-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	color: #555;
	font-weight: bold;
}
div.item-list-tabs ul li.selected a span,
div.item-list-tabs ul li.current a span,
div.item-list-tabs ul li a:hover span {
	background-color: #999;
}
div.item-list-tabs ul li.selected a span,
div.item-list-tabs ul li.current a span {
	background-color: #555;
}
ul li.loading a {
	background-image: url( ../buddypress/bp-themes/bp-default/_inc/images/ajax-loader.gif );
	background-position: 92% 50%;
	background-repeat: no-repeat;
	padding-right: 30px !important;
}
div#item-nav ul li.loading a {
	background-position: 88% 50%;
}
div.item-list-tabs#object-nav {
	margin-top: 0;
}
div.item-list-tabs#subnav {
	background: #fff;
	border-bottom: 1px solid #eaeaea;
	margin: -15px 0px 15px 0px;
	min-height: 35px;
	overflow: hidden;
}
div.item-list-tabs ul li.feed a {
	background: url( ../buddypress/bp-themes/bp-default/_inc/images/rss.png ) center left no-repeat;
	padding-left: 20px;
}
#admins-list li {
	overflow: auto;
}
/*--------------------------------------------------------------
9 - Private Messaging Threads
--------------------------------------------------------------*/
table#message-threads tr.unread td {
	background: #fff9db;
	border-top: 1px solid #ffe8c4;
	border-bottom: 1px solid #ffe8c4;
	font-weight: bold;
}
li span.unread-count,
tr.unread span.unread-count {
	background: #dd0000;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	color: #fff;
	font-weight: bold;
	padding: 2px 8px;
}
div.item-list-tabs ul li a span.unread-count {
	padding: 1px 6px;
	color: #fff;
}
div.messages-options-nav {
	background: #eee;
	font-size: 11px;
	margin: 0 0px;
	padding: 5px 15px;
	text-align: right;
}
div#message-thread div.message-box {
	margin: 0 0px;
	padding: 15px;
}
div#message-thread div.alt {
	background: #f4f4f4;
}
div#message-thread p#message-recipients {
	margin: 10px 0 20px 0;
}
div#message-thread img.avatar {
	float: left;
	margin: 0 10px 0 0;
	vertical-align: middle;
}
div#message-thread strong {
	font-size: 16px;
	margin: 0;
}
div#message-thread strong a {
	text-decoration: none;
}
div#message-thread strong span.activity {
	margin: 4px 0 0 10px;
}
div#message-thread div.message-metadata {
	overflow: hidden;
}
div#message-thread div.message-content {
	margin-left: 45px;
}
div#message-thread div.message-options {
	text-align: right;
}
/*--------------------------------------------------------------
10 - Pagination
--------------------------------------------------------------*/
.padder div.pagination {
	background: #f4f4f4;
	border: none;
	color: #888;
	font-size: 11px;
	height: 19px;
	margin: -20px 0px 0px 0px;
	padding: 8px 20px;
	position: relative;
}
.padder div.pagination .pag-count {
	float: left;
}
.padder div.pagination .pagination-links {
	float: right;
}
.padder div.pagination .pagination-links span,
.padder div.pagination .pagination-links a {
	font-size: 12px;
	padding: 0 5px;
}
.padder div.pagination .pagination-links a:hover {
	font-weight: bold;
}
.padder div#pag-bottom {
	margin-top: -1px;
}
.padder #nav-above {
	display: none;
}
.padder .paged #nav-above {
	display: block;
}
/**
 * The following are basic CSS styles to give BuddyPress pages their absolute basic formatting.
 * You should extend/override these styles in your standard theme CSS to match your theme.
 */
/***
 * Navigation tabs
 */
div.item-list-tabs {
	margin: 15px 0;
	padding: 5px 0;
	border-bottom: 1px solid #ddd;
	overflow: hidden;
	clear: both;
}
div.item-list-tabs ul {
	list-style: none;
	margin: 0;
	padding: 0;
	line-height: 200%;
}
	div.item-list-tabs ul li {
		float: left;
		margin-right: 5px;
	}
		div.item-list-tabs#subnav ul li a {
			border: none;
			padding: 0;
		}
	div.item-list-tabs ul li.last { float: right; }
/***
 * Object Lists (groups/members/forums/blogs)
 */
ul.item-list {
	margin: 20px 0;
	padding: 0;
	list-style: none;
}
	ul.item-list li { 
		position: relative;
		clear: left;
	}
	ul.item-list div.item-avatar {
		float: left;
	}
	ul.item-list div.item {
		margin-left: 65px;
	}
	ul.item-list div.action {
		position: absolute;
		top: 0;
		right: 15px;
		text-align: right;
	}
/***
 * Content Object Headers
 */
div#item-header {
	padding-bottom: 15px;
	overflow: hidden;
}
	div#item-header div#item-header-avatar {
	}
div#item-header div#item-header-avatar img {
	padding: 5px;
	}
	div#item-header div#item-header-content {
		float: left;
	}
/***
 * Activity Stream Post Form
 */
form#whats-new-form {
	overflow: hidden;
	padding-bottom: 20px;
}
	form#whats-new-form #whats-new-avatar {
		float: left;
	}
	form#whats-new-form h5 {
		clear: none;
		margin-left: 76px;
	}
	form#whats-new-form #whats-new-content {
		margin-left: 54px;
		padding-left: 22px;
	}
	form#whats-new-form #whats-new-textarea {
		padding: 8px;
		border: 1px inset #ccc;
		margin-bottom: 10px;
	}
	form#whats-new-form textarea {
		width: 100%;
		height: 60px;
		font-size: 14px;
		font-family: inherit;
		color: #555;
		border: none;
		margin: 0;
		padding: 0;
	}
	form#whats-new-form #whats-new-submit {
		float: right;
		margin: 0;
	}
/***
 * Activity Stream Post Form
 */
ul.activity-list {
	margin: 0;
	padding: 0;
}
ul.activity-list li {
	overflow: hidden;
	padding: 20px 0;
}
	ul.activity-list li img.avatar {
		float: left;
		width: 60px;
		height: 60px;
	}
	ul.activity-list li div.activity-content {
		margin-left: 75px;
	}
	ul.activity-list li div.activity-comments {
		margin: 15px 0 0 38px;
	}
		ul.activity-list li div.activity-comments ul li {
			padding: 5px 0;
		}
		ul.activity-list li div.activity-comments img.avatar {
			width: 25px;
			height: 25px;
		}
		ul.activity-list li div.acomment-content, ul.activity-list li div.acomment-meta {
			margin-left: 35px;
		}
	ul.activity-list li div.activity-inreplyto {
		margin: 15px 0 0 75px;
		font-size: 11px;
	}
/***
 * Input Forms
 */
/* Activity comment forms */
form.ac-form { display: none; } /* JS will show this */
div.activity-comments form {
	display: none;
	margin: 10px 0 10px 33px;
	padding: 8px;
}
	div.activity-comments div#message {
		margin-top: 15px;
		margin-bottom: 0;
	}
	div.activity-comments form.loading {
		background-image: url( ../images/ajax-loader.gif );
		background-position: 2% 95%;
		background-repeat: no-repeat;
	}
	div.activity-comments form .ac-textarea {
		padding: 8px;
		border: 1px inset #ccc;
		margin-bottom: 10px;
	}
		div.activity-comments form textarea {
			width: 100%;
			height: 60px;
			border: none;
			padding: 0;
		}
			div.activity-comments form input {
				margin-top: 5px;
			}
	div.activity-comments form div.ac-reply-avatar {
		float: left;
	}
	div.activity-comments form div.ac-reply-content {
		margin-left: 25px;
		padding-left: 15px;
	}
/* Standard Input Forms */
form.standard-form label, form.standard-form span.label {
	display: block;
	margin: 15px 0 5px 0;
}
	form.standard-form div.checkbox label,
	form.standard-form div.radio label {
		font-weight: normal;
		margin: 5px 0 0 0;
	}
	form.standard-form textarea {
		width: 75%;
		height: 120px;
	}
/* Send Invites Form */
form#send-invite-form {
	margin-top: 20px;
}
	div#invite-list {
		height: 400px;
		overflow: scroll;
		padding: 5px;
		width: 160px;
		margin: 10px 0;
	}
/* Directory search forms */
form.dir-form div.dir-search {
margin-top: 10px;
padding: 10px;
padding-bottom: 0px
}
form.dir-form div.dir-search input {
	margin-bottom: 0;
	}
form.dir-form div.dir-search label {
	margin-bottom: 0;
	}
form.dir-form {
	margin: 0;
	}