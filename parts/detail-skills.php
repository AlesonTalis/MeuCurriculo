<?php 

$id = 1;
$skill = GetUserValue('detail_skills',$id);

if (!empty($skill))
{
  // name@5;name@2;
  $skills = explode(";",$skill);

?>      <div class="detail detail-skills">
          <h1>Habilidades</h1>
          <div class="flex-column">
            <div>
              <!-- primeira colula -->
<?php

  for($i = 0; $i < count($skills); ++$i)
  {
    if ($i % 2 > 0)
      Skill($skills[$i]);
  }
?>          </div>
            <div>
              <!-- segunda coluna -->
<?php
  for($i = 1; $i < count($skills); ++$i)
  {
    if ($i % 2 == 0)
      Skill($skills[$i]);
  }
?>          </div>
          </div>
        </div>
<?php
}

function Skill($skills)
{
  if (!empty($skills))
  {
    $parts = explode("@",$skills);
    $_name = $parts[0];
    $_amount = (int)$parts[1];
    ?>            <p data-name="<?php echo $_name; ?>" data-value="<?php echo $_name; ?>"><strong> <?php echo $_name; ?> </strong>
                    <i class="fa fa-circle<?php if ($_amount < 1 ) echo "-thin";  ?>"></i>
                    <i class="fa fa-circle<?php if ($_amount < 2 ) echo "-thin";  ?>"></i>
                    <i class="fa fa-circle<?php if ($_amount < 3 ) echo "-thin";  ?>"></i>
                    <i class="fa fa-circle<?php if ($_amount < 4 ) echo "-thin";  ?>"></i>
                    <i class="fa fa-circle<?php if ($_amount < 5 ) echo "-thin";  ?>"></i>
                  </p>
<?php
  }
}



      // <div class="detail detail-skills">
      //   <h1>Habilidades</h1>
      //   <div class="flex-column">
      //     <div>
      //       <p data-name="Photoshop" data-value="1"><strong> Arco/Flecha </strong>
      //         <i class="fa fa-circle"></i>
      //         <i class="fa fa-circle-thin"></i>
      //         <i class="fa fa-circle-thin"></i>
      //         <i class="fa fa-circle-thin"></i>
      //         <i class="fa fa-circle-thin"></i>
      //       </p>
      //     </div>
      //     <div>
      //       <p data-name="HTML" data-value="5"><strong> Espadas </strong>
      //         <i class="fa fa-circle"></i>
      //         <i class="fa fa-circle"></i>
      //         <i class="fa fa-circle"></i>
      //         <i class="fa fa-circle"></i>
      //         <i class="fa fa-circle"></i>
      //       </p>
      //     </div>
      //   </div>
      // </div>