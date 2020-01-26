<?php
	include_once 'header.php';
?>

	<section class="main-container">
		<div class="main-wrappe">
			<?php 
				if (isset($_SESSION['u_id'])) {
				
					echo "<div id='content'>
							<h2>Profile</h2>
							<p id='welcome'>Hey!".$_SESSION['u_first']." ".$_SESSION['u_last']."."."You are logged in!</p>"."
							<img src='ayushpic.jpg'>
							<p class='para'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<br>
							<p class='para'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p class='para'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						</div>";
						
				}else{
					echo "<h2>Welcome</h2>";
					echo "<p id='newuser'>Please <span id='highlight'>Log in</span> or <a href='signup.php'><span id='highlight'>SignUp</span></a> to see your profile<p>";
				}
			?>
		</div>
	</section>
<?php
	include_once 'footer.php';
?>	
