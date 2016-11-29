<?php
$step = $_REQUEST['step'];


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
<CENTER>STEP 1/4 GENERATING RANDOM DATA<BR>PLEASE MOVE YOUR MOUSE UNTIL THE BAR TURNS GREEN</CENTER><br>
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

	echo "step2";

}

// STEP3 USER AND PASSWORD INPUT
else if($step == "step2")
{

	echo "step2";

}

?>


