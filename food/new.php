<!DOCTYPE html>
<html>
<body>
<?php
    if (isset($_GET['submit'])) {

            $server = "localhost";
            $username = "nejko";
            $password = "admin123";
            $dbname = "nejko";
            
            
            
            // Create connection
            $conn = new mysqli($server, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            
            if (isset($_GET['gluten'])) {
                $gluten = 1;
            } else{
                $gluten= 0 ;
            }
            if (isset($_GET['raki'])) {
                $raki = 1;
            } else{
                $raki= 0 ;
            }
            if (isset($_GET['jajca'])) {
                $jajca = 1;
            } else{
                $jajca= 0 ;
            }
            if (isset($_GET['ribe'])) {
                $ribe = 1;
            } else{
                $ribe= 0 ;
            }
            if (isset($_GET['arasidi'])) {
                $arasidi = 1;
            } else{
                $arasidi= 0 ;
            }
            if (isset($_GET['zrna_soje'])) {
                $zrna_soje = 1;
            } else{
                $zrna_soje= 0 ;
            }
            if (isset($_GET['laktoza'])) {
                $laktoza = 1;
            } else{
                $laktoza= 0 ;
            }
            if (isset($_GET['orescki'])) {
                $orescki = 1;
            } else{
                $orescki= 0 ;
            }
            if (isset($_GET['listna_zelena'])) {
                $listna_zelena = 1;
            } else{
                $listna_zelena= 0 ;
            }
            if (isset($_GET['gorcicno_seme'])) {
                $gorcicno_seme = 1;
            } else{
                $gorcicno_seme= 0 ;
            }
            if (isset($_GET['sezamovo_seme'])) {
                $sezamovo_seme = 1;
            } else{
                $sezamovo_seme= 0 ;
            }
            if (isset($_GET['zveplo'])) {
                $zveplo = 1;
            } else{
                $zveplo= 0 ;
            }
            if (isset($_GET['volcji_bob'])) {
                $volcji_bob = 1;
            } else{
                $volcji_bob= 0 ;
            }
            if (isset($_GET['mehkuzci'])) {
                $mehkuzci = 1;
            } else{
                $mehkuzci= 0 ;
            }
            if (isset($_GET['vegan'])) {
                $vegan = 1;
            } else{
                $vegan= 0 ;
            }
            if (isset($_GET['comments'])) {
                $comments = $_GET['comments'];
            } else{
                $comments= "/" ;
            }
            
            $name = $_GET['name'];
            $ean = $_GET['ean'];
            
            $sql = "INSERT INTO `master`(`name`, `ean`, `gluten`, `raki`, `jajca`, `ribe`, `arasidi`, `zrna_soje`, `laktoza`, `orescki`, `listna_zelena`, `gorcicno_seme`, `sezamovo_seme`, `zveplo`, `volcji_bob`, `mehkuzci`, `vegan`, `comments`) VALUES ('$name', '$ean', '$gluten', '$raki', '$jajca', '$ribe', '$arasidi', $zrna_soje, '$laktoza', '$orescki', '$listna_zelena', '$gorcicno_seme', '$sezamovo_seme', '$zveplo', '$volcji_bob', '$mehkuzci', '$vegan', '$comments')";
            
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
    }
?>
</body>
</html>
