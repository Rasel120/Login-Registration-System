<?php
	include 'inc/header.php';
	include 'lib/user.php';
	Session::checkSession();
	$user = new User();

?>

<?php
	$loginmsg = Session::get("loginmsg");
	if (isset($loginmsg)) {
		echo $loginmsg;
	}
	Session::set("loginmsg", NULL);
?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>User Name<span class="pull-right"><strong>Welcome</strong>
				<?php
					$name = Session::get("name");
					if (isset($name)) {
						echo $name;
					}
				?>

			</span></h2>
		</div>
	</div>

<?php
	include 'inc/footer.php';
?>