/**
 * Displays hidden content depending on where
 * the user is on the page
 */
function showContent() {
  var bottom_position = $(window).scrollTop() + 
	  $(window).height();
	var adj_doc_height = $(document).height() - 200;
	if (bottom_position > adj_doc_height) {
    $('*:hidden').each(function(index, element) { 
		  if (index == 10) {
        console.log('hidden element found: ' + element);
				$(this).fadeIn(3000);
			}
		});
	}
}


//Hide off-screen content immediately
jQuery($(document)).ready(function() {
  //Hide all grid_container div elements
	$(".proj").hide();
	$("hr").hide(); 
  $(".grid_container").each(function(index, element){
    $(this).hide();
    //Show the first one
    //if (index == 0) {
    //  $(this).fadeIn(2000, function() {
		//	  console.log('About animation complete');
		//  });
		//}
  });
  setTimeout(() => { showContent(); showContent(); }, 1000);
});

//Show hidden content on scroll
jQuery($(window)).scroll(function() {
		console.log('show element triggered');
  showContent()
});
