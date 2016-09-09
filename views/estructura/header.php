<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: SIPLAN :. | Gobierno del Estado de Zacatecas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php if(isset($_GET['token'])){
		if(md5(2) == $_GET['token']){
			echo "<link href='css/datatables.min.css' rel='stylesheet'>";
		}
	}
	?>
</head>


