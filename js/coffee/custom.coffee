initTabs = ->
	$('.slide1').flexslider({
		slideshow: false,
		animation: "slide"
	})

	$('.slide2').flexslider({
		slideshow: false,
		animation: "slide"
	})

	$('.slide3').flexslider({
		slideshow: false,
		animation: "slide"
	})	

initTabs()

jQuery ->
	timer = null
	$("#back-top").on("click", (e) ->
		e.preventDefault()
		$("body, html").animate({
			scrollTop: 0
		}, 800)	
	)

	$('.sub-menu').hide()
	$('.infotip').hide()

	$('.order-btns button').click((e) ->
		e.preventDefault()
		$('.order-btns button').removeClass('active')
		$(this).addClass('active')
		if ($(this).hasClass('block'))
			$('.listing').removeClass('list').addClass('block')
		else if($(this).hasClass('list'))
			$('.listing').removeClass('block').addClass('list')
	)

	$('#social li, #social-footer li').hover( ->
		$('span.tooltip', this).fadeIn('fast')
	,
	->
		$('span.tooltip', this).fadeOut('fast')
	)


	$('select').customSelect()

	$('.category-menu > li a').on("click", (e) ->
		if $(@).attr('href') is "#"
			e.preventDefault()
		
		$(".menu.active").fadeOut()
		$(@).next().addClass("active").fadeIn(200)
	)

	$("body").on("click", ->
		$('.sub-menu.active').fadeOut(200)
	)

	$('.category-menu > li').click((e) ->
	    e.stopPropagation()
	)

	$(".top-widget").find("h2").find("a").hover( ->

		timer = setTimeout( =>
			$(@).next().fadeIn(200)
		, 500)

	->
		clearTimeout(timer)
		timer = null
		$(@).next().fadeOut(200)
	)


$('#tabs').tabs()

$('.tabs a').on("click", ->
	initTabs()
)


$(window).resize( ->
  $('select').css("width", "100%").trigger('update')
)