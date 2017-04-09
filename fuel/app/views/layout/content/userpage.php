<?php // foreach($server as $data):?>

<?php 
//    echo $server->email; 
//    if(is_null(Cookie::get('pass'))){echo "OK";}else{echo "OKOK";};
?>


<!-- MENU -->
	<div class="wrapper style3">
		<article id="menu">
			<header>
				<h2>Menu</h2>
			</header>
			<div class="container">
				<div class="row">
					<div class="4u 12u">
						<a href = "index.php">
							<article class="box style1" >
								<i class="icon material-icons" >home</i>
								<p><b>Home</b></p>
							</article>
						</a>
					</div>
					<div class="4u 12u">
						<a href="programme.php">
							<article class="box style1">
								 <i class="icon material-icons" >today</i>
								<p><b>Programme</b></p>
							</article>
						</a>
					</div>

					<div class="4u 12u">
						<a href="signout">
							<article class="box style1" >
								<i class="icon material-icons" >exit_to_app</i>
								<p><b>Log Out</b></p>
							</article>
						</a>
					</div>
				</div>
			</div>
		</article>
	</div>


<?php // endforeach;?>

