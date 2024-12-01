<div class="contact">
	<br />
	<br />
	<div class="row">
		<h4 class="center">Contact Us</h4>
		<hr class="center" width="30%" style="height: 4px; background-color: rgba(37, 37, 198, 1); outline: none" />
		<br />
		<br />
		<div class="col s12 m4 offset-m2">
			<img class="responsive-img bounce-img" src="assets/images/Contact1.svg" alt="" />
		</div>
		<div class="col s12 m4 offset-m1">
			<form class="" onsubmit="saveContactInfo( this , event )" method="POST" style="padding: 20px; border: 1px solid rgba(87, 87, 253, 0.507); border-radius: 10px">
				<div class="row">
					<div class="input-field col s12">
						<input id="first_name" type="text" class="validate" name="name" />
						<label for="first_name">Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate" name="email" />
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<textarea id="textarea1" class="materialize-textarea" name="msg"></textarea>
						<label for="textarea1">Massage</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<input type="submit" value="Submit" class="btn blue darken-2" />
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
