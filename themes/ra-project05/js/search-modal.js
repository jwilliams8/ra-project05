$(document).on("click","#search-icon", function () { 
    $('#search-field').addClass("search-field-show");
	$('#search-icon').addClass( "active");
});
  
$(document).on("click", ".active", function () {
    $('#search-field').removeClass("search-field-show");
	$('#search-icon').removeClass( "active");
});