<?php require('session.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<title>Praksa</title>
</head>

<?php
	confirm_logged_in();
?>

<body>
	<!--INSTALLLL FIREBUG!!!!!!!!!!
		ALOW CORS!!!!!!!!!!!!!
	-->
	<div id="camera"></div>
	<button onclick="turnoff()">Izklopite kamero</button>
    

	<form action="new.php" method="GET">

		<label for="name">Ime:</label>
		<input type="text" name="name" required><br><br>
		<label for="ean">EAN koda:</label>
		<input type="number" id="ean" name="ean" required><br><br>

		<input type="checkbox" name="gluten" value="1">
		<label for="gluten">Gluten</label>
		<br>
		<input type="checkbox" name="raki" value="1">
		<label for="raki">Raki</label>
		<br>
		<input type="checkbox" name="jajca" value="1">
		<label for="jajca">Jajca</label>
		<br>
		<input type="checkbox" name="ribe" value="1">
		<label for="ribe">Ribe</label>
		<br>
		<input type="checkbox" name="arasidi" value="1">
		<label for="arasidi">Arasidi</label>
		<br>
		<input type="checkbox" name="zrna_soje" value="1">
		<label for="zrna_soje">Zrna soje</label>
		<br>
		<input type="checkbox" name="laktoza" value="1">
		<label for="laktoza">Laktoza</label>
		<br>
		<input type="checkbox" name="orescki" value="1">
		<label for="orescki">Orescki</label>
		<br>
		<input type="checkbox" name="listna_zelena" value="1"> 
		<label for="listna_zelena">Listna zelena</label>
		<br>
		<input type="checkbox" name="gorcicno_seme" value="1">
		<label for="gorcicno_seme">Gorcicno seme</label>
		<br>
		<input type="checkbox" name="sezamovo_seme" value="1">
		<label for="sezamovo_seme">Sezamovo seme</label>
		<br>
		<input type="checkbox" name="zveplo" value="1">
		<label for="zveplo">Zveplo</label>
		<br>
		<input type="checkbox" name="volcji_bob" value="1">
		<label for="volcji_bob">Volcji bob</label>
		<br>
		<input type="checkbox" name="mehkuzci" value="1">
		<label for="mehkuzci">Mehkuzci</label>
		<br>
		<input type="checkbox" name="vegan" value="1">
		<label for="vegan">Vegan</label>
		<br>
		<input type="text" name="comments">
		<label for="comments">Comments</label>
		<br>

		<input type="submit" name="submit" value="Potrdi">
		
	</form>
	<a href="view.php"><input type="submit" value="Ogled zapisa"></a><br>

    <?php echo  $_SESSION['LAST_NAME']. ' '.$_SESSION['FIRST_NAME'] ;?>
    <br>
    <a href="logout.php">Logout</a>

	<script src="quagga.min.js"></script>

	<script>

        Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#camera')
            },
            decoder: {
                readers: ["ean_reader"]
            }
        }, function (err) {
            if (err) {
                console.log(err);
                return
            }
            Quagga.start();
        });

        Quagga.onDetected(function (data) {
            console.log(data.codeResult.code);
            document.querySelector('#ean').value = data.codeResult.code;
        });


		function turnoff() {
			Quagga.stop();
		}
    </script>
	<script>
		$( "button" ).click(function() {
			$( "#camera" ).remove();
			$( "button" ).remove();
		});
	</script>
</body>
</html>