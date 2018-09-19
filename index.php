<!DOCTYPE html>
<html>
<head>
	<!-- Meta tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="text">
	<meta name="keywords" content="meta, metatags">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />

	<!-- OG:Tags -->
	<meta property="og:title" content="Page Title">
	<meta property="og:description" content="Page Title">
	<meta property="og:image" content="http://absolute/link/to/img.jpg">
	<meta property="og:url" content="http://absolute/url/link.html">

	<!-- Twitter -->
	<meta name="twitter:title" content="Page Title">
	<meta name="twitter:description" content="Page Description">
	<meta name="twitter:image" content="http://absolute/link/to/img.jpg">
	<meta name="twitter:card" content="summary_large_image">
	
	<style type="text/css">
		#body{
			background-color: #8D98B8;
			height:100vh;

		}
		#wrapper{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100%;
		}
		#content{
			background-color:#fff;
			padding:30px;
			text-align: center;
		}
		#content h1{
			margin-bottom:30px;
		}
		#content > p {
			margin-bottom:30px;
		}
		#content #contact{
			background-color:#f6f6f6;
			border:1px solid #cecece;
			padding:20px;
			border-radius:8px;
		}
		#content #contact input{
			width:100%;
		    padding: 10px;
		    -webkit-box-sizing: border-box;
		    -moz-box-sizing: border-box;
		    box-sizing: border-box;
		    transition: all 0.2s ease;
		    text-align: center;
		}
		#content #contact button{
			margin-top:20px;
			background-color:#5D96D7;
			color:#fff;
			padding:10px 20px;
			border-radius:8px;
			transition: all 0.2s ease-in-out;
		}
		#content #contact button:hover{
			background-color: #426797;
			padding:10px 30px;
		}
		#content #contact button:disabled{
			opacity: 0.6;
		}
		#content #contact button:disabled:hover{
			cursor: not-allowed;
			background-color:#5D96D7;
			padding:10px 20px;
		}
		#content #contact p.error-box{
			display: none;
		}
		#content #contact.error input{
			border-color:#E14145;
			border-style: solid;
			background-color: #EBA4B1;
		}
		#content #contact.error p.error-box{
			display:block;
			color:#E14145;
			margin-bottom: 0;
			text-align: left;
			padding-left:10px;
			font-size:12px;
		}
	</style>

	<title>Ashley Ignatius</title>
	<!-- Bootstrap CSS CDN -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div id="body">
	<div id="wrapper">
		<div id="content">
			<h1>My website is going through a revamp!</h1>
			<p>
				If you'd like to be notified once the website is ready, leave your email down below!<br />
				I promise not to spam you with nonsense.
			</p>
			<div id="contact">
				<form action="" method="post">
					<!-- <p class="error-box">Email format error. Please </p> -->
					<input id="email" type="email" placeholder="your@email.com">
					<button id="submit" disabled="true" type="submit">Notify Me!</button>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap JS CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
//setup before functions
var typingTimer;                //timer identifier
var doneTypingInterval = 1000;  //time in ms (5 seconds)
var email = document.getElementById('email');

//on keyup, start the countdown
email.addEventListener('keyup', function() {
	clearTimeout(typingTimer);
	typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//user is "finished typing," do something
function doneTyping () {
	var userEmail = document.getElementById("email").value;
	var submit = document.getElementById("submit");
	if(!validateEmail(userEmail)) {
		removeStyleClass("success");
		addStyleClass("error");
		submit.disabled = "true";
	} else {
		removeStyleClass("error");
		addStyleClass("success");
		submit.removeAttribute("disabled");
	}
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function addStyleClass(type) {
    var element, arr;
    element = document.getElementById("contact");
    arr = element.className.split(" ");
    if (arr.indexOf(type) == -1) {
        element.className += type;
    }
}
function removeStyleClass(type) {
    var element = document.getElementById("contact");
    element.className = element.className.replace(type, "");
}
</script>
</body>
</html>