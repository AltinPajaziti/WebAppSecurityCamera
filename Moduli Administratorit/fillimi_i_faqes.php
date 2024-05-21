<header id="header">
	<ul class="icons">
		<?php
		$rezultati = mysqli_query($lidhe, "SELECT * FROM tedhenat_umks  WHERE pozicioni_faqe='rrjetetSociale'");
		while ($rreshti = mysqli_fetch_assoc($rezultati)) {

			extract($rreshti);


			if ($rezultati == null)
				mysqli_free_result($rezultati);

			?>
			<?php echo $Pershkrimi ?>

		<?php } ?>
	</ul>
</header>


<?php
$rezultati = mysqli_query($lidhe, "SELECT * FROM tedhenat_umks WHERE pozicioni_faqe='fillimifaqes'");
while ($rreshti = mysqli_fetch_assoc($rezultati)) {

	extract($rreshti);


	if ($rezultati == null)
		mysqli_free_result($rezultati);

	?>
	<section id="banner">
		<div class="content">
			<header>
				<h1>
					<?php echo $Titulli ?>
				</h1>
			</header>
		</div>
		<span class="image object">
			<img src="<?php echo $Fajlli ?>" alt="" />
		</span>
	</section>
<?php } ?>