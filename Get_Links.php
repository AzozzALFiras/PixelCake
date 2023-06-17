<?php

include "Functions.php"; 

$App_id = $_GET["App_ID"];
if(isset($App_id)){


$PixelCake = new PixelCake();
$GetLinks = $PixelCake->SearchLinks($App_id);
$data = json_decode($GetLinks);
$Link = $data->link;

?>

<a href="<?php echo $Link; ?>">Download</a>

<?php } ?>
