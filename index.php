<?php $page_title = "Home" ?>

<?php include('comp/header.php') ?>

<!-- banner -->
<div class="banner" style="background: rgb(37, 37, 198); background: linear-gradient(137deg, rgba(37, 37, 198, 1) 26%, rgba(0, 212, 255, 1) 100%)">
	<canvas class="partical" style="position: absolute; width: 100%; height: 100%; z-index: 0"></canvas>
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="banner-content white-text">
					<h3>We Develop amazing Websites and Mobile Applications</h3>
					<h5>We bring a complete software development solutions for your business growth.</h5>
					<br />
					<br />
					<a href="#" class="btn teal accent-4">Read More</a>
				</div>
			</div>
			<div class="col s12 l6">
				<img src="/assets/images/web_developer.svg" alt="" class="banner-img" />
			</div>
		</div>
	</div>
</div>
<!-- / / banner -->

<!-- service -->
<?php include('comp/services.php') ?>
<!-- / / service -->

<!-- Our Work -->
<?php include('comp/ourWork.php') ?>
<!-- / / Our Work -->

<!-- Progress -->
<?php include('comp/progress.php') ?>
<!-- / / Progress -->

<!-- contact -->
<?php include('comp/contact.php') ?>
<!-- / / contact -->
<hr />
<!-- How we work -->
<?php include('comp/howWeWork.php') ?>
<!-- / / How we work -->

<!-- footer -->
<?php include('comp/footer.php') ?>
<!-- / / footer -->

<!-- Scripts -->
<?php include('comp/scripts.php') ?>
<!-- / / Scripts -->

</body>

</html>
