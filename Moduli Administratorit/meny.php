

<nav id="menu">
<header class="major">
	<h2>Meny</h2>
</header>
<?php
  $rezultati = mysqli_query($lidhe, "SELECT * FROM  tedhenat_umks WHERE pozicioni_faqe='Admin_meny'");
  while ($rreshti = mysqli_fetch_assoc($rezultati)) {

   extract($rreshti);
	 echo $Pershkrimi;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
?>
</nav>