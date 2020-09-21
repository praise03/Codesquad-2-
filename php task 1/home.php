<!doctype html>
<html>
<head>
<title>Home</title>
</head>
<style type="text/css">
.contact{
	margin-top: 20px
}
.contact h1{
	text-align: center;
	font-size: 50px;
}
.form{
	text-align: left;
    display: block;
    width: 100%;
    padding: 10px;
    margin: 20px;
}
.form  input, label, textarea{
	display: block;
	margin-top: 10px;
	margin-left: 100px;
    width: 80%;
    padding: 10px;
    border: none;
    border-bottom: thin solid #229977; ;
    outline: none;
    font-size: 12px;
    resize: none;
}
.submit{
	margin-top: 0px;
	padding: 20px;
	color: #229977;
	display: block;
	margin-left: 130px;	
	border-radius: 8px;
	border:none;
	font-size: 15px;
}
</style>
<body>




<a id="contact"></a>
<div class="contact" id="contact">
	<h1>Contact Us</h1>
	<form method="post" action="output.php">
		<div class="form">
			<label>Full Name</label>
			<input type="text" name="name" placeholder="Full Name">
		</div>
		<div class="form">
			<label>Email Address</label>
			<input type="text" name="email" placeholder="E.g: JohnDoe@gmail.com">
		</div>
		<div class="form">
			<label>Subject</label>
			<input type="text" name="subject" placeholder="Subject">
		</div>
		<div class="form">
			<label>Message</label>
			<textarea rows="8" name="message" placeholder="Enter Your Message..."></textarea>
		</div>
			<input type="submit" class="submit" name="submit">
	</form>




</body>







</html>