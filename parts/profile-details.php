<?php 
$id = 1;
?>

      <div class="profile profile-details">
<?php
// data de nascimento
$date = GetUserValue('user_birthday', $id);

if (!empty($date))
{
  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
  date_default_timezone_set('America/Sao_Paulo');

  ?>        <p><b>Nascimento:</b> <?php echo strftime('%d de %B de %Y', strtotime($date)); ?></p>
<?php 
}

// endereço
$address = GetUserValue('user_address', $id);
if (!empty($address))
{
  ?>        <p><b>Endereço:</b> <?php echo $address; ?></p>
<?php
}

?>
        <!-- <p><b>Nascimento:</b> 01 de Janeiro de 1900</p> -->
        <!-- <p><b>Endereço:</b> R. Tal 00 - Aslan Casttle, Narnia</p> -->
        <h3>Contato</h3>
<?php

//contato
// celular
$phonenumber = GetUserValue('user_phone', $id);
if (!empty($phonenumber))
{
  ?>        <p>Celular <br> <a href="<?php echo "tell:".RemoveNonDigits($phonenumber); ?>" rel="noopener noreferrer" target="_blank" class="nolink"><?php echo $phonenumber; ?></a></p>
<?php
}

// e-mail
$email = GetUserValue('user_email', $id);
if (!empty($email))
{
  ?>        <p>E-mail <br> <a href="<?php echo "mailto:".$email; ?>" rel="noopener noreferrer" target="_blank" class="nolink"><?php echo $email; ?></a></p>
<?php
}

// website
$website = GetUserValue('user_website',$id);
if (!empty($website))
{
  ?>        <p>Website <br> <a href="<?php echo "https://".$website; ?>" rel="noopener noreferrer" target="_blank" class="nolink"><?php echo $website; ?></a></p>
<?php
}

?>
        <!-- <p>Celular <br> (00) 00000-0000</p> -->
        <!-- <p>E-mail <br> adam.son@aslanking.com</p> -->
        <!-- <p>Website <br> aslankink.co</p> -->
        
<?php EditCogWheel("edit-profile_details",false,"details"); ?>
      </div>
