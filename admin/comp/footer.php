<footer class="">
	<div class="footer-copyright  blue accent-3">
		<div class="container">
			© 2024 Copyright
			<a class="grey-text text-lighten-4 right" href="#!">CorpHash</a>
		</div>
	</div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="assets/js/app.js"></script>


<script>
	new WOW().init();
	$(document).ready(function() {
		Particles.init({
			selector: ".partical",
			color: "#fff",
			sizeVariations: 6,
		});

		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll > $(".banner").height()) {
				$("nav").css("background", "blue");
			} else {
				$("nav").css("background", "transparent");
			}
		});
	});
</script>
