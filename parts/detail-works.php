<?php
$id = 1;
$work = GetUserValue('detail_works',$id);

if(!empty($work))
{
  $works = explode(";",$work);

?><div class="detail detail-works detail-list">
              <h1>Experiências</h1>
<?php

  foreach($works as $wrk)
  {
    if (!empty($wrk))
    {
      $parts = explode("@",$wrk);

      ?>                    <p data-date="<?php echo $parts[0]; ?>"><strong><?php echo $parts[1]; ?></strong> <br> <?php 
      echo $parts[2];
      if (count($parts) > 3 && $parts[3] != "-")
      {
        echo "<br>".$parts[3];
      }
     ?></p>
<?php
    }
  }

  ?>            </div><?php
}

?>
