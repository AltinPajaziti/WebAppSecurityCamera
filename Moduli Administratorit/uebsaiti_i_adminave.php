<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
include("kontrolli.php");
?>

<!DOCTYPE HTML>

<html>

<head>
	<title>Uebaplikacioni per Menaxhimin e Kamerave te Sigurise(UMKS)</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<script src="jquery.js"></script>

	<script>
    $(document).ready(function () {
        $.getJSON("test.json", function (data) {

            var arrItems = [];      // THE ARRAY TO STORE JSON ITEMS.
            $.each(data, function (index, value) {
                arrItems.push(value);       // PUSH THE VALUES INSIDE THE ARRAY.
            });

            // EXTRACT VALUE FOR TABLE HEADER.
            var col = [];
            for (var i = 0; i < arrItems.length; i++) {
                for (var key in arrItems[i]) {
                    if (col.indexOf(key) === -1) {
                        col.push(key);
                    }
                }
            }

            // CREATE DYNAMIC TABLE.
            var table = document.createElement("table");

            // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

            var tr = table.insertRow(-1);                   // TABLE ROW.

           /* for (var i = 0; i < col.length; i++) {
                var th = document.createElement("th");      // TABLE HEADER.
                th.innerHTML = col[i];
                tr.appendChild(th);
            }*/

            // ADD JSON DATA TO THE TABLE AS ROWS.
            for (var i = 0; i < arrItems.length; i++) {

                tr = table.insertRow(-1);

                for (var j = 0; j < col.length; j++) {
                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = arrItems[i][col[j]];
                }
            }

            // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
            var divContainer = document.getElementById("showDataa");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
        });
    });
</script>
</head>

<body class="is-preload">

	<!-- Header -->


	<!-- Nav -->






	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">
			<?php include_once("fillimi_i_faqes.php"); ?>
			<p style="text-align:right;">Përshëndetje, <em><?php echo $useri; ?>!</em></p>
			<div class="content">

				<div class="row">

					<div class="col-6 col-12-medium">

						<!-- Blockquote -->

						<h3>Moduli Administratorit</h3>
						<blockquote id="showDataa"></blockquote>
						<a href="Ajax/index.php" class="button">Voto</a>


						<div class="col-6 col-12-medium">

							<!-- Form -->

						</div>
					</div>
				</div>
			</div>
	</section>


	<div id="sidebar">
		<div class="inner">

			<!-- Search -->


			<!-- Search -->


			<!-- Menu -->

			<!-- Section -->
			<?php include_once("meny.php"); ?>
			<?php include_once("fundifaqes.php"); ?>

			<!-- Section -->

			<!-- Footer -->

		</div>
	</div>











	<!-- Footer -->



	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>