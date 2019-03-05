/*!
 * Styletools v1.0
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

/*** Display dropdown menu ***/
	$('.icon').click(function() {
		$('.dropdown_menu').slideToggle("slow");
		});
	
/* Display dropdown menu horizontal animation */
	$('.vertical_dropdown_menu').click(function() {
		$('#dropdown_menu_horizontal_animation').animate({width:'toggle'});
		});
		
/* Display dropdown menu vertical animation */
	$('.navicon').click(function() {
		$('#dropdown_menu_vertical_animation').slideToggle("slow");
		});

/*** Navicon transition ***/
	function naviconTransition(x) {
		x.classList.toggle("change");
	}
	
/*** Display your age ***/
	var birthdate = new Date("1997/5/29"); /* Replace by your birthdate ! */
	var now = new Date();
	var diff = now - birthdate;
	var age = Math.floor(diff/31536000000);
	
	document.getElementById("age").innerHTML = age
	
/*** Copyright ***/
	var copyrightYear = new Date();
	var displayYear = copyrightYear.getFullYear();
		
	document.getElementsByClassName("copyright")[0].innerHTML = displayYear;