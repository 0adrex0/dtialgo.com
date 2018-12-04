

$(document).ready(function() {

	$("#client").submit(function() {
		$.ajax({
			type: "POST",
			url: "client.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			$("#client").addClass("d-none")
			$(".modal .modal-header .modal-title").addClass("d-none")
			$(".last-text").addClass("d-block")
			$("#client").trigger("reset");
		});
		return false;
	});
	
});

$(document).ready(function() {

	$("#mail").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			$("#mail").addClass("d-none")
			$(".modal .modal-header .modal-title").addClass("d-none")
			$(".last-text").addClass("d-block")
			$("#mail").trigger("reset");
		});
		return false;
	});
	
});

$(".modal form button").cli


// $(document).ready(function(){
// 	$('a[href^="#"]').on('click',function (e) {
// 		e.preventDefault();

// 		var target = this.hash,
// 		$target = $(target);

// 		$('html, body').stop().animate({
// 			'scrollTop': $target.offset().top
// 		}, 300,  function () {
// 			window.location.hash = target;
// 		});
// 	});

// });

// $('#s').waypoint(function() {
// 	$(".navi").children().removeClass("active");
// 	$("#link_1").addClass("no");
// }, { offset: 1 });

// $('#1').waypoint(function() {
// 	$(".navi").children().removeClass("no");
// 	$(".navi").children().removeClass("active");
// 	$("#link_1").addClass("active");
// }, { offset: 0 });

// $('#2').waypoint(function() {
// 	$(".navi").children().removeClass("active");
// 	$("#link_2").addClass("active");
// }, { offset: 0 });

// $('#3').waypoint(function() {
// 	$(".navi").children().removeClass("active");
// 	$("#link_3").addClass("active");
// }, { offset: 0 });

// $('#4').waypoint(function() {
// 	$(".navi").children().removeClass("active");
// 	$("#link_4").addClass("active");
// }, { offset: 0 });

// $('#5').waypoint(function() {
// 	$(".navi").children().removeClass("active");
// 	$("#link_5").addClass("active");
// }, { offset:0 });


var options = {
	max_value: 3,
	step_size: 0.5,
};


$(".rate").rate(options);

function calcChanges(value){	 
		var invest = +$('#invest').val(); //Сумма инвестирования     
		var znch = value||+$('#znch').val(); //срок инвестиции 
		var b = 30; //проц ставка

		var month_money = invest*(1+b/100)*znch;
		month_money=month_money.toFixed(2);

		$('#money').text(month_money);
	}

	$(document).ready(function(){
		$( ".slider" ).slider({
			animate: "fast",
			range: "min",
			value: 5,
			min: 1,
			max: 10,
			step: 1,

			slide: function( event, ui ) {
				$( "#slider-result" ).html(ui.value);
				calcChanges(ui.value);
			},

			change: function(event, ui) {
				$('#znch').attr('value', ui.value);
				calcChanges(ui.value);
			}
		});
		calcChanges();
	});

var menu_selector = ".navi"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню. 
function onScroll(){
	var scroll_top = $(document).scrollTop();
	$(menu_selector + " a").each(function(){
		var hash = $(this).attr("href");
		var target = $(hash);
		if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
			$(menu_selector + " a.active").removeClass("active");
			$(this).addClass("active");
		} else {
			$(this).removeClass("active");
		}
	});
}
$(document).ready(function () {
	$(document).on("scroll", onScroll);
	$('a[href^="#"]').on('click',function (e){
		e.preventDefault();
		$(document).off("scroll");
		$(menu_selector + " a.active").removeClass("active");
		$(this).addClass("active");
		var hash = $(this).attr("href");
		var target = $(hash);
		$("html, body").animate({
			scrollTop: target.offset().top
		}, 500, function(){
			window.location.hash = hash;
			$(document).on("scroll", onScroll);
		});
	});
});


