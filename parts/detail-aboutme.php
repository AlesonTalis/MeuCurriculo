<?php
$id = 1;

$aboutme = GetUserValue('detail_aboutme',$id);

if (!empty($aboutme))
{
  $parts = explode("@",$aboutme);
  ?>      <div class="detail detail-aboutme">
            <h1><?php echo $parts[0]; ?></h1>
            <p><?php echo $parts[1]; ?></p>
          </div>
<?php
}

?>


