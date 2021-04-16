<?php

$id = 1;
$photo = GetUserValue('user_photo',$id);

if (!empty($photo))
{
  ?>      <!-- PROFILE PHOTO -->
      <div class="profile profile-photo">
        <div class="circle-200">
          <img src="img/<?php echo $photo; ?>" alt="Foto de Perfil" class="grayscale" style="transform: scale(1.5);"/>
        </div>
<?php EditCogWheel("edit-profile_photo",true); ?>
      </div>

<?php
}

?>



