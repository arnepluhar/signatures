function addjobtitle()
{
var jobtitle = document.getElementById("jobtitle");
var s = jobtitle.value;
document.getElementById('jobtitle1').innerHTML = s
}
function addemailid()
{
var emailid = document.getElementById("emailid");
var s = emailid.value;
document.getElementById('emailid1').innerHTML= s;
document.getElementById('emailid1').href="mailto:"+s;
}

function addmobileno()
{
var mobileno = document.getElementById("mobileno");
var s = mobileno.value;
var t = mobileno.value.replace(/\s/g,'');
document.getElementById('mobileno1').innerHTML = s;
document.getElementById('mobileno1').href="tel:"+t;
}
function addwebsite()
{
var website = document.getElementById("website");
var s = website.value;
document.getElementById('website1').innerHTML= s;
document.getElementById('website1').href="https://"+s;
}
function addoffice()
{
var office = document.getElementById("office");
var s =office.value;
document.getElementById('office1').innerHTML = s;
}
function addfax()
{
var fax = document.getElementById("fax");
if(fax.value)
{
var s = " / "+fax.value;
document.getElementById('fax1').innerHTML = s;
}
}
function addfacebook()
{
var facebook = document.getElementById("facebook");
var s =facebook.value;

document.getElementById("fbimg").style.display= "inline";
document.getElementById("fb").href= s;
}
function addtwitter()
{
var twitter = document.getElementById("twitter");
var s =twitter.value;

document.getElementById("twimg").style.display= "inline";
document.getElementById("tw").href=s;
}
$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "ajax_php_file.php", // Url to which the request is send
type: "POST", // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false, // The content type used when sending data to the server.
cache: false, // To unable request pages to be cached
processData:false, // To send DOMDocument or non processed data file it is set to false
success: function(data) // A function to be called if request succeeds
{
if(data=="Invalid file Size or Type")
{
$('#message1').html(data);
$("#message").css("color","red");
$("#message").html("(size should be less then 2 mb)");
}
else{
$('#previewing1').attr('src',data);
$('#message1').html('image uploaded successfully');
$('#image_preview1').css('display', 'inline-block');
/*$('#previewing').attr('src',data);
$('#previewing').attr('src',"upload/DSC_0126.jpg");
$('#previewing').attr('src',"https://localhost/Create-Email-Signature/upload/DSC_0126.jpg");*/
}
}
});
}));
// Function to preview image after validation
$(function() {
$("#file").change(function() {
$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','noimage.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
$( "#uploadimage" ).submit();
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
/*$('#previewing').attr('src', e.target.result);*/
$('#previewing').attr('width', '250px');
$('#previewing').attr('height', '230px');
$('#previewing1').attr('width', '81');
$('#previewing1').attr('height', '80');
};
});
