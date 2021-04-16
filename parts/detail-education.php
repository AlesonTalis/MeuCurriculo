<?php
$id = 1;
$education = GetUserValue('detail_education',$id);

if(!empty($education))
{
  $educations = explode(";",$education);

?><div class="detail detail-education detail-list">
              <h1>Formação</h1>
<?php

  foreach($educations as $educa)
  {
    if (!empty($educa))
    {
    $parts = explode("@",$educa);

    ?>                    <p data-date="<?php echo $parts[0]; ?>"><?php echo $parts[1]; ?> <br> <?php 
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
