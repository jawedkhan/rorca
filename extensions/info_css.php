<?php
$_CONFIG['alert_color']="yellow";
$_CONFIG['current_color']="#92C8FF";
$_CONFIG['active_color']="#92C8FF";

if(getUserConfig("color_profile")=="" || getUserConfig("color_profile")=="1")
{
	include("extensions/info_css_1.php");
}
else
if(getUserConfig("color_profile")=="2")
{
	include("extensions/info_css_2.php");
}
else
if(getUserConfig("color_profile")=="3")
{
	include("extensions/info_css_3.php");
}
else
if(getUserConfig("color_profile")=="4")
{
	include("extensions/info_css_4.php");
}
else
if(getUserConfig("color_profile")=="5")
{
	include("extensions/info_css_5.php");
}
else
if(getUserConfig("color_profile")=="6")
{
	include("extensions/info_css_6.php");
}
else
if(getUserConfig("color_profile")=="7")
{
	include("extensions/info_css_7.php");
}
else
if(getUserConfig("color_profile")=="8")
{
	include("extensions/info_css_8.php");
}
?>