<? include "$dir/value.php3"; ?>

<div ID="viewDIV" STYLE="position:absolute; visibility:hide;"></div>
<script language="javascript">

////////////////////////////////////////////////////////////////////////////////////
// CONFIGURATION
////////////////////////////////////////////////////////////////////////////////////

 var fcolor = "#ffffff";	// Main background color
 var textcolor = "<?=$sC_dark0?>";	// Text color
 var border_size = "1";		// border size, 1-3
 var border_color = "<?=$sC_dark0?>";	// Border color
 var width = "200";		// 팝업 박스의 넓이, 100 - 300
	
////////////////////////////////////////////////////////////////////////////////////
// END CONFIGURATION
////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////
// END CONFIGURATION
////////////////////////////////////////////////////////////////////////////////////

ns4 = (document.layers)? true:false
ie4 = (document.all)? true:false

// Microsoft Stupidity Check.
if (ie4) {
	if (navigator.userAgent.indexOf('MSIE 5')>0) {
		ie5 = true;
	} else {
		ie5 = false; }
} else {
	ie5 = false;
}

var x = 0;
var y = 0;
var offsetx = 10;
var offsety = 10;
var popup_on = 0;
var palign = 0;		// Default 팝업 박스의 위치, 0:center/1:right/2:left

if ( (ns4) || (ie4) ) {
	if (ns4) over = document.viewDIV
	if (ie4) over = viewDIV.style
	document.onmousemove = mouseMove
	if (ns4) document.captureEvents(Event.MOUSEMOVE)
}

// Clears popups if appropriate
function viewoff() {
	if ( (ns4) || (ie4) ) {
		popup_on = 0;
		hideObject(over);
	}
	palign = 0	
}

// Non public functions. These are called by other functions etc.

// Simple popup
function viewon(text, left) {
	txt = "<TABLE WIDTH="+width+" BORDER=0 CELLPADDING="+border_size+" CELLSPACING=0 BGCOLOR=\""+border_color+"\"><TR><TD><TABLE WIDTH=100% BORDER=0 CELLPADDING=2 CELLSPACING=0 BGCOLOR=\""+fcolor+"\"><TR><TD><FONT FACE=\"Arial,Helvetica\" COLOR=\""+textcolor+"\" SIZE=\"-2\">"+text+"</FONT></TD></TR></TABLE></TD></TR></TABLE>"
	layerWrite(txt);
	if(left) palign = left;
	disp(palign);
}

// Common calls
function disp(palign) {
	if ( (ns4) || (ie4) ) {
		if (popup_on == 0) 	{
			if (palign == 0) { // Center
				moveTo(over,x+offsetx-(width/2),y+offsety);
			}
			if (palign == 1) { // Right
				moveTo(over,x+offsetx,y+offsety);
			}
			if (palign == 2) { // Left
				moveTo(over,x-offsetx-width,y+offsety);
			}
			showObject(over);
			popup_on = 1;
		}
	}
// Here you can make the text goto the statusbar.
}

// Moves the layer
function mouseMove(e) {
	if (ns4) {x=e.pageX; y=e.pageY;}
	if (ie4) {x=event.x; y=event.y;}
	if (ie5) {x=event.x+document.body.scrollLeft; y=event.y+document.body.scrollTop;}
	if (popup_on) {
		if (palign == 0) { // Center
			moveTo(over,x+offsetx-(width/2),y+offsety);
		}
		if (palign == 1) { // Right
			moveTo(over,x+offsetx,y+offsety);
		}
		if (palign == 2) { // Left
			moveTo(over,x-offsetx-width,y+offsety);
		}
	}
}

// Writes to a layer
function layerWrite(txt) {
        if (ns4) {
                var lyr = document.viewDIV.document
                lyr.write(txt)
                lyr.close()
        }
        else if (ie4) document.all["viewDIV"].innerHTML = txt
}

// Make an object visible
function showObject(obj) {
        if (ns4) obj.visibility = "show"
        else if (ie4) obj.visibility = "visible"
}

// Hides an object
function hideObject(obj) {
        if (ns4) obj.visibility = "hide"
        else if (ie4) obj.visibility = "hidden"
}

// Move a layer
function moveTo(obj,xL,yL) {
        obj.left = xL
        obj.top = yL
}

</script>

