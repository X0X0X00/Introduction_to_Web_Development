


//	*****************************
//	Prep...
//	*****************************
// This script depends on jQuery; put this in your HTML file...
// 	<script src="http://code.jquery.com/jquery.js"></script>
// 
// And then link to this JS file...
// 	<script src="js/menu-highlighter.js"></script>
//
// This script assumes you created some CSS to style the ".is-current" class
// Put something like this in your CSS...
// 	.is-current {
// 		background-color: black;
// 		color: white;
// 	}


//	*****************************
//	The way this works...
//	*****************************

//	This function will return the current file name
function currentFile() {
	// Step 1: grab the current "location" (URL) of this webpage and put it in a variable
	currentURL = window.location.href;

	// Step 2: find the location (index number) of the last slash (/) in the URL
	fileNameIndex = currentURL.lastIndexOf("/") + 1;

	// Step 3: extract the filename from the URL based on the whatever's to the right of
	//	the last slash
	currentFileName = currentURL.substr(fileNameIndex);

	return currentFileName;
}

var thisFile = currentFile();

// Step 4: if there's nothing to the right of the last slash, then the current page is
//	index.php, so manually set it so
if ( thisFile == "" ) {
	thisFile = "index.php"
}

// Step 5: check each anchor in the navigation element 
//	(btw - did you code your menu using NAV?)...
$("nav a").each( function() {

	// Step 5a: if there's a match...
	if (this.href.indexOf(thisFile) > 0) {

		// Step 5a-a: then add the "is-current" class to the anchor
		$(this).addClass("is-current");
	}
});