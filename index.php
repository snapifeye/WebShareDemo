<html>
	<head>

		<!-- Meta
================================================== -->
<meta name="twitter:card" content="photo" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta property="og:title" content="My photo from Lili &amp; Roberts Wedding"/>
<meta property="og:type" content="article"/>
<?php
// Check to see if an image ID was passed in the URI
// example: http://events.snapifeye.com/WebShareDemo/?image=<IMAGE ID>
if (!empty($_GET['image']))
{
	// TODO: Add code to place actual image into og:image metadata
	echo "<!-- PHP is working -->";
	echo "<meta property=\"og:image\" content=\"https://i.ytimg.com/vi/LPmCcvE9yuw/mqdefault.jpg\">";
}
else
{
	echo "<meta property=\"og:image\" content=\"https://i.ytimg.com/vi/LPmCcvE9yuw/mqdefault.jpg\">";
}
?>
<meta property="og:description"        content="Having a great time at Lili and Roberts Wedding! Check out my photo here.  " />
<meta property="article:author"        content="Snapifeye" />
<meta property="article:publisher"     content="Snapifeye" />
<!-- Meta / End -->

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script language="javascript">
        function emailCurrentPage(){
            window.location.href="mailto:?subject="+document.title+"&body="+escape(window.location.href);
        }
    </script>

<!-- Snapifeye Display Widget -->
		<script type="text/javascript" src="http://events.snapifeye.com/snapifeye-widget/snapifeye-widget-all.min.js"></script>

		<style>
		html, body { margin: 0px; padding: 0px;background:#70abce;!important }

			.sn-widget-gallery--info--event-name{
				position: absolute;
  				color: #FFFFFF;
			  	width: 100%;
			  	top: 10px;
			  	height: 20px;
				margin-top: 10px;
			  	font-size: 30px;
			  	line-height: 32px;
			  	text-align: center;
}

			.sn-widget-gallery--image{
				position: relative;
  				height:auto;
				width:100% !important;
				max-width: 500px !important;
				max-height: 500px !important;

}

			.sn-widget-gallery--info-container {
				display: none;
				position: fixed;
				top: 0px;
				left:0px;
				font-family: Helvetica;
			}

			.sn-widget-gallery--image-container{
				position: relative !important;
  				top: 0px !important;
	  			bottom: 0px !important;
	  			right: 0px !important;
	  			left: 0% !important;
				padding:25px;


			}

				.sn-widget-wrapper{
				 background:#70abce !important;
				 height:auto !important;

			}

			.dummy {
				margin-top: 100%;
			}

			.smarty {
				position: absolute;
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
			}

			.data-wrapper {
				position: absolute;
				width: 100%;
				height: auto;

			}


			.photo-meta-first-name,
			.photo-meta-last-name {
				font-style: italic;
				font-family: Helvetica;
				text-transform: uppercase;
				letter-spacing: 1px;
				padding: 100px 25px;

				color: #FFFFFF;
				font-weight: 600;
				font-size: 33px;
				line-height: 35px;

			}
			.photo-question {
				font-style: italic;
				font-family: Helvetica;

				color: #FFFFFF;
				font-weight: 100;
				font-size: 16px;
				line-height: 18px;
			}

			.event-hash-tag {
				position: absolute;
				bottom: 200px;
				right: 50px;

				color: #FFFFFF;
				font-size: 36px;
				line-height: 43px;
				font-family: Helvetica;
			}

			.sidebar {
			   position: relative;
				 padding:25px;
				 align:center;
			}
			

				.tickets {
					width: 45px;
					height: 250px;
					position: fixed;
					left: 20%;
					top: 60%;
				}

			a.MyButton {
				display:block;
				box-shadow: 6px 6px 8px #2d2d2d;
				font-size: 32px;
				color: white;
				text-align:center;
				line-height:71px;
				width:auto;
				max-width:500px;
				height:71px;
				border-radius:3px;
				align:center;
				background:#f2653b;
				font-family: Helvetica;
			}
			
						.sidebar {
			   position: relative;
				 padding:25px;
				 align:center;
			}
			
			@media (min-width: 1079px){
				.sidebar {
					display: none;
				}
				
				.sn-widget-gallery--image{
					height:100% !important;
					width:auto !important;
					max-width:1080px !important;
					max-height:1080px !important;
			}
			


</style>

		<script type="text/javascript">

			function resolveFirstName(data) {
				console.log("data", data);

				var photo = data.photo
				var fullName = (photo.meta || {}).name;
				if (fullName) {
					fullName = fullName.split(" ")[1];
				}
				return fullName;
			}

			function resolveEventName(data) {
				return data.event.name;
			}

			function resolveQuestion(data) {
				console.log("data", data);


				return data.photo.caption;
			}

		</script>

	</head>
	<body>
		<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
FB.init({appId: '616833721713503', status: true, cookie: true,
xfbml: true});
};
(function() {
var e = document.createElement('script'); e.async = true;
e.src = document.location.protocol +
'//connect.facebook.net/en_US/all.js';
document.getElementById('fb-root').appendChild(e);
}());
</script>


		<div class="sidebar"> <div class="col-md-6"><center>

			<h2 style="color:#ff5300; font-family: Helvetica; padding:0px;">Share your Photo!<h2>


<!-- Facebook -->
	<script language="javascript"> 
	function fbshareCurrentPage()
    	{window.open("https://www.facebook.com/sharer/sharer.php?u="+escape(window.location.href)+"&t="+document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false; }
	</script>
	<a href="javascript:fbshareCurrentPage()" target="_blank" alt="Share on Facebook"><img src = "http://4.bp.blogspot.com/-ne-G24v59mc/Ucl53ygXkXI/AAAAAAAACXg/jzVl8dP56YM/s1600/facebook-share-buttons.png" style="height:30px;width:auto;"></a></a>



<!-- Twitter -->
	<a href="https://twitter.com/share" class="twitter-share-button" data-text="We're with @Snapifeye!" data-via="Snapifeye" data-size="large" data-count="none" data-hashtags="EventTech" data-dnt="true">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<!-- Pintrist -->
	<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a>
	<!-- Please call pinit.js only once per page -->
	<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>


<!-- Linkedin -->
	<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
	<script type="IN/Share"></script>

<!-- Google Plus -->
	<!-- Place this tag where you want the share button to render. -->
	<div class="g-plus" data-action="share" data-annotation="none" data-height="24"></div>

<!-- Email -->
        <a href="javascript:emailCurrentPage()"><img src="http://imgsrv.959theranch.com/image/kfwr2/UserFiles/Image/button_email.png" style="height:30px;width:auto;" alt="Email" /></a>
		
</div></div class="col-md-6">

<!-- Snapifeye Widget -->
<center><snapifeye-widget class="50%" params="eventId: 85, period: 4000, custom: false"></snapifeye-widget>


	<script type="text/javascript">
	(function(d){
	    var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
	    p.type = 'text/javascript';
	    p.async = true;
	    p.src = '//assets.pinterest.com/js/pinit.js';
	    f.parentNode.insertBefore(p, f);
	}(document));
	</script>
		
	</body>
</html>
