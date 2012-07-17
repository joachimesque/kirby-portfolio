/*
By Joe Pettersson @ http://www.joepettersson.com
A dark jQuery powered navigation menu

Distributed under the Creative Commons Attribution 3.0 License

***********

Responsive Menu->Dropdown : http://css-tricks.com/convert-menu-to-dropdown/


*/

$(document).ready(function(){
	// Requried: Navigation bar drop-down
	$("nav ul li").hover(function() {
		$(this).addClass("active");
		$(this).find("ul").show().animate({opacity: 1}, 400);
		},function() {
		$(this).find("ul").hide().animate({opacity: 0}, 200);
		$(this).removeClass("active");
	});
	
	// Requried: Addtional styling elements
	$('nav ul li a').addClass('gradient');
	$('nav ul li:first-child').addClass('first');
	$('nav ul li:last-child').addClass('last');
	$('nav ul li ul').parent().append('<span class="dropdown"></span>').addClass('drop');
	
	// Create the dropdown base
	$("<select />").appendTo("nav");
	
	// Create default option "Go to..."
	$("<option />", {
	   "selected": "selected",
	   "value"   : "",
	   "text"    : "Go to..."
	}).appendTo("nav select");
	
	// Populate dropdown with menu items
	$("nav a").each(function() {
	 var el = $(this);
	 if(el.parent().parent().parent().is("li")) {
		var txt = "- " + el.text();
	 } else {
	 	var txt = el.text()
	 };
	 $("<option />", {
		 "value"   : el.attr("href"),
		 "text"    : txt
	 }).appendTo("nav select");
	});
	
	$("nav select").change(function() {
  		window.location = $(this).find("option:selected").val();
	});

/*	
if($(window).width() > 959) {
	$("nav select").hide();
} else {
	$("nav ul").hide();
}
*/

});
