// alert(1);
//disable drag

if(wpcopyprotect.diable_selection) {
	window.ondragstart = function() { return false; } 
}
//disable selecting and context menu
if(wpcopyprotect.diable_right_click) {

	window.onload = function start() {
		// document.body.onselectstart = function() {
		//   return false;
		// }
		document.body.oncontextmenu = function() {
		  return false;
		}
	}
}

if(wpcopyprotect.diable_copy) {

	//disable copy cut
	document.onkeydown = function(e) {
		if (e.ctrlKey && (e.keyCode === 85 || e.keyCode === 88)) {
		    return false;
		}
	}
} else if(wpcopyprotect.append_text_copy != "") {
	function addLink(event) {
	    event.preventDefault();

	    // var pagelink = '\n\n Read more at: ' + document.location.href,
	    var pagelink = wpcopyprotect.append_text_copy;
	        copytext =  window.getSelection() + " " + pagelink;

	    if (event.clipboardData) {
	        event.clipboardData.setData('Text', copytext);
	    }
	}

	document.addEventListener('copy', addLink);

}

if(wpcopyprotect.diable_selection) {

	//disable selction
	var unFocus = function () {
	  if (document.selection) {
	    document.selection.empty()
	  } else {
	    window.getSelection().removeAllRanges()
	  }
	} 
}

