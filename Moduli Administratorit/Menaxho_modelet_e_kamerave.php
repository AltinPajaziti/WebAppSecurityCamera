<?php
include("Kontrolli.php");
?>

<!DOCTYPE html>
<!--
    Editorial by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Uebaplikacioni per Menaxhimin e kamerave te Sigurise</title>
</head>

<body class="is-preload">




    <section class="wrapper" id="main">
        <div class="inner">
            <!-- Header -->
            <?php include_once("fillimi_i_faqes.php") ?>

            <p style="text-align: right;">Pershendetje, <em><?php echo $useri; ?>!</em></p>
            <div class="content">
                <div class="row">
                    <div class="col-12 col-12-medium">
                        <h3>Shto te dhenat e modeleve</h3>

                        <div class="table-wrapper">
                            <form action="shtomodele.php" method="post">
                                <div class="table-wrapper">
                                    <div class="row gtr-uniform">
                                        <div class="col-6 col-12-xsmall">
                                            <input type="text" name="modeli" id="modeli" value=""
                                                placeholder="modelet e kamerave te sigurise">
                                        </div>

                                        <div class="col-6 col-12-xsmall">
                                            <ul class="actions">
                                                <li><input type="submit" name="shtomodelin" value="Shto"
                                                        class="primary"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <form action="" method="post">
                                <br><br>
                                <table>
                                    <tr>
                                        <h3>Kerko te dhenat e modeleve te kamerave te sigurise per modifikim ose fshirje</h3>
                                    </tr>
                                    <tr>
                                        <td>Shkruaj:</td>
                                        <td>
                                            <input type="text" name="termi" placeholder="Modeli i kameres se sigurise" value="">
                                        </td>
                                        <td>
                                            <input type="submit" value="Kerko">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div class="table-wrapper">
                            <table width="90%" border="0">
                                <div class="table-wrapper">
                                    <tr bgcolor="#e1e1e1">

                                    <?php
                                    if (!empty($_REQUEST['termi'])) {
                                        $termi = mysqli_real_escape_string($lidhe, $_REQUEST['termi']);
                                        $sql = mysqli_query($lidhe, "SELECT * FROM modelet_umks WHERE modelet_umks LIKE '%" . $termi . "%'");
                                        while ($rreshti = mysqli_fetch_array($sql)) {
                                            echo "<tr>";
                                            echo "<td>" . $rreshti['modelet_umks'] . "</td>";
                                            echo "<td><a href=\"modifiko_modelin.php?id_modelet=$rreshti[id_modelet]\" class='button' class='button primary'>Modifiko</a></td>";
                                            echo "<td><a href=\"fshije_modelin.php?id_modelet=$rreshti[id_modelet]\"  onClick=\"return confirm('A jeni te sigurt se deshironi te fshini modelin e kameres')\" class='button' class='primary'>Fshije</a></td>";
                                            echo "</tr>";
                                        }
                                    }
                                    ?>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sidebar">
                <div class="inner">

                    <!-- Footer -->
                    <?php include_once("Meny.php"); ?>

                    <?php include_once("FundiFaqes.php") ?>
                </div>

            </div>

        </div>


    </section>



    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>