<html>
<head>
	<title>%TITLE%</title>
	  <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
<div><h2>Contact Form</h2></div>
<div style="color: #FF0000; font-size: 15px;"><strong>%ERRORS%</strong></div>
<div id="w">
    <h1>Sent letter</h1>
    <form id="contactform" name="contact" method="post" action="">
      <p class="note"><span class="req">*</span> required fields</p>
      <div class="row">
        <label for="name">Name <span class="req">*</span></label>
        <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="Your Name" required>
      </div>
	  <div class="row">
        <label for="email">E-mail <span class="req">*</span></label>
        <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder="address@gmail.com" required>
      </div>
      
      <div class="row">
        <label for="subject">Subject <span class="req">*</span></label>
        <select class="select" size="1" name="subjects" required>
			<option selected="selected">Select subject</option>
			<option value="Subject1">Subject1</option>
			<option value="Subject2">Subject2</option>
			<option value="Subject3">Subject3</option>
			<option value="Subject4">Subject4</option>
		</select>
      </div>
      
      <div class="row">
        <label for="message">Message <span class="req">*</span></label>
        <textarea name="message" id="message" class="txtarea" tabindex="4" required></textarea>
      </div>
      
      <div class="center">
        <input type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Send">
      </div>
    </form>
  </div>
</body>
</html>
