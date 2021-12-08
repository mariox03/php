<?php
require('db.php');
include("session.php");

$id=$_REQUEST['id'];
$query = "SELECT * from master where id='".$id."'"; 

$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<?php
	confirm_logged_in();
?>

<div class="form">
    <p><a href="index.php">Home</a> 
    | <a href="logout.php">Logout</a></p>

    <h1>Update Record</h1>

    <?php
    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1) {
        $id=$_REQUEST['id'];
        $name =$_REQUEST['name'];
        $ean =$_REQUEST['ean'];
        $gluten =$_REQUEST['gluten'];
        $jajca =$_REQUEST['jajca'];
        $ribe =$_REQUEST['ribe'];
        $arasidi =$_REQUEST['arasidi'];
        $zrna_soje =$_REQUEST['zrna_soje'];
        $laktoza =$_REQUEST['laktoza'];
        $orescki =$_REQUEST['orescki'];
        $listna_zelena =$_REQUEST['listna_zelena'];
        $gorcicno_seme =$_REQUEST['gorcicno_seme'];
        $sezamovo_seme =$_REQUEST['sezamovo_seme'];
        $zveplo =$_REQUEST['zveplo'];
        $volcji_bob =$_REQUEST['volcji_bob'];
        $mehkuzci =$_REQUEST['mehkuzci'];
        $vegan =$_REQUEST['vegan'];
        $comments =$_REQUEST['comments'];

        
        $submittedby = $_SESSION["MEMBER_ID"];

        $update="update master set name='".$name."', ean='".$ean."', gluten='".$gluten."', jajca='".$jajca."', ribe='".$ribe."', arasidi='".$arasidi."', zrna_soje='".$zrna_soje."', laktoza='".$laktoza."', orescki='".$orescki."', listna_zelena='".$listna_zelena."', gorcicno_seme='".$gorcicno_seme."', sezamovo_seme='".$sezamovo_seme."', zveplo='".$zveplo."', volcji_bob='".$volcji_bob."', mehkuzci='".$mehkuzci."', vegan='".$vegan."', comments='".$comments."', submittedby='".$submittedby."' where id='".$id."'";

        mysqli_query($con, $update) or die(mysqli_error($con));

        $status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
        echo '<p style="color:#FF0000;">'.$status.'</p>';
    }else {
    ?>
    <div>
        <form name="form" method="post" action=""> 
            <input type="hidden" name="new" value="1" />
            <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
            <p>
                <label for="name">Ime:</label>
                <input type="text" name="name" required value="<?php echo $row['name'];?>" />
            </p>
            <p>
                <label for="ean">EAN koda:</label>
                <input type="number" name="ean" required value="<?php echo $row['ean'];?>" />
            </p>
            <p>
                <input type="checkbox" name="gluten" value="1"<?php echo $row['gluten'];?>" />
                <label for="gluten">Gluten</label>
            </p>
            <p>
                <input type="checkbox" name="raki" value="1"<?php echo $row['raki'];?>" />
                <label for="raki">Raki</label>
            </p>
            <p>
                <input type="checkbox" name="jajca" value="1"<?php echo $row['jajca'];?>" />
                <label for="jajca">Jajca</label>
            </p>
            <p>
                <input type="checkbox" name="ribe" value="1"<?php echo $row['ribe'];?>" />
                <label for="ribe">Ribe</label>
            </p>
            <p>
                <input type="checkbox" name="arasidi" value="1"<?php echo $row['arasidi'];?>" />
                <label for="arasidi">Arasidi</label>
            </p>
            <p>
                <input type="checkbox" name="zrna_soje" value="1"<?php echo $row['zrna_soje'];?>" />
                <label for="zrna_soje">Zrna soje</label>
            </p>
            <p>
                <input type="checkbox" name="laktoza" value="1"<?php echo $row['laktoza'];?>" />
                <label for="laktoza">Laktoza</label>
            </p>
            <p>
                <input type="checkbox" name="orescki" value="1"<?php echo $row['orescki'];?>" />
                <label for="orescki">Orescki</label>
            </p>
            <p>
                <input type="checkbox" name="listna_zelena" value="1"<?php echo $row['listna_zelena'];?>" />
                <label for="listna_zelena">Listna zelena</label>
            </p>
            <p>
                <input type="checkbox" name="gorcicno_seme" value="1"<?php echo $row['gorcicno_seme'];?>" />
                <label for="gorcicno_seme">Gorcicno seme</label>
            </p>
            <p>
                <input type="checkbox" name="sezamovo_seme" value="1"<?php echo $row['sezamovo_seme'];?>" />
                <label for="sezamovo_seme">Sezamovo seme</label>
            </p>
            <p>
                <input type="checkbox" name="zveplo" value="1"<?php echo $row['zveplo'];?>" />
                <label for="zveplo">Zveplo</label>
            </p>
            <p>
                <input type="checkbox" name="volcji_bob" value="1"<?php echo $row['volcji_bob'];?>" />
                <label for="volcji_bob">Volcji bob</label>
            </p>
            <p>
                <input type="checkbox" name="mehkuzci" value="1"<?php echo $row['mehkuzci'];?>" />.
                <label for="mehkuzci">Mehkuzci</label>
            </p>
            <p>
                <input type="checkbox" name="vegan" value="1"<?php echo $row['vegan'];?>" />
                <label for="vegan">Vegan</label>
            </p>
            <p>
                <input type="text" name="comments" value=""<?php echo $row['comments'];?>" />
                <label for="comments">Comments</label>
            </p>
            <p>
                <input name="submit" type="submit" value="Update" />
            </p>
        </form>
        <?php 
    } ?>
    </div>
</div>
</body>
</html>