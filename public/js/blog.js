/**
 * 	Create a Blog prototype
 *  Then instantiate an instance as blog
 */


function Blog()  {
		
}

Blog.prototype.initMastheadControls = function() {
	$('.blog-nav-item').click(function(e){
		console.log('masthead nav item clicked: ');
		console.log(e.target.href);
	});
}	

Blog.prototype.initUserControls = function() {
	return;
	$('.user-button').click(function(e){
		e.preventDefault();
		console.log('user button clicked, value is: ' + e.target.value);
		e.stopPropagation();
	});
}

Blog.prototype.initEntryControls = function() {
	return;
	// Early debugging stuff
	$('.entry-button').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		console.log('entry button clicked: ' + e.target.href);
	});
	
}	

Blog.prototype.initCommentControls = function() {
	return;
	
	$('.comment-button').click(function(e){
		e.preventDefault();
		console.log('comment button clicked: ' + e.target.href);
	});
	
}

Blog.prototype.init = function() {
	this.initMastheadControls();
}		

// Instatiate a global instance of the Blog.
var blog = new Blog();
