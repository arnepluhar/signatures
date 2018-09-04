<html>
<head>
<title> Email-Signature-Creator</title>
<link rel="stylesheet" href="style.css" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" type="text/css"/>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
$("#copy").click(function() {
$("#div2").html($("#div1").html());
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function (){
$("#copy1").click(function() {
var data = $("#div2").html();
$("#abc_data1").text(data);
});
$("#uploadimg").click(function() {
$('#message1').html('upload image');
});
});
</script>
<style>
.msg{
margin-top: 0;
}
#image_preview1{
margin-bottom:5px;
}
.uinfo{
width:410px;
}
#image_preview1{
display:none;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<!-- popup box modal starts here for upload image -->
<div class="modal fade demo-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <h3 class="modal-title">upload your image</h3>
</div>
<div class="modal-body">
<P>
<div class="main">
<h1 id="message1">upload image</h1><br/>
<div id="message" align="center"></div>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<div id="selectImage">
<div></div>
<label>Select Your Image</label><br/>
<input type="file" name="file" id="file"/>
</div>
</form>
</div>
</P>
</div>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<!-- /.modal-->
<!-- popup box modal ends -->
<!-- popup box modal starts here to show html code -->
<div class="modal fade demo-popup1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <h3 class="modal-title">Copy HTML Signature</h3>
</div>
<div class="modal-body">
<P>
<div id="abc1">
<pre id="abc_data1"></pre>
</div>
</P>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal-->
<!-- popup box modal ends -->
</div> <!-- /.row -->
</div> <!-- /.container -->
<div id="wholecont">
<div id="main">
<h1><b>Create Your Movinga-Email-Signature</b></h1>
<div class="container">
<div class="row">
<div id="div1" align="center" class="col-md-5">

<h2>Your Information</h2>
<hr/>
<div class="row">
<form action="" style="border:none;">
<table class="uinfo">
<div class="row">
<tr>
<div class="col-md-6">
<td><div><b>Name</b></div><input type="text" name="username" onkeyUp="document.getElementById('Uname').innerHTML = this.value"  placeholder="First Name Last Name">
</td>
</div>
<div class="col-md-6">
<td>
<div><b>Job Title</b></div><input id="jobtitle" type="text" name="jobtitle" onKeyup="addjobtitle()" placeholder="Position Title">
</td>
</div>
</tr>
</div>
<div class="row">
<tr>
<div class="col-md-6"><td>
<div><b>Email</b></div><input id="emailid" type="text" name="emailid" onKeyup="addemailid()" placeholder="firstname.lastname@movinga.com"></td></div>
<div class="col-md-6"><td><div><b>Mobile No</b></div><input id="mobileno" type="text" name="mobileno" onKeyup="addmobileno()" placeholder="+49 171 1234567"></td></div>
</tr>
</div>
<div class="row">
<tr>
<div class="col-md-6">
<td><div><b>Additinal info?</b></div><input type="text" name="cinfo" onkeyUp="document.getElementById('companyinfo').innerHTML = this.value"></td></div>
<div class="col-md-6"><td><div><b>Link to an optional article </b></div><input id="website" type="text" placeholder="https://www.example.com" name="website" onKeyup="addwebsite()"></td></div>
</tr>
</div>
<div class="row">
</div>
</table>
</form>
</div>
<input type="button" id="copy1" class="" data-toggle="modal" data-target=".demo-popup1" value="Create Signature">
</div>
<div id="div2" class="col-md-7">
<h2>Your Movinga-Signature</h2>
<hr/>
<div id="image_preview1">
<img id="previewing1" src="noimage.png" />
</div>
<p class="msg">
<span id="Uname">
</span><span id="jobtitle1"></span>
</p>
<p class="msg">
<a href="" id="emailid1"></a>
<span id="mobileno1"></span>
</p>
<br>
<p class="msg" id="companyname"></p>
<p class="msg" id="address1"></p>
<p class="msg" id="addressline2"></p>
<p class="msg">
<a class="msg" href="" id="website1">
</a>
</p>
<p style="margin-top: 14px; font-family: Verdana, Geneva, sans-serif; font-size: 10px; line-height: 16px; color: #333;">
This e-mail may contain confidential and/or privileged information. Any unauthorized copying, disclosure or distribution of the material in this e-mail is forbidden. If you are not the intended recipient (or have received this e-mail in error) please notify the sender immediately and delete this e-mail. Thank you!
Movinga GmbH, Perleberger Straße 42, 10559 Berlin, Germany<br/>
HANDELSREGISTER: Amtsgericht Berlin (Charlottenburg), HRB 167739<br/>
GESCHÄFTSFÜHRUNG: Finn Age Hänsel
</p>
</div>
</div>
</div>
</div>
</div>
</body>
</html>