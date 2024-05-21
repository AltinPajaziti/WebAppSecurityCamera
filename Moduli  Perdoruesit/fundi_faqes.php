<section>
<?php
    	$rezultati = mysqli_query($lidhe, "SELECT * FROM tedhenat_umks WHERE pozicioni_faqe='Fundi'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

            	extract($rreshti);
			  			
if($rezultati==null)
  mysqli_free_result($rezultati);

               ?>
			
			<?php echo $Pershkrimi; ?>
			
			<?php } ?>
</section>
<footer id="footer">


	<?php
    	$rezultati = mysqli_query($lidhe, "SELECT * FROM tedhenat_umks WHERE pozicioni_faqe='fundi_i_faqes'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

            	extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
			<p class="copyright"><?php echo $Pershkrimi; ?></p>
			
			
			<?php } ?>

</footer>
			
