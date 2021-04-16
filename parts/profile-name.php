
      <!-- PROFILE NAME -->
      <div class="profile profile-name">
<?php 

$username = GetUserName(1);
if (!empty($username))
{
  $username_ = explode(" ", $username);

  foreach ($username_ as $uname) {
    ?>        <h1 class="text-fit"><?php echo $uname; ?></h1>
<?php
  }
}

?>
        <!-- <h1 class="text-fit">Adam</h1>
        <h1 class="text-fit">Son</h1> -->

<?php EditCogWheel("edit-profile_name",true); ?>
      </div>
