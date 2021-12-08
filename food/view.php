<?php
require('db.php');
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php
	confirm_logged_in();
?>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
    <thead>
        <tr>
            <th><strong>S.No</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Ean</strong></th>
            <th><strong>Gluten</strong></th>
            <th><strong>Raki</strong></th>
            <th><strong>Jajca</strong></th>
            <th><strong>Ribe</strong></th>
            <th><strong>Arasidi</strong></th>
            <th><strong>Zrna soje</strong></th>
            <th><strong>Laktoza</strong></th>
            <th><strong>Orescki</strong></th>
            <th><strong>Listna zelena</strong></th>
            <th><strong>Gorcicno seme</strong></th>
            <th><strong>Sezamovo seme</strong></th>
            <th><strong>Zveplo</strong></th>
            <th><strong>Volcji bob</strong></th>
            <th><strong>Mehkuzci</strong></th>
            <th><strong>Vegan</strong></th>
            <th><strong>Comments</strong></th>
            <th><strong>Edit</strong></th>
            <th><strong>Delete</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $count=1;

        $sel_query="Select * from master ORDER BY id desc;";

        $result = mysqli_query($con,$sel_query);

        while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td align="center"><?php echo $count; ?></td>
            <td align="center"><?php echo $row["name"]; ?></td>
            <td align="center"><?php echo $row["ean"]; ?></td>
            <td align="center"><?php echo $row["gluten"]; ?></td>
            <td align="center"><?php echo $row["raki"]; ?></td>
            <td align="center"><?php echo $row["jajca"]; ?></td>
            <td align="center"><?php echo $row["ribe"]; ?></td>
            <td align="center"><?php echo $row["arasidi"]; ?></td>
            <td align="center"><?php echo $row["zrna_soje"]; ?></td>
            <td align="center"><?php echo $row["laktoza"]; ?></td>
            <td align="center"><?php echo $row["orescki"]; ?></td>
            <td align="center"><?php echo $row["listna_zelena"]; ?></td>
            <td align="center"><?php echo $row["gorcicno_seme"]; ?></td>
            <td align="center"><?php echo $row["sezamovo_seme"]; ?></td>
            <td align="center"><?php echo $row["zveplo"]; ?></td>
            <td align="center"><?php echo $row["volcji_bob"]; ?></td>
            <td align="center"><?php echo $row["mehkuzci"]; ?></td>
            <td align="center"><?php echo $row["vegan"]; ?></td>
            <td align="center"><?php echo $row["comments"]; ?></td>
            <td align="center">
                <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
            </td>
            <td align="center">
                <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
            </td>
        </tr>
        <?php $count++; 
        } ?>
    </tbody>
</table>
</div>
</body>
</html>