<!DOCTYPE html>
<html>
<head>
<title>Send an Email</title>
</head>
<body>

<center>
<h4 class="sent-notification"></h4>

<form id="myForm">
<h1><u>Send an Email</u></h1>

<label>Name</label>
<input id="name" type="text" placeholder="Enter Name">
<br><br>

<label>Email</label>
<input id="email" type="text" placeholder="Enter Email">
<br><br>

<label>Subject</label>
<input id="subject" type="text" placeholder=" Enter Subject">
<br><br>

<p>Message</p>
<textarea id="body" rows="5" placeholder="Type Message"></textarea>
<br><br>

<button type="button" onclick="sendEmail()" value="Send An Email">Submit</button>
</form>
</center>


<script type="text/javascript">
function sendEmail() {
var name = $("#name");
var email = $("#email");
var subject = $("#subject");
var body = $("#body");

if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
$.ajax({
url: 'sendEmail.php',
method: 'POST',
dataType: 'json',
data: {
name: name.val(),
email: email.val(),
subject: subject.val(),
body: body.val()
}, success: function (response) {
$('#myForm')[0].reset();
$('.sent-notification').text("Message Sent Successfully.");
}
});
}
}

function isNotEmpty(caller) {
if (caller.val() == "") {
caller.css('border', '1px solid red');
return false;
} else
caller.css('border', '');

return true;
}
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>

</body>
</html>