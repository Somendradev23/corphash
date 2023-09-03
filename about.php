<?php $page_title = "About Us" ?>

<?php include('comp/header.php') ?>

<!-- banner -->
<div class="banner wave-banner" style="height: 300px; background-image: url('/assets/images/wave.svg'); background-repeat: repeat-x; background-size: cover">
	<canvas class="partical" style="position: absolute; width: 100%; height: 100%; z-index: 0"></canvas>
	<div class="container">
		<div class="row" style="padding-top: 65px">
			<div class="col s12">
				<h3 class="center white-text" style="text-shadow: -2px 2px 5px #666">About Us</h3>
				<hr class="center" width="30%" style="height: 4px; background-color: rgba(37, 137, 248, 1); outline: none" />
			</div>
		</div>
	</div>
</div>
<!-- / / banner -->
<div class="row container">
	<div class="col s12 m6">
		<img src="assets/images/Team.svg" alt="" class="responsive-img" />
	</div>
	<div class="col s12 m6">
		<h4 class="center">Who Are We ?</h4>
		<hr class="center" width="50%" style="height: 4px; background-color: rgba(37, 37, 198, 1); outline: none" />
		<br />
		<p class="center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam eaque quae nam laudantium, doloremque ipsum consectetur vitae tempore deleniti error laboriosam nesciunt, doloribus est reprehenderit consequatur at deserunt, unde facere!</p>
	</div>
</div>

<!-- How we work -->
<?php include('comp/howWeWork.php') ?>
<!-- / / How we work -->

<!-- service -->
<?php include('comp/services.php') ?>
<!-- / / service -->

<!-- footer -->
<?php include('comp/footer.php') ?>
<!-- / / footer --></footer>

<!-- Scripts -->
<?php include('comp/scripts.php') ?>
<!-- / / Scripts -->

</body>

</html>
