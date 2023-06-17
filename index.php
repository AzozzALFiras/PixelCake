<?php include "Functions.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>PixelCake - Welcome</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .App-Icon img {
    width: 150px;
    height: 150px;
    border-radius: 10px;
}
.col-sm-3 {
    padding: 10px 5px;
}
    </style>
</head>
<body>

<div class="container">
  <h2>Search App</h2>
  <p>Plz enter name a app</p>
  
<form method="POST">
<div class="form-group" >
<label for="usr">App Name:</label>
<input type="text" name="App_Name" class="form-control" >
</div>
<button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
<?php if(isset($_POST["submit"])){  ?>
    <div class="container">
  <div class="row">
<?php 
$App_Name = $_POST["App_Name"];
$PixelCake = new PixelCake();
$Lists = $PixelCake->SearchAppName($App_Name);
$data = json_decode($Lists);
// print_r($data);

foreach($data->list as $AppInfo){
    // Get Info app List from AppCake Api

    $App_Icon     = $AppInfo->icon;
    $App_Id       = $AppInfo->id;
    $App_Name_    = $AppInfo->name;
    $App_Seller   = $AppInfo->seller;
    $App_Ver      = $AppInfo->ver;
    $App_Bundleid = $AppInfo->bundleid;
    $App_date     = $AppInfo->date;
    $App_type     = $AppInfo->type;


 ?>

<div class="col-sm-3">
<center>
<div class="App-Icon"><img src="<?php echo $App_Icon; ?>"></div>
<div class="App-info">
<h5> <?php echo $App_Name_; ?> || <?php echo $App_Ver; ?></h5>
<p><?php  if(!empty($App_Bundleid)){ echo $App_Bundleid."||";} ?> <?php echo date('Y-m-d', $App_date);?></p>
<a  target="_blank" href="Get_Links.php?App_ID=<?php echo $App_Id; ?>">Get Links</a>
</div>
</center>

</div>
 


<?php } } ?>
</div>
</div>


</div>


</body>
</html>
