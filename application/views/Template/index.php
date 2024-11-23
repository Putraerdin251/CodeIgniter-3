<DOCTYPE html>
	<html lang="en">
	<?php $this->load->view ("template/header.php") ;
	?>

	<body class="main-body app sidebar-mini ltr">
		<>

		<!-- Loader -->
		<div id="global-loader">
			<img src="./assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- page -->
	   <div class="page custom-index">

			<?php $this->load->view("template/main_header.php") ;
			?>

		<?php $this->load->view ("template/menu.php") ;
		?>

		<?php $this->load->view("template/konten.php") ;
		 ?>

		<?php $this->load->view("template/sidebar_kanan.php") ;
		?>

		
		<?php $this->load->view ("template/footer.php") ;
		?>
	</body>
</html>