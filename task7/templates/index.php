<html>
<head>
	<title>%TITLE%</title>
	  <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
<div id="w">
    <h1>Sent letter</h1>
	%MAILERROR%
    <form id="contactform" name="contact" method="post" action="">
      <p class="note"><span class="req">*</span> required fields</p>
      %NAME_ERROR%
	  <div class="row">
        <label for="name">Name <span class="req">*</span></label>
        <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="Your Name" value="%NAME_VALUE%">
      </div>
	  %EMAIL_ERROR%
	  <div class="row">
        <label for="email">E-mail <span class="req">*</span></label>
        <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder="address@gmail.com" value="%EMAIL_VALUE%">
      </div>
      %SUBJECT_ERROR%
      <div class="row">
        <label for="subject">Subject <span class="req">*</span></label>
        <select class="select" size="1" name="subject">
			<option selected="selected">Select subject</option>
			%SUBJECT%
		</select>
      </div>
      %MESSAGE_ERROR%
      <div class="row">
        <label for="message">Message <span class="req">*</span></label>
        <textarea name="message" id="message" class="txtarea" tabindex="4">%MESSAGE_VALUE%</textarea>
      </div>
      <div class="center">
        <input type="submit" id="submitbtn" tabindex="5" value="Send">
      </div>
    </form>
  </div>
</body>
</html>
