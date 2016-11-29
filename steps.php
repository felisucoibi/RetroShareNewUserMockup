<?php
$step = $_REQUEST['step'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];



if($step == "")
{

// STEP1

?>
<HTML>

<script language="javascript">
<!--

// Code written by Tyler Akins with much criticism and assistance
// from Christoph Zurnieden.  It is placed in the public domain.
// Originally located at http://rumkin.com/inc/js/prng.js

// Capture mouse events
if (document.layers) {
   document.captureEvents(Event.MOUSEMOVE);
   document.onmousemove = captureMouseNS;
} else if (document.all) {
   document.onmousemove = captureMouseIE;
} else if (document.getElementById) {
   document.onmousemove = captureMouseNS;
}

// I've read that a mouse movement provides 0.5 bits of entropy.
function captureMouseNS(e) {
   prngAddEntropy(e.pageX.toString(), 0.15)
   prngAddEntropy(e.pageY.toString(), 0.15);
   prngAddEntropyTime();
}

function captureMouseIE(e) {
   prngAddEntropy(window.event.x.toString(), 0.15);
   prngAddEntropy(window.event.y.toString(), 0.15);
   prngAddEntropyTime();
}

function prngAddEntropyTime() {
   prngAddEntropy((new Date).getMilliseconds().toString(), 0.05);
}   

var prngBitsCollected = 0;
var prngEntropyString = Math.random().toString();
var prngAvailableBits = '';
var prngBinary = '';
var prngHex = '0123456789abcdef';

function prngAddEntropy(ent, quality) {
   if (prngBitsCollected < 256) {
      prngEntropyString += ent;
      prngBitsCollected += quality;
      if (prngBitsCollected >= 256) {
         prngChurn();
      }
   } else {
      prngEntropyString += ent;
      if (prngEntropyString.length >= 4096) {
         prngChurn();
      }
   }
}

function prngChurn() {
   var b = hex_sha256(prngEntropyString);
   prngAvailableBits += b;
   prngEntropyString = b;
   if (prngAvailableBits.length > 1024) {
      prngAddEntropy(prngAvailableBits.slice(0, 512), 256);
      prngAvailableBits = prngAvailableBits.slice(512);
   }
}

// Returns a random bit from the buffer.  If the buffer is not
// initialized, returns a bit from Math.random()
function getRandomBit() {
   if (prngBitsCollected < 256) {
      return Math.floor(Math.random() * 2);
   }
   if (prngBinary.length == 0) {
      prngAddEntropyTime();
      if (prngAvailableBits.length == 0) {
         prngChurn();
      }
      var B = (prngHex.indexOf(prngAvailableBits.charAt(0)) << 4) +
         prngHex.indexOf(prngAvailableBits.charAt(1));
      prngAvailableBits = prngAvailableBits.slice(2);

      for (var i = 0; i < 8; i ++) {
         if ((B >> i) & 0x01) {
	    prngBinary += '1';
	 } else {
	    prngBinary += '0';
	 }
      }
   }
   var b = prngBinary.charAt(0);
   prngBinary = prngBinary.slice(1);
   return b * 1;
}

// Returns a number between 0 and max (inclusive).
function getRandomNumber(max) {
   var bitsNeeded = Math.floor(Math.log(max) / Math.log(2)) + 1;
   while (1) {
      var randomNum = 0;
      for (var i = 0; i < bitsNeeded; i ++) {
         randomNum *= 2;
	 randomNum += getRandomBit();
      }
      if (randomNum <= max) {
         return randomNum;
      }
   }
}

function prngCheckBuffer() {
   var e = document.getElementById('bufferBar');
   if (! e) {
      window.setTimeout('prngCheckBuffer()', 250);
      return;
   }
   if (prngBitsCollected < 256) {
      e.style.backgroundColor = "rgb(255," + Math.floor(prngBitsCollected) + ",0)"
      e.style.width = Math.floor((prngBitsCollected / 256) * 600) + "px";
      window.setTimeout('prngCheckBuffer()', 250);
   } else {
      e.style.backgroundColor = "#00FF00";
      e.style.width = "600px";
   }
}

prngCheckBuffer();

// -->
</script>

</head>
<body>

<TABLE width="30%" align="center" border="1">
<TR>
<TD>
<BR>
<BR>
<BR>
<BR>
<CENTER>STEP 1/3 GENERATING RANDOM DATA : MOVE YOUR MOUSE</CENTER><br>
<div style="align:center; border: 1px solid black; background-color: gray; width: 600px; height: 10px;">
<span id="bufferBar" style="background-color: red; width: 0px; height: 10px; position: absolute"></span></div>
<form action="" method="get">
  <input type="hidden" name="step" value="step2">
  <button type="submit" formmethod="post" formaction="">NEXT</button>
</form>
<BR><BR><BR>
ADVANCED OPTIONS
</TD>
</TR>
</TABLE>
<p>
<BR>
This text is not part of the mockup but to comment things. To make it simple, no more info but move the mouse. when green color appears also APPEARS NEXT BUTTON (can be don for the mockup in javascript but now I'm doing the 4 steps mockups first). ADVANCED OPTIONS go to the actual menu of RS of create identities etc.
</p>




</body>
</html>

<?php
}


// STEP2 USER AND PASSWORD INPUT
else if($step == "step2")
{
?>
<html>

<head>

<TABLE width="30%" align="center" border="1">
<TR>
<TD>
<BR>
<BR>
<BR>
<BR>
<CENTER>STEP 2/3 USER AND PASSWORD</CENTER><br>
<script>

function Login(form) { username = new Array("username goes here"); password = new Array("password goes here"); page = "Name of html file to open when you push log in goes here" + ".html"; if (form.username.value == username[0] && form.password.value == password[0] || form.username.value == username[1] && form.password.value == password[1] ||

form.username.value == username[2] && form.password.value == password[2] || form.username.value == username[3] && form.password.value == password[3] ||

form.username.value == username[4] && form.password.value == password[4] || form.username.value == username[5] && form.password.value == password[5] ||

form.username.value == username[6] && form.password.value == password[6] || form.username.value == username[7] && form.password.value == password[7] ||

form.username.value == username[8] && form.password.value == password[8] || form.username.value == username[9] && form.password.value == password[9]) { self.location.href = page; } else { alert("Either the username or password you entered is incorrect.\nPlease try again."); form.username.focus(); } return true; }

</script> </head> <body bgcolor="#eeeeee"> 
<form action="" method="get">

 <br> <center> <h5>Username: <input type="text" name="username" style="background:#bfbfbf;color:#212121;border-color:#212121;" onFocus="this.style.background = '#ffffff';"

onBlur="this.style.background = '#bfbfbf';"> <br> Password: <input type="password" name="password" style="background:#bfbfbf;color:#212121;border-color:#212121;" onFocus="this.style.background = '#ffffff';"

onBlur="this.style.background = '#bfbfbf';"> <br>  </form> </body> </html>	


  <input type="hidden" name="step" value="step3">
  <button type="submit" formmethod="post" formaction="">NEXT</button>
</form>
<BR><BR><BR>
</TD>
</TR>
</TABLE>
<p>
<BR>
Next step only user and password, the user is going to be used as a default identity too and as location "newuser" and is hidden for the user.
</p>

<?php
}
// STEP3 USER AND PASSWORD INPUT
else if($step == "step3")
{
?>

<html><head></head>
<body>

<TABLE width="30%" align="center" border="1">
<TR>
<TD>
<BR>
<BR>
<BR>
<BR>
<CENTER>STEP 3/3 ADD A FRIEND</CENTER><br>

<?php
echo "user: $username<br>";
echo "password: $password";


?>

<BR><BR><BR>
</TD>
</TR>
</TABLE>
<p>
<BR>
In this step you can add a friend or add chatasaurus.
</p>

<?php
}

?>




