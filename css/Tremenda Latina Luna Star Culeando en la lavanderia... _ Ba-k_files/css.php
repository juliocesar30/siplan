@charset "UTF-8";

/* --- xenforo.css --- */

/*
 * YUI reset-fonts.css
 *
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;text-decoration:none}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;}

/*
 * Firefox broken image placeholder support.
 *
http://lab.gmtplusone.com/image-placeholder/
*/ 
img:-moz-broken, img:-moz-user-disabled { -moz-force-broken-image-icon: 1; }
img:-moz-broken:not([width]), img:-moz-user-disabled:not([width]) { width: 50px; }
img:-moz-broken:not([height]), img:-moz-user-disabled:not([height]) { height: 50px; }

/*
 * XenForo Core CSS
 *
 */

html
{
	background-color: rgb(246, 246, 246);

	overflow-y: scroll !important;
}

body
{
	-webkit-text-size-adjust: 100%;
	-moz-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	text-size-adjust: 100%;

	font-family: 'Open Sans', Helvetica, Arial, sans-serif;
color: rgb(20,20,20);
word-wrap: break-word;
line-height: 1.28;

}

/* counteract the word-wrap setting in 'body' */
pre, textarea
{
	word-wrap: normal;
}

[dir=auto] { text-align: left; }

a:link,
a:visited
{
	color: rgb(67, 166, 223);
text-decoration: none;

}

	a[href]:hover
	{
		text-decoration: underline;

	}
	
	a:hover
	{
		_text-decoration: underline;
	}
	
	a.noOutline
	{
		outline: 0 none;
	}
	
	.emCtrl,
	.messageContent a
	{
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	}
	
		.emCtrl:hover,
		.emCtrl:focus,
		.ugc a:hover,
		.ugc a:focus
		{
			/*position: relative;
			top: -1px;*/
			text-decoration: none;
			-webkit-box-shadow: 5px 5px 7px #CCCCCC; -moz-box-shadow: 5px 5px 7px #CCCCCC; -khtml-box-shadow: 5px 5px 7px #CCCCCC; box-shadow: 5px 5px 7px #CCCCCC;
			outline: 0 none;
		}
		
			.emCtrl:active,
			.ugc a:active
			{
				position: relative;
				top: 1px;
				-webkit-box-shadow: 2px 2px 7px #CCCCCC; -moz-box-shadow: 2px 2px 7px #CCCCCC; -khtml-box-shadow: 2px 2px 7px #CCCCCC; box-shadow: 2px 2px 7px #CCCCCC;
				outline: 0 none;
			}

	.ugc a:link,
	.ugc a:visited
	{
		color: rgb(67, 166, 223);
padding: 0 3px;
margin: 0 -3px;

	}
	
		.ugc a:hover,
		.ugc a:focus
		{
			color: rgb(67, 166, 223);
text-decoration: underline;

		}
		
img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}
		
/** title bar **/

.titleBar
{
	margin-bottom: 10px;
}

/* clearfix */ .titleBar { zoom: 1; } .titleBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.titleBar h1
{
	font-size: 24px;
overflow: hidden;
zoom: 1;
letter-spacing: -1px;

}

	.titleBar h1 em
	{
		color: rgb(100,100,100);
	}
		
	.titleBar h1 .Popup
	{
		float: left;
	}

#pageDescription
{
	font-size: 11px;
color: rgb(150,150,150);
margin-top: 2px;

}

.topCtrl
{
	float: right;
}
	
	.topCtrl h2
	{
		font-size: 12pt;
	}
		
/** images **/

img
{
	-ms-interpolation-mode: bicubic;
}

a.avatar 
{ 
	*cursor: pointer; /* IE7 refuses to do this */ 
} 

.avatar img,
.avatar .img,
.avatarCropper
{
	background-color: rgb(255, 255, 255);

}

.avatar.plainImage img,
.avatar.plainImage .img
{
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	padding: 0;
	background-position: left top;
}

	.avatar .img
	{
		display: block;
		background-repeat: no-repeat;
		background-position: 2px 2px;
		text-indent: 1000px;
		overflow: hidden;
		white-space: nowrap;
		word-wrap: normal;
	}

	.avatar .img.s { width: 48px;  height: 48px;  }
	.avatar .img.m { width: 96px;  height: 96px;  }
	.avatar .img.l { width: 192px; height: 192px; }

.avatarCropper
{
	width: 192px;
	height: 192px;
	direction: ltr;
}

.avatarCropper a,
.avatarCropper span,
.avatarCropper label
{
	overflow: hidden;
	position: relative;
	display: block;
	width: 192px;
	height: 192px;
}

.avatarCropper img
{
	padding: 0;
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;

	position: relative;
	display: block;
}

.avatarScaler img
{
	max-width: 192px;
	_width: 192px;
}

/* ***************************** */

body .dimmed, body a.dimmed, body .dimmed a { color: rgb(100,100,100); }
body .muted, body a.muted, body .muted a { color: rgb(150,150,150); }
body .faint, body a.faint, body .faint a { color: rgb(200,200,200); }

.highlight { font-weight: bold; }

.concealed,
.concealed a,
.cloaked,
.cloaked a
{
	text-decoration: inherit !important;
	color: inherit !important;
	*clear:expression( style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

a.concealed:hover,
.concealed a:hover
{
	text-decoration: underline !important;
}

/* ***************************** */

.xenTooltip
{
	font-size: 11px;
color: rgb(255, 255, 255);
background: url(rgba.php?r=0&g=0&b=0&a=153); background: rgba(0,0,0, 0.6); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);
padding: 6px 12px;
display: none;
z-index: 15000;
cursor: default;

}

.xenTooltip a,
.xenTooltip a:hover
{
	color: rgb(255, 255, 255);
	text-decoration: underline;
}

	.xenTooltip .arrow
	{
		border-top:  6px solid rgb(0,0,0); border-top:  6px solid rgba(0,0,0, 0.6); _border-top:  6px solid rgb(0,0,0);
border-right: 6px solid transparent;
border-bottom: 1px none black;
border-left: 6px solid transparent;
position: absolute;
bottom: -6px;
line-height: 0px;
width: 0px;
height: 0px;

		left: 9px;
		
		/* Hide from IE6 */
		_display: none;
	}

	.xenTooltip.flipped .arrow
	{
		left: auto;
		right: 9px;
	}

.xenTooltip.statusTip
{
	/* Generated by XenForo.StatusTooltip JavaScript */
	padding: 5px 10px;
line-height: 17px;
width: 250px;
height: auto;

}

	.xenTooltip.statusTip .arrow
	{
		border: 6px solid transparent;
border-right-color:  rgb(0,0,0); border-right-color:  rgba(0,0,0, 0.6); _border-right-color:  rgb(0,0,0);
border-left: 1px none black;
top: 6px;
left: -6px;
bottom: auto;
right: auto;

	}
			
.xenTooltip.iconTip { margin-left: -6px; }
.xenTooltip.iconTip.flipped { margin-left: 7px; }

/* ***************************** */

#PreviewTooltip
{
	display: none;
}

.xenPreviewTooltip
{
	position: relative;
-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);
width: 400px;

	
	display: none;	
	z-index: 15000;
	cursor: default;
	
	border-color: ;
}

	.xenPreviewTooltip .arrow
	{
		border-top: 15px solid rgb(228, 228, 228);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
bottom: -15px;
left: 22px;

		
		_display: none;
	}
	
		.xenPreviewTooltip .arrow span
		{
			border-top: 15px solid rgb(255, 255, 255);
border-right: 15px solid transparent;
border-bottom: 1px none black;
border-left: 15px solid transparent;
position: absolute;
top: -17px;
left: -15px;

		}

	.xenPreviewTooltip .section,
	.xenPreviewTooltip .sectionMain,
	.xenPreviewTooltip .primaryContent,
	.xenPreviewTooltip .secondaryContent
	{
		margin: 0;
	}
	
		.xenPreviewTooltip .previewContent
		{
			overflow: hidden; zoom: 1;
			min-height: 1em;
		}

/* ***************************** */

.importantMessage
{
	margin: 10px 0;
	color: #6d3f03;
	background-color: #fff4e5;
	text-align: center;
	padding: 5px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	border: solid 1px #f9bc6d;
}

.importantMessage a
{
	font-weight: bold;
	color: #6d3f03;
}

/* ***************************** */

.section
{
	margin: 12px auto;

}

.sectionMain
{
	background: url(rgba.php?r=255&g=255&b=255&a=0); background: rgba(255, 255, 255, 0); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);
padding: 0;
margin: 10px auto;
border-width: 0;
/*-webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; border-radius: 10px;*/
/* Metro comment. */

}

.heading,
.xenForm .formHeader
{
	font-size: 14px;
color: rgb(255, 255, 255);
background-color: rgb(46, 53, 57);
padding: 13px 12px;

}

	.heading a { color: rgb(255, 255, 255); }

.subHeading
{
	font-size: 13px;
background-color: rgb(242, 242, 242);
padding: 12px;
margin: 3px auto 0;

}

	.subHeading a { color: ; }

.textHeading,
.xenForm .sectionHeader
{
	font-size: 18px;
color: rgb(20,20,20);
margin: 12px auto;

}

.xenForm .sectionHeader,
.xenForm .formHeader
{
	margin: 10px 0;
}

.primaryContent > .textHeading:first-child,
.secondaryContent > .textHeading:first-child
{
	margin-top: 0;
}

.larger.textHeading,
.xenForm .sectionHeader
{
	color: rgb(228,228,228);
	font-size: 11pt;
	margin-bottom: 6px;
}

	.larger.textHeading a,
	.xenForm .sectionHeader a
	{
		color: rgb(228,228,228);
	}

.primaryContent
{
	background-color: rgb(255, 255, 255);
padding: 12px;
border-right: 1px solid rgb(228, 228, 228);
border-bottom: 1px solid rgb(228, 228, 228);
border-left: 1px solid rgb(228, 228, 228);

}

	.primaryContent a
	{
		color: rgb(46, 53, 57);

	}

.secondaryContent
{
	background-color: rgb(255, 255, 255);
padding: 12px;

}

	.secondaryContent a
	{
		color: rgb(67, 166, 223);

	}

.sectionFooter
{
	overflow: hidden; zoom: 1;
	font-size: 12px;
background-color: rgb(242, 242, 242);
padding: 12px;
border-top: 1px solid rgb(228, 228, 228);
line-height: 16px;

}

	.sectionFooter a { color: ; }

	.sectionFooter .left
	{
		float: left;
	}

	.sectionFooter .right
	{
		float: right;
	}

/* used for section footers with central buttons, esp. in report viewing */

.actionList
{
	text-align: center;
}

/* left-right aligned options */

.opposedOptions
{
	overflow: hidden; zoom: 1;
}
	
	.opposedOptions .left
	{
		float: left;
	}
	
	.opposedOptions .right
	{
		float: right;
	}

.columns
{
	overflow: hidden; zoom: 1;
}

	.columns .columnContainer
	{
		float: left;
	}
	
		.columns .columnContainer .column
		{
			margin-left: 3px;
		}
		
		.columns .columnContainer:first-child .column
		{
			margin-left: 0;
		}

.c50_50 .c1,
.c50_50 .c2 { width: 49.99%; }

.c70_30 .c1 { width: 70%; }
.c70_30 .c2 { width: 29.99%; }

.c60_40 .c1 { width: 60%; }
.c60_40 .c2 { width: 39.99%; }

.c40_30_30 .c1 { width: 40%; }
.c40_30_30 .c2,
.c40_30_30 .c3 { width: 29.99%; }

.c50_25_25 .c1 { width: 50%; }
.c50_25_25 .c2,
.c50_25_25 .c3 { width: 25%; }

/* ***************************** */
/* Basic Tabs */

.tabs
{
	font-size: 13px;
background-color: rgb(255, 255, 255);
padding: 0 6px;
border-bottom: 1px solid rgb(228,228,228);
word-wrap: normal;
min-height: 36px;
_height: 36px;

	
	display: table;
	width: 100%;
	*width: auto;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}

.tabs li
{
	float: left;
}

.tabs li a,
.tabs.noLinks li
{
	color: rgb(20,20,20);
text-decoration: none;
background-color: rgb(228, 228, 228);
padding: 0 12px;
margin-right: 3px;
margin-bottom: -1px;
border: 1px solid rgb(228,228,228);
display: inline-block;
line-height: 34px;
cursor: pointer;
outline: 0 none;
white-space: nowrap;
word-wrap: normal;
height: 36px;

}

.tabs li:hover a,
.tabs.noLinks li:hover
{
	text-decoration: none;
background-color: rgb(228,228,228);
		
}

.tabs li.active a,
.tabs.noLinks li.active
{
	background-color: rgb(255, 255, 255);
padding-bottom: 1px;
border-bottom: 1px none black;

}

/* Tabs inside forms */

.xenForm .tabs,
.xenFormTabs
{
	padding: 5px 30px 0;
}


@media (max-width:480px)
{
	.Responsive .tabs li
	{
		float: none;
	}

	.Responsive .tabs li a,
	.Responsive .tabs.noLinks li
	{
		display: block;
	}
	
	.Responsive .tabs
	{
		display: flex;
		display: -webkit-flex;
		flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
	}
	
	.Responsive .tabs li
	{
		flex-grow: 1;
		-webkit-flex-grow: 1;
		text-align: center;
	}
	
	.Responsive .xenForm .tabs,
	.Responsive .xenFormTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}
}


/* ***************************** */
/* Popup Menus */

.Popup
{
	position: relative;
}

	.Popup.inline
	{
		display: inline;
	}
	
/** Popup menu trigger **/

.Popup .arrowWidget
{
	/* circle-arrow-down */
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -32px 0;
margin-top: -2px;
margin-left: 4px;
display: inline-block;
*margin-top: 0;
vertical-align: middle;
width: 13px;
height: 14px;

}

.PopupOpen .arrowWidget
{
	/* circle-arrow-up */
	background-position: -16px 0;

}

.Popup .PopupControl,
.Popup.PopupContainerControl
{
	display: inline-block;
	cursor: pointer;
}

	.Popup .PopupControl:hover,
	.Popup.PopupContainerControl:hover
	{
		color: rgb(61, 152, 204);
text-decoration: none;

	}

	.Popup .PopupControl:focus,
	.Popup .PopupControl:active,
	.Popup.PopupContainerControl:focus,
	.Popup.PopupContainerControl:active
	{
		outline: 0;
	}
	
	.Popup .PopupControl.PopupOpen,
	.Popup.PopupContainerControl.PopupOpen
	{
		color: rgb(46, 53, 57);

	}
	
	.Popup .PopupControl.BottomControl.PopupOpen,
	.Popup.PopupContainerControl.BottomControl.PopupOpen
	{
		border-top-left-radius: ;
		border-top-right-radius: ;
		border-bottom-left-radius: ;
		border-bottom-right-radius: ;
	}
		
		.Popup .PopupControl.PopupOpen:hover,
		.Popup.PopupContainerControl.PopupOpen:hover
		{
			text-decoration: none;
		}
		
/** Menu body **/

.Menu
{
	/*background-color: #ffffff;*/
	
	font-size: 12px;
overflow: hidden;
-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);

	
	min-width: 200px;
	*width: 200px;
	
	/* makes menus actually work... */
	position: absolute;
	z-index: 7500;
	display: none;
}

/* allow menus to operate when JS is disabled */
.Popup:hover .Menu
{
	display: block;
}

.Popup:hover .Menu.JsOnly
{
	display: none;
}

.Menu.BottomControl
{
	border-top-width: 1px;
	border-bottom-width: 3px;
	-webkit-box-shadow: 0px 0px 0px transparent; -moz-box-shadow: 0px 0px 0px transparent; -khtml-box-shadow: 0px 0px 0px transparent; box-shadow: 0px 0px 0px transparent;
}

	.Menu > li > a,
	.Menu .menuRow
	{
		display: block;
	}
	
.Menu.inOverlay
{
	z-index: 10000;
}
		
/* Menu header */

.Menu .menuHeader
{
	overflow: hidden; zoom: 1;
}

.Menu .menuHeader h3
{
	font-weight: bold;
font-size: 14px;

}

.Menu .menuHeader .muted
{
	font-size: 11px;

}

/* Standard menu sections */

.Menu .primaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .secondaryContent
{
	background-color: rgba(255, 255, 255, 0.96);
}

.Menu .sectionFooter
{
	background-color: rgba(242, 242, 242, 0.9);
}

/* Links lists */

.Menu .blockLinksList
{	
	max-height: 400px;
	overflow: auto;
}

/* form popups */

.formPopup
{
	width: 250px;
	background-color: rgb(255, 255, 255);
}

	.formPopup form,
	.formPopup .ctrlUnit
	{
		margin: 5px auto;
	}
	
		.formPopup .ctrlUnit
		{
		}
		
	.formPopup .textCtrl,
	.formPopup .button
	{
		width: 232px;
	}
		
	.formPopup .ctrlUnit > dt label
	{
		display: block;
		margin-bottom: 2px;
	}
		
	.formPopup .submitUnit dd
	{
		text-align: center;
	}
	
		.formPopup .ctrlUnit > dd .explain
		{
			margin: 2px 0 0;
		}
	
	.formPopup .primaryControls
	{
		zoom: 1;
		white-space: nowrap;
		word-wrap: normal;
		padding: 0 5px;
	}
	
		.formPopup .primaryControls input.textCtrl
		{
			margin-bottom: 0;
		}
	
	.formPopup .secondaryControls
	{
		padding: 0 5px;
	}
	
		.formPopup .controlsWrapper
		{
			background: rgb(228, 228, 228) url('styles/pixelgoose/metro/blue/xenforo/gradients/category-23px-light.png') repeat-x top;
			-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
			padding: 5px;
			margin: 5px 0;
			font-size: 11px;
		}

			.formPopup .controlsWrapper .textCtrl
			{
				width: 222px;
			}
	
	.formPopup .advSearchLink
	{
		display: block;
		text-align: center;
		padding: 5px;
		font-size: 11px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		border: 1px solid rgb(228, 228, 228);
		background: rgb(255, 255, 255) url('styles/pixelgoose/metro/blue/xenforo/gradients/category-23px-light.png') repeat-x top;
	}
	
		.formPopup .advSearchLink:hover
		{
			background-color: rgb(228, 228, 228);
			text-decoration: none;
		}

/* All overlays must have this */
.xenOverlay
{
	display: none;
	z-index: 10000;
	width: 90%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	max-width: 690px; /*calc: 90=overlay padding+borders*/
}

	.xenOverlay .overlayScroll
	{
		max-height: 400px;
		overflow: auto;
	}
	
	.xenOverlay .overlayScroll.ltr
	{
		direction: ltr;
	}
	
	.xenOverlay .overlayScroll .sortable-placeholder
	{
		background-color: rgb(228,228,228);
	}
	
	.xenOverlay .overlayContain
	{
		overflow-x: auto;
	}
	
	.xenOverlay .overlayContain.ltr
	{
		direction: ltr;
	}

.overlayOnly /* needs a bit more specificity over regular buttons */
{
	display: none !important;
}

	.xenOverlay .overlayOnly
	{
		display: block !important;
	}
	
	.xenOverlay input.overlayOnly,
	.xenOverlay button.overlayOnly,
	.xenOverlay a.overlayOnly
	{
		display: inline !important;
	}
	
	.xenOverlay a.close 
	{
		background-image: url('styles/pixelgoose/metro/blue/xenforo/overlay/close.svg');
position: absolute;
right: 4px;
top: 4px;
cursor: pointer;
width: 35px;
height: 35px;

	}
	
.xenOverlay .nonOverlayOnly
{
	display: none !important;
}

/* Generic form overlays */

.xenOverlay .formOverlay
{
	background-color: rgb(255, 255, 255);
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);
_zoom: 1;

	margin: 0;
}

	.Touch .xenOverlay .formOverlay
	{
		background: rgb(255, 255, 255);
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

	.xenOverlay .formOverlay a.muted,
	.xenOverlay .formOverlay .muted a
	{
		color: rgb(150,150,150);
	}

	.xenOverlay .formOverlay .heading
	{
		font-size: 14px;
color: rgb(255, 255, 255);
background-color: rgb(46, 53, 57);
margin-bottom: 12px;

	}

	.xenOverlay .formOverlay .subHeading
	{
		font-size: 13px;
color: rgb(255, 255, 255);
background-color: rgb(43,72,92);
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid rgb(61, 152, 204);
-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;

	}
	
	.xenOverlay .formOverlay .textHeading
	{
		color: rgb(255, 255, 255);

	}
	
	.xenOverlay .formOverlay > p
	{
		padding-left: ;
		padding-right: ;
	}

	.xenOverlay .formOverlay .textCtrl
	{
		background-color: #ffffff;
border: 1px solid rgb(228,228,228);

	}

	.xenOverlay .formOverlay .textCtrl option
	{
		background-color: #ffffff;
	}

	.xenOverlay .formOverlay .textCtrl:focus,
	.xenOverlay .formOverlay .textCtrl.Focus
	{
		background: rgb(255, 250, 181) none;

	}

	.xenOverlay .formOverlay .textCtrl:focus option
	{
		background: rgb(255, 250, 181) none;
	}

	.xenOverlay .formOverlay .textCtrl.disabled
	{
		background-color: rgb(228,228,228);

	}

	.xenOverlay .formOverlay .textCtrl.disabled option
	{
		background-color: rgb(228,228,228);
	}

	.xenOverlay .formOverlay .textCtrl.prompt
	{
		color: rgb(160,160,160);

	}

	.xenOverlay .formOverlay .ctrlUnit > dt dfn,
	.xenOverlay .formOverlay .ctrlUnit > dd li .hint,
	.xenOverlay .formOverlay .ctrlUnit > dd .explain
	{
		color: #bbb;

	}

	.xenOverlay .formOverlay a
	{
		color: #fff;

	}

		.xenOverlay .formOverlay a.button
		{
			color: rgb(20,20,20);

		}

	.xenOverlay .formOverlay .avatar img,
	.xenOverlay .formOverlay .avatar .img,
	.xenOverlay .formOverlay .avatarCropper
	{
		background-color: transparent;
	}
	
	/* tabs in form overlay */
	
	.xenOverlay .formOverlay .tabs /* the actual tabs */
	{
		background: transparent none;
border-color: rgb(228,228,228);

	}

		.xenOverlay .formOverlay .tabs a
		{
			color: rgb(20,20,20);
background: #ffffff none;
border-color: rgb(228,228,228);

		}
		
			.xenOverlay .formOverlay .tabs a:hover
			{
				background: url(rgba.php?r=255&g=255&b=255&a=63); background: rgba(255,255,255, 0.25); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3FFFFFFF,endColorstr=#3FFFFFFF);

			}
			
			.xenOverlay .formOverlay .tabs .active a
			{
				color: rgb(20,20,20);
background-color: rgb(242, 242, 242);

			}
			
	.xenOverlay .formOverlay .tabPanel /* panels switched with the tab controls */
	{
		background: transparent url('styles/pixelgoose/metro/blue/xenforo/color-picker/panel.png') repeat-x top;
border: 1px solid rgb(228,228,228);

	}


/* Generic overlays */

.xenOverlay .section,
.xenOverlay .sectionMain
{
	padding: 0px;
-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);

	
	border-color: ;
}

	.Touch .xenOverlay .section,
	.Touch .xenOverlay .sectionMain
	{
		border-color: ;
		-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	}

.xenOverlay > .section,
.xenOverlay > .sectionMain
{
	background: none;
	margin: 0;
}

	.xenOverlay .section .heading,
	.xenOverlay .sectionMain .heading
	{
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
		margin-bottom: 0;
	}

	.xenOverlay .section .subHeading,
	.xenOverlay .sectionMain .subHeading
	{
		margin-top: 0;
	}

	.xenOverlay .section .sectionFooter,
	.xenOverlay .sectionMain .sectionFooter
	{
		overflow: hidden; zoom: 1;
	}
		
		.xenOverlay .sectionFooter .buttonContainer
		{
			line-height: 31px;
		}
	
		.xenOverlay .sectionFooter .button,
		.xenOverlay .sectionFooter .buttonContainer
		{
			min-width: 75px;
			*min-width: 0;
			float: right;
			margin-left: 5px;
		}
		
			.xenOverlay .sectionFooter .buttonContainer .button
			{
				float: none;
				margin-left: 0;
			}

/* The AJAX progress indicator overlay */

#AjaxProgress.xenOverlay
{
	width: 100%;
	max-width: none;
	overflow: hidden; zoom: 1;
}

	#AjaxProgress.xenOverlay .content
	{
		background: rgb(0, 0, 0) url('styles/pixelgoose/metro/blue/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center; background: rgba(0,0,0, 0.5) url('styles/pixelgoose/metro/blue/xenforo/widgets/ajaxload.info_FFFFFF_facebook.gif') no-repeat center center;
-webkit-border-bottom-left-radius: 10px; -moz-border-radius-bottomleft: 10px; -khtml-border-bottom-left-radius: 10px; border-bottom-left-radius: 10px;
float: right;
width: 85px;
height: 30px;

	}
	
		.Touch #AjaxProgress.xenOverlay .content
		{
			background-color: rgb(0, 0, 0);
		}

/* Timed message for redirects */

.xenOverlay.timedMessage
{
	color: #000000;
background-color: rgb(246, 246, 246);
max-width: none;
-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);
width: 100%;

}

	.xenOverlay.timedMessage .content
	{
		font-size: 18pt;
padding: 30px;
text-align: center;

	}
	
/* Growl-style message */

#StackAlerts
{
	position: fixed;
	bottom: 70px;
	left: 35px;
	z-index: 9999; /* in front of the expose mask */
}

	#StackAlerts .stackAlert
	{
		position: relative;
		width: 270px;
		border: 1px solid rgb(226, 245, 255);
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		-webkit-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -moz-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); -khtml-box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4); box-shadow: 2px 2px 5px 0 rgba(0,0,0, 0.4);
		margin-top: 5px;
	}

		#StackAlerts .stackAlertContent
		{
			padding: 10px;
			padding-right: 30px;
			-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
			border: solid 2px rgb(228, 228, 228);
			background: url(rgba.php?r=255&g=255&b=255&a=229); background: rgba(255, 255, 255, 0.9); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#E5FFFFFF,endColorstr=#E5FFFFFF);
			font-size: 11px;
			font-weight: bold;
		}
	
/* Inline Editor */

.xenOverlay .section .messageContainer
{
	padding: 0;
}

.xenOverlay .section .messageContainer .mceLayout
{
	border: none;	
}

.xenOverlay .section .messageContainer tr.mceFirst td.mceFirst
{
	border-top: none;
}

.xenOverlay .section .messageContainer tr.mceLast td.mceLast,
.xenOverlay .section .messageContaner tr.mceLast td.mceIframeContainer
{
	border-bottom: none;
}

.xenOverlay .section .textCtrl.MessageEditor,
.xenOverlay .section .mceLayout,
.xenOverlay .section .bbCodeEditorContainer textarea
{
	width: 100% !important;
	min-height: 260px;
	_height: 260px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}


@media (max-width:610px)
{
	.Responsive .xenOverlay
	{
		width: 100%;
	}
	
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain
	{
		-webkit-border-radius: 10px; -moz-border-radius: 10px; -khtml-border-radius: 10px; border-radius: 10px;
		border-width: 10px;
	}
	
	.Responsive .xenOverlay a.close 
	{
		top: 0;
		right: 0;
		width: 28px;
		height: 28px;
		background-size: 100% 100%;
	}
}


.alerts .alertGroup
{
	margin-bottom: 20px;
}

.alerts .primaryContent
{
	overflow: hidden; zoom: 1;
	padding: 5px;
}

.alerts .avatar
{
	float: left;
}

.alerts .avatar img
{
	width: 32px;
	height: 32px;
}

.alerts .alertText
{
	margin-left: 32px;
	padding: 0 5px;
}

.alerts h3
{
	display: inline;
}

.alerts h3 .subject
{
	font-weight: bold;
}

.alerts .timeRow
{
	font-size: 11px;
	margin-top: 5px;
}
	
	.alerts .newIcon,
	.alertsPopup .newIcon
	{
		display: inline-block;
		vertical-align: baseline;
		margin-left: 2px;
		width: 11px;
		height: 11px;
		background: url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.png') no-repeat -144px -40px;
	}

/** Data tables **/

.dataTableWrapper
{
	overflow-x: auto;
	overflow-y: visible;
}

table.dataTable
{
	width: 100%;
	_width: 99.5%;
	margin: 10px 0;
}

.dataTable caption
{
	font-size: 14px;
color: rgb(255, 255, 255);
background-color: rgb(46, 53, 57);
padding: 13px 12px;

}

.dataTable tr.dataRow td
{
	border-bottom: 1px solid rgb(228, 228, 228);
	padding: 5px 10px;
	word-wrap: break-word;
}

.dataTable tr.dataRow td.secondary
{
	background: rgb(255, 255, 255) url("styles/pixelgoose/metro/blue/xenforo/gradients/category-23px-light.png") repeat-x top;
}

.dataTable tr.dataRow th
{
	background: #f9d9b0 url("styles/pixelgoose/metro/blue/xenforo/gradients/category-23px-light.png") repeat-x top;
	border-bottom: 1px solid #f9bc6d;
	border-top: 1px solid #f9d9b0;
	color: #6d3f03;
	font-size: 11px;
	padding: 5px 10px;
}

	.dataTable tr.dataRow th a
	{
		color: inherit;
		text-decoration: underline;
	}

.dataTable .dataRow .dataOptions
{
	text-align: right;
	white-space: nowrap;
	word-wrap: normal;
	padding: 0;
}

.dataTable .dataRow .important,
.dataTable .dataRow.important
{
	font-weight: bold;
}

.dataTable .dataRow .dataOptions a.secondaryContent
{
	display: inline-block;
	border-left: 1px solid rgb(228, 228, 228);
	border-bottom: none;
	padding: 7px 10px 6px;
	font-size: 11px;
}

	.dataTable .dataRow .dataOptions a.secondaryContent:hover
	{
		background-color: rgb(228, 228, 228);
		text-decoration: none;
	}

	.dataTable .dataRow .delete
	{
		padding: 0px;
		width: 26px;
		border-left: 1px solid rgb(228, 228, 228);
		background-color: rgb(255, 255, 255);
	}	
				
		.dataTable .dataRow .delete a
		{
			display: block;
			background: transparent url('styles/pixelgoose/metro/blue/xenforo/permissions/deny.png') no-repeat center center;
			cursor: pointer;
		
			padding: 5px;
			width: 16px;
			height: 16px;
			
			overflow: hidden;
			white-space: nowrap;
			text-indent: -1000px;
		}

.memberListItem
{
	overflow: hidden;
zoom: 1;

}

	.memberListItem .avatar,
	.memberListItem .icon
	{
		float: left;

	}
	
	/* ----------------------- */
	
	.memberListItem .extra
	{
		font-size: 11px;
float: right;

	}

		.memberListItem .extra .DateTime
		{
			display: block;
		}

		.memberListItem .extra .bigNumber
		{
			font-size: 250%;
			color: rgb(150,150,150);
		}
	
	.memberListItem .member
	{
		margin-left: 65px;

	}
	
	/* ----------------------- */
		
		.memberListItem h3.username
		{
			font-weight: bold;
font-size: 13pt;
margin-bottom: 3px;

		}
			
		.memberListItem .username.guest
		{
			font-style: italic;
font-weight: normal;

		}
	
	/* ----------------------- */
		
		.memberListItem .userInfo
		{
			font-size: 11px;
margin-bottom: 3px;

		}
		
			.memberListItem .userBlurb
			{
			}
		
				.memberListItem .userBlurb .userTitle
				{
					font-weight: bold;

				}

			.memberListItem .userStats dt,
			.memberListItem .userStats dd
			{
				white-space: nowrap;
			}
				
	
	/* ----------------------- */
		
		.memberListItem .member .contentInfo
		{
			margin-top: 5px;

		}
	
	/* ----------------------- */
	
	
/* extended member list items have a fixed 200px right column */

.memberListItem.extended .extra
{
	width: 200px;
}

.memberListItem.extended .member
{
	margin-right: 210px;
}

/* Styling for hover-dismiss controls */

.DismissParent .DismissCtrl
{
	position: absolute;
	top: 12px;
	right: 5px;
	
	display: block;
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.png') no-repeat -80px 0;
	color: white;
	width: 15px;
	height: 15px;
	line-height: 15px;
	text-align: center;
	
	opacity: .4;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3s ease-in-out;
	
	font-size: 10px;
	
	overflow: hidden;
	white-space: nowrap;
	text-indent: 20000em;
	
	cursor: pointer;
}

	.DismissParent:hover .DismissCtrl,
	.Touch .DismissParent .DismissCtrl
	{
		opacity: 1;
	}
	
		.DismissParent:hover .DismissCtrl:hover
		{
			background-position: -96px 0;
		}
		
			.DismissParent:hover .DismissCtrl:active
			{
				background-position: -112px 0;
			}

/* ***************************** */
/* un-reset, mostly from YUI */

.baseHtml h1
	{ font-size:138.5%; } 
.baseHtml h2
	{ font-size:123.1%; }
.baseHtml h3
	{ font-size:108%; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3
	{  margin:1em 0; } 
.baseHtml h1, .baseHtml h2, .baseHtml h3, .baseHtml h4, .baseHtml h5, .baseHtml h6, .baseHtml strong
	{ font-weight:bold; } 
.baseHtml abbr, .baseHtml acronym
	{ border-bottom:1px dotted #000; cursor:help; }  
.baseHtml em
	{  font-style:italic; } 
.baseHtml blockquote, .baseHtml ul, .baseHtml ol, .baseHtml dl
	{ margin:1em; } 
.baseHtml ol, .baseHtml ul, .baseHtml dl
	{ margin-left:3em; margin-right:0; } 
.baseHtml ul ul, .baseHtml ul ol, .baseHtml ul dl, .baseHtml ol ul, .baseHtml ol ol, .baseHtml ol dl, .baseHtml dl ul, .baseHtml dl ol, .baseHtml dl dl
	{ margin-top:0; margin-bottom:0; }
.baseHtml ol li
	{ list-style: decimal outside; } 
.baseHtml ul li
	{ list-style: disc outside; } 
.baseHtml ol ul li, .baseHtml ul ul li
	{ list-style-type: circle; }
.baseHtml ol ol ul li, .baseHtml ol ul ul li, .baseHtml ul ol ul li, .baseHtml ul ul ul li
	{ list-style-type: square; }
.baseHtml ul ol li, .baseHtml ul ol ol li, .baseHtml ol ul ol li
	{ list-style: decimal outside; }
.baseHtml dl dd
	{ margin-left:1em; } 
.baseHtml th, .baseHtml td
	{ border:1px solid #000; padding:.5em; } 
.baseHtml th
	{ font-weight:bold; text-align:center; } 
.baseHtml caption
	{ margin-bottom:.5em; text-align:center; } 
.baseHtml p, .baseHtml pre, .baseHtml fieldset, .baseHtml table
	{ margin-bottom:1em; }

.PageNav
{
	font-size: 13px;
padding: 2px 0;
overflow: hidden;
zoom: 1;
line-height: 24px;
word-wrap: normal;
min-width: 150px;
white-space: nowrap;

	
	margin-bottom: -.5em;
}

	.PageNav .hidden
	{
		display: none;
	}
	
	.PageNav .pageNavHeader,
	.PageNav a,
	.PageNav .scrollable
	{
		display: block;
		float: left;
		margin-right: 3px;
		margin-bottom: .5em;
	}
	
	.PageNav .pageNavHeader
	{
		padding: 1px 0;
	}

	.PageNav a
	{		
		color: rgb(20,20,20);
text-decoration: none;
background-color: rgb(255, 255, 255);
border: 1px solid rgb(228, 228, 228);
text-align: center;
min-width: 24px;

		
		
		width: 19px;
	}
		
		.PageNav a[rel=start]
		{
			width: 19px !important;
		}

		.PageNav a.text
		{
			width: auto !important;
			padding: 0 4px;
		}
			
		.PageNav a.currentPage
		{
			color: rgb(255, 255, 255);
background-color: rgb(46, 53, 57);
border-color: rgb(46, 53, 57);
position: relative;

		}

		a.PageNavPrev,
		a.PageNavNext
		{
			color: rgb(20,20,20);
background-color: transparent;
padding: 1px;
border: 1px none black;
cursor: pointer;

			
			width: 19px !important;
		}
		
		.PageNav a:hover,
		.PageNav a:focus
		{
			color: rgb(255, 255, 255);
text-decoration: none;
background-color: rgb(46, 53, 57);
border-color: rgb(46, 53, 57);

		}
		
	.PageNav a.distinct
	{
		margin-left: 3px;
	}
			
	.PageNav .scrollable
	{
		position: relative;
		overflow: hidden;
		width: 117px; /* width of 5 page numbers plus their margin & border */
		height: 18px; /* only needs to be approximate */
	}
	
		.PageNav .scrollable .items
		{
			display: block;
			width: 20000em; /* contains scrolling items, should be huge */
			position: absolute;
			display: block;
		}
		
/** Edge cases - large numbers of digits **/

.PageNav .gt999 
{
	font-size: 9px;
	letter-spacing: -0.05em; 
}

.PageNav.pn5 a { width: 29px; } .PageNav.pn5 .scrollable { width: 167px; }
.PageNav.pn6 a { width: 33px; } .PageNav.pn6 .scrollable { width: 187px; }
.PageNav.pn7 a { width: 37px; } .PageNav.pn7 .scrollable { width: 207px; }


@media (max-width:610px)
{
	.Responsive .PageNav .pageNavHeader
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .PageNav .unreadLink
	{
		display: none;
	}
}


/* ***************************** */
/* DL Name-Value Pairs */

.pairs dt,
.pairsInline dt,
.pairsRows dt,
.pairsColumns dt,
.pairsJustified dt
{
	color: rgb(150,150,150);
}

.pairsRows,
.pairsColumns,
.pairsJustified
{
	line-height: 1.5;
}

.pairsInline dl,
.pairsInline dt,
.pairsInline dd
{
	display: inline;
}

.pairsRows dt,
.pairsRows dd
{
	display: inline-block;
	vertical-align: top;

	*display: inline;
	*margin-right: 1ex;
	*zoom: 1;
}

dl.pairsColumns,
dl.pairsJustified,
.pairsColumns dl,
.pairsJustified dl
{
	overflow: hidden; zoom: 1;
}

.pairsColumns dt,
.pairsColumns dd
{
	float: left;
	width: 48%;
}

.pairsJustified dt
{
	float: left;
	max-width: 100%;
	margin-right: 5px;
}
.pairsJustified dd
{
	float: right;
	text-align: right;
	max-width: 100%
}


/* ***************************** */
/* Lists that put all elements on a single line */

.listInline ul,
.listInline ol,
.listInline li,
.listInline dl,
.listInline dt,
.listInline dd
{
	display: inline;
}

/* intended for use with .listInline, produces 'a, b, c, d' / 'a * b * c * d' lists */

.commaImplode li:after,
.commaElements > *:after
{
	content: ', ';
}

.commaImplode li:last-child:after,
.commaElements > *:last-child:after
{
	content: '';
}

.bulletImplode li:before
{
	content: '\2022\a0';
}

.bulletImplode li:first-child:before
{
	content: '';
}

/* Three column list display */

.threeColumnList
{
	overflow: hidden; zoom: 1;
}

.threeColumnList li
{
	float: left;
	width: 32%;
	margin: 2px 1% 2px 0;
}

.twoColumnList
{
	overflow: hidden; zoom: 1;
}

.twoColumnList li
{
	float: left;
	width: 48%;
	margin: 2px 1% 2px 0;
}

/* ***************************** */
/* Preview tooltips (threads etc.) */

.previewTooltip
{
}
		
	.previewTooltip .avatar
	{
		float: left;
	}
	
	.previewTooltip .text
	{
		margin-left: 64px;
	}
	
		.previewTooltip blockquote
		{
			font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
line-height: 1.4;

			
			font-size: 10pt;
			max-height: 150px;
			overflow: hidden;
		}
	
		.previewTooltip .posterDate
		{
			font-size: 11px;
			padding-top: 5px;
			border-top: 1px solid rgb(228, 228, 228);
			margin-top: 5px;
		}

/* ***************************** */
/* List of block links */

.blockLinksList
{
	font-size: 12px;
padding: 0;

}
		
	.blockLinksList a,
	.blockLinksList label
	{
		color: rgb(46, 53, 57);
padding: 10px 12px;
display: block;
outline: 0 none;

	}
	
		.blockLinksList a:hover,
		.blockLinksList a:focus,
		.blockLinksList li.kbSelect a,
		.blockLinksList label:hover,
		.blockLinksList label:focus,
		.blockLinksList li.kbSelect label
		{
			text-decoration: none;
background-color: rgb(230, 230, 230);

		}
		
		.blockLinksList a:active,
		.blockLinksList li.kbSelect a:active,
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label:active,
		.blockLinksList li.kbSelect label:active,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			color: rgb(255, 255, 255);
background-color: rgb(67, 166, 223);

		}
		
		.blockLinksList a.selected,
		.blockLinksList li.kbSelect a.selected,
		.blockLinksList label.selected,
		.blockLinksList li.kbSelect label.selected
		{
			font-weight: bold;
display: block;

		}
		
		.blockLinksList span.depthPad
		{
			display: block;
		}

.blockLinksList .itemCount
{
	font-weight: bold;
font-size: 11px;
color: white;
background-color: rgb(255, 68, 0);
padding: 0 2px;
-webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px; border-radius: 8px;
/*position: absolute;
right: 2px;
top: -12px;*/
line-height: 16px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
height: 16px;


	float: right;
	position: relative;
	right: 0;
	top: -1px;
}

	.blockLinksList .itemCount.Zero
	{
		display: none;
	}
	
.bubbleLinksList
{
	overflow: hidden;
}

.bubbleLinksList a
{
	float: left;
	padding: 2px 4px;
	margin-right: 2px;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	text-decoration: none;
}
	
	.bubbleLinksList a:hover,
	.bubbleLinksList a:active
	{
		text-decoration: none;
background-color: rgb(230, 230, 230);

	}
	
	.bubbleLinksList a.active
	{
		color: rgb(255, 255, 255);
background-color: rgb(67, 166, 223);

		font-weight: bold;
display: block;

	}

/* ***************************** */
/* Normally-indented nested lists */

.indentList ul,
.indentList ol
{
	margin-left: 2em;
}

/* ***************************** */
/* AJAX progress image */

.InProgress
{
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat right center;
}

/* ***************************** */
/* Hidden inline upload iframe */

.hiddenIframe
{
	display: block;
	width: 500px;
	height: 300px;
}

/* ***************************** */
/* Exception display */

.traceHtml { font-size:11px; font-family:calibri, verdana, arial, sans-serif; }
.traceHtml .function { color:rgb(180,80,80); font-weight:normal; }
.traceHtml .file { font-weight:normal; }
.traceHtml .shade { color:rgb(128,128,128); }
.traceHtml .link { font-weight:bold; }

/* ***************************** */
/* Indenting for options */

._depth0 { padding-left:  0em; }
._depth1 { padding-left:  2em; }
._depth2 { padding-left:  4em; }
._depth3 { padding-left:  6em; }
._depth4 { padding-left:  8em; }
._depth5 { padding-left: 10em; }
._depth6 { padding-left: 12em; }
._depth7 { padding-left: 14em; }
._depth8 { padding-left: 16em; }
._depth9 { padding-left: 18em; }

.xenOverlay .errorOverlay
{
	color: white;
	padding: 25px;
	-webkit-border-radius: 20px; -moz-border-radius: 20px; -khtml-border-radius: 20px; border-radius: 20px;	
	border:  20px solid rgb(0,0,0); border:  20px solid rgba(0,0,0, 0.25); _border:  20px solid rgb(0,0,0);
	
	background: url(rgba.php?r=0&g=0&b=0&a=191); background: rgba(0,0,0, 0.75); _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#BF000000,endColorstr=#BF000000);
}

	.xenOverlay .errorOverlay .heading
	{
		padding: 5px 10px;
		font-weight: bold;
		font-size: 12pt;
		background: rgb(180,0,0);
		color: white;
		margin-bottom: 10px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		border: 1px solid rgb(100,0,0);
	}

	.xenOverlay .errorOverlay li
	{
		line-height: 2;
	}
	
	.xenOverlay .errorOverlay .exceptionMessage
	{
		color: rgb(150,150,150);
	}

/*** inline errors ***/

.formValidationInlineError
{
	display: none;
	position: absolute;
	z-index: 5000;
	background-color: white;
	border: 1px solid rgb(180,0,0);
	color: rgb(180,0,0);
	-webkit-box-shadow: 2px 2px 10px #999; -moz-box-shadow: 2px 2px 10px #999; -khtml-box-shadow: 2px 2px 10px #999; box-shadow: 2px 2px 10px #999;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	padding: 2px 5px;
	font-size: 11px;
	width: 175px;
	min-height: 2.5em;
	_height: 2.5em;
	word-wrap: break-word;
}

	.formValidationInlineError.inlineError
	{
		position: static;
		width: auto;
		min-height: 0;
	}

/** Block errors **/

.errorPanel
{
	margin: 10px 0 20px;
	color: rgb(180,0,0);
	background: rgb(255, 235, 235);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	border: 1px solid rgb(180,0,0);
}

	.errorPanel .errorHeading
	{
		margin: .75em;
		font-weight: bold;
		font-size: 12pt;
	}
	
	.errorPanel .errors
	{
		margin: .75em 2em;
		display: block;
		line-height: 1.5;
	}


@media (max-width:800px)
{
	.Responsive .formValidationInlineError
	{
		position: static;
		width: auto;
		min-height: auto;
	}
}


/* Undo some nasties */

input[type=search]
{
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
}

/* ignored content hiding */

.ignored { display: none !important; }

/* Misc */

.floatLeft { float: left; }
.floatRight { float: right; }

.horizontalContain { overflow-x: auto; }

.ltr { direction: ltr; }

/* Square-cropped thumbs */

.SquareThumb
{
	position: relative;
	display: block;
	overflow: hidden;
	padding: 0;
	direction: ltr;
	
	/* individual instances can override this size */
	width: 48px;
	height: 48px;
}

.SquareThumb img
{
	position: relative;
	display: block;
}

/* Basic, common, non-templated BB codes */

.bbCodeImage
{
	max-width: 100%;
}

.bbCodeImageFullSize
{
	position: absolute;
	z-index: 50000;
	background-color: rgb(255, 255, 255);
}

.bbCodeStrike
{
	text-decoration: line-through;
}

img.mceSmilie,
img.mceSmilieSprite
{
	vertical-align: text-bottom;
	margin: 0 1px;
}

/* smilie sprite classes */


.visibleResponsiveFull { display: inherit !important; }

.visibleResponsiveWide,
.visibleResponsiveMedium,
.visibleResponsiveNarrow { display: none !important; }

.hiddenResponsiveFull { display: none !important; } 

.hiddenResponsiveWide,
.hiddenResponsiveMedium,
.hiddenResponsiveNarrow { display: inherit !important; }


@media (max-width:800px)
{
	.Responsive .visibleResponsiveFull { display: none !important; }
	
	.Responsive .hiddenResponsiveFull { display: inherit !important; }
	
	.Responsive .hiddenWideUnder { display: none !important; }
}
@media (min-width:611px) AND (max-width:800px)
{
	.Responsive .visibleResponsiveWide { display: inherit !important; }
	
	.Responsive .hiddenResponsiveWide { display: none !important; }
	}

@media (min-width:481px) AND (max-width:610px)
{
	.Responsive .visibleResponsiveMedium { display: inherit !important; }
	
	.Responsive .hiddenResponsiveMedium { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder { display: none !important; }
}

@media (max-width:480px)
{
	.Responsive .visibleResponsiveNarrow { display: inherit !important; }
	
	.Responsive .hiddenResponsiveNarrow { display: none !important; }
	
	.Responsive .hiddenWideUnder,
	.Responsive .hiddenMediumUnder,
	.Responsive .hiddenNarrowUnder { display: none !important; }
}

@media (max-width:610px)
{
	.Responsive .threeColumnList li
	{
		float: none;
		width: auto;
		margin: 2px 1% 2px 0;
	}
}

@media (max-width:480px)
{
	.Responsive .xenTooltip.statusTip
	{
		width: auto;
	}
	
	.Responsive .xenPreviewTooltip
	{
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		width: auto;
		max-width: 100%;
	}
	
	.Responsive .xenPreviewTooltip .arrow
	{
		display: none;
	}
	
	.Responsive .previewTooltip .avatar
	{
		display: none;
	}
	
	.Responsive .previewTooltip .text
	{
		margin-left: 0;
	}
}




/* --- form.css --- */

/** Forms **/

.xenForm
{
	margin: 10px auto;
	max-width: 800px;
}

	.xenOverlay .xenForm
	{
		max-width: 600px;
	}

.xenForm .ctrlUnit > dd
{
	width: 68%;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	padding-right: 30px;
}

.xenForm .ctrlUnit > dd .textCtrl
{
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 100%;
}

	.xenForm .ctrlUnit > dd .textCtrl.indented
	{
		width: calc(100% - 16px);
	}

	.xenForm .ctrlUnit > dd .textCtrl[size],
	.xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: auto !important;
		min-width: 0;
	}

	.xenForm .ctrlUnit > dd .textCtrl.number
	{
		width: 150px;
	}


.xenForm > .sectionHeader:first-child,
.xenForm > fieldset > .sectionHeader:first-child
{
	margin-top: 0;
}

/** Sections **/

.xenForm fieldset,
.xenForm .formGroup
{
	border-top: 1px solid rgb(228, 228, 228);
	margin: 20px auto;
}

.xenForm > fieldset:first-child,
.xenForm > .formGroup:first-child
{
	border-top: none;
	margin: auto;
}

.xenForm .PreviewContainer + fieldset,
.xenForm .PreviewContainer + .formGroup
{
	border-top: none;
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit,
.xenForm .submitUnit
{
	border-top: 1px solid rgb(228, 228, 228);
}

.xenForm fieldset + .ctrlUnit,
.xenForm .formGroup + .ctrlUnit
{
	padding-top: 10px;
}

.xenForm .primaryContent + .submitUnit,
.xenForm .secondaryContent + .submitUnit
{
	margin-top: 0;
	border-top: none;
}

.xenForm .ctrlUnit.submitUnit dd
{	
	line-height: 31px;
	padding-top: 0;
}

	.ctrlUnit.submitUnit dd .explain,
	.ctrlUnit.submitUnit dd .text,
	.ctrlUnit.submitUnit dd label
	{
		line-height: 1.28;
	}

/* now undo that */

.xenOverlay .ctrlUnit.submitUnit dd,
.Menu .ctrlUnit.submitUnit dd,
#QuickSearch .ctrlUnit.submitUnit dd
{
	border: none;
	background: none;
}

.xenForm .ctrlUnit
{
	
}

	.xenForm .ctrlUnit.limited
	{
		display: none;
	}

	/** Sections Immediately Following Headers **/

	.xenForm .sectionHeader + fieldset,
	.xenForm .heading + fieldset,
	.xenForm .subHeading + fieldset,
	.xenForm .sectionHeader + .formGroup,
	.xenForm .heading + .formGroup,
	.xenForm .subHeading + .formGroup
	{
		border-top: none;
		margin-top: 0;
	}
	
.xenForm .formHiderHeader
{
	margin: 10px;
	font-size: 15px;
	font-weight: bold;
}


/** *********************** **/
/** TEXT INPUTS             **/
/** *********************** **/

.textCtrl
{
	font-family: 'Open Sans', Arial, Helvetica, sans-serif !important;
margin-bottom: 0px;
padding: 6px !important;
border: solid 1px rgb(228,228,228) !important;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
min-height: 36px;

}

select.textCtrl
{
	word-wrap: normal;
	-webkit-appearance: menulist;
}

select[multiple].textCtrl,
select[size].textCtrl
{
	-webkit-appearance: listbox;
}

select[size="0"].textCtrl,
select[size="1"].textCtrl
{
	-webkit-appearance: menulist;
}

textarea.textCtrl
{
	word-wrap: break-word;
}

	.textCtrl:focus,
	.textCtrl.Focus
	{
		background-color: rgb(255, 255, 204);

	}	

	textarea.textCtrl:focus
	{
		
	}

	input.textCtrl.disabled,
	textarea.textCtrl.disabled,
	.disabled .textCtrl
	{
		font-style: italic;
color: rgb(100,100,100);
background-color: rgb(245,245,245);

	}
	
	.textCtrl.prompt
	{
		color: rgb(160,160,160);

	}
	
	.textCtrl:-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(160,160,160);

	}
	
	.textCtrl::-moz-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(160,160,160);

	}

	.textCtrl::-webkit-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(160,160,160);

	}
	
	.textCtrl:-ms-input-placeholder
	{
		/* needs to be in its own rule due to weird selector */
		color: rgb(160,160,160);

	}
	
	.textCtrl.autoSize
	{
		width: auto !important;
	}

	.textCtrl.number,
	.textCtrl.number input
	{
		text-align: right;
		width: 150px;
	}
	
	.textCtrl.fillSpace
	{
		width: 100%;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		_width: 95%;
	}

	.textCtrl.code,
	.textCtrl.code input
	{
		font-family: Consolas, "Courier New", Courier, monospace;
white-space: pre;
word-wrap: normal;
direction: ltr;

	}
	
	input.textCtrl[type="password"]
	{
		font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	}

	input[type="email"],
	input[type="url"]
	{
		direction: ltr;
	}

	.textCtrl.titleCtrl,
	.textCtrl.titleCtrl input
	{
		font-size: 18pt;
	}

textarea.textCtrl.Elastic
{
	/* use for jQuery.elastic */
	max-height: 300px;
}

/* for use with wrapped inputs */
.textCtrlWrap
{
	display: inline-block;
}

.textCtrlWrap input.textCtrl
{
	padding: 0 !important;
	margin: 0 !important;
	border: none !important;
	background: transparent !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
}

.textCtrlWrap.blockInput input.textCtrl
{
	border-top:    !important;
	margin-top: 4px !important;
}

.taggingInput.textCtrl
{
	padding-top: 0px;
	min-height: 25px;
}

.taggingInput input
{
	margin: 0px;
	font-size: 12px;
	border: 1px solid transparent;
	padding: 0;
	background: transparent;
	outline: 0;
	color: inherit;
	font-family: inherit;
}

.taggingInput .tag
{
	border: 1px solid rgb(228,228,228);
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	display: inline-block;
	padding: 0 3px;
	text-decoration: none;
	background: rgb(228, 228, 228) url('styles/pixelgoose/metro/blue/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	color: rgb(61, 152, 204);
	margin-right: 3px;
	margin-top: 2px;
	font-size: 12px;
	max-width: 98%;
	-webkit-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -moz-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -khtml-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
}

.disabled.taggingInput .tag
{
	opacity: 0.7;
}

	.disabled.taggingInput .tag a
	{
		pointer-events: none;
	}

	html .taggingInput .tag a
	{
		color: rgb(226, 245, 255);
		font-weight: bold;
		text-decoration: none;
	}

.taggingInput .addTag
{
	display: inline-block;
	min-width: 150px;
	max-width: 100%;
	margin-top: 2px;
}

.taggingInput .tagsClear
{
	clear: both;
	width: 100%;
	height: 0px;
	float: none;
}

/** *********************** **/
/** BUTTONS                 **/
/** *********************** **/

.button
{
	font-style: normal;
	
	font-weight: bold;
font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
color: #000000;
background-color: rgb(228, 228, 228);
padding: 0px 6px;
border: 1px solid rgb(228, 228, 228);
text-align: center;
/*-webkit-box-shadow: 0px 1px 4px 0px rgb(200,200,210); -moz-box-shadow: 0px 1px 4px 0px rgb(200,200,210); -khtml-box-shadow: 0px 1px 4px 0px rgb(200,200,210); box-shadow: 0px 1px 4px 0px rgb(200,200,210);
text-shadow: 0 0 0 transparent, 0px -1px 2px white;*/
outline: none;
line-height: 34px;
display: inline-block;
cursor: pointer;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
height: 36px;

}

.button.smallButton
{
	font-size: 11px;
	padding: 0px 4px;
	line-height: 21px;
	height: 21px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}

.button.primary
{
	background-color: rgb(228,228,228);

}

input.button.disabled,
a.button.disabled,
input.button.primary.disabled,
a.button.primary.disabled,
html .buttonProxy .button.disabled
{
	color: #999;
background-color: #EEE;
border-color: #CCC;
-webkit-box-shadow: 0 0 0 transparent; -moz-box-shadow: 0 0 0 transparent; -khtml-box-shadow: 0 0 0 transparent; box-shadow: 0 0 0 transparent;

}

	.button::-moz-focus-inner
	{
		border: none;
	}

	a.button
	{
		display: inline-block;
		color: #000000;
	}

	.button:hover,
	.button[href]:hover,
	.buttonProxy:hover .button
	{
		color: #000000;
text-decoration: none;
border-color: rgb(208, 208, 208);

	}

	.button:focus
	{
		
	}

	.button:active,
	.button[href]:active,
	.button.ToggleButton.checked,
	.buttonProxy:active .button
	{
		color: #000000;
-webkit-box-shadow: 0px 0px 0px 0px transparent; -moz-box-shadow: 0px 0px 0px 0px transparent; -khtml-box-shadow: 0px 0px 0px 0px transparent; box-shadow: 0px 0px 0px 0px transparent;
outline: 0;

	}

	.button.ToggleButton
	{
		cursor: default;
		width: auto;
		color: rgb(228, 228, 228);
	}
	
	.button.ToggleButton.checked
	{
		background-color: rgb(255,150,50);
	}

	.button.inputSupplementary
	{
		width: 25px;
		position: absolute;
		top: 0px;
		right: 0px;
	}

	.button.inputSupplementary.add
	{
		color: green;
	}

	.button.inputSupplementary.delete
	{
		color: red;
	}

	.submitUnit .button
	{
		min-width: 100px;
		*min-width: 0;
	}

















/** Control Units **/

.xenForm .ctrlUnit
{
	position: relative;
	margin: 10px auto;
}

/* clearfix */ .xenForm .ctrlUnit { zoom: 1; } .xenForm .ctrlUnit:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

.xenForm .ctrlUnit.fullWidth
{
	overflow: visible;
}

/** Control Unit Labels **/

.xenForm .ctrlUnit > dt
{
	padding-top: 4px;
padding-right: 15px;
text-align: right;
vertical-align: top;

	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	width: 32%;
	float: left;
}

/* special long-text label */
.xenForm .ctrlUnit > dt.explain
{
	font-size: 11px;
	text-align: justify;
}


.xenForm .ctrlUnit.fullWidth dt,
.xenForm .ctrlUnit.submitUnit.fullWidth dt
{
	float: none;
	width: auto;
	text-align: left;
	height: auto;
}

.xenForm .ctrlUnit.fullWidth dt
{
	margin-bottom: 2px;
}

	.xenForm .ctrlUnit > dt label
	{
		margin-left: 30px;
	}

	/** Hidden Labels **/

	.xenForm .ctrlUnit.surplusLabel dt label
	{
		display: none;
	}

	/** Section Links **/

	.ctrlUnit.sectionLink dt
	{
		text-align: left;
		font-size: 11px;
	}

		.ctrlUnit.sectionLink dt a
		{
			margin-left: 11px; /*TODO: sectionHeader padding + border*/
		}		

	/** Hints **/

	.ctrlUnit > dt dfn
	{
		font-style: italic;
font-size: 10px;
color: rgb(150,150,150);
margin-left: 30px;
display: block;

	}
	
	.ctrlUnit.fullWidth dt dfn
	{
		display: inline;
		margin: 0;
	}
	
		.ctrlUnit > dt dfn b,
		.ctrlUnit > dt dfn strong
		{
			color: rgb(100,100,100);
		}

	/** Inline Errors **/

	.ctrlUnit > dt .error
	{
		font-size: 10px;
color: red;
display: block;

	}
	
	.ctrlUnit > dt dfn,
	.ctrlUnit > dt .error,
	.ctrlUnit > dt a
	{
		font-weight: normal;
	}

.xenForm .ctrlUnit.submitUnit dt
{
	height: 19px;
	display: block;
}

	.ctrlUnit.submitUnit dt.InProgress
	{
		background: transparent url('styles/pixelgoose/metro/blue/xenforo/widgets/ajaxload.info_B4B4DC_facebook.gif') no-repeat center center;
	}

/** Control Holders **/

.xenForm .ctrlUnit > dd
{
	/*todo: kill property */
	
	float: left;
}

.xenForm .ctrlUnit.fullWidth > dd
{
	float: none;
	width: auto;
	padding-left: 30px;
}

/** Explanatory paragraph **/

.ctrlUnit > dd .explain
{
	font-size: 11px;
color: rgb(150,150,150);
margin-top: 2px;

	/*TODO:max-width: auto;*/
}
	
	.ctrlUnit > dd .explain b,
	.ctrlUnit > dd .explain strong
	{
		color: rgb(100,100,100);
	}

/** List items inside controls **/

.ctrlUnit > dd > * > li
{
	margin: 4px 0 8px;
	padding-left: 1px; /* fix a webkit display bug */
}

.ctrlUnit > dd > * > li:first-child > .textCtrl:first-child
{
	margin-top: -3px;
}

.ctrlUnit > dd .break
{
	margin-bottom: 0.75em;
	padding-bottom: 0.75em;
}

.ctrlUnit > dd .rule
{
	border-bottom: 1px solid rgb(228, 228, 228);
}

.ctrlUnit > dd .ddText
{
	margin-bottom: 2px;
}

/** Hints underneath checkbox / radio controls **/

.ctrlUnit > dd > * > li .hint
{
	font-size: 11px;
	color: rgb(150,150,150);
	margin-left: 16px;
	margin-top: 2px;
}

/** DISABLERS **/

.ctrlUnit > dd > * > li > ul,
.ctrlUnit .disablerList,
.ctrlUnit .indented
{
	margin-left: 16px;
}

.ctrlUnit > dd > * > li > ul > li:first-child
{
	margin-top: 6px;
}

.ctrlUnit > dd .disablerList > li,
.ctrlUnit > dd .checkboxColumns > li,
.ctrlUnit > dd .choiceList > li
{
	margin-top: 6px;
}
	
/** Other stuff... **/

.ctrlUnit > dd .helpLink
{
	font-size: 10px;
}

.ctrlUnit.textValue dt
{
	padding-top: 0px;
}

.button.spinBoxButton
{
	font-family: 'Open Sans', Helvetica, Arial, sans-serif;
	font-size: 11pt;
}

.unitPairsJustified li
{
	overflow: hidden;
}

	.unitPairsJustified li .label
	{
		float: left;
	}
	
	.unitPairsJustified li .value
	{
		float: right;
	}

#calroot
{
	margin-top: -1px;
	width: 198px;
	padding: 2px;
	background-color: rgb(255, 255, 255);
	font-size: 11px;
	border: 1px solid rgb(67, 166, 223);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	-webkit-box-shadow: 0 0 15px #666; -moz-box-shadow: 0 0 15px #666; -khtml-box-shadow: 0 0 15px #666; box-shadow: 0 0 15px #666;
	z-index: 7500;
}

#calhead
{	
	padding: 2px 0;
	height: 22px;
} 

	#caltitle {
		font-size: 11pt;
		color: rgb(67, 166, 223);
		float: left;
		text-align: center;
		width: 155px;
		line-height: 20px;
	}
	
	#calnext, #calprev {
		display: block;
		width: 20px;
		height: 20px;
		font-size: 11pt;
		line-height: 20px;
		text-align: center;
		float: left;
		cursor: pointer;
	}

	#calnext {
		float: right;
	}

	#calprev.caldisabled, #calnext.caldisabled {
		visibility: hidden;	
	}

#caldays {
	height: 14px;
	border-bottom: 1px solid rgb(67, 166, 223);
}

	#caldays span {
		display: block;
		float: left;
		width: 28px;
		text-align: center;
		color: rgb(67, 166, 223);
	}

#calweeks {
	margin-top: 4px;
}

.calweek {
	clear: left;
	height: 22px;
}

	.calweek a {
		display: block;
		float: left;
		width: 27px;
		height: 20px;
		text-decoration: none;
		font-size: 11px;
		margin-left: 1px;
		text-align: center;
		line-height: 20px;
		-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	} 
	
		.calweek a:hover, .calfocus {
			background-color: rgb(255, 255, 255);
		}

a.caloff {
	color: rgb(150,150,150);		
}

a.caloff:hover {
	background-color: rgb(255, 255, 255);		
}

a.caldisabled {
	background-color: #efefef !important;
	color: #ccc	!important;
	cursor: default;
}

#caltoday {
	font-weight: bold;
}

#calcurrent {
	background-color: rgb(67, 166, 223);
	color: rgb(255, 255, 255);
}
ul.autoCompleteList
{
	background-color: rgb(255, 255, 255);
	
	border: 1px solid rgb(226, 245, 255);
	padding: 2px;
	
	font-size: 11px;
	
	min-width: 180px;
	_width: 180px;
	
	z-index: 1000;
}

ul.autoCompleteList li
{
	padding: 3px 3px;
	height: 24px;
	line-height: 24px;
}

ul.autoCompleteList li:hover,
ul.autoCompleteList li.selected
{
	background-color: rgb(228, 228, 228);
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
}

ul.autoCompleteList img.autoCompleteAvatar
{
	float: left;
	margin-right: 3px;
	width: 24px;
	height: 24px;
}

ul.autoCompleteList li strong
{
	font-weight: bold;
}

/** status editor **/

.statusEditorCounter
{
	color: green;
}

.statusEditorCounter.warning
{
	color: orange;
	font-weight: bold;
}

.statusEditorCounter.error
{
	color: red;
	font-weight: bold;
}

.explain .statusHeader
{
	display: inline;
}

.explain .CurrentStatus
{
	color: rgb(20,20,20);
	font-style: italic;
	padding-left: 5px;
}

/* BB code-based editor styling */

.xenForm .ctrlUnit.fullWidth dd .bbCodeEditorContainer textarea
{
	margin-left: 0;
	min-height: 200px;
}

.bbCodeEditorContainer a
{
	font-size: 11px;
}

/*
 * Fix silly top padding. This may require additional tags in the padding-top selector.
 */

.xenForm .ctrlUnit > dd
{
	padding-top: 4px;
}

	.xenForm .ctrlUnit.fullWidth > dd
	{
		padding-top: 0;
	}

.xenForm .ctrlUnit > dd > input,
.xenForm .ctrlUnit > dd > select,
.xenForm .ctrlUnit > dd > textarea,
.xenForm .ctrlUnit > dd > ul,
.xenForm .ctrlUnit > dd > .verticalShift
{
	margin-top: -4px;
}

	.xenForm .ctrlUnit.fullWidth > dd > input,
	.xenForm .ctrlUnit.submitUnit > dd > input,
	.xenForm .ctrlUnit.fullWidth > dd > select,
	.xenForm .ctrlUnit.submitUnit > dd > select,
	.xenForm .ctrlUnit.fullWidth > dd > textarea,
	.xenForm .ctrlUnit.submitUnit > dd > textarea,
	.xenForm .ctrlUnit.fullWidth > dd > ul,
	.xenForm .ctrlUnit.submitUnit > dd > ul
	{
		margin-top: 0;
	}
	
/*
 * Multi-column checkboxes
 */
 
.xenForm .checkboxColumns > dd > ul,
ul.checkboxColumns
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

	.xenForm .checkboxColumns > dd > ul li,
	ul.checkboxColumns li
	{
		-webkit-column-break-inside : avoid; -moz-column-break-inside : avoid;column-break-inside: avoid;
		break-inside: avoid-column;
		margin-bottom: 4px;
		padding-left: 1px;
		display: inline-block;
		width: 100%;
	}
	
	.xenForm .checkboxColumns.blockLinksList > dd > ul li,
	ul.checkboxColumns.blockLinksList li
	{
		display: block;
	}

.xenForm .checkboxColumns.multiple > dd > ul
{
	-webkit-column-count : auto; -moz-column-count : auto;column-count: auto;
	-webkit-column-gap : normal; -moz-column-gap : normal;column-gap: normal;
}

.xenForm .checkboxColumns.multiple > dd
{
	-webkit-column-count : 2; -moz-column-count : 2;column-count: 2;
	-webkit-column-gap : 8px; -moz-column-gap : 8px;column-gap: 8px;
}

.xenForm .checkboxColumns.multiple > dd > ul
{
	margin-bottom: 18px;
}

#recaptcha_image
{
	-webkit-box-sizing: content-box; -moz-box-sizing: content-box; -ms-box-sizing: content-box; box-sizing: content-box;
	max-width: 100%;
}

#recaptcha_image img
{
	max-width: 100%;
}

#helper_birthday { display: inline-block; }
#helper_birthday > li
{
	display: inline;
}
html[dir=rtl] #helper_birthday input,
html[dir=rtl] #helper_birthday select
{
	direction: rtl;
}


@media (max-width:480px)
{
	.Responsive .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .xenForm .ctrlUnit > dt label,
		.Responsive .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .xenForm .ctrlUnit > dd,
	.Responsive .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 10px;
		padding-right: 10px;
		overflow: hidden;
	}

	.Responsive .xenForm .checkboxColumns > dd > ul,
	.Responsive ul.checkboxColumns
	{
		-webkit-column-count : 1; -moz-column-count : 1;column-count: 1;
	}
	
	.Responsive #ctrl_upload
	{
		max-width: 200px;
	}
	
	.Responsive .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .xenForm .ctrlUnit > dd > input,
	.Responsive .xenForm .ctrlUnit > dd > select,
	.Responsive .xenForm .ctrlUnit > dd > textarea,
	.Responsive .xenForm .ctrlUnit > dd > ul,
	.Responsive .xenForm .ctrlUnit > dd > .verticalShift
	{
		margin-top: 0;
	}
}

@media (max-width:610px)
{
	.Responsive .insideSidebar .xenForm .ctrlUnit > dt
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
	}

		.Responsive .insideSidebar .xenForm .ctrlUnit > dt label,
		.Responsive .insideSidebar .xenForm .ctrlUnit > dt dfn
		{
			margin-left: 0;
		}

	.Responsive .insideSidebar .xenForm .ctrlUnit.submitUnit dt
	{
		height: auto;
	}

	.Responsive .insideSidebar .xenForm .ctrlUnit > dd,
	.Responsive .insideSidebar .xenForm .ctrlUnit.fullWidth dd
	{
		float: none;
		width: auto;
		text-align: left;
		height: auto;
		padding-left: 10px;
		padding-right: 10px;
		overflow: hidden;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl[size],
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd .textCtrl.autoSize
	{
		width: 100% !important;
	}
	
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > input,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > select,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > textarea,
	.Responsive .insideSidebar .xenForm .ctrlUnit > dd > ul
	{
		margin-top: -0;
	}
}

@media (max-device-width:568px)
{
	.Responsive .textCtrl,
	.Responsive .taggingInput input,
	.Responsive .taggingInput .tag
	{
		font-size: 16px;
	}
}


/* --- public.css --- */

#header
{
	background-color: rgb(246, 246, 246);

}

/* clearfix */ #header .pageWidth .pageContent { zoom: 1; } #header .pageWidth .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

	#logo
	{
		display: block;
		float: left;
		line-height: 96px;
		*line-height: 100px;
		height: 100px;
		max-width: 100%;
		vertical-align: middle;
	}

		/* IE6/7 vertical align fix */
		#logo span
		{
			*display: inline-block;
			*height: 100%;
		}

		#logo a:hover
		{
			text-decoration: none;
		}

		#logo img
		{
			vertical-align: middle;
			max-width: 100%;
		}

	#visitorInfo
	{
		float: right;
		min-width: 250px;
		_width: 250px;
		overflow: hidden; zoom: 1;
		background: rgb(228,228,228);
		padding: 5px;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		margin: 10px 0;
		border: 1px solid rgb(46, 53, 57);
		color: rgb(46, 53, 57);
	}

		#visitorInfo .avatar
		{
			float: left;
			display: block;
		}

			#visitorInfo .avatar .img
			{
				border-color: rgb(67, 166, 223);
			}

		#visitorInfo .username
		{
			font-size: 18px;
			text-shadow: 0 0 0 transparent, 1px 1px 10px white;
			color: rgb(46, 53, 57);
			white-space: nowrap;
			word-wrap: normal;
		}

		#alerts
		{
			zoom: 1;
		}

		#alerts #alertMessages
		{
			padding-left: 5px;
		}

		#alerts li.alertItem
		{
			font-size: 11px;
		}

			#alerts .label
			{
				color: rgb(46, 53, 57);
			}

.footer .pageContent
{
	font-size: 13px;
padding-top: 4px;
padding-bottom: 15px;
margin-bottom: 12px;
border-bottom: 1px solid rgb(228, 228, 228);
overflow: hidden;
zoom: 1;

}
	
	.footer a,
	.footer a:visited
	{
		color: rgb(20,20,20);
padding: 0 6px;
border-left: 1px solid rgb(228, 228, 228);
display: block;

	}
	
		.footer a:hover,
		.footer a:active
		{
			text-decoration: underline;

		}

	.footer .choosers
	{
		float: left;
overflow: hidden;
zoom: 1;

	}
	
		.footer .choosers dt
		{
			display: none;
		}
		
		.footer .choosers dd
		{
			float: left;
			
		}
		
	.footerLinks
	{
		float: right;
overflow: hidden;
zoom: 1;

	}
	
		.footerLinks li
		{
			float: left;
			
		}
		
			.footerLinks a.globalFeed
			{
				width: 14px;
				height: 14px;
				display: block;
				text-indent: -9999px;
				white-space: nowrap;
				background: url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.png') no-repeat -112px -16px;
				padding: 0;
				margin: 5px;
			}

.footerLegal .pageContent
{
	font-size: 11px;
	overflow: hidden; zoom: 1;
	padding: 5px 5px 15px;
	text-align: center;
}
	
	#copyright
	{
		color: rgb(100,100,100);
		float: left;
	}
	
	#legal
	{
		float: right;
	}
	
		#legal li
		{
			float: left;
			
			margin-left: 10px;
		}


@media (max-width:610px)
{
	.Responsive .footerLinks a.globalFeed,
	.Responsive .footerLinks a.topLink,
	.Responsive .footerLinks a.homeLink
	{
		display: none;
	}

	.Responsive .footerLegal .debugInfo
	{
		clear: both;
	}
}

@media (max-width:480px)
{
	.Responsive #copyright span
	{
		display: none;
	}
}


.breadBoxTop,
.breadBoxBottom
{
	padding: 12px 0;
overflow: hidden;
zoom: 1;
clear: both;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

}

.breadBoxTop
{
}

.breadBoxTop .topCtrl
{
	margin-left: 5px;
float: right;
line-height: 24px;

}

.breadcrumb
{
	font-size: 13px;
overflow: hidden;
zoom: 1;
max-width: 100%;
/*background: rgb(255, 255, 255) url('styles/pixelgoose/metro/blue/xenforo/gradients/category-23px-light.png') repeat-x top;
	border: 1px solid rgb(228,228,228);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;*/
/* Metro comment. */
height: 24px;

}

.breadcrumb.showAll
{
	height: auto;
}

.breadcrumb .boardTitle
{
	display: none;

}

.breadcrumb .crust
{
	display: block;
float: left;
position: relative;
zoom: 1;
max-width: 50%;

}

.breadcrumb .crust a.crumb
{
	cursor: pointer;
	text-decoration: none;
padding: 0 12px;
outline: 0 none;
-moz-outline-style: 0 none;
display: block;
_border-bottom: none;
line-height: 24px;

}

	.breadcrumb .crust a.crumb > span
	{
		display: block;
		text-overflow: ellipsis;
		word-wrap: normal;
		white-space: nowrap;
		overflow: hidden;
		max-width: 100%;
	}

	.breadcrumb .crust:first-child a.crumb,
	.breadcrumb .crust.firstVisibleCrumb a.crumb
	{
		padding-left: 0;

	}
	
	.breadcrumb .crust:last-child a.crumb
	{
		color: rgb(20,20,20);
text-decoration: none;
padding-right: 0;

	}

.breadcrumb .crust .arrow
{
	border: 12px solid transparent;
border-right: 1px none black;
border-left-color: ;
-moz-border-right-colors: ;
display: block;
position: absolute;
right: -12px;
top: 0px;
z-index: 50;
width: 0px;
height: 0px;

}

.breadcrumb .crust .arrow span
{
	border: 12px solid transparent;
border-right: 1px none black;
border-left-color: ;
-moz-border-right-colors: ;
display: block;
position: absolute;
left: -13px;
top: -12px;
z-index: 51;
white-space: nowrap;
overflow: hidden;
text-indent: 9999px;
width: 0px;
height: 0px;

}

.breadcrumb .crust:hover a.crumb
{
	text-decoration: underline;

}

.breadcrumb .crust:hover .arrow span
{
	border-left-color: ;
}

	.breadcrumb .crust .arrow
	{
		/* hide from IE6 */
		_display: none;
	}

.breadcrumb .jumpMenuTrigger
{
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat 0 0;
margin: 5px 5px 6px;
display: block;
float: right;
white-space: nowrap;
text-indent: 9999px;
overflow: hidden;
width: 13px;
height: 13px;

}


@media (max-width:480px)
{
	.Responsive .breadBoxTop.withTopCtrl
	{
		display: table;
		table-layout: fixed;
		width: 100%;
	}

	.Responsive .breadBoxTop.withTopCtrl nav
	{
		display: table-header-group;
	}

	.Responsive .breadBoxTop.withTopCtrl .topCtrl
	{
		display: table-footer-group;
		margin-top: 5px;
		text-align: right;
	}
}


#navigation .pageContent
{
	height: 98px;
	position: relative;
}

#navigation .menuIcon
{
	position: relative;
	font-size:18px;
	width: 16px;
	display: inline-block;
	text-indent: -9999px;
}

#navigation .PopupOpen .menuIcon:before,
#navigation .navLink .menuIcon:before
{
	zoom: 1;
}

#navigation .menuIcon:before
{
	content: "";
	font-size: 18px;
	position: absolute;
	top: 1.1em;
	left: 0;
	width: 16px;
	height: 2px;
	border-top: 6px double currentColor;
	border-bottom: 2px solid currentColor;
}

	.navTabs
	{
		font-size: 13px;
color: rgb(255, 255, 255);
background-color: rgb(67, 166, 223);
padding: 0;

		
		height: 48px;
	}
	
		.navTabs .publicTabs
		{
			float: left;
		}
		
		.navTabs .visitorTabs
		{
			float: right;
		}
	
			.navTabs .navTab
			{
				float: left;
				white-space: nowrap;
				word-wrap: normal;
				
				
			}


/* ---------------------------------------- */
/* Links Inside Tabs */

.navTabs .navLink,
.navTabs .SplitCtrl
{
	display: block;
float: left;
vertical-align: text-bottom;
text-align: center;
outline: 0 none;

	
	
	
	height: 48px;
	line-height: 48px;
}

	.navTabs .publicTabs .navLink
	{
		padding: 0 15px;
	}
	
	.navTabs .visitorTabs .navLink
	{
		padding: 0 10px;
	}
	
	.navTabs .navLink:hover
	{
		text-decoration: none;
	}
	
	/* ---------------------------------------- */
	/* unselected tab, popup closed */

	.navTabs .navTab.PopupClosed
	{
		position: relative;
	}
	
	.navTabs .navTab.PopupClosed .navLink
	{
		color: rgb(228,228,228);
	}
	
		.navTabs .navTab.PopupClosed:hover
		{
			background-color: rgb(61, 152, 204);
		}
		
			.navTabs .navTab.PopupClosed .navLink:hover
			{
				color: #ffffff;
			}
		
	.navTabs .navTab.PopupClosed .arrowWidget
	{
		/* circle-arrow-down-light */
		background-position: -64px 0;
	}
	
	.navTabs .navTab.PopupClosed .SplitCtrl
	{
		margin-left: -14px;
		width: 14px;
	}
		
		.navTabs .navTab.PopupClosed:hover .SplitCtrl
		{
			/* nav_menu_gadget, height: 17px */
			background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.png') no-repeat -128px 16.5px;
		}
	
	/* ---------------------------------------- */
	/* selected tab */

	.navTabs .navTab.selected .navLink
	{
		position: relative;
		color: rgb(255, 255, 255);
background-color: rgb(46, 53, 57);

	}
	
	.navTabs .navTab.selected .SplitCtrl
	{
		display: none;
	}
	
	.navTabs .navTab.selected .arrowWidget
	{
		/* circle-arrow-down */
		background-position: -32px 0;
	}
	
		.navTabs .navTab.selected.PopupOpen .arrowWidget
		{
			/* circle-arrow-up */
			background-position: -16px 0;
		}
	
	/* ---------------------------------------- */
	/* unselected tab, popup open */
	
	.navTabs .navTab.PopupOpen .navLink
	{
	}
	
	
	/* ---------------------------------------- */
	/* selected tab, popup open (account) */
	
	.navTabs .navTab.selected.PopupOpen .navLink
	{
		color: rgb(46, 53, 57);

	}
	
/* ---------------------------------------- */
/* Second Row */

.navTabs .navTab.selected .tabLinks
{
	background-color: rgb(46, 53, 57);
	
	width: 100%;	
	padding: 0;
	border: none;
	overflow: hidden; zoom: 1;	
	position: absolute;
	left: 0px;	
	top: 50px;
	height: 48px;
	background-position: 0px -48px;
	*clear:expression(style.width = document.getElementById('navigation').offsetWidth + 'px', style.clear = "none", 0);
}

	.navTabs .navTab.selected .blockLinksList
	{
		background: none;
		padding: 0;
		border: none;
		margin-left: 8px;
	}

	.withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 275px;
	}

	.navTabs .navTab.selected .tabLinks .menuHeader
	{
		display: none;
	}
	
	.navTabs .navTab.selected .tabLinks li
	{
		float: left;
		padding: 2px 0;
	}
	
		.navTabs .navTab.selected .tabLinks a
		{
			font-size: 13px;
color: #ffffff;
padding: 0 6px;
display: block;

			
			line-height: 42px;
		}
		
		.navTabs .navTab.selected .tabLinks .PopupOpen a
		{
			color: inherit;
			text-shadow: none;
		}
		
			.navTabs .navTab.selected .tabLinks a:hover,
			.navTabs .navTab.selected .tabLinks a:focus
			{
				color: rgb(255, 255, 255);
text-decoration: underline;
outline: 0;

			}
			
			.navTabs .navTab.selected .tabLinks .Popup a:hover,
			.navTabs .navTab.selected .tabLinks .Popup a:focus
			{
				color: inherit;
				background: none;
				border-color: transparent;
				-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
				text-shadow: none;
			}
	
/* ---------------------------------------- */
/* Alert Balloons */
	
.navTabs .navLink .itemCount
{
	font-weight: bold;
font-size: 11px;
color: white;
background-color: rgb(255, 68, 0);
padding: 0 2px;
-webkit-border-radius: 8px; -moz-border-radius: 8px; -khtml-border-radius: 8px; border-radius: 8px;
/*position: absolute;
right: 2px;
top: -12px;*/
line-height: 16px;
min-width: 12px;
_width: 12px;
text-align: center;
text-shadow: none;
white-space: nowrap;
word-wrap: normal;
height: 16px;

}

	.navTabs .navLink .itemCount .arrow
	{
		border: 3px solid transparent;
border-top-color: #e03030;
border-bottom: 1px none black;
position: absolute;
bottom: -3px;
right: 4px;
line-height: 0px;
text-shadow: none;
_display: none;
/* Hide from IE6 */
width: 0px;
height: 0px;

	}
	
.navTabs .navLink .itemCount.Zero
{
	display: none;
}

.navTabs .navLink .itemCount.ResponsiveOnly
{
	display: none !important;
}

.NoResponsive #VisitorExtraMenu_Counter,
.NoResponsive #VisitorExtraMenu_ConversationsCounter,
.NoResponsive #VisitorExtraMenu_AlertsCounter
{
	display: none !important;
}
	
/* ---------------------------------------- */
/* Account Popup Menu */

.navTabs .navTab.account .navLink
{
	font-weight: bold;
}

	.navTabs .navTab.account .navLink .accountUsername
	{
		display: block;
		max-width: 100px;
		overflow: hidden;
		text-overflow: ellipsis;
	}

#AccountMenu
{
	width: 274px;
}

#AccountMenu .menuHeader
{
	position: relative;
}

	#AccountMenu .menuHeader .avatar
	{
		float: left;
		margin-right: 10px;
	}

	#AccountMenu .menuHeader .visibilityForm
	{
		margin-top: 10px;
		color: rgb(61, 152, 204);
	}
	
	#AccountMenu .menuHeader .links .fl
	{
		position: absolute;
		bottom: 10px;
		left: 116px;
	}

	#AccountMenu .menuHeader .links .fr
	{
		position: absolute;
		bottom: 10px;
		right: 10px;
	}
	
#AccountMenu .menuColumns
{
	overflow: hidden; zoom: 1;
	padding: 2px;
}

	#AccountMenu .menuColumns ul
	{
		float: left;
		padding: 0;
		max-height: none;
		overflow: hidden;
	}

		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label
		{
			width: 115px;
		}

#AccountMenu .statusPoster textarea
{
	width: 245px;
	margin: 0;
	resize: vertical;
	overflow: hidden;
}

#AccountMenu .statusPoster .submitUnit
{
	margin-top: 5px;
	text-align: right;
}

	#AccountMenu .statusPoster .submitUnit .statusEditorCounter
	{
		float: left;
		line-height: 23px;
		height: 23px;
	}
	
/* ---------------------------------------- */
/* Inbox, Alerts Popups */

.navPopup
{
	width: 260px;
}

.navPopup a:hover,
.navPopup .listItemText a:hover
{
	background: none;
	text-decoration: underline;
}

	.navPopup .menuHeader .InProgress
	{
		float: right;
		display: block;
		width: 20px;
		height: 20px;
	}

.navPopup .listPlaceholder
{
	max-height: 350px;
	overflow: auto;
}

	.navPopup .listPlaceholder ol.secondaryContent
	{
		padding: 0 10px;
	}

		.navPopup .listPlaceholder ol.secondaryContent.Unread
		{
			background-color: rgb(255, 250, 181);
		}

.navPopup .listItem
{
	overflow: hidden; zoom: 1;
	padding: 5px 0;
	border-bottom: 1px solid rgb(228, 228, 228);
}

.navPopup .listItem:last-child
{
	border-bottom: none;
}

.navPopup .PopupItemLinkActive:hover
{
	margin: 0 -8px;
	padding: 5px 8px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	background-color: rgb(228, 228, 228);
	cursor: pointer;
}

.navPopup .avatar
{
	float: left;
}

	.navPopup .avatar img
	{
		width: 32px;
		height: 32px;
	}

.navPopup .listItemText
{
	margin-left: 37px;
}

	.navPopup .listItemText .muted
	{
		font-size: 9px;
	}

	.navPopup .unread .listItemText .title,
	.navPopup .listItemText .subject
	{
		font-weight: bold;
	}

.navPopup .sectionFooter .floatLink
{
	float: right;
}


@media (max-width:610px)
{
	.Responsive .navTabs
	{
		padding-left: 10px;
		padding-right: 10px;
	}

	.Responsive .withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 50px;
	}
}

@media (max-width:480px)
{
	.Responsive.hasJs .navTabs:not(.showAll) .publicTabs .navTab:not(.selected):not(.navigationHiddenTabs)
	{
		display: none;
	}
}


#searchBar
{
	position: relative;
	zoom: 1;
	z-index: 52; /* higher than breadcrumb arrows */
}

	#QuickSearchPlaceholder
	{
		position: absolute;
		right: 20px;
		top: -32px;
		display: none;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		cursor: pointer;
		font-size: 11px;
		height: 16px;
		width: 16px;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		text-indent: -9999px;
		background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.png') no-repeat -144px 0px;
		overflow: hidden;
	}

	#QuickSearch
	{
		display: block;
		
		position: absolute;
		right: 20px;
		top: -18px;
		
		margin: 0;
		
		background-color: ;
		-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
		padding-top: 5px;
		_padding-top: 3px;
		z-index: 7500;
	}
			
		#QuickSearch .secondaryControls
		{
			display: none;
		}
	
		#QuickSearch.active
		{
			-webkit-box-shadow: 5px 5px 25px rgba(0,0,0, 0.5); -moz-box-shadow: 5px 5px 25px rgba(0,0,0, 0.5); -khtml-box-shadow: 5px 5px 25px rgba(0,0,0, 0.5); box-shadow: 5px 5px 25px rgba(0,0,0, 0.5);
			padding-bottom: 5px;
		}
		
	#QuickSearch .submitUnit .button
	{
		min-width: 0;
	}
		
	#QuickSearch input.button.primary
	{
		float: left;
		width: 110px;
	}
	
	#QuickSearch #commonSearches
	{
		float: right;
	}
	
		#QuickSearch #commonSearches .button
		{
			width: 23px;
			padding: 0;
		}
		
			#QuickSearch #commonSearches .arrowWidget
			{
				margin: 0;
				float: left;
				margin-left: 4px;
				margin-top: 4px;
			}
	
	#QuickSearch .moreOptions
	{
		display: block;
		margin: 0 24px 0 110px;
		width: auto;
	}


@media (max-width:610px)
{
	.Responsive #QuickSearchPlaceholder
	{
		display: block;
	}

	.Responsive #QuickSearchPlaceholder.hide
	{
		visibility: hidden;
	}

	.Responsive #QuickSearch
	{
		display: none;
	}

	.Responsive #QuickSearch.show
	{
		display: block;
	}
}


/** move the header to the top again **/

#headerMover
{
	position: relative;
	zoom: 1;
}

	#headerMover #headerProxy
	{
		background-color: rgb(246, 246, 246);
		height: 198px; /* +2 borders */
	}

	#headerMover #header
	{
		width: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
	}


/** Generic page containers **/

.pageWidth
{
	padding-right: 24px;
padding-left: 24px;
margin: 0 auto;
_width: 976px;
_margin: 0 auto;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
max-width: 1248px;
min-width: 300px;

}

.NoResponsive body
{
	min-width: 976px;
}

#content .pageContent
{
	padding: 12px 0;

}

/* clearfix */ #content .pageContent { zoom: 1; } #content .pageContent:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/* sidebar structural elements */

.mainContainer
{
	 float: left;
	 margin-right: -310px;
	 width: 100%;
}

	.mainContent
	{
		margin-right: 310px;
	}

.sidebar
{
	float: right;
	font-size: 13px;
width: 300px;

}







/* visitor panel */

.sidebar .visitorPanel
{
	overflow: hidden; zoom: 1;
}

	.sidebar .visitorPanel h2 .muted
	{
		display: none;
	}

	.sidebar .visitorPanel .avatar
	{
		margin-right: 12px;
float: left;

		
		width: auto;
		height: auto;
	}
	
		.sidebar .visitorPanel .avatar img
		{
			width: ;
			height: ;
		}
	
	.sidebar .visitorPanel .username
	{
		font-weight: bold;
font-size: 11pt;

	}
	
	.sidebar .visitorPanel .stats
	{
		margin-top: 2px;

	}
	
	.sidebar .visitorPanel .stats .pairsJustified
	{
		line-height: normal;
	}













	
/* generic sidebar blocks */
		
.sidebar .section .primaryContent   h3,
.sidebar .section .secondaryContent h3,
.profilePage .mast .section.infoBlock h3
{
	font-size: 14px;
color: rgb(255, 255, 255);
background-color: rgb(46, 53, 57);
padding: 15px 12px;
margin: -13px -13px 12px;

}

.sidebar .section .primaryContent   h3 a,
.sidebar .section .secondaryContent h3 a
{
	font-size: 14px;
color: rgb(255, 255, 255);
}

.sidebar .section .secondaryContent .footnote,
.sidebar .section .secondaryContent .minorHeading
{
	margin-top: 5px;

}

	.sidebar .section .secondaryContent .minorHeading a
	{
		color: ;
	}












/* list of users with 32px avatars, username and user title */

.sidebar .avatarList li
{
	margin: 5px 0;
overflow: hidden;
zoom: 1;

}

	.sidebar .avatarList .avatar
	{
		margin-right: 12px;
float: left;
width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
		
	.sidebar .avatarList .avatar img
	{
		width: 32px;
		height: 32px;
	}
	
	.sidebar .avatarList .username
	{
		font-size: 13px;
margin-top: 2px;
display: block;

	}
	
	.sidebar .avatarList .userTitle
	{
		color: rgb(150,150,150);

	}









/* list of users */

.sidebar .userList
{
}

	.sidebar .userList .username
	{
		font-size: 13px;

	}

	.sidebar .userList .username.invisible
	{
		color: rgb(67, 166, 223);

	}
	
	.sidebar .userList .username.followed
	{
		
	}

	.sidebar .userList .moreLink
	{
		display: block;
	}
	
	
	
	
/* people you follow online now */

.followedOnline
{
	margin-top: 3px;
margin-bottom: -5px;
overflow: hidden;
zoom: 1;

}

.followedOnline li
{
	margin-right: 5px;
margin-bottom: 5px;
float: left;

}

	.followedOnline .avatar
	{
		width: 32px;
height: 32px;

		
		width: auto;
		height: auto;
	}
	
		.followedOnline .avatar img
		{
			width: 32px;
			height: 32px;
		}
	
	
	

	
	
/* call to action */

#SignupButton
{
	background-color: white;
text-align: center;
line-height: 32px;
display: block;
cursor: pointer;

}

	#SignupButton .inner
	{
		font-weight: bold;
font-size: 12pt;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
color: #ffffff;
background-color: #FF9000;
padding-top: 6px;
padding-bottom: 6px;
border: 3px solid #FF9000;
display: block;
-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;

	}
	
	#SignupButton:hover .inner
	{
		color: rgb(255, 255, 255);
text-decoration: none;
background-color: #f9bc6d;
border: 3px solid #FF9000;

	}
	
	#SignupButton:active
	{
		
	}


@media (max-width:800px)
{
	.Responsive .mainContainer
	{
		 float: none;
		 margin-right: 0;
		 width: auto;
	}

		.Responsive .mainContent
		{
			margin-right: 0;
		}
	
	.Responsive .sidebar
	{
		float: none;
		margin: 0 auto;
	}

		.Responsive .sidebar .visitorPanel
		{
			display: none;
		}
}

@media (max-width:340px)
{
	.Responsive .sidebar
	{
		width: 100%;
	}
}


/** Text used in message bodies **/

.messageText
{
	font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
line-height: 1.4;

}

	.messageText img,
	.messageText iframe,
	.messageText object,
	.messageText embed
	{
		max-width: 100%;
	}

/** Link groups and pagenav container **/

.pageNavLinkGroup
{
	display: table;
	*zoom: 1;
	table-layout: fixed;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	
	font-size: 13px;
margin: 12px 0;
line-height: 24px;

}

opera:-o-prefocus, .pageNavLinkGroup
{
	display: block;
	overflow: hidden;
}

	.pageNavLinkGroup:after
	{
		content: ". .";
		display: block;
		word-spacing: 99in;
		overflow: hidden;
		height: 0;
		font-size: 0.13em;
		line-height: 0;
	}

	.pageNavLinkGroup .linkGroup
	{
		float: right;
	}

.linkGroup
{
}
	
	.linkGroup a
	{
		padding: 3px 0;

	}

		.linkGroup a.inline
		{
			padding: 0;
		}

	.linkGroup a,
	.linkGroup .Popup,
	.linkGroup .element
	{
		margin-left: 10px;
		display: block;
		float: left;
		
	}
	
		.linkGroup .Popup a
		{
			margin-left: -2px;
			margin-right: -5px;
			*margin-left: 10px;
			padding: 3px 5px;
		}

	.linkGroup .element
	{
		padding: 3px 0;
	}

/** Call to action buttons **/

a.callToAction
{
	display: inline-block;
outline: 0 none;
vertical-align: top;

	
}

	a.callToAction span
	{
		font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
color: #ffffff;
background-color: rgb(46, 53, 57);
padding: 12px;
display: block;
line-height: 16px;
/*text-shadow: 0 0 0 transparent, 0px 0px 3px rgb(61, 152, 204);*/

	}
	
	a.callToAction:hover
	{
		text-decoration: none;
	}

		a.callToAction:hover span
		{
			background-color: rgb(67, 166, 223);

		}
		
		a.callToAction:active
		{
			/*position: relative;
			top: 2px;*/
		}
		
		a.callToAction:active span
		{
			background-color: rgb(67, 166, 223);

		}

/*********/

.avatarHeap
{
	overflow: hidden; zoom: 1;
}

	.avatarHeap ol
	{
		margin-right: -4px;
		margin-top: -4px;
	}
	
		.avatarHeap li
		{
			float: left;
			margin-right: 4px;
			margin-top: 4px;
		}
		
		.avatarHeap li .avatar
		{
			display: block;
		}
		
/*********/

.fbWidgetBlock .fb_iframe_widget,
.fbWidgetBlock .fb_iframe_widget > span,
.fbWidgetBlock .fb_iframe_widget iframe
{
	width: 100% !important;
}

/*********/

.tagBlock
{
	margin: 10px 0;
	font-size: 11px;
}

.tagList,
.tagList li
{
	display: inline;
}


.tagList .tag
{
	position: relative;
	display: inline-block;
	background: rgb(255, 255, 255);
	margin-left: 9px;
	height: 14px;
	line-height: 14px;
	padding: 1px 4px 1px 6px;
	border: 1px solid rgb(228,228,228);
	border-left: none;
	-webkit-border-radius: 4px; -moz-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
	-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
	-webkit-border-bottom-left-radius: 0; -moz-border-radius-bottomleft: 0; -khtml-border-bottom-left-radius: 0; border-bottom-left-radius: 0;
	color: rgb(61, 152, 204);
	font-size: 11px;
	margin-bottom: 2px;
}

	.tagList .tag:hover
	{
		text-decoration: none;
		background-color: rgb(228, 228, 228);
	}

	.tagList .tag .arrow
	{
		position: absolute;
		display: block;
		height: 2px;
		width: 0;
		left: -9px;
		top: -1px;
		border-style: solid;
		border-width: 8px 9px 8px 0;
		border-color: transparent;
		border-right-color: rgb(228,228,228);
	}

		.tagList .tag .arrow:after
		{
			content: '';
			position: absolute;
			display: block;
			height: 2px;
			width: 0;
			left: 1px;
			top: -7px;
			border-style: solid;
			border-width: 7px 8px 7px 0;
			border-color: transparent;
			border-right-color: rgb(255, 255, 255);
		}

		.tagList .tag:hover .arrow:after
		{
			border-right-color: rgb(228, 228, 228);
		}

	.tagList .tag:after
	{
		content: '';
		position: absolute;
		left: -2px;
		top: 6px;
		display: block;
		height: 3px;
		width: 3px;
		-webkit-border-radius: 50%; -moz-border-radius: 50%; -khtml-border-radius: 50%; border-radius: 50%;
		border: 1px solid rgb(228,228,228);
		background: rgb(255, 255, 255);
	}

/* User name classes */


.username .banned
{
	text-decoration: line-through;
}

.prefix
{
	background-color: transparent;
padding: 1px 6px;
border: 1px solid transparent;
display: inline-block;

}

a.prefixLink:hover
{
	text-decoration: none;
}

a.prefixLink:hover .prefix
{
	color: rgb(67, 166, 223);
text-decoration: none;
background-color: rgb(255, 255, 255);
padding: 1px 6px;
border: 1px solid rgb(228,228,228);

}

.prefix a { color: inherit; }

.prefix.prefixPrimary    { color: rgb(61, 152, 204); background-color: rgb(228, 228, 228); border-color: rgb(228, 228, 228); }
.prefix.prefixSecondary  { color: #8f6c3f; background-color: #f9d9b0; border-color: #f9d9b0; }

.prefix.prefixRed        { color: white; background-color: red; border-color: #F88; }
.prefix.prefixGreen      { color: white; background-color: green; border-color: green; }
.prefix.prefixOlive      { color: black; background-color: olive; border-color: olive; }
.prefix.prefixLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.prefix.prefixBlue       { color: white; background-color: blue; border-color: #88F; }
.prefix.prefixRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.prefix.prefixSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.prefix.prefixGray       { color: black; background-color: gray; border-color: #AAA; }
.prefix.prefixSilver     { color: black; background-color: silver; border-color: silver; }
.prefix.prefixYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.prefix.prefixOrange     { color: black; background-color: orange; border-color: #FFC520; }

.discussionListItem .prefix,
.searchResult .prefix
{
	font-size: 11px;
margin: 0;
line-height: 16px;

	
	font-weight: normal;
}

h1 .prefix
{
	font-size: 11px;
margin: 0;
line-height: 16px;

	
	line-height: normal;
}

.breadcrumb span.prefix,
.heading span.prefix
{
	font-style: italic;
font-weight: bold;
padding: 0;
margin: 0;
border: 0 none black;
-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
display: inline;

	color: inherit;
}

.userBanner
{
	font-size: 11px;
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/gradients/form-button-white-25px.png') repeat-x top;
	padding: 1px 5px;
	border: 1px solid transparent;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	-webkit-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -moz-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -khtml-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);
	text-align: center;
}

	.userBanner.wrapped
	{
		-webkit-border-top-right-radius: 0; -moz-border-radius-topright: 0; -khtml-border-top-right-radius: 0; border-top-right-radius: 0;
		-webkit-border-top-left-radius: 0; -moz-border-radius-topleft: 0; -khtml-border-top-left-radius: 0; border-top-left-radius: 0;
		position: relative;
	}
		
		.userBanner.wrapped span
		{
			position: absolute;
			top: -4px;
			width: 5px;
			height: 4px;
			background-color: inherit;
		}
		
		.userBanner.wrapped span.before
		{
			-webkit-border-top-left-radius: 3px; -moz-border-radius-topleft: 3px; -khtml-border-top-left-radius: 3px; border-top-left-radius: 3px;
			left: -1px;
		}
		
		.userBanner.wrapped span.after
		{
			-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
			right: -1px;
		}
		
.userBanner.bannerHidden { background: none; -webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none; border: none; }
.userBanner.bannerHidden.wrapped { margin-left: 0; margin-right: 0; }
.userBanner.bannerHidden.wrapped span { display: none; }

.userBanner.bannerStaff { color: rgb(61, 152, 204); background-color: rgb(228, 228, 228); border-color: rgb(228,228,228); }
.userBanner.bannerStaff.wrapped span { background-color: rgb(228,228,228); }

.userBanner.bannerPrimary { color: rgb(61, 152, 204); background-color: rgb(228, 228, 228); border-color: rgb(228,228,228); }
.userBanner.bannerPrimary.wrapped span { background-color: rgb(228,228,228); }

.userBanner.bannerSecondary { color: #8f6c3f; background-color: #f9d9b0; border-color: #f9d9b0; }
.userBanner.bannerSecondary.wrapped span { background-color: #f9d9b0; }

.userBanner.bannerRed        { color: white; background-color: red; border-color: #F88; }
.userBanner.bannerRed.wrapped span { background-color: #F88; }

.userBanner.bannerGreen      { color: white; background-color: green; border-color: green; }
.userBanner.bannerGreen.wrapped span { background-color: green; }

.userBanner.bannerOlive      { color: black; background-color: olive; border-color: olive; }
.userBanner.bannerOlive.wrapped span { background-color: olive; }

.userBanner.bannerLightGreen { color: black; background-color: lightgreen; border-color: lightgreen; }
.userBanner.bannerLightGreen.wrapped span { background-color: lightgreen; }

.userBanner.bannerBlue       { color: white; background-color: blue; border-color: #88F; }
.userBanner.bannerBlue.wrapped span { background-color: #88F; }

.userBanner.bannerRoyalBlue  { color: white; background-color: royalblue; border-color: #81A9E1;  }
.userBanner.bannerRoyalBlue.wrapped span { background-color: #81A9E1; }

.userBanner.bannerSkyBlue    { color: black; background-color: skyblue; border-color: skyblue; }
.userBanner.bannerSkyBlue.wrapped span { background-color: skyblue; }

.userBanner.bannerGray       { color: black; background-color: gray; border-color: #AAA; }
.userBanner.bannerGray.wrapped span { background-color: #AAA; }

.userBanner.bannerSilver     { color: black; background-color: silver; border-color: silver; }
.userBanner.bannerSilver.wrapped span { background-color: silver; }

.userBanner.bannerYellow     { color: black; background-color: yellow; border-color: #E0E000; }
.userBanner.bannerYellow.wrapped span { background-color: #E0E000; }

.userBanner.bannerOrange     { color: black; background-color: orange; border-color: #FFC520; }
.userBanner.bannerOrange.wrapped span { background-color: #FFC520; }


@media (max-width:800px)
{
	.Responsive .pageWidth
	{
		padding-right: 12px;
padding-left: 12px;

	}

	.Responsive #content .pageContent
	{
		padding-left: 0px;
		padding-right: 0px;
	}
}

@media (max-width:610px)
{
	.Responsive .pageWidth
	{
		padding-right: 12px;
padding-left: 12px;
margin-right: 0;
margin-left: 0;

	}
	
	.Responsive .forum_view #pageDescription,
	.Responsive .thread_view #pageDescription
	{
		display: none;
	}
}

@media (max-width:480px)
{
	.Responsive .pageWidth
	{
		
	}
	
	.Responsive .pageNavLinkGroup .PageNav,
	.Responsive .pageNavLinkGroup .linkGroup
	{
		clear: right;
	}
}


/* Transitions */
input.button, a.button,
.navTabs .navTab.PopupClosed, .navTabs .navTab.PopupOpen,
.prefooter-block-04 ul li a,
a.callToAction span,
.buttons.editBlock #ctrl_submit_1, .buttons.editBlock #ctrl_reset_1,
.PageNav a,
#SignupButton .inner {
    transition: border 0.3s ease 0s,
    		background-color 0.3s ease 0s,
    		color 0.3s ease 0s;
}
#SignupButton:hover .inner {
    color: #FF9000;
    background-color: rgb(255, 255, 255);
}
.pageWidth .pageWidth {
	padding: 0;
}
#navigation.pageWidth {
	min-width: 296px;
}
.button + .button {
	margin-left: 8px;
}
.titleBar
{
	margin-bottom: 24px;
}
input[type=search] {
	-webkit-box-sizing: border-box;
}
.Menu.BottomControl
{
	-webkit-box-shadow: 0 -4px 7px rgba(0, 0, 0, 0.3) !important; -moz-box-shadow: 0 -4px 7px rgba(0, 0, 0, 0.3) !important; -khtml-box-shadow: 0 -4px 7px rgba(0, 0, 0, 0.3) !important; box-shadow: 0 -4px 7px rgba(0, 0, 0, 0.3) !important;
}
.SelectionCount.cloned.itemsChecked
{
	color: #FF4400 !important;
}
.node .nodeText .nodeTitle a {
	color: rgb(46, 53, 57) !important;
}
.nodeList .node.level_1 {
	margin-bottom: 12px !important;
}
.nodeList .node.groupNoChildren + .node.groupNoChildren {
	margin-top: -12px !important;
}
.node .nodeLastPost .lastThreadTitle {
	margin-bottom: 3px;
}
.sidebar .secondaryContent {
	background-color: rgb(255, 255, 255);
	border: solid 1px rgb(228,228,228);
}
.forum_view .nodeList li:first-child .nodeInfo.primaryContent {
	border-top: solid 1px rgb(228,228,228);
}
.discussionList .discussionListFilters {
	font-size: 13px !important;
	border: solid 1px rgb(228,228,228) !important;
	border-bottom: 0 !important;
}
.discussionList .discussionListFilters + .sectionHeaders {
	margin-top: 0;
}
	.discussionListFilters .filtersHeading
	{
		color: rgb(20,20,20) !important;
	}
	.discussionListFilters .removeFilter,
	.discussionListFilters .removeAllFilters
	{
		background: rgb(228, 228, 228) none !important;
		border: 1px solid rgb(228, 228, 228);
		-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
		padding: 3px 8px !important;
	}
		.discussionListFilters .gadget
		{
			color: rgb(20,20,20) !important;
		}
		.discussionListFilters .removeFilter:hover,
		.discussionListFilters .removeAllFilters:hover
		{
			box-shadow: none !important;
		}

.discussionList .sectionHeaders {
	background-color:  rgb(67, 166, 223) !important;
}
.discussionList .sectionHeaders a {
	color: #ffffff;
}
.discussionList .sectionHeaders a span
{
	padding: 16px 12px 15px !important;
}
.discussionListItem {
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}
.discussionListItem .stats dl
{
	padding: 0 12px !important;
	border-left: 0 !important;
	border-right: 0 !important;
}
.discussionListItem .lastPostInfo {
	padding: 6px 12px 6px 6px !important;
}
.afterDiscussionListHandle
{
	margin-top: 62px !important;
}
.pageNavLinkGroup {
	font-size: 13px;
	margin: 12px 0;
}	
.nodeListNewDiscussionButton {
	margin-top: 24px !important;
}	
a.callToAction span:before {
 	background-color: rgb(67, 166, 223);
 	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
 	content: "+";
 	float: left;
 	font-size: 24px;
 	line-height: 16px;
 	font-weight: bold;
 	height: 40px;
 	margin: -12px 12px -12px -12px;
 	padding: 12px;
 	text-align: center;
 	width: 40px;
}
.sectionFooter.SelectionCountContainer {
	background-color: rgb(228,228,228);
	font-size: 13px;
}
#InlineModOverlay {
	border: 0 !important;
	-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important;
}
#InlineModOverlay .selectionControl {
	font-size: 13px !important;
	padding: 12px !important;
}
#InlineModOverlay .actionControl {
	padding: 12px !important;
}
#InlineModOverlay #InlineModControls .button {
	font-size: 13px;
	height: 30px;
	line-height: 28px;
	padding: 0 8px;
}
.inlineCtrlGroup
{
	background: none rgb(46, 53, 57) !important;
	color: #ffffff !important;
	font-size: 13px !important;
}
	.inlineCtrlGroup .textCtrl
	{
		padding: 3px;
		background-color: #555;
		color: #eee;
		border: 1px solid rgb(20,20,20) !important;
		-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
		font-size: 13px !important;
	}
	
		.inlineCtrlGroup .textCtrl:focus,
		.inlineCtrlGroup .textCtrl.Focus
		{
			background: #333;
			color: white;
		}
.buttons.editBlock #ctrl_submit_1,
.buttons.editBlock #ctrl_reset_1 {
	cursor: pointer;
}
.buttons.editBlock #ctrl_submit_1:hover,
.buttons.editBlock #ctrl_reset_1:hover {
	background-color: #898989;
}
.buttons.editBlock #ctrl_submit_1 + #ctrl_reset_1 {
	margin-left: 8px;
}
.discussionListItemEdit .editBlock {
	padding: 12px !important;
}
.xenOverlay .overlayScroll {
	max-height: 600px !important;
}
.xenOverlay .formOverlay > p {
	padding: 12px !important;
}
.xenForm .ctrlUnit {
	margin: 0 !important;
	padding: 12px 0 !important;
}
.xenForm .ctrlUnit.submitUnit {
	background-color: #f2f2f2;
}
.xenForm.formOverlay #WarningActionTabs_2 {
	background-color: #f2f2f2;
}
.xenOverlay .errorOverlay
{
	color: inherit  !important;
	padding: 0px  !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;	
	border: 0 !important;
	-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);
	background: #ffffff !important;
}

	.xenOverlay .errorOverlay .heading
	{
		padding: 13px 12px !important;
		font-weight: normal !important;
		font-size: 14px !important;
		background: rgb(180,0,0) !important;
		color: #ffffff !important;
		margin-bottom: 12px !important;
		-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
		border: 0 !important;
	}
	.xenOverlay .errorOverlay .errorDetails {
		padding: 12px 12px 24px !important;
	}
.xenOverlay .errorOverlay .baseHtml {
	min-height: 50px;
}
.xenOverlay .errorOverlay label[for="ctrl_message"] {
	padding: 12px;
}
.xenOverlay .errorOverlay .OverlayCloser {
	margin-left: 12px;
}

.sidebar .visitorPanel .secondaryContent {
	overflow: hidden;
}
.mainContainer
{
	 float: left;
	 margin-right: -312px;
	 width: 100%;
}

	.mainContent
	{
		margin-right: 312px;
	}
.Menu .primaryContent,
.Menu .secondaryContent {
	background-color: rgba(255, 255, 255, 1) !important;
}
.Menu .sectionFooter {
	background-color: rgba(242, 242, 242, 1) !important;
}

.primaryContent.menuHeader {
	border: 0;
	background-color: #F2F2F2 !important;
}

	.subForumsMenu .node .nodeTitle
	{
		font-size: 12px !important;
	}
#AccountMenu .menuColumns {
	padding: 0px !important;
}


		#AccountMenu .menuColumns a,
		#AccountMenu .menuColumns label	{
			width: 126px;
		}
#AccountMenu {
	width: 300px;
}
#AccountMenu .menuColumns.secondaryContent + .menuColumns.secondaryContent {
	background-color: #F2F2F2 !important;
}

#AccountMenu .statusPoster textarea {
	width: 276px;
}


#AccountMenu .statusPoster .submitUnit {
	margin-top: 12px !important;
}
#AccountMenu .statusPoster .submitUnit .statusEditorCounter {
	height: 36px;
	line-height: 34px;
	font-weight: bold;
	color: rgb(20,20,20);
}

.navPopup .listItem {
	padding: 10px 0;
	border-bottom: 1px solid rgb(228,228,228);
}
.navPopup .PopupItemLinkActive:hover {
	margin: 0 -10px;
	padding: 10px 10px;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	background-color: #e6e6e6;
}

/* Moderator bar */

#moderatorBar {
	border-bottom: 0 !important;	
	font-size: 13px !important;
}
#moderatorBar .pageContent {
	padding: 12px 0 !important;
}
#moderatorBar a {
	padding: 2px 0 !important;
}
#moderatorBar .moderationQueue.modLink {
	margin-right: 12px;
}
#moderatorBar a,
#moderatorBar .itemCount {
	color: rgb(255, 255, 255) !important;
}
	#moderatorBar a:hover {
		background-color: transparent !important;
	}
	
#moderatorBar .itemCount {	
	background-color: rgb(150,150,150) !important;
	padding-left: 5px !important;
	padding-right: 5px !important;
	-webkit-border-radius: 8px !important; -moz-border-radius: 8px !important; -khtml-border-radius: 8px !important; border-radius: 8px !important;
}
	#moderatorBar .itemCount {
		font-size: 11px;
	}
	#moderatorBar .itemCount.alert	{
		background-color: #FF4400 !important;
		box-shadow: none !important;
		font-size: 11px !important;
	}

/* Top Navigation Bar and Header*/

.header-inner {
	position: relative;
}
/* Header classic start */

.navTabs .visitorTabs .navLink .itemCount .arrow {
	display: none;
}
.withSearch .navTabs .navTab.selected .blockLinksList {
	margin-right: 0 !important;
}
.navTabs .navTab.selected .tabLinks {	
	padding: 0;
	top: 48px;
	height: 36px;
}
.navTabs .navTab.selected .tabLinks li {
	padding: 0 0 1px !important;
}
		.navTabs .navTab.selected .tabLinks a
		{
			line-height: 36px;
		}
.navTabs .navTab.selected .tabLinks a:hover,
.navTabs .navTab.selected .tabLinks a:focus {
	background-color: transparent !important;
}
.navTabs .navTab.account .navLink .accountUsername {
	display: inline !important;
	font-weight: normal;
}
.navTabs .visitorTabs .navLink .itemCount {
	display: inline-block;
}
.navTabs .navLink .itemCount.Zero {
	display: none;
}
.header-classic .publicTabs .navTab .navLink:before {
	display: inline-block;
	width: 16px;
	height: 16px;
	content: "";
	margin-right: 6px;
	margin-bottom: -3px;
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/tab-classic-icons-sprite.svg') no-repeat center -95px;
}
.header-classic .publicTabs .home.navTab .navLink:before {
	background-position: center -48px !important;	
}
.header-classic .publicTabs .forums.navTab .navLink:before {
	background-position: center 3px !important;	
}
.header-classic .publicTabs .members.navTab .navLink:before {
	background-position: center -144px !important;	
}
.header-classic .publicTabs .navigationHiddenTabs.navTab .navLink:before {
	display: none;
}
.navTabs .navTab.PopupClosed .navLink
	{
		color: rgb(255, 255, 255);
	}
	
		.navTabs .navTab.PopupClosed:hover,
		.navTabs .navTab.PopupOpen
		{
			background-color: rgb(46, 53, 57);
		}
		
			.navTabs .navTab.PopupClosed .navLink:hover
			{
				color: #ffffff;
			}

	.navTabs .navTab.PopupClosed .SplitCtrl,
	.navTabs .navTab.PopupOpen .SplitCtrl
	{
		margin-left: -6px;
		background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -129px 18.5px;
		margin-right: 12px;
		width: 14px;
	}
	.navTabs .navTab.PopupOpen .navLink {
			color: rgb(255, 255, 255);
	}

		.navTabs .navTab.PopupClosed:hover .SplitCtrl
		{
			background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -129px 18.5px;
			margin-right: 12px;
		}

/* Header Classic end */

/* Header Modern start */
#headerMover.header-modern #headerProxy {
	height: 228px !important; /* top menu + tab height + border + submenu */
}
.header-modern .topMenu.navTabs {
	height: 60px !important;
	background-color: transparent !important;
}
.header-modern .topMenu .pageContent {
	position: relative;
}
.header-modern .topMenu.navTabs .navTab.selected .tabLinks {
	top: 192px !important; /* top menu + tab height + border */;
}
.header-modern .topMenu.navTabs .navLink,
.header-modern .topMenu.navTabs .SplitCtrl {
	height: 60px;
	line-height: 60px;
	font-size: 14px;
}
.header-modern .topMenu.navTabs .navTab.PopupClosed .navLink,
.header-modern .topMenu.navTabs .navTab.PopupOpen .navLink {
    color: rgb(20,20,20);
}
.header-modern .topMenu.navTabs .navTab.selected .navLink,
.header-modern .topMenu.navTabs .navTab.PopupClosed:hover,
.header-modern .topMenu.navTabs .navTab.PopupOpen {
	background-color: transparent;
}
.header-modern #navigation .publicTabs .navTab.tab-empty {
	border-left: 0 !important;
}

@media (max-width:480px)
{
	.header-modern .navTabs.topMenu .visitorTabs .navTab.inbox,
	.header-modern .navTabs.topMenu .visitorTabs .navTab.alerts
	{
		display: none;
	}
	.header-modern .navTabs.topMenu .visitorTabs .navLink .itemCount.ResponsiveOnly {
		display: inline-block !important;
	}
}



.header-modern #navigation .navTabs {
	height: 120px;
}
.header-modern #navigation .publicTabs{
	float: right;
	height: 120px;
}
.header-modern #navigation .visitorTabs {
	float: left;
}

.header-modern #navigation .publicTabs .navLink {
	height: 120px;
	padding: 0;
	position: relative;
	width: 120px;
}
.header-modern #navigation .publicTabs .navTab {
	
	border-left: 12px solid rgb(246, 246, 246);
	
	background-image: url('styles/pixelgoose/metro/blue/xenforo/tab-icon-default.svg');
	background-repeat: no-repeat;
	background-position: left top;
	background-size: 100% auto;
}
.header-modern #navigation .navTabs .navTab.home {
	background-image: url('styles/pixelgoose/metro/blue/xenforo/tab-icon-home.svg');
}
.header-modern #navigation .navTabs .navTab.forums {
	background-image: url('styles/pixelgoose/metro/blue/xenforo/tab-icon-forums.svg');
}
.header-modern #navigation .navTabs .navTab.members {
	background-image: url('styles/pixelgoose/metro/blue/xenforo/tab-icon-members.svg');
}
.header-modern #navigation .navTabs .navTab.selected .tabLinks {
	top: 132px;
}
.header-modern #navigation .navTabs .navLink > span:first-child {
	bottom: 12px;
	left: 12px;
	position: absolute;
	font-size: 16px;
	line-height: 16px;
}
.header-modern #navigation .navTabs .navTab.selected .navLink {
	background-color: transparent;
}
.header-modern #navigation .navTabs .navTab.selected {
	background-color: rgb(46, 53, 57);
}

.header-modern #navigation .navTabs .navTab.PopupClosed .SplitCtrl,
.header-modern #navigation .navTabs .navTab.PopupOpen .SplitCtrl,
.header-modern #navigation .navTabs .navTab.PopupClosed:hover .SplitCtrl,
.header-modern #navigation .navTabs .SplitCtrl {
	bottom: 12px;
	height: 32px;
	margin-right: 0;
	position: absolute;
	right: 12px;
}
.header-modern #navigation .publicTabs .navTab.navigationHiddenTabs {
	background-image: none;
}
.header-modern #navigation .publicTabs .navTab .menuIcon:before {
	font-size: 24px;
	left: 36px;
	top: -36px;
}

@media (max-width:610px)
{
	#headerMover.header-modern #headerProxy {
		height: 208px !important; /* top menu + tab height + border + submenu */
	}
	.header-modern .topMenu.navTabs .navTab.selected .tabLinks {
		top: 172px !important; /* top menu + tab height + border */;
	}
	.header-modern #navigation .navTabs {
		height: 100px;
	}
	.header-modern #navigation .publicTabs{
		float: right;
		height: 100px;
	}
	.header-modern #navigation .visitorTabs {
		float: left;
	}

	.header-modern #navigation .publicTabs .navLink {
		height: 100px;
		padding: 0;
		position: relative;
		width: 100px;
	}
	.header-modern #logo {
		height:  100px;
	}
	.header-modern #navigation .navTabs .navTab.selected .tabLinks {
		top: 112px;
	}
	.header-modern #navigation #logo img {
		max-width: 75%;
	}
	.header-modern #navigation .navTabs .navLink > span:first-child {
		font-size: 13px;
		line-height: 13px;
	}
	.header-modern #navigation .publicTabs .navTab .menuIcon:before {
		font-size: 24px;
		left: 28px;
		top: -32px;
	}
}
@media (max-width:480px)
{
	#headerMover.header-modern #headerProxy {
		height: 188px !important; /* top menu + tab height + border + submenu */
	}
	.header-modern .topMenu.navTabs .navTab.selected .tabLinks {
		top: 152px !important; /* top menu + tab height + border */;
	}
	.header-modern #navigation .navTabs {
		height: 80px;
	}
	.header-modern #navigation .publicTabs{
		float: right;
		height: 80px;
	}
	.header-modern #navigation .visitorTabs {
		float: left;
	}

	.header-modern #navigation .publicTabs .navLink {
		height: 80px;
		padding: 0;
		position: relative;
		width: 80px;
	}
	.header-modern #logo {
		height:  80px;
	}
	.header-modern #navigation .navTabs .navTab.selected .tabLinks {
		top: 92px;
	}
	.header-modern #navigation .navTabs .navTab.selected {
		border: 0;
	}
	.header-modern #navigation .navTabs .navTab.selected > a.navLink {
		display: none;
	}
	.header-modern #navigation #logo img {
		max-width: 50%;
	}
	.header-modern #navigation .navTabs .navLink > span:first-child {
		font-size: 11px;
		line-height: 11px;
	}
	.header-modern #navigation .publicTabs .navTab .menuIcon:before {
		font-size: 24px;
		left: 18px;
		top: -24px;
	}
}

.header-modern #logo {
	line-height: inherit;
	display: table;
}
.header-modern #logo > a {
	display: table-cell;
	vertical-align: bottom;
	padding: 0 24px 12px 12px;
}
/* Header Modern end */

/* Search bar */

/* search bar classic header start */
#searchBar {
	position: absolute;
	top: 42px;
	right: 0px;
}
#searchBar.pageWidth {
	min-width: 274px;
}
#QuickSearchPlaceholder {
	right: 42px !important;
	left: auto !important;
}
/* search bar classic header end */

/* search bar modern header start */
.header-modern #searchBar {
	position: absolute;
	top: 12px;
	left: 24px;
	right: auto !important;
}
.header-modern #QuickSearchPlaceholder {
	left: 0px !important;
}
/* search bar modern header end */

#QuickSearch {
	left: 0 !important;
	width: 250px;
	top: 0;
	padding-top: 0;
}
#QuickSearch input {
	font-size: 13px;
}
#QuickSearch .formPopup {
	background-color: transparent !important;
}
#QuickSearch.active .formPopup {
	background-color: rgb(255, 255, 255) !important;
}
		#QuickSearch.active
		{
			-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);
			padding-bottom: 0px;
			-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
			background-color: rgb(255, 255, 255);
			padding: 12px;
			margin-top: -12px;
			margin-left: -12px !important;
			color: rgb(46, 53, 57);
		}
#QuickSearch .formPopup .primaryControls,
#QuickSearch .formPopup .secondaryControls {
	padding: 0;
}
#QuickSearch .formPopup .controlsWrapper {
	background: none transparent !important;
	padding: 0;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}

#QuickSearch .formPopup .controlsWrapper .textCtrl,
#QuickSearch .formPopup .textCtrl {
	width: 250px;
}
#QuickSearch .formPopup .controlsWrapper {
    font-size: 13px;
}

#QuickSearch .formPopup .ctrlUnit > dt label {
    margin-bottom: 6px;
}
	#QuickSearch input.button.primary
	{
		width: 98px;
	}
	#QuickSearch .moreOptions {
		margin-right: 35px;
	}
#QuickSearch #commonSearches .button {
	background-color: transparent;
	border: 0 none;
}
#QuickSearch #commonSearches .arrowWidget {
	margin: 11px 0 0 4px;
}
.formPopup form, .formPopup .ctrlUnit {
	margin: 12px auto 0;
}

	#QuickSearchPlaceholder
	{
		position: absolute;
		left: 0px;
		top: 8px;
		-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
		height: 16px;
		width: 16px;
	}

/* Calendar */

#calroot {
	width: 201px;
	padding: 0px;
	border: 0;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);
}

#calhead {
	background-color: rgb(46, 53, 57);
	color: rgb(255, 255, 255);
	padding: 12px 6px;
}
	#caltitle {
		color: rgb(255, 255, 255);
		width: 153px;
	}
	
	#calnext, #calprev {
		width: 18px;
	}
#caldays {
	height: 24px;
	background-color: #F2F2F2;
	border-bottom: 0 !important;
}

	#caldays span {
		width: 28px;
		color: rgb(67, 166, 223);
		height: 24px;
		line-height: 24px;
	}
a.caloff {
	color: rgb(228,228,228);		
}
#caltoday {
	font-weight: bold;
}

#calcurrent {
	background-color: rgb(67, 166, 223);
	color: rgb(255, 255, 255);
}
	.calweek a {
		-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	}

/* Classic header logo */
#logoBlock {

}
#logo {
	display: table-cell;
	vertical-align: middle;
}
#logo a {
	outline: 0;
}


	
.breadcrumb .crust .arrow span {
	margin-top:7px;
	border-color:  rgb(194,194,194) rgba(194,194,194,0) rgba(194,194,194,0) #C2C2C2; border-color:  rgba(194,194,194, 0) rgba(194,194,194,0) rgba(194,194,194,0) #C2C2C2; _border-color:  rgb(194,194,194) rgba(194,194,194,0) rgba(194,194,194,0) #C2C2C2;
	border-width: 5px;
}
.breadcrumb .crust:last-child .arrow span {
	display: none;
}
	.PageNav .pageNavHeader
	{
		padding-right: 3px;
	}
	.PageNav .scrollable
	{
		width: 142px; /* width of 5 page numbers plus their margin & border */
		height: 26px !important; /* only needs to be approximate */
	}	
	

.pageContent.no-prefooter {
	border-top: solid 1px rgb(228,228,228);
	padding-top: 14px;
}
.footer .choosers dt:first-child + dd a {
	padding-left: 0;
	border-left: 0;
}
.footerLinks a.globalFeed {
	margin: 2px 6px 0;
}
.footer .footerLinks li:first-child a {
	padding-left: 0;
	border-left: 0;
}
.footer .footerLinks li:last-child a {
	padding-right: 0;
}
.footerLegal .pageContent
{
	font-size: 13px;
	padding: 0px 0px 15px;
}
	#copyright
	{
		color: rgb(20,20,20);
		float: none;
	}
	
	#legal
	{
		float: none;
	}
	
		#legal li
		{
			float: none;
			margin-left: 0;
		}
.PanelScroller .navControls a.current .arrow {
	display: none;
}

#jumpMenu h3.primaryContent {
	background-color: #f2f2f2;
}
#jumpMenu .blockLinksList ul,
#jumpMenu .nodeList li.d0
{
	padding-top: 6px;
	border-top: 1px solid rgb(228,228,228) !important;
	margin-top: 6px;
}

#jumpMenu .blockLinksList ul:first-child,
#jumpMenu .nodeList li.d0:first-child {
	border-top: 0 none !important;
}
.xenOverlay #jumpMenu .nodeList
{
	border-left: 1px solid rgb(228,228,228) !important;
}
.jumpMenuColumn .primaryContent {
	border-left: 0;
	border-right: 0;
}

.jumpMenuColumn .secondaryContent {
	background-color: rgb(255, 255, 255);
}
.jumpMenuColumn .blockLinksList {
	font-size: 13px;
}
#StackAlerts .stackAlert
{
	border: 0 !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
	-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important;
	margin-top: 6px !important;
}

	#StackAlerts .stackAlertContent
	{
		padding: 12px !important;
		padding-right: 32px !important;
		-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
		border: 0 !important;
		background-color: rgb(255, 255, 255) !important;
	}
.chooserOverlay .primaryContent {
	padding: 12px 0;
}
.xenOverlay .section .sectionFooter,
.xenOverlay .sectionMain .sectionFooter {
	border-top: 0;
}
.chooserColumns .icon {
	border: 0 !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
	box-shadow: none !important;
}
.chooserColumns li a {
	margin: 0 0 0 12px !important;
	padding: 12px !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
}
.chooserColumns li a:hover {
	background-color: rgb(228,228,228) !important;
}

/* Message list */
.messageList .message.InlineModChecked {
	background-color: rgb(255, 250, 181);
}
.messageUserBlock .arrow {
	display: none !important;
}

.userBanner
{
	font-size: 11px;
	background-image: none !important;
	padding: 5px 3px;
	border: 0;
	-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
	box-shadow: none !important;
}
		.userBanner.wrapped span
		{
			position: absolute;
			top: 0 !important;
			width: 0 !important;
			height: 0 !important;
			background-color: transparent !important;
		}
		
		.userBanner.wrapped span.before
		{
			-webkit-border-top-left-radius: 0px !important; -moz-border-radius-topleft: 0px !important; -khtml-border-top-left-radius: 0px !important; border-top-left-radius: 0px !important;
			left: 0;
			border-bottom:  12px solid rgb(0, 0, 0); border-bottom:  12px solid rgba(0, 0, 0, 0); _border-bottom:  12px solid rgb(0, 0, 0);
			border-left: 8px solid #f2f2f2;
			border-top:  12px solid rgb(0, 0, 0); border-top:  12px solid rgba(0, 0, 0, 0); _border-top:  12px solid rgb(0, 0, 0);			
		}
		
		.userBanner.wrapped span.after
		{
			-webkit-border-top-right-radius: 0px !important; -moz-border-radius-topright: 0px !important; -khtml-border-top-right-radius: 0px !important; border-top-right-radius: 0px !important;
			right: 0;
			border-bottom:  12px solid rgb(0, 0, 0); border-bottom:  12px solid rgba(0, 0, 0, 0); _border-bottom:  12px solid rgb(0, 0, 0);
			border-right: 8px solid #f2f2f2;
			border-top:  12px solid rgb(0, 0, 0); border-top:  12px solid rgba(0, 0, 0, 0); _border-top:  12px solid rgb(0, 0, 0);			
		}
		
		
		.InlineModChecked .userBanner.wrapped span.before
		{
			border-left-color: rgb(255, 250, 181);
		}
		
		.InlineModChecked .userBanner.wrapped span.after
		{
			border-right-color: rgb(255, 250, 181);
		}
	.emCtrl,
	.messageContent a
	{
		-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
	}
	
		.emCtrl:hover,
		.emCtrl:focus,
		.ugc a:hover,
		.ugc a:focus
		{
			box-shadow: none !important;
			outline: 0 none;
		}
			.emCtrl:active,
			.ugc a:active
			{
				box-shadow: none !important;
			}
.messageList .placeholder.deleted a.avatar {
	margin: 12px 0 0 12px;
}
.messageNotices .icon {
	float: left !important;
	margin-right: 6px;
}
.attachedFiles .attachedFilesHeader
{
	padding: 12px 0 6px !important;
}
.attachedFiles .attachmentList
{
	padding: 12px 0 0 !important;
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
}
	.attachment .boxModelFixer
	{
		margin-bottom: 12px !important;
		margin-right: 12px !important;
		padding: 6px !important;				
		-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;	
	}
.attachedFiles .attachmentList {
	background: none transparent !important;
}
.bbCodeQuote .quoteContainer .quote {
	padding-left: 32px;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9InF1b3RlXzFfIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjE5cHgiIGhlaWdodD0iMTZweCIgdmlld0JveD0iMCAwIDE5IDE2IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxOSAxNiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8ZyBpZD0icXVvdGUiPg0KCTxnPg0KCQk8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0RBREFEQSIgZD0iTTAsOHY4aDhWOEgyLjY2N2MwLTIuOTQsMi4zOTEtNS4zMzMsNS4zMzMtNS4zMzNWMA0KCQkJQzMuNTg4LDAsMCwzLjU4OSwwLDh6IE0xOSwyLjY2N1YwYy00LjQxMiwwLTgsMy41ODktOCw4djhoOFY4aC01LjMzNEMxMy42NjYsNS4wNiwxNi4wNTcsMi42NjcsMTksMi42Njd6Ii8+DQoJPC9nPg0KPC9nPg0KPC9zdmc+DQo=) no-repeat left 3px;
}
.bbCodeQuote .attribution + blockquote.quoteContainer {
	border-top: 0 !important;
}
blockquote.quoteContainer blockquote.quoteContainer .bbCodeQuote {
	margin-bottom: 0;
}
.bbCodeQuote .quoteContainer .quoteContainer {
	background-color: #EDEDED;
}
.bbCodeQuote .quoteContainer .quoteContainer .quoteContainer {
	background-color: #f2f2f2;
}
.bbCodeQuote .quoteContainer .quoteContainer .quoteContainer .quoteContainer {
	background-color: #EDEDED;
}
.bbCodeQuote .quoteContainer .quoteContainer .quoteContainer .quoteContainer .quoteContainer {
	background-color: #f2f2f2;
}
.bbCodeQuote .quoteContainer .quoteContainer .quoteContainer .quoteContainer .quoteContainer .quoteContainer {
	background-color: #EDEDED;
}
	.xenOverlay.memberCard .userInfo
	{
		font-size: 13px !important;
	}
			.xenOverlay.memberCard .userInfo .userBlurb
			{
				font-size: 13px !important;
			}
.bbCodeQuote .quoteContainer .quoteExpand {
	color: rgb(67, 166, 223) !important;
	font-weight: bold !important;
	font-style: normal !important;
}
.bbCodeSpoilerButton
{
	margin: 12px 0 6px !important;
}
.xenForm .formHiderHeader
{
	margin: 12px !important;
	font-size: 13px !important;
	font-weight: bold !important;
}
.lightBox .imageContainer
{
	background-image: none !important;
	background-color: rgb(46, 53, 57) !important;
}
.AttachmentEditor .AttachedFile .ProgressMeter {
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
	font-size: 14px !important;
}

		.xenOverlay.lightBox #LbUpper
		{
			-webkit-border-top-left-radius: 0px !important; -moz-border-radius-topleft: 0px !important; -khtml-border-top-left-radius: 0px !important; border-top-left-radius: 0px !important;
			-webkit-border-top-right-radius: 0px !important; -moz-border-radius-topright: 0px !important; -khtml-border-top-right-radius: 0px !important; border-top-right-radius: 0px !important;
		}
		
		.xenOverlay.lightBox #LbLower
		{
			-webkit-border-bottom-left-radius: 0px !important; -moz-border-radius-bottomleft: 0px !important; -khtml-border-bottom-left-radius: 0px !important; border-bottom-left-radius: 0px !important;
			-webkit-border-bottom-right-radius: 0px !important; -moz-border-radius-bottomright: 0px !important; -khtml-border-bottom-right-radius: 0px !important; border-bottom-right-radius: 0px !important;
		}
		.lightBox .imageNav .ctrl
		{
			-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
		}
.lightBox .thumbsContainer
{
	background: url(rgba.php?r=0&g=0&b=0&a=0) !important; background: rgba(0,0,0, 0) !important; _filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00000000,endColorstr=#00000000);
}
	.lightBox #LbReveal
	{
		border: 1px solid rgb(43,72,92)!important;
	}
.sharePage {
	margin: 24px 0 12px;
}
#pageNodeContent .sharePage {
	margin-bottom: 0;
}
.sharePage .textHeading {
	color: rgb(46, 53, 57) !important;
	font-size: 14px !important;
	font-weight: bold;
	padding-bottom: 6px;
	border-bottom: 1px solid rgb(228,228,228) !important;
	margin-bottom: 12px !important;
}
#pageNodeContent .pageCounter {
	margin-top: 24px !important;
}
	.redactor_box .draftNotice span
	{
		-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
		-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important;
	}
form#QuickReply .button {
	margin-left: 8px !important;
}

#QuickReply .submitUnit {
	margin-top: 12px !important;
}
.button.smallButton {
	background-color: rgb(46, 53, 57) !important;
	padding: 0px 6px !important;
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
	color: #ffffff !important;
	border: none !important;
}
.AttachmentEditor .AttachedFile .Thumbnail {
	width: 50px !important;
	height: 50px !important;
}
.AttachmentEditor .AttachedFile,
.AttachmentEditor .AttachmentInsertAllBlock
{
	padding: 12px !important;
}
	
.AttachmentEditor .AttachedFile .ProgressMeter .ProgressGraphic {
	background: none rgb(228,228,228) !important;
	color: rgb(46, 53, 57) !important;
}

.AttachmentEditor .AttachedFile .ProgressMeter .ProgressGraphic .ProgressCounter
{
	color: rgb(46, 53, 57) !important;
}

#QuickReply .AttachmentEditor
{
	padding-top: 12px !important;
}
.redactor_toolbar li li {
    margin: 0 !important;
    padding: 1px !important;
}
.redactor_toolbar li li:hover {
	background-color: rgb(228,228,228);
}
.redactor_color_link {
	-webkit-box-shadow: 1px 1px 0 rgba(0, 0, 0, 0.1) inset !important; -moz-box-shadow: 1px 1px 0 rgba(0, 0, 0, 0.1) inset !important; -khtml-box-shadow: 1px 1px 0 rgba(0, 0, 0, 0.1) inset !important; box-shadow: 1px 1px 0 rgba(0, 0, 0, 0.1) inset !important;
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
}
.redactor_toolbar li a:active,
.redactor_toolbar li a.redactor_act {
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
}
.xenOverlay .redactor_box {
	border: 0 !important;
}
.redactor_dropdown {
	border: 0 !important;
	-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important;
}
.xenOverlay form.InlineMessageEditor .buttonContainer .button {
	margin-left: 8px;
}

/* Tables */
table.dataTable.diffVersions {
	border-collapse: inherit;
}
.dataTable tr.dataRow th
{
	background: none rgb(46, 53, 57) !important;
	border: 0 !important;
	color: rgb(255, 255, 255) !important;
	font-size: 13px !important;
	padding: 15px 12px !important;
}
.dataTable tr.dataRow td
{
	padding: 15px 12px !important;
	background-color: rgb(255, 255, 255);
}
.dataTable tr.dataRow td:first-child {
	border-left: solid 1px rgb(228,228,228);
}
.dataTable tr.dataRow td:last-child {
	border-right: solid 1px rgb(228,228,228);
}
.dataTable tr.dataRow:last-child td {
	border-bottom: 0 !important;
}
.dataTable .dataRow .dataOptions a.secondaryContent
{
	border-left: 0 !important;
	border-bottom: none;
	padding: 0 !important;
	font-size: 11px;
	color: rgb(67, 166, 223) !important;
}

	.dataTable .dataRow .dataOptions a.secondaryContent:hover
	{
		background-color: transparent !important;
		color: rgb(20,20,20) !important;
		text-decoration: underline !important;
	}
.dataTable.diffVersions + .sectionFooter {
	border: solid 1px rgb(228,228,228) !important;
}
.diffList li {
	padding: 12px !important;
}

.message .newIndicator:before {
	border-bottom:  12px solid rgb(0, 0, 0); border-bottom:  12px solid rgba(0, 0, 0, 0); _border-bottom:  12px solid rgb(0, 0, 0);
	border-left: 8px solid rgb(67, 166, 223);
	border-top:  12px solid rgb(0, 0, 0); border-top:  12px solid rgba(0, 0, 0, 0); _border-top:  12px solid rgb(0, 0, 0);
	left: 0;
	background-color: rgba(0, 0, 0, 0) !important;
	height: 0 !important;
	position: absolute;
	top: 0 !important;
	width: 0 !important;
}

/* Thread reply */
.titleBar + #ThreadReply {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(255, 255, 255);
	padding: 24px;
}
.titleBar + #ThreadReply.xenForm fieldset {
	margin: 0 !important;
}
.titleBar + #ThreadReply.xenForm .ctrlUnit,
.titleBar + #ThreadReply.xenForm .ctrlUnit > dd {
	padding: 0 !important;
}
.titleBar + #ThreadReply.xenForm .submitUnit {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
	padding: 12px 6px !important;
}
.titleBar + #ThreadReply.xenForm .submitUnit .buttonProxy + .button,
.titleBar + #ThreadReply.xenForm .submitUnit .button + .buttonProxy {
	margin-left: 8px;
}
.titleBar + #ThreadReply.xenForm .AttachedFilesUnit {
	padding: 12px 6px !important;
	border-bottom: solid 1px rgb(228,228,228);
}
.titleBar + #ThreadReply.xenForm fieldset:nth-child(4),
.titleBar + #ThreadReply.xenForm fieldset:nth-child(5) {
	border-top: 0 !important;
	padding: 24px 6px 0 !important;
	margin: 0 auto !important;
}
.titleBar + #ThreadReply .PreviewContainer .subHeading {
	color: rgb(255, 255, 255);
	background-color: rgb(46, 53, 57);
	font-size: 14px;
}
.post_edit form.xenForm {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(255, 255, 255);
	padding: 24px;
}
.post_edit form.xenForm .ctrlUnit.surplusLabel {
	padding: 0 !important;
}
.xenForm .ctrlUnit.fullWidth > dd,
.xenForm .ctrlUnit > dd {
	padding-left: 0 !important;
	padding-right: 0 !important;
}
.formOverlay.xenForm .ctrlUnit.fullWidth > dd,
.formOverlay.xenForm .ctrlUnit > dd {
	padding-left: 30px !important;
	padding-right: 30px !important;
}
.post_edit form.xenForm .ctrlUnit.submitUnit {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}
.post_edit form.xenForm .ctrlUnit.submitUnit ~ .ctrlUnit.submitUnit {
	border-top: solid 1px rgb(228,228,228) !important;
}
.post_edit form.xenForm .PreviewContainer .subHeading {
	padding: 13px 12px;
	background-color: rgb(46, 53, 57);
	color: rgb(255, 255, 255);
}

/* Sidebar navigation */
.navigationSideBar .heading {
	margin-top: 0 !important;
}
.navigationSideBar .primaryContent {
	font-size: 13px !important;
	border-right: 0;
}
.navigationSideBar .secondaryContent {
	font-weight: normal !important;
	background: rgb(246, 246, 246) none !important;
	border: 1px solid rgb(228,228,228);
	border-top: 0;
	border-right: 0;
}
.navigationSideBar a {
	padding: 10px 12px !important;
}
.navigationSideBar a:hover {
	background: rgb(246, 246, 246) none !important;
}
	
/* Help page */
.help_index .mainContentBlock {
	background-color: rgb(255, 255, 255);
	border: 1px solid rgb(228,228,228);
}
.help_index .baseHtml dl {
	margin: 12px 24px !important;
}
.help_index .baseHtml dl:first-child {
	margin-top: 24px !important;
}
.help_index .baseHtml dl:last-child {
	margin-bottom: 24px !important;
}
.help_index .baseHtml dl dd {
	margin-left: 0 !important;
}
.help_smilies table.dataTable {
	margin-top: 0 !important;
}
.smilieList .smilieText {
	border: 1px solid rgb(228,228,228) !important;
	color: rgb(61, 152, 204);
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
}
	
	.smilieList .smilieText:hover
		{
			background-color: rgb(228,228,228) !important;
			border-color: #f9bc6d;
			color: #000000 !important;
		}
.help_bb_codes .section {
	margin-top: 0 !important;
}
.help_bb_codes .section > .primaryContent:first-child {
	border-top: 1px solid rgb(228,228,228) !important;
}
	.bbCode > dl > dd
	{
		-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
		padding: 6px !important;
	}
	.help_bb_codes .bbCode > dl {
		margin-left: 0 !important;
	}
	.help_bb_codes .bbCode > dl + dl {
		margin-left: 12px !important;
	}
.help_trophies .section {
	margin-top: 0 !important;
}
.help_trophies .section > .primaryContent:first-child {
	border-top: 1px solid rgb(228,228,228) !important;
}
.help_cookies .mainContentBlock,
.help_terms .mainContentBlock,
.help_page .mainContentBlock {
	background-color: rgb(255, 255, 255);
	border: 1px solid rgb(228,228,228);
	padding: 24px !important;
}

/* Moderation Queue */
.moderation_queue_list form.xenForm {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(255, 255, 255);
	padding: 24px;
}
.moderation_queue_list .xenForm .submitUnit {
	margin: -24px !important;
	margin-top: inherit !important;
}

/* Autocomplete */

ul.autoCompleteList
{	
	border: 0 !important;
	padding: 0 !important;
	-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3); box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);
}

ul.autoCompleteList li
{
	padding: 6px 12px !important;
}

ul.autoCompleteList li:hover,
ul.autoCompleteList li.selected
{
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
}

/* Reports */
.reportSearchForm .AutoComplete + .button {
	margin-left: 10px;
} 
.report_list .discussionList + .discussionList .textHeading {
	margin-top: 24px !important;
}
.report_list_closed .discussionList > .sectionFooter.actionList {
	background-color: rgb(228,228,228);
	font-size: 13px;
}
.report_view .mainContent .section .subHeading {
	color: rgb(255, 255, 255);
	background-color: rgb(46, 53, 57);
	font-size: 14px;
	padding: 15px 12px;
}
.report_view .mainContent .section .subHeading + .secondaryContent.memberListItem {
	background-color: #f2f2f2;
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}
.report_view .mainContent .section .secondaryContent.pairsInline {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}
.report_view .mainContent .section .sectionFooter.actionList {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}
.report_view .handleReportForm .sectionFooter.HandleToggle {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}

/* Search */

[class*="search_form"] .xenForm,
.tag_search .xenForm {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(255, 255, 255);
	padding: 24px;
}
[class*="search_form"] .xenForm .ctrlUnit.submitUnit {
	margin: 12px -24px -24px !important;
}
.tag_search .xenForm .ctrlUnit.submitUnit {
	margin: 12px -24px -0 !important;
	border-bottom: solid 1px rgb(228,228,228);
}
.button.spinBoxButton {
	width: 36px;
	height: 36px;
	line-height: 34px;
	margin-left: 10px !important;
}
.button.spinBoxButton + .button.spinBoxButton {
	margin-left: 4px !important;
}
	.searchResult .main
	{
		padding: 0 !important;
	}
.searchResultsList li.searchResult {
	padding: 12px !important;
}
.searchResultsList li.searchResult:first-child {
	border-top: solid 1px rgb(228,228,228);
}
.searchResult .avatar {
	margin: 0 !important;
}
.searchResultsList + .sectionFooter.searchResultSummary {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}
.watch_forums .sectionMain > .subHeading {
	padding: 15px 12px;
	font-size: 14px;
	background-color: rgb(67, 166, 223);
}
.watch_forums .sectionMain .sectionFooter,
.watch_threads .sectionMain .sectionFooter,
.watch_threads_all .sectionMain .sectionFooter,
.find_new_posts .discussionList .sectionFooter {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}

/* Members */
.member_notable ul.tabs {
	background-color: transparent;
	padding-left: 0;
}
.member_notable ul.tabs + .section {
	margin-top: 0;
}
.online_list ul.tabs {
	background-color: transparent;
	padding-left: 0;
}
.online_list ul.tabs + .section {
	margin-top: 0;
}
.news_feed_page_global .NewsFeedEnd .sectionFooter {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}

/* Profile page */
.xenOverlay.avatarEditor .AvatarEditor .avatarOption {
	padding: 12px !important;
	border: 1px solid rgb(228,228,228) !important;
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
	margin-bottom: 12px !important;
	margin-right: 12px;
	background: transparent none !important;
}
.xenOverlay.avatarEditor .AvatarEditor .faint {
	color: inherit !important;
	margin-top: 6px;
}
.xenOverlay.avatarEditor .AvatarEditor .submitUnit.saveDeleteControls {
	padding: 0 12px 12px 0 !important;
}
.profilePage .mast
{
	padding-right: 12px !important;
	border-right: 0 !important;
}
.profilePage .mast .followBlocks .section
{
	margin-bottom: 12px !important;
}
.member_view .mast .followBlocks .subHeading.textWithCount {
	background-color: rgb(46, 53, 57) !important;
	padding: 15px 12px;
}
.member_view .mast .followBlocks .subHeading.textWithCount .text {
	color: rgb(255, 255, 255)  !important;
	font-size: 14px;
}
		.textWithCount.subHeading .count
		{
			margin: -3px 0;
			padding: 2px 6px;
			-webkit-border-radius: 10px !important; -moz-border-radius: 10px !important; -khtml-border-radius: 10px !important; border-radius: 10px !important;
			border: 0 !important;
			background-color: rgb(150,150,150) !important;
			color: rgb(255, 255, 255)  !important;
		}
		.textWithCount.subHeading .count:hover {
			text-decoration: none !important;
		}
.profilePage .mainProfileColumn
{
	margin-left: 205px !important;
	border: 1px solid rgb(228,228,228) !important;
	background-color:  rgb(255, 255, 255) ;
}
.profilePage .primaryUserBlock
{
	border-top: 0 !important;
	margin: 0 !important;
}
	.profilePage .primaryUserBlock .primaryContent,
	.profilePage .primaryUserBlock .secondaryContent
	{
		padding-left: 12px;
		border: none;
	}
	.profilePage .primaryUserBlock .followBlock
	{
		font-size: 13px !important;
	}

	.profilePage .primaryUserBlock .userBlurb
	{
		margin-bottom: 12px !important;
	}
		.primaryUserBlock .userBanner {
			position: relative;
			padding-left: 20px;
			padding-right: 20px;
			margin-bottom: 12px !important;
		}
		.primaryUserBlock .userBanner span
		{
			position: absolute !important; 
			top: 0 !important;
			width: 0 !important; 
			height: 0 !important;
			background-color: transparent !important;
		} 
		
		.primaryUserBlock .userBanner span.before
		{
			-webkit-border-top-left-radius: 0px !important; -moz-border-radius-topleft: 0px !important; -khtml-border-top-left-radius: 0px !important; border-top-left-radius: 0px !important;
			left: 0;
			border-bottom:  12px solid rgb(0, 0, 0); border-bottom:  12px solid rgba(0, 0, 0, 0); _border-bottom:  12px solid rgb(0, 0, 0);
			border-left: 8px solid rgb(255, 255, 255);
			border-top:  12px solid rgb(0, 0, 0); border-top:  12px solid rgba(0, 0, 0, 0); _border-top:  12px solid rgb(0, 0, 0);			
		}
		
		.primaryUserBlock .userBanner span.after
		{
			-webkit-border-top-right-radius: 0px !important; -moz-border-radius-topright: 0px !important; -khtml-border-top-right-radius: 0px !important; border-top-right-radius: 0px !important;
			right: 0;
			border-bottom:  12px solid rgb(0, 0, 0); border-bottom:  12px solid rgba(0, 0, 0, 0); _border-bottom:  12px solid rgb(0, 0, 0);
			border-right: 8px solid rgb(255, 255, 255);
			border-top:  12px solid rgb(0, 0, 0); border-top:  12px solid rgba(0, 0, 0, 0); _border-top:  12px solid rgb(0, 0, 0);
		}
.profilePage .profileContent
{
	margin: 12px;
}
.profilePage #ProfilePoster {
	border-left: 0;
	border-right: 0;
}
		.profilePage .profilePoster .submitUnit
		{
			margin-top: 12px !important;
		}

.messageSimple
{
	padding-bottom: 12px !important;
	margin: 12px 0 !important;
	border-left: 0;
	border-right: 0;
}

.messageSimpleList .placeholder .placeholderContent
{
	border: 0 !important;
	padding: 12px !important;
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
	background-color: #f2f2f2 !important;
	background-image: none !important;
}

.messageSimpleList .messageSimple.placeholder {
	border-bottom: 1px solid rgb(228, 228, 228) !important;
}
.profileContent ol li {
	border-left: 0;
	border-right: 0;
}
.profileContent .sectionFooter {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}
.profileContent .searchResult
{
	padding: 12px 0;
}
#info.profileContent .textHeading {
	margin-bottom: 6px;
}
#info.profileContent .textHeading + .primaryContent {
	border: solid 1px rgb(228,228,228);
	border-bottom: 0;
	border-left: 0;
	border-right: 0;
	padding-left: 0;
}
.profileContent .dataTable tr.dataRow:last-child td {
	border-bottom: solid 1px rgb(228,228,228) !important;	
}
.member_warn form.xenForm {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(255, 255, 255);
	padding: 24px;
}
.member_warn .xenForm .submitUnit {
	margin: -24px !important;
	margin-top: inherit !important;
}
.xenOverlay .sectionFooter input.OverlayCloser {
	margin-left: 12px !important;
}
.register_form .titleBar + .xenForm {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(255, 255, 255);
	padding: 24px;
}
.register_form .xenForm .submitUnit {
	margin: -24px !important;
	margin-top: inherit !important;
}


/* Personal pages */
.navigationSideBar
{
	width: 200px !important;
}
.navigationSideBar .section h4.subHeading {
	background-color: rgb(46, 53, 57);
	padding: 15px 12px;
	color: rgb(255, 255, 255);
}
.navigationSideBar + .mainContentBlock.insideSidebar {
	background-color: rgb(255, 255, 255);
	border: solid 1px rgb(228,228,228);
	padding: 24px;
}
.navigationSideBar .section:last-child .LogOut.primaryContent {
	border-top: solid 1px rgb(228,228,228);
}
.mainContentBlock.insideSidebar .xenForm .ctrlUnit.submitUnit {
	border: solid 1px rgb(228,228,228) !important;
}
.mainContentBlock.insideSidebar .xenForm .ctrlUnit.fullWidth > dd,
.mainContentBlock.insideSidebar .xenForm .ctrlUnit > dd {
	padding-right: 0 !important;
	padding-left: 0 !important;
}
.account_alerts .mainContentBlock.insideSidebar .alertsScroller li:first-child h2.textHeading {
	margin-top: 0;
}
.account_alerts .mainContentBlock.insideSidebar .alertsScroller li h2.textHeading {
	border-bottom: solid 1px rgb(228,228,228);
	padding-bottom: 6px;
}
.account_alerts .mainContentBlock.insideSidebar .alerts .primaryContent {
	padding: 0 0 6px 0 !important;
	margin-bottom: 12px;
	border-left: 0;
	border-right: 0;
}
.account_alerts .mainContentBlock.insideSidebar .alerts .primaryContent a {
	color: rgb(67, 166, 223);
}
.news_feed_page .mainContentBlock.insideSidebar .eventList .event {
	padding-left: 0;
	padding-right: 0;
	border-left: 0;
	border-right: 0;
}
.news_feed_page .mainContentBlock.insideSidebar .eventList .event:first-child {
	padding-top: 0;
}
.news_feed_page .mainContentBlock.insideSidebar .eventList .event a {
	color: rgb(67, 166, 223);
}
.news_feed_page .mainContentBlock.insideSidebar .NewsFeedEnd .sectionFooter {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}

.newsFeed .extra
{
	margin-top: 12px !important;
}
.account_likes .mainContentBlock.insideSidebar .eventList .event:first-child {
	padding-top: 0;
}
.account_likes .mainContentBlock.insideSidebar .eventList .event {
	padding-left: 0
	padding-right: 0;
	border-left: 0;
	border-right: 0;
}
.account_likes .mainContentBlock.insideSidebar .eventList .event a {
	color: rgb(67, 166, 223);
}
.conversation_add .xenForm {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(255, 255, 255);
	padding: 24px;	
}
.conversation_add .xenForm .PreviewContainer .section {
	margin-top: 0;
}
.conversation_add .xenForm .PreviewContainer h3.subHeading {
	background-color: rgb(46, 53, 57);
	padding: 15px 12px;
	color: rgb(255, 255, 255);
}
.conversation_add .xenForm .ctrlUnit.fullWidth > dd,
.conversation_add .xenForm .ctrlUnit > dd {
	padding-right: 0 !important;
	padding-left: 0 !important;
}
.conversation_add .xenForm .ctrlUnit.submitUnit {
	margin-right: -24px !important;
	margin-left: -24px !important;
}
.conversation_add .xenForm .ctrlUnit.submitUnit .button + .buttonProxy,
.conversation_add .xenForm .ctrlUnit.submitUnit .buttonProxy + .button {
	margin-left: 8px !important;
}

.conversation_view .messageList
{ 
	border-right: none !important;
	padding-right: 0px !important;
	-webkit-border-top-right-radius: 0px !important; -moz-border-radius-topright: 0px !important; -khtml-border-top-right-radius: 0px !important; border-top-right-radius: 0px !important;
}

.conversation_view .quickReply {
	border-top: solid 1px rgb(228,228,228) !important;
}
.conversation_view .sidebar .section.participants .sectionFooter {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
}
.conversation_reply .xenForm {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(255, 255, 255);
	padding: 24px;	
}
.conversation_reply .xenForm .ctrlUnit.fullWidth > dd,
.conversation_reply .xenForm .ctrlUnit > dd {
	padding-right: 0 !important;
	padding-left: 0 !important;
}
.conversation_reply .xenForm .ctrlUnit.submitUnit {
	margin-right: -24px !important;
	margin-left: -24px !important;
	margin-bottom: -24px !important;
	padding-top: 24px !important;
}
.conversation_reply .xenForm .ctrlUnit {
	padding: 0 0 24px 0 !important;
}
.conversation_reply .xenForm .ctrlUnit.submitUnit .button + .buttonProxy,
.conversation_reply .xenForm .ctrlUnit.submitUnit .buttonProxy + .button {
	margin-left: 8px !important;
}
.conversation_reply .xenForm .PreviewContainer .section {
	margin-top: 0;
}
.conversation_reply .xenForm .PreviewContainer h3.subHeading {
	background-color: rgb(46, 53, 57);
	padding: 15px 12px;
	color: rgb(255, 255, 255);
}
.thread_create .xenForm {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(255, 255, 255);
	padding: 24px;	
}
.thread_create form#ThreadCreate > fieldset + dl.ctrlUnit.submitUnit {
	border: solid 1px rgb(228,228,228);
	border-top: 0;
	margin-top: -12px !important;
}
.thread_create .xenForm .ctrlUnit.submitUnit .button + .buttonProxy,
.thread_create .xenForm .ctrlUnit.submitUnit .buttonProxy + .button {
	margin-left: 8px !important;
}
.thread_create .xenForm .PreviewContainer .section {
	margin-top: 0;
}
.thread_create .xenForm .PreviewContainer h3.subHeading {
	background-color: rgb(46, 53, 57);
	padding: 15px 12px;
	color: rgb(255, 255, 255);
}
.thread_create #ThreadCreate.xenForm .textHeading ~ .ctrlUnit.submitUnit {
	margin-right: -24px !important;
	margin-left: -24px !important;
	margin-bottom: -24px !important;
}
.thread_create .xenForm .textHeading {
	border-bottom: solid 1px rgb(228,228,228);
	padding-bottom: 6px;
}
.textCtrlWrap.textCtrl.titleCtrl {
	padding: 2px !important;
}

.account_contact_details .mainContentBlock.insideSidebar .xenForm h3.sectionHeader,
.account_privacy .mainContentBlock.insideSidebar .xenForm h3.sectionHeader,
.account_preferences .mainContentBlock.insideSidebar .xenForm h3.sectionHeader,
.account_alert_preferences .mainContentBlock.insideSidebar .xenForm h3.sectionHeader {
	color: #000000;
	border-bottom: solid 1px rgb(228,228,228);
	padding-bottom: 6px;
}
.account_following .FollowList.memberList .memberListItem,
.account_ignored .FollowList.memberList .memberListItem {
	padding-right: 0 !important;
	padding-left: 0 !important;
	border-left: 0;
	border-right: 0;
}
textarea.StatusEditor {
	margin-top: 0 !important;
}
.online_list ul.tabs + div.section {
	padding: 12px;
	border: solid 1px rgb(228,228,228);
	border-top: 0;
	background-color: rgb(255, 255, 255);
}

/* Login Button */

.section.loginButton .secondaryContent {
	border: 0;
	padding: 0;
}
#loginBar #ctrl_password {
	font-size: 18px;
}
#loginBar .xenForm .ctrlUnit.submitUnit {
	background-color: transparent;
}

.errorPanel
{
	margin: 12px 0 24px !important;
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
	margin-top: 0 !important;
}
.error_with_login #pageLogin {
	border: solid 1px  rgb(228, 228, 228) ;
	background-color: #ffffff;
	padding: 24px;
}
.error_with_login #pageLogin .ctrlUnit.submitUnit {
	margin: 0 -24px -24px !important;
}
#loginBar form.eAuth .ctrlWrapper
{
	border-right: 1px solid #43484B !important;
	padding-right: 12px;
}
.formValidationInlineError {
	-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important;
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
	padding: 6px !important;
}
#ctrl_username_email,
#recaptcha_response_field {
	width: 85% !important;
}

.choose-style a:before {
	background-image: url('styles/pixelgoose/metro/blue/xenforo/chooser-icons.svg');
	background-repeat: no-repeat;
	background-position: -21px top;
	content: "";
	display: inline-block;
	height: 16px;
	margin-bottom: -3px;
	margin-right: 6px;
	width: 16px;
}
.choose-lang a:before  {
	background-image: url('styles/pixelgoose/metro/blue/xenforo/chooser-icons.svg');
	background-repeat: no-repeat;
	background-position: 0 top;
	content: "";
	display: inline-block;
	height: 16px;
	margin-bottom: -3px;
	margin-right: 6px;
	width: 21px;
}
.style_chooser .section.styleChooser {
	border: solid 1px  rgb(228, 228, 228) ;
	background-color: #ffffff;
	padding: 24px;
}
.style_chooser .section.styleChooser h3.primaryContent {
	border: 0;
}
.message_page .messageBody {
	border: solid 1px  rgb(228, 228, 228) ;
	background-color: #ffffff;
	padding: 24px;
}

/* RTL fixes */

html[dir="RTL"] .node .forumNodeInfo.unread .nodeIcon,
html[dir="RTL"] .node .categoryForumNodeInfo.unread .nodeIcon {
	background-position: -27px 0 !important;
}
html[dir="RTL"] .node .linkNodeInfo .nodeIcon {
	background-position: -100px 0;
}
html[dir="RTL"] .node .pageNodeInfo .nodeIcon {
	background-position: -63px 0;
}
html[dir="RTL"] .node .forumNodeInfo .nodeIcon, .node .categoryForumNodeInfo .nodeIcon {
	background-position: 9px 0;
}


/* SVG paths */
.LoggedIn .discussionListItem .ReadToggle {
	background: url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat 10000px 0 !important;
}
.event .content .thread .icon {
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -96px -16px !important;
}

.event .content .forum .icon {
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -80px -16px !important;
}
.footerLinks a.globalFeed {
	background: url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -112px -16px !important;
}
.messageNotices .icon {
	background: url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat 1000px 1000px !important;
}
.rating .star {
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -126px -32px !important;
}
#QuickSearchPlaceholder {
	background: transparent url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -144px 0px !important;
}
.thread_view .threadAlerts .icon {
	background: url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -1000px -1000px !important;
}
.alerts .newIcon,
.alertsPopup .newIcon {
	background: url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.svg') no-repeat -144px -40px !important;
}
#pageNodeContent {
	border: solid 1px  rgb(228, 228, 228) ;
	background-color: #ffffff;
	padding: 24px !important;
}
#pageNodeNavigation
{
	margin-right: 12px !important;
	margin-bottom: 12px !important;
	margin-left: -12px;
	margin-top: -12px;	

	padding: 0 !important;
	border: 1px solid rgb(228, 228, 228);
	-webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
	box-shadow: none !important;
}
#pageNodeContent #pageNodeNavigation .blockLinksList {
	font-size: 13px !important;
}


/* Reset HTML5 Search Input in Webkit */
input[type=search]::-webkit-search-cancel-button,
input[type=search]::-webkit-search-decoration,
input[type=search]::-webkit-search-results-button,
input[type=search]::-webkit-search-results-decoration {
	-webkit-appearance:none; 
} 
input[type=search] {
	-webkit-appearance:textfield;
}
input,
textarea {
	/*-webkit-appearance: none;*/
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}

/* Find new posts */

.find_new_posts_none .tabs,
.find_new_posts .tabs,
.find_new_profile_posts .tabs {
	padding: 0;
	background-color: inherit;
}
.find_new_posts_none .tabs li a,
.find_new_posts .tabs li a,
.find_new_profile_posts .tabs li a   {
	padding-left: 36px;
	padding-right: 36px;
	font-weight: bold;
}
.find_new_posts_none .tabs + .section,
.find_new_posts .tabs + .section,
.find_new_profile_posts .tabs + .section {
	margin: 0;
	padding: 12px;
	background-color: rgb(255, 255, 255);
	border: solid 1px rgb(228,228,228);
	border-top-width: 0;
}
.find_new_profile_posts form.section ol#ProfilePostList {
	background-color: rgb(255, 255, 255);
	border: solid 1px rgb(228,228,228);
	padding: 12px;
}
.find_new_profile_posts form.section ol#ProfilePostList li:first-child {
	margin-top: 0 !important;
}
.find_new_profile_posts form.section ol#ProfilePostList li:last-child {
	margin-bottom: 0 !important;
	padding-bottom: 0 !important;
	border-bottom: 0;
}

/* Multiquote */

li.MultiQuoteItem {
	border-bottom: solid 1px rgb(228,228,228);
}
li.MultiQuoteItem:last-child {
	border-bottom: 0;
}
li.MultiQuoteItem .primaryContent {
	border: 0;
}

/* Online status */

.messageUserBlock div.avatarHolder .onlineMarker {

}

/* Message responses */

.messageSimpleList .messageInfo .messageResponse .comment {
	border: solid 1px rgb(228,228,228);
	background-color: rgb(246, 246, 246);
	padding: 6px;
}
.find_new_profile_posts form.section ol#ProfilePostList li li.comment:last-child {
	border-bottom: solid 1px rgb(228,228,228);
	padding-bottom: 6px !important;
}
.messageSimpleList .messageInfo .messageResponse .likesSummary {
	background-color: rgb(246, 246, 246);
	border: solid 1px rgb(228,228,228);
	padding: 6px;
}

/* Profile post list item */

.profilePostListItem {
	margin: 12px 0 !important;
	padding-top: 12px !important;
}
.profilePostListItem:last-child {
	margin-bottom: 0 !important;
}
.xenOverlay #ProfilePostList .messageSimple {
	margin: 0 !important;
	padding: 12px;
}

/* Polls */

.PollContainer {
	border: solid 1px rgb(228, 228, 228);
}
.PollContainer > .pollBlock {
	margin: 0;
}
.PollContainer .pollBlock .questionMark
{
	color: rgb(46, 53, 57);
	-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
}
.PollContainer .pollBlock .question .questionText {
	color: inherit;
}
.PollContainer .pollBlock .pollOption label:hover {
	-webkit-border-radius: 0px; -moz-border-radius: 0px; -khtml-border-radius: 0px; border-radius: 0px;
}
.PollContainer .pollBlock .pollOptions,
.PollContainer .pollBlock .pollResults {
	margin: 6px 0 12px;
	padding: 6px 0;
}
.PollContainer .pollBlock .question {
	padding-right: 10px;
}
.thread_poll_edit form.xenForm {
	background-color: rgb(255, 255, 255);
	border: solid 1px  rgb(228, 228, 228);
	padding: 24px;
}
.thread_poll_edit .xenForm > .ctrlUnit.submitUnit {
    margin-bottom: -24px !important;
    margin-left: -24px !important;
    margin-right: -24px !important;
}
.thread_poll_edit .xenForm > .textHeading,
.thread_poll_edit .xenForm > .ctrlUnit:first-child  {
	margin-top: 0 !important;
}


/* Misc */

.importantMessage {
	padding: 12px;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
}
.xenOverlay .formOverlay .ctrlUnit > dd .explain ul li a {
	color: rgb(67, 166, 223);
}

/* Tags */

.taggingInput .tag {
	border: none;
	-webkit-border-radius: 0; -moz-border-radius: 0; -khtml-border-radius: 0; border-radius: 0;
	background-image: none;
	background-color: rgb(67, 166, 223);
	color: rgb(255, 255, 255);
	-webkit-box-shadow: none; -moz-box-shadow: none; -khtml-box-shadow: none; box-shadow: none;
	line-height: 19px;
}
.heading span.prefix {
	background-color: rgba(228, 228, 228, 0.3);
}

/* Floating notices */

.FloatingContainer .floatingItem {
	padding: 12px !important;
	margin-bottom: 24px !important;
	border: none !important;
	-webkit-border-radius: 0 !important; -moz-border-radius: 0 !important; -khtml-border-radius: 0 !important; border-radius: 0 !important;
	-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important;
}

/* Responsive */


@media (max-width:800px)
{
	.Responsive .message .newIndicator span	{
		display: block !important;
	}
	.Responsive .header-modern #searchBar {
		left: 12px !important;
	}
}
@media (max-width:610px)
{
	.Responsive .navTabs
	{
		padding-left: 0px;
		padding-right: 0px;
	}
	.Responsive .discussionListItem .noteRow {
		padding: 12px;
	}
	.Responsive .withSearch .navTabs .navTab.selected .blockLinksList
	{
		margin-right: 6px;
	}
	.Responsive .node .nodeExtraNote {
		text-align: left;
	}
	.Responsive .node .nodeLastPost {
		font-size: 11px;
		margin-left: 46px !important;
	}
	.Responsive .sidebar {
		width: auto !important;
	}
}
@media (max-width:480px)
{
	.footer .choosers,
	.footer .footerLinks {
		float: none;
		text-align: center;
		
	}
	.footer .choosers dd,
	.footer .footerLinks li {
		display: inline-block;
		float: none;
	}
	.footer .choosers {
		margin-bottom: 12px;
	}
	.xenForm .checkboxColumns > dd > ul li,
	ul.checkboxColumns li {
		padding-left: 0;
	}
	.Responsive .message .messageInfo
	{
		padding: 12px !important;
	}
	.Responsive .messageUserBlock div.avatarHolder
	{
		padding: 0px !important;
	}
	.Responsive .messageUserBlock .userBanner
	{
		-webkit-border-top-left-radius: 0 !important; -moz-border-radius-topleft: 0 !important; -khtml-border-top-left-radius: 0 !important; border-top-left-radius: 0 !important;
		-webkit-border-top-right-radius: 0 !important; -moz-border-radius-topright: 0 !important; -khtml-border-top-right-radius: 0 !important; border-top-right-radius: 0 !important;
		position: relative !important;
		display: block !important;
		margin: 0 auto !important;
	}
	
		.Responsive .messageUserBlock .userBanner span
		{
			display: block !important;
		}
	.xenOverlay form.InlineMessageEditor .buttonContainer .button {
		margin-left: 0 !important;
		margin-bottom: 12px !important;
	}
	.Responsive .xenOverlay a.close 
	{
		top: 8px !important;
	}
	.Responsive .quickReply {
		border: 0 !important;
	}
	.Responsive #QuickReply {
		padding: 0 !important;
	}
	.Responsive #QuickReply .submitUnit {
		text-align: center !important;
	}
	.Responsive form#QuickReply .button,
	.Responsive form#QuickReply .buttonProxy {
		margin-bottom: 12px;
	}
	.Responsive .titleBar + #ThreadReply {
		background-color: transparent !important;
		border: 0 !important;
		padding: 0 !important;
	}
	.Responsive .xenForm .ctrlUnit.submitUnit > dd {
		text-align: center !important;
	}
	.Responsive .xenForm .ctrlUnit.submitUnit > dd .button,
	.Responsive .xenForm .ctrlUnit.submitUnit > dd .buttonProxy {
		margin-bottom: 12px;
	}
	.Responsive .post_edit form.xenForm {
		border: 0 !important;
		background-color: transparent !important;
		padding: 0 !important;
	}
	.Responsive .profilePage .mast > * {
		max-width: 100% !important;
	}
	.Responsive .profilePage .profileContent {
	    margin-left: 12px !important;
	}
	.Responsive .tabs li {
		border-bottom: solid 3px rgb(255, 255, 255) !important;
	}
	.Responsive .tabs li:last-child {
		border-bottom: 0 !important;
	}
	.Responsive .header-modern #navigation .navTabs .SplitCtrl {
	    bottom: 10px !important;
	    right: 4px !important;
	}
	.Responsive .xenOverlay .formOverlay,
	.Responsive .xenOverlay .section,
	.Responsive .xenOverlay .sectionMain {
	    -webkit-border-radius: 0px !important; -moz-border-radius: 0px !important; -khtml-border-radius: 0px !important; border-radius: 0px !important;
	    border-width: 0px !important;
	}
	.Responsive .xenOverlay div.xenForm dl.ctrlUnit,
	.Responsive .xenOverlay .xenForm dl.ctrlUnit {
		padding: 12px !important;
	}
	.Responsive .conversation_add .xenForm {
		padding: 12px !important;
	}
	.Responsive .conversation_add .xenForm .ctrlUnit.submitUnit {
		margin-left: -12px !important;
		margin-right: -12px !important;
	}
	.Responsive .discussionListItem .titleText {
		padding: 12px 12px 12px 20px !important;
	}
	.Responsive .textCtrl {
		font-size: 14px !important;
	}
	.Responsive form.DiscussionListOptions .controlGroup > * {
		margin-bottom: 12px !important;
	}
	.Responsive .DiscussionListOptions .buttonGroup {
		float: left !important;
	}
	.Responsive .discussionList .sectionFooter.SelectionCountContainer {
		text-align: center;
	}
	.Responsive .discussionList .sectionFooter.SelectionCountContainer > * {
		float: none !important;
	}
	.Responsive .member_notable ul.tabs,
	.Responsive .online_list  ul.tabs {
		padding-right: 0;
	}
	.Responsive .member_notable ul.tabs li a,
	.Responsive .online_list ul.tabs li a,
	.Responsive .search_form ul.tabs li a,
	.Responsive ul.tabs li a {
		margin-right: 0 !important;
		border-bottom: solid 1px rgb(228, 228, 228) !important;
		padding-bottom: 0 !important;
	}
	.Responsive .search_form_profile_post ul.tabs li a {
		margin-bottom: 0 !important;
	}
	.Responsive .member_notable ul.tabs li.active,
	.Responsive .online_list  ul.tabs li.active,
	.Responsive .search_form  ul.tabs li.active {
		border-bottom: 0 !important;
	}
	.Responsive ul.tabs li.active a {
		background-color: rgb(246, 246, 246) !important;
	}
	.Responsive .search_form_profile_post ul.tabs li.active {
		border-bottom: solid 1px rgb(228, 228, 228) !important;
	}
	.Responsive .search_form_profile_post ul.tabs li.active:last-child {
		border-bottom: 0 !important;
	}
	.Responsive [class*="search_form"] .xenForm {
		padding: 12px !important;
	}
	.Responsive [class*="search_form"] .xenForm .ctrlUnit.submitUnit {
		margin: 12px -12px -12px !important;
	}
	.Responsive .xenForm .tabs,
	.Responsive .xenFormTabs {
		padding: 0 !important;
		border-bottom: 0 !important;
	}
	.Responsive.LoggedIn .discussionListItem .unreadLink,
	.Responsive.LoggedIn .discussionListItem .ReadToggle {
		top: 15px !important;
	}
	.Responsive .help_index .baseHtml dl:first-child {
		margin-top: 12px !important;
	}
	.Responsive .help_index .baseHtml dl {
		margin: 12px !important;
	}
	.Responsive .help_index .baseHtml dt {
		margin-bottom: 12px !important;	
	}
	.Responsive .navigationSideBar > ul
	{
		border: 0 !important;
		-webkit-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -moz-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; -khtml-box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important; box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3) !important;
	}
	.Responsive .navigationSideBar > ul.menuVisible ul li a {
		border-left: 0 !important;
	}
	.Responsive .help_cookies .mainContentBlock,
	.Responsive .help_terms .mainContentBlock {
		padding: 12px !important;
	}
	.Responsive .navigationSideBar + .mainContentBlock.insideSidebar {
		padding: 12px !important;
	}
	.Responsive .account_likes .mainContentBlock.insideSidebar .eventList .event {
		padding-left: 0 !important;
		padding-right: 0 !important;
	}
	.Responsive .discussionListItem .listBlock.stats dl {
		padding: 0 !important;
	}
	.Responsive .message .newIndicator {
		margin-top: 0 !important;
	}
	.Responsive .register_form .titleBar + .xenForm {
		padding: 12px;
	}
	.Responsive .register_form .xenForm .submitUnit {
		margin: -12px !important;
	}
	.Responsive .thread_create .xenForm {
		padding: 12px;	
	}
	.Responsive .thread_create #ThreadCreate.xenForm .textHeading ~ .ctrlUnit.submitUnit {
		margin: -12px !important;
		margin-top: inherit !important;
	}
}

