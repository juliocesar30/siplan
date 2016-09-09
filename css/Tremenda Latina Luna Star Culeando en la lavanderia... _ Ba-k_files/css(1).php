@charset "UTF-8";

/* --- SV_rrssbDefault.css --- */

.rrssb-buttons.large-format li a, .rrssb-buttons.large-format li a .rrssb-text {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
}
.rrssb-buttons, .rrssb-buttons li, .rrssb-buttons li a {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}
.clearfix {
    *zoom: 1;
}
.clearfix:after {
    clear: both;
}
.clearfix:before, .clearfix:after {
    content: " ";
    display: table;
}
.rrssb-buttons {

    height: 36px;
    margin: 0;
    padding: 0;
    width: 100%}
.rrssb-buttons li {
    float: left;
    height: 100%;
    line-height: 13px;
    list-style: none;
    margin: 0;
    padding: 0 2.5px;
}
.rrssb-buttons li.rrssb-facebook a {
    background-color: #3b5998;
}
.rrssb-buttons li.rrssb-facebook a:hover {
    background-color: #2C4A89;
}
.rrssb-buttons li.rrssb-twitter a {
    background-color: #00aced;
}
.rrssb-buttons li.rrssb-twitter a:hover {
    background-color: #009FE0;
}
.rrssb-buttons li.rrssb-linkedin a {
    background-color: #007bb6;
}
.rrssb-buttons li.rrssb-linkedin a:hover {
    background-color: #006EA9;
}
.rrssb-buttons li.rrssb-googleplus a {
    background-color: #dd4b39;
}
.rrssb-buttons li.rrssb-googleplus a:hover {
    background-color: #D03E2C;
}
.rrssb-buttons li.rrssb-tumblr a {
    background-color: #32506d;
}
.rrssb-buttons li.rrssb-tumblr a:hover {
    background-color: #254360;
}
.rrssb-buttons li.rrssb-reddit a {
    background-color: #5f99cf;
}
.rrssb-buttons li.rrssb-reddit a:hover {
    background-color: #528CC2;
}
.rrssb-buttons li.rrssb-pinterest a {
    background-color: #cc2127;
}
.rrssb-buttons li.rrssb-pinterest a:hover {
    background-color: #BF141A;
}
.rrssb-buttons li.rrssb-pocket a {
    background-color: #d3505a;
}
.rrssb-buttons li.rrssb-pocket a:hover {
    background-color: #C6434D;
}
.rrssb-buttons li.rrssb-buffer a {
    background-color: #323b43;
}
.rrssb-buttons li.rrssb-buffer a:hover {
    background-color: #252E36;
}
.rrssb-buttons li.rrssb-email a {
    background-color: #3498db;
}
.rrssb-buttons li.rrssb-email a:hover {
    background-color: #278BCE;
}
.rrssb-buttons li a {
    font-weight: bold;
font-size: 11px;
font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
color: #fff;
-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
text-transform: uppercase;
text-decoration: none !important;

    display: block;
    height: 100%;
    padding: 11px 7px 12px 27px;
    position: relative;
    text-align: center;
    width: 100%;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transition: background-color 0.2s ease-in-out;
    -moz-transition: background-color 0.2s ease-in-out;
    -o-transition: background-color 0.2s ease-in-out;
    transition: background-color 0.2s ease-in-out;
}
.rrssb-buttons li a .rrssb-icon {
    display: block;
    height: 17px; /* changed from 100% to fix overlay issue */
    left: 10px;
    padding-top: 9px;
    position: absolute;
    top: 0;
    width: 10%}
.rrssb-buttons li a .rrssb-icon svg {
    height: 17px;
    width: 17px;
}
.rrssb-buttons li a .rrssb-icon svg path, .rrssb-buttons li a .rrssb-icon svg polygon {
    fill: #fff;
}
.rrssb-buttons li a .rrssb-text {
    color: #fff;
}
.rrssb-buttons li a:active {
    -webkit-box-shadow: inset 1px 3px 15px 0 rgba(22, 0, 0, 0.25); -moz-box-shadow: inset 1px 3px 15px 0 rgba(22, 0, 0, 0.25); -khtml-box-shadow: inset 1px 3px 15px 0 rgba(22, 0, 0, 0.25); box-shadow: inset 1px 3px 15px 0 rgba(22, 0, 0, 0.25);
}
.rrssb-buttons li.small a {
    padding: 0;
}
.rrssb-buttons li.small a .rrssb-icon {
    height: 27px;
    left: auto;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    top: auto;
    width: 100%}
.rrssb-buttons li.small a .rrssb-text {
    visibility: hidden;
}
.rrssb-buttons.large-format {
    height: auto;
}
.rrssb-buttons.large-format li {
    height: auto;
}
.rrssb-buttons.large-format li a {
    -webkit-border-radius: 0.2em; -moz-border-radius: 0.2em; -khtml-border-radius: 0.2em; border-radius: 0.2em;
    font-size: 15px;
    font-size: 1vw;
    line-height: 1vw;
    padding: 7% 0% 7% 12%}
.rrssb-buttons.large-format li a .rrssb-icon {
    left: 7%;
    padding-top: 0;
    width: 12%;
    height: 100%} /* Added height to counter fix medium size button overlap */
.rrssb-buttons.large-format li a .rrssb-icon svg {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
}
.rrssb-buttons.large-format li a .rrssb-text {
    font-size: 15px;
    font-size: 1vw;
}
.rrssb-buttons.large-format li a:hover {
    font-size: 15px;
    font-size: 1vw;
    padding: 7% 0% 7% 12%;
    -webkit-border-radius: 0.2em; -moz-border-radius: 0.2em; -khtml-border-radius: 0.2em; border-radius: 0.2em;
}
.rrssb-buttons.small-format {
    padding-top: 5px;
}
.rrssb-buttons.small-format li {
    height: 80%;
    padding: 0 1.5px;
}
.rrssb-buttons.small-format li a .rrssb-icon {
    height: 100%;
    padding-top: 0;
}
.rrssb-buttons.small-format li a .rrssb-icon svg {
    height: 48%;
    position: relative;
    top: 6px;
    width: 80%}
.rrssb-buttons.tiny-format {
    height: 22px;
    position: relative;
}
.rrssb-buttons.tiny-format li {
    padding-right: 7px;
}
.rrssb-buttons.tiny-format li a {
    background-color: transparent;
    padding: 0;
}
.rrssb-buttons.tiny-format li a .rrssb-icon svg {
    height: 70%;
    width: 100%}
.rrssb-buttons.tiny-format li a:hover, .rrssb-buttons.tiny-format li a:active {
    background-color: transparent;
}

.rrssb-buttons.tiny-format li.rrssb-facebook a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-facebook a .rrssb-icon svg polygon {
    fill: #3b5998;
}
.rrssb-buttons.tiny-format li.rrssb-facebook a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-facebook a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #2C4A89;
}
.rrssb-buttons.tiny-format li.rrssb-twitter a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-twitter a .rrssb-icon svg polygon {
    fill: #00aced;
}
.rrssb-buttons.tiny-format li.rrssb-twitter a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-twitter a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #009FE0;
}
.rrssb-buttons.tiny-format li.rrssb-linkedin a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-linkedin a .rrssb-icon svg polygon {
    fill: #007bb6;
}
.rrssb-buttons.tiny-format li.rrssb-linkedin a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-linkedin a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #006EA9;
}
.rrssb-buttons.tiny-format li.rrssb-googleplus a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-googleplus a .rrssb-icon svg polygon {
    fill: #dd4b39;
}
.rrssb-buttons.tiny-format li.rrssb-googleplus a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-googleplus a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #D03E2C;
}
.rrssb-buttons.tiny-format li.rrssb-tumblr a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-tumblr a .rrssb-icon svg polygon {
    fill: #32506d;
}
.rrssb-buttons.tiny-format li.rrssb-tumblr a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-tumblr a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #254360;
}
.rrssb-buttons.tiny-format li.rrssb-reddit a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-reddit a .rrssb-icon svg polygon {
    fill: #5f99cf;
}
.rrssb-buttons.tiny-format li.rrssb-reddit a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-reddit a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #528CC2;
}
.rrssb-buttons.tiny-format li.rrssb-pinterest a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-pinterest a .rrssb-icon svg polygon {
    fill: #cc2127;
}
.rrssb-buttons.tiny-format li.rrssb-pinterest a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-pinterest a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #BF141A;
}
.rrssb-buttons.tiny-format li.rrssb-pocket a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-pocket a .rrssb-icon svg polygon {
    fill: #d3505a;
}
.rrssb-buttons.tiny-format li.rrssb-pocket a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-pocket a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #C6434D;
}
.rrssb-buttons.tiny-format li.rrssb-buffer a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-pocket a .rrssb-icon svg polygon {
    fill: #323b43;
}
.rrssb-buttons.tiny-format li.rrssb-buffer a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-pocket a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #252E36;
}
.rrssb-buttons.tiny-format li.rrssb-email a .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-email a .rrssb-icon svg polygon {
    fill: #3498db;
}
.rrssb-buttons.tiny-format li.rrssb-email a .rrssb-icon:hover .rrssb-icon svg path, .rrssb-buttons.tiny-format li.rrssb-email a .rrssb-icon:hover .rrssb-icon svg polygon {
    fill: #278BCE;
}

/* rssb options CSS */


.quickReply {
    margin-top: 10px;
}


.share-container.clearfix {
    word-wrap: normal;
    margin: 10px 0;
    
    max-width: 100%;
    
    
}


@media (max-width:800px)
{
    .Responsive .share-container.clearfix {
        
        
    }

}
@media (max-width:610px)
{
    .Responsive .share-container.clearfix {
        
        
    }
}
@media (max-width:480px)
{
    .Responsive .share-container.clearfix {
        
        
    }

}



/* --- bb_code.css --- */

/* .bbCodeX classes are designed to exist inside .baseHtml. ie: they have no CSS reset applied */

.bbCodeBlock
{
	margin: 1em 160px 1em 0;
overflow: auto;

}

	.bbCodeBlock .bbCodeBlock,
	.hasJs .bbCodeBlock .bbCodeSpoilerText,
	.messageList.withSidebar .bbCodeBlock
	{
		margin-right: 0;
	}

	/* mini CSS reset */
	.bbCodeBlock pre,
	.bbCodeBlock blockquote
	{
		margin: 0;
	}
	
	.bbCodeBlock img
	{
		border: none;
	}

.bbCodeBlock .type
{
	font-weight: bold;
font-size: 13px;
font-family: 'Open Sans', Helvetica, Arial, sans-serif;
background-position: top;
padding: 12px 0 6px;
border-bottom: 1px solid rgb(228,228,228);

}

.bbCodeBlock pre,
.bbCodeBlock .code
{
	font-size: 10pt;
font-family: Consolas, 'Courier New', Courier, monospace;
background-color: rgb(246, 246, 246);
padding: 12px;
border: 1px solid rgb(228,228,228);
border-top-style: none;
word-wrap: normal;
overflow: auto;
line-height: 1.24;
min-height: 30px;
max-height: 500px;
_width: 600px;
direction: ltr;

}

.bbCodeBlock .code
{
	white-space: nowrap;
}

.bbCodeQuote
{
	overflow: auto;

}

.bbCodeQuote .attribution
{
	font-weight: bold;
border-bottom: 1px solid rgb(228,228,228);

}

.bbCodeQuote .quoteContainer
{
	overflow: hidden;
	position: relative;
	
	font-style: italic;
font-size: 13px;
background-color: rgb(246, 246, 246);
padding: 12px;
border: 1px solid rgb(228,228,228);

}


	.bbCodeQuote .quoteContainer .quote
	{
		max-height: 150px;
		overflow: hidden;
		padding-bottom: 1px;
	}
	
		.NoJs .bbCodeQuote .quoteContainer .quote
		{
			max-height: none;
		}

	.bbCodeQuote .quoteContainer .quoteExpand
	{		
		display: none;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
		position: absolute;
		height: 80px;
		top: 94px;
		left: 0;
		right: 0;
		
		font-size: 11px;
		line-height: 1;
		text-align: center;
		color: #f9bc6d;
		cursor: pointer;
		padding-top: 65px;
		background: -webkit-linear-gradient(top, rgba(246, 246, 246, 0) 0%, rgb(246, 246, 246) 80%);
		background: -moz-linear-gradient(top, rgba(246, 246, 246, 0) 0%, rgb(246, 246, 246) 80%);
		background: -o-linear-gradient(top, rgba(246, 246, 246, 0) 0%, rgb(246, 246, 246) 80%);
		background: linear-gradient(to bottom, rgba(246, 246, 246, 0) 0%, rgb(246, 246, 246) 80%);
		
		border-bottom-left-radius: ;
		border-bottom-right-radius: ;
	}
	
	.bbCodeQuote .quoteContainer .quoteExpand.quoteCut
	{
		display: block;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quote
	{
		max-height: none;
	}
	
	.bbCodeQuote .quoteContainer.expanded .quoteExpand
	{
		display: none;
	}


	.bbCodeQuote img
	{
		max-height: 150px;
	}
	
	.bbCodeQuote iframe,
	.bbCodeQuote .fb_iframe_widget,
	.bbCodeQuote object,
	.bbCodeQuote embed
	{
		max-width: 200px;
		max-height: 150px;
	}
	
	.bbCodeQuote iframe:-webkit-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-moz-full-screen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:-ms-fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
	.bbCodeQuote iframe:fullscreen
	{
		max-width: none;
		max-height: none;
	}
	
.bbCodeSpoilerButton
{
	margin: 5px 0;
	max-width: 99%;
}

	.bbCodeSpoilerButton > span
	{
		display: inline-block;
		max-width: 100%;
		white-space: nowrap;
		text-overflow: ellipsis;
		overflow: hidden;
	}
	
.hasJs .bbCodeSpoilerText
{
	display: none;
	background-color: rgb(255, 255, 255);
padding: 12px;
margin-top: 0;
margin-right: 160px;
margin-bottom: 12px;
border: 1px solid rgb(228, 228, 228);
overflow: auto;

}

	.hasJs .bbCodeSpoilerText .bbCodeSpoilerText,
	.hasJs .bbCodeSpoilerText .bbCodeBlock,
	.hasJs .messageList.withSidebar .bbCodeSpoilerText
	{
		margin-right: 0;
	}
	
.NoJs .bbCodeSpoilerContainer
{
	background-color: rgb(20,20,20); /* fallback for browsers without currentColor */
	background-color: currentColor;
}

	.NoJs .bbCodeSpoilerContainer > .bbCodeSpoilerText
	{
		visibility: hidden;
	}

	.NoJs .bbCodeSpoilerContainer:hover
	{
		background-color: transparent;
	}
	
		.NoJs .bbCodeSpoilerContainer:hover > .bbCodeSpoilerText
		{
			visibility: visible;
		}


@media (max-width:800px)
{
	.Responsive .bbCodeBlock,
	.Responsive.hasJs .bbCodeSpoilerText
	{
		margin-right: 0;
	}
}


/* --- facebook.css --- */

a.fbLogin,
#loginBar a.fbLogin
{
	display: inline-block;
	width: 180px;
	height: 22px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	cursor: pointer;
	
	background: #29447e url('//b.s-static.ak.facebook.com/images/connect_sprite.png');
	background-repeat: no-repeat;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	background-position: left -188px;
	padding: 0px 0px 0px 1px;
	outline: none;
	
	text-decoration: none;
	color: white;
	font-weight: bold;
	font-size: 11px;
	line-height: 14px;
}

a.fbLogin:active,
#loginBar a.fbLogin:active
{
	background-position: left -210px;
}

a.fbLogin:hover,
#loginBar a.fbLogin:hover
{
	text-decoration: none;
}

	a.fbLogin span
	{
		background: #5f78ab url('//b.s-static.ak.facebook.com/images/connect_sprite.png');
		border-top: solid 1px #879ac0;
		border-bottom: solid 1px #1a356e;
		display: block;
		padding: 2px 4px 3px;
		margin: 1px 1px 0px 21px;
		text-shadow: none;
		white-space: nowrap;
		overflow: hidden;
	}

	a.fbLogin:active span
	{
		border-bottom: solid 1px #29447e;
		border-top: solid 1px #45619d;
		background: #4f6aa3;
		text-shadow: none;
	}

/* --- login_bar.css --- */

/** Login bar basics **/

#loginBar
{
	color: rgb(228,228,228);
background-color: rgb(46, 53, 57);
border-bottom-style: none;
position: relative;
z-index: 1;

}

	#loginBar .ctrlWrapper
	{
		margin: 0 10px;
	}

	#loginBar .pageContent
	{
		padding-top: 3px;
		position: relative;
		_height: 0px;
	}

	#loginBar a
	{
		color: rgb(67, 166, 223);

	}

	#loginBar form
	{
		padding: 5px 0;
margin: 0 auto;
display: none;
line-height: 20px;
position: relative;

	}
	
		#loginBar .xenForm .ctrlUnit,		
		#loginBar .xenForm .ctrlUnit > dt label
		{
			margin: 0;
			border: none;
		}
	
		#loginBar .xenForm .ctrlUnit > dd
		{
			position: relative;
		}
	
	#loginBar .lostPassword,
	#loginBar .lostPasswordLogin
	{
		font-size: 11px;
	}
	
	#loginBar .rememberPassword
	{
		font-size: 11px;
	}

	#loginBar .textCtrl
	{
		color: rgb(255, 255, 255);
background-color: rgb(78, 87, 92);
border: 0 !important;

	}
	
	#loginBar .textCtrl[type=text]
	{
		font-weight: bold;
font-size: 18px;

	}

	#loginBar .textCtrl:-webkit-autofill /* http://code.google.com/p/chromium/issues/detail?id=1334#c35 */
	{
		background: rgb(78, 87, 92) !important;
		color: rgb(255, 255, 255);
	}

	#loginBar .textCtrl:focus
	{
		color: rgb(20,20,20);
background: rgb(255, 255, 255) none;

	}
	
	#loginBar input.textCtrl.disabled
	{
		color: rgb(228,228,228);
background-color: rgb(20,20,20);
border-color: rgb(43,72,92);

	}
	
	#loginBar .button
	{
		min-width: 85px;
		*width: 85px;
	}
	
		#loginBar .button.primary
		{
			font-weight: bold;
		}
		
/** changes when eAuth is present **/

#loginBar form.eAuth
{
	-x-max-width: 700px; /* normal width + 170px */
}

	#loginBar form.eAuth .ctrlWrapper
	{
		border-right: 1px dotted rgb(61, 152, 204);
		margin-right: 200px;
		-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	}

	#loginBar form.eAuth #eAuthUnit
	{
		position: absolute;
		top: 0px;
		right: 10px;
	}

		#eAuthUnit li
		{
			margin-top: 10px;
			line-height: 0;
		}
	
/** handle **/

#loginBar #loginBarHandle
{
	font-size: 13px;
color: rgb(255, 255, 255);
background-color: rgb(46, 53, 57);
padding: 0 12px;
margin-right: 0;
position: absolute;
right: 0px;
bottom: -30px;
text-align: center;
z-index: 1;
line-height: 32px;

}


@media (max-width:800px)
{
	.Responsive #loginBar form.eAuth .ctrlWrapper
	{
		border-right: none;
		margin-right: 10px;
	}

	.Responsive #loginBar form.eAuth #eAuthUnit
	{
		position: static;
		width: 180px;
		margin: 0 auto 10px;
	}
}


/* --- message.css --- */



.messageList
{
	
}

.messageList .message
{
	background-color: rgb(242, 242, 242);
margin-bottom: 12px;
border: 1px solid rgb(228,228,228);

}

/* clearfix */ .messageList .message { zoom: 1; } .messageList .message:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

/*** Message block ***/

.message .messageInfo
{
	padding: 12px;
margin-left: 160px;
border-width: 0;

	zoom: 1;
}

	.message .newIndicator
	{
		font-size: 11px;
color: #ffffff;
background-color: rgb(67, 166, 223);
padding: 4px 8px 4px 12px;
margin: -5px -13px 5px 5px;
display: block;
float: right;
position: relative;
/*-webkit-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -moz-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); -khtml-box-shadow: 1px 1px 3px rgba(0,0,0, 0.25); box-shadow: 1px 1px 3px rgba(0,0,0, 0.25);*/
margin-right: -13px !important;

		
		margin-right: -5px;
	}
	
		.message .newIndicator span
		{
			border-bottom:  11px solid rgb(0, 0, 0); border-bottom:  11px solid rgba(0, 0, 0, 0); _border-bottom:  11px solid rgb(0, 0, 0);
border-left: 8px solid rgb(255, 255, 255);
border-top:  11px solid rgb(0, 0, 0); border-top:  11px solid rgba(0, 0, 0, 0); _border-top:  11px solid rgb(0, 0, 0);
left: 0;
background-color: rgba(0, 0, 0, 0) !important;
height: 0 !important;
position: absolute;
top: 0 !important;
width: 0 !important;

		}

	.message .messageContent
	{
		padding-bottom: 2px;
min-height: 100px;
overflow: hidden;
*zoom: 1;

	}
	
	.message .messageTextEndMarker
	{
		height: 0;
		font-size: 0;
		overflow; hidden;
	}
	
	.message .editDate
	{
		text-align: right;
		margin-top: 5px;
		font-size: 11px;
		color: rgb(150,150,150);
	}

	.message .signature
	{
		font-size: 11px;
color: rgb(150,150,150);
padding-top: 12px;
padding-bottom: 12px;
margin-top: 24px;
margin-bottom: 24px;
border-top: 1px solid rgb(228,228,228);

	}

	.message .messageMeta
	{
		font-size: 11px;
padding: 15px 5px 5px;
margin: -5px;
overflow: hidden;
zoom: 1;
clear: both;

	}

		.message .privateControls
		{
			float: left;

		}

		.message .publicControls
		{
			float: right;

		}
		
			.message .privateControls .item
			{
				margin-right: 10px;
				float: left;
			}

				.message .privateControls .item:last-child
				{
					margin-right: 0;
				}

			.message .publicControls .item
			{
				margin-left: 10px;
				float: left;
			}
	
				.message .messageMeta .control
				{
					
				}
				
					.message .messageMeta .control:focus
					{
						
					}
				
					.message .messageMeta .control:hover
					{
						
					}
				
					.message .messageMeta .control:active
					{
						
					}
	/*** multiquote +/- ***/
			
	.message .publicControls .MultiQuoteControl
	{
		padding-left: 4px;
		padding-right: 4px;
		-webkit-border-radius: 2px; -moz-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
		margin-left: 6px;
		margin-right: -4px;
	}
	
	
	.message .publicControls .MultiQuoteControl.active
	{
		background-color: rgb(228, 228, 228);
	}
	
		.messageNotices li
	{
		font-size: 13px;
color: rgb(255, 255, 255);
background-color: rgb(46, 53, 57);
padding: 12px;
margin: 0 0 12px;
line-height: 16px;

	}
	
		.messageNotices .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			background: url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.png') no-repeat 1000px 1000px;
		}
	
			.messageNotices .warningNotice .icon { background-position: -48px -32px; }		
			.messageNotices .deletedNotice .icon { background-position: -64px -32px; }		
			.messageNotices .moderatedNotice .icon {background-position: -32px -16px; }
	
	.message .likesSummary
	{
		font-size: 13px;
background-color: rgb(226, 245, 255);
padding: 12px;
margin-top: 12px;

	}
	
	.message .messageText > *:first-child
	{
		margin-top: 0;
	}

/* inline moderation changes */

.InlineModChecked .messageUserBlock,
.InlineModChecked .messageInfo,
.InlineModChecked .messageNotices,
.InlineModChecked .bbCodeBlock .type,
.InlineModChecked .bbCodeBlock blockquote,
.InlineModChecked .attachedFiles .attachedFilesHeader,
.InlineModChecked .attachedFiles .attachmentList
{
	background-color: rgb(255, 250, 181);

}

.InlineModChecked .messageUserBlock div.avatarHolder,
.InlineModChecked .messageUserBlock .extraUserInfo
{
	background: transparent;
}

.InlineModChecked .messageUserBlock .arrow span
{
	border-left-color: rgb(255, 250, 181);
}

/* message list */

.messageList .newMessagesNotice
{
	margin: 10px auto;
	padding: 5px 10px;
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	border: 1px solid rgb(228,228,228);
	background: rgb(228, 228, 228) url(styles/pixelgoose/metro/blue/xenforo/gradients/category-23px-light.png) repeat-x top;
	font-size: 11px;
}

/* deleted / ignored message placeholder */

.messageList .message.placeholder
{
}

.messageList .placeholder .placeholderContent
{	
	overflow: hidden; zoom: 1;
	color: rgb(67, 166, 223);
	font-size: 11px;
}

	.messageList .placeholder a.avatar
	{
		float: left;
		display: block;
	}
	
		.messageList .placeholder a.avatar img
		{
			display: block;
			width: 32px;
			height: 32px;
		}
		
	.messageList .placeholder .privateControls
	{
		margin-top: -5px;
	}
	

/* messages remaining link */

.postsRemaining a,
a.postsRemaining
{
	font-size: 11px;
	color: rgb(150,150,150);
}


@media (max-width:800px)
{
	.Responsive .message .newIndicator
	{
		margin-right: 0;
		border-top-right-radius: ;
	}
	
		.Responsive .message .newIndicator span
		{
			display: none;
		}
}

@media (max-width:480px)
{
	.Responsive .message .messageInfo
	{
		margin-left: 0;
		padding: 0 10px;
	}

	.Responsive .message .messageContent
	{
		min-height: 0;
	}	

	.Responsive .message .newIndicator
	{
		margin-right: -5px;
		margin-top: -16px;
	}

	.Responsive .message .postNumber,
	.Responsive .message .authorEnd
	{
		display: none;
	}
	
	.Responsive .message .signature
	{
		display: none;
	}
	
	.Responsive .messageList .placeholder a.avatar
	{
		margin-right: 10px;
	}
}


/* --- message_user_info.css --- */

.messageUserInfo
{
	float: left;
width: 160px;

}

	.messageUserBlock
	{
		padding: 12px;
text-align: center;

		
		position: relative;
	}
		
		.messageUserBlock div.avatarHolder
		{
			
			
			position: relative;	
		}
		
			.messageUserBlock div.avatarHolder .avatar
			{
				display: block;
				font-size: 0;
			}
			
			.messageUserBlock div.avatarHolder .onlineMarker
			{
				position: absolute;
				top: -1px;
				left: -1px;
				
				border: 7px solid transparent;
border-top-color: rgb(127, 185, 0);
border-left-color: rgb(127, 185, 0);
-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
-webkit-border-bottom-left-radius: 3px; -moz-border-radius-bottomleft: 3px; -khtml-border-bottom-left-radius: 3px; border-bottom-left-radius: 3px;
top: -13px;
left: -13px;

			}
			
		.messageUserBlock h3.userText
		{
			padding-top: 12px;
padding-bottom: 12px;

		}
		
		.messageUserBlock .userBanner
		{
			display: block;
			margin-bottom: 5px;
			margin-left: -6px;
			margin-right: -6px;
		}
		
		.messageUserBlock .userBanner:last-child
		{
			margin-bottom: 0;
		}
	
		.messageUserBlock a.username
		{
			font-weight: bold;
font-size: 14px;
margin-bottom: 3px;
display: block;
overflow: hidden;
line-height: 16px;
text-align: center;

			
		}
		
		.messageUserBlock .userTitle
		{
			font-size: 13px;
margin-bottom: 6px;
display: block;

		}
		
		.messageUserBlock .extraUserInfo
		{
			font-size: 11px;

		}
		
			.messageUserBlock .extraUserInfo dl
			{
				margin: 2px 0 0;
			}
							
			.messageUserBlock .extraUserInfo img
			{
				max-width: 100%;
			}
		
		.messageUserBlock .arrow
		{
			position: absolute;
			top: 10px;
			right: -10px;
			
			display: block;
			width: 0px;
			height: 0px;
			line-height: 0px;
			
			border: 10px solid transparent;
			border-left-color: ;
			-moz-border-left-colors: ;
			border-right: none;
			
			/* Hide from IE6 */
			_display: none;
		}
		
			.messageUserBlock .arrow span
			{
				position: absolute;
				top: -10px;
				left: -11px;
				
				display: block;
				width: 0px;
				height: 0px;
				line-height: 0px;
				
				border: 10px solid transparent;
				border-left-color: ;
				-moz-border-left-colors: ;
				border-right: none;
			}


@media (max-width:480px)
{
	.Responsive .messageUserInfo
	{
		float: none;
		width: auto; 
	}

	.Responsive .messageUserBlock
	{
		overflow: hidden;
		margin-bottom: 5px;
		position: relative;
	}

	.Responsive .messageUserBlock div.avatarHolder
	{
		float: left;
		padding: 5px;
	}

		.Responsive .messageUserBlock div.avatarHolder .avatar img
		{
			width: 48px;
			height: 48px;
		}
		
		.Responsive .messageUserBlock div.avatarHolder .onlineMarker
		{
			top: 4px;
			left: 4px;
			border-width: 6px;
		}

	.Responsive .messageUserBlock h3.userText
	{
		margin-left: 64px;
	}
	
	.Responsive .messageUserBlock .userBanner
	{
		max-width: 150px;
		margin-left: 0;
		margin-right: 0;
		-webkit-border-top-left-radius: 3px; -moz-border-radius-topleft: 3px; -khtml-border-top-left-radius: 3px; border-top-left-radius: 3px;
		-webkit-border-top-right-radius: 3px; -moz-border-radius-topright: 3px; -khtml-border-top-right-radius: 3px; border-top-right-radius: 3px;
		position: static;
		display: inline-block;
	}
	
		.Responsive .messageUserBlock .userBanner span
		{
			display: none;
		}

	.Responsive .messageUserBlock .extraUserInfo
	{
		display: none;
	}

	.Responsive .messageUserBlock .arrow
	{
		display: none;
	}
}


/* --- metro_prefooter_blocks.css --- */

/* Prefooter blocks styling */

.prefooter {
	color: #FFFFFF;
	display: table;
	width: 100%;
	margin-bottom: 12px;
}
.prefooter-column-one {
	background-color: rgb(46, 53, 57);
	vertical-align: top;
	padding: 24px 12px;
	display: table-cell;
}
.prefooter-column-two {
	background-color: rgb(67, 166, 223);
	padding: 24px 12px;
	border-left: solid 12px #F6F6F6;
	vertical-align: top;
	display: table-cell;
	width: 276px;
}
.prefooter h6 {
	color: #FFFFFF;
	font-size: 32px;
	font-weight: 300;
	text-transform: lowercase;
	margin-bottom: 6px;
}

.prefooter-block-01, .prefooter-block-02 .prefooter-block-03 { 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
}
.prefooter-block-01 {
	float: left;
	width: 70%;
	padding-right: 12px;
}
.prefooter-block-01.single,
.prefooter-block-02.single {
	width: auto;
	padding-right: 0;
}
.prefooter-block-01 p {
	margin-bottom: 1em;
	line-height: 1.3em;
}
.about-block p:last-child {
	margin-bottom: 0;
}
.prefooter-block-02 {
	float: left;
	width: 30%;
}
.prefooter-block-02 li {
	line-height: 1.3em;
	margin-bottom: 6px;
}
.prefooter-right {
	float: right;
	width: 244px;
}
.prefooter-block-03 a,
.prefooter-block-04 a {
	color: #ffffff;
	text-decoration: underline;
}
.prefooter-block-03 a:hover,
.prefooter-block-04 a:hover {
	color: #ffffff;
	text-decoration: none;
}
#footer_divider {
	border-bottom: 1px solid #E4E4E4;
	clear: both;
	padding-top: 48px;
}


@media (max-width:800px)
{
	.Responsive .prefooter,
	.Responsive .prefooter-column-one,
	.Responsive .prefooter-column-two
	{
		display: block !important;
		overflow: hidden;
	}
	.Responsive .prefooter-column-one {
		margin-bottom: 12px;
	}
	.Responsive .prefooter-column-two {
		border-left: 0;
		width: 100%;
	}
}


@media (max-width:480px)
{
	.Responsive .prefooter-block-01,
	.Responsive .prefooter-block-02 {
		float: none;
		width: 100%;
	}
}


/* --- metro_social_links.css --- */

.prefooter-block-04 {
	margin-bottom: 24px;
	overflow: hidden;
}
.prefooter-block-04 ul li {
	float: left;
	margin-right: 12px;
	font-size: 30px;
}
.prefooter-block-04 ul li a {
	color: #FFFFFF;
	text-decoration: none;
}
.prefooter-block-04 ul li a:hover {
	text-decoration: none;
	color: rgba(255, 255, 255, 0.65);
}
[class^="icon-"]:before,
[class*=" icon-"]:before {
    margin-left: 0 !important;
    margin-right: 0 !important;
    width: auto !important;
}


@font-face {
  font-family: 'im-icons';
  src: url('./styles/pixelgoose/metro/fonts/im-icons.eot?76428096');
  src: url('./styles/pixelgoose/metro/fonts/im-icons.eot?76428096#iefix') format('embedded-opentype'),
       url('./styles/pixelgoose/metro/fonts/im-icons.woff?76428096') format('woff'),
       url('./styles/pixelgoose/metro/fonts/im-icons.ttf?76428096') format('truetype'),
       url('./styles/pixelgoose/metro/fonts/im-icons.svg?76428096#im-icons') format('svg');
  font-weight: normal;
  font-style: normal;
}
/* Chrome hack: SVG is rendered more smooth in Windozze. 100% magic, uncomment if you need it. */
/* Note, that will break hinting! In other OS-es font will be not as sharp as it could be */
/*
@media screen and (-webkit-min-device-pixel-ratio:0) {
  @font-face {
    font-family: 'im-icons';
    src: url('./images/pixelgoose/metro/fonts/im-icons.svg?76428096#im-icons') format('svg');
  }
}
*/
 
 [class^="icon-"]:before, [class*=" icon-"]:before {
  font-family: "im-icons";
  font-style: normal;
  font-weight: normal;
  speak: none;
 
  display: inline-block;
  text-decoration: inherit;
  width: 1em;
  margin-right: .2em;
  text-align: center;
  /* opacity: .8; */
 
  /* For safety - reset parent styles, that can break glyph codes*/
  font-variant: normal;
  text-transform: none;
     
  /* fix buttons height, for twitter bootstrap */
  line-height: 1em;
 
  /* Animation center compensation - margins should be symmetric */
  /* remove if not needed */
  margin-left: .2em;
 
  /* you can be more comfortable with increased icons size */
  /* font-size: 120%; */
 
  /* Uncomment for 3D effect */
  /* text-shadow: 0 0 0 transparent, 1px 1px 1px rgba(127, 127, 127, 0.3); */
}
 
.icon-facebook-squared:before { content: '\e800'; } /* '' */
.icon-youtube:before { content: '\e801'; } /* '' */
.icon-twitter-squared:before { content: '\e802'; } /* '' */
.icon-twitter:before { content: '\e803'; } /* '' */
.icon-instagramm:before { content: '\e804'; } /* '' */
.icon-pinterest-circled:before { content: '\e805'; } /* '' */
.icon-flickr:before { content: '\e806'; } /* '' */
.icon-gplus-squared:before { content: '\e807'; } /* '' */
.icon-tumblr-squared:before { content: '\e808'; } /* '' */
.icon-linkedin-squared:before { content: '\e809'; } /* '' */
.icon-linkedin:before { content: '\e80a'; } /* '' */
.icon-vkontakte:before { content: '\e80b'; } /* '' */
.icon-weibo:before { content: '\e80c'; } /* '' */
.icon-xing:before { content: '\e80d'; } /* '' */
.icon-xing-squared:before { content: '\e80e'; } /* '' */
.icon-vimeo-squared:before { content: '\e80f'; } /* '' */
.icon-github-circled:before { content: '\e810'; } /* '' */
.icon-github-squared:before { content: '\e811'; } /* '' */
.icon-dribbble:before { content: '\e812'; } /* '' */
.icon-behance:before { content: '\e813'; } /* '' */
.icon-deviantart:before { content: '\e814'; } /* '' */

/* --- thread_view.css --- */

.thread_view .threadAlerts
{
	border: 1px solid rgb(228, 228, 228);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	font-size: 11px;
	margin: 10px 0;
	padding: 5px;
	line-height: 16px;
	background-image: url('styles/pixelgoose/metro/blue/xenforo/gradients/form-button-white-25px.png');
}
	
	.thread_view .threadAlerts dt
	{
		color: rgb(226, 245, 255);
		display: inline;
	}
	
	.thread_view .threadAlerts dd
	{
		color: rgb(43,72,92);
		font-weight: bold;
		display: inline;
	}
	
		.thread_view .threadAlerts .icon
		{
			float: right;
			width: 16px;
			height: 16px;
			margin-left: 5px;
			background: url('styles/pixelgoose/metro/blue/xenforo/xenforo-ui-sprite.png') no-repeat -1000px -1000px;
		}
		
			.thread_view .threadAlerts .deletedAlert .icon { background-position: -64px -32px; }
			.thread_view .threadAlerts .moderatedAlert .icon { background-position: -32px -16px; }
			.thread_view .threadAlerts .lockedAlert .icon { background-position: -16px -16px; }
	
.thread_view .threadAlerts + * > .messageList
{
	border-top: none;
}

.thread_view .threadNotices
{
	background-color: rgb(255, 255, 255);
	border: 1px solid rgb(228,228,228);
	-webkit-border-radius: 5px; -moz-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
	padding: 10px;
	margin: 10px auto;
}

.thread_view .InlineMod
{
	overflow: hidden; zoom: 1;
}

/* --- twitter.css --- */

a.twitterLogin,
#loginBar a.twitterLogin
{
	display: inline-block;
	width: 180px;
	height: 22px;
	-webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;
	cursor: pointer;
	
	background-color: #eee;
	background-image: -webkit-linear-gradient(#fff, #dedede);
	background-image: linear-gradient(#fff, #dedede);
	border: #ccc solid 1px;
	-webkit-border-radius: 3px; -moz-border-radius: 3px; -khtml-border-radius: 3px; border-radius: 3px;
	padding: 3px;
	
	color: #333 !important;
	font-weight: bold;
	font-size: 11px;
	line-height: 14px;
}

	a.twitterLogin span
	{
		display: block;
		background: url('styles/pixelgoose/metro/blue/xenforo/twitter-bird.png') no-repeat;
		background-position: left 0;
		padding-left: 22px;
		text-shadow: 0 1px 0 rgba(255,255,255,.5);
		white-space: nowrap;
		overflow: hidden;
	}
	
a.twitterLogin:hover,
#loginBar a.twitterLogin:hover,
a.twitterLogin:active,
#loginBar a.twitterLogin:active
{
	border-color: #d9d9d9;
	background-image: -webkit-linear-gradient(#f8f8f8, #d9d9d9);
	background-image: linear-gradient(#f8f8f8, #d9d9d9);
	text-decoration: none;
}
