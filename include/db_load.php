<?php
global $conn;

function GetUserValue($key = "user_name", $id = 1)
{
  $conn = $GLOBALS['conn'];

  $sql = "SELECT * FROM `user_details` WHERE `user_id` = ".$id." AND `key` LIKE '".$key."' AND `active` = '1' ORDER BY `id` ASC LIMIT 1";

  $result = mysqli_query($conn,$sql);
  
  if (!$result)
  {
    echo mysqli_error($conn);
    
    return null;
  }

  if (mysqli_num_rows($result) > 0)
  {
    $row = mysqli_fetch_assoc($result);

    return $row['value'];
  }

  return null;
}

function GetUserName($id = 0)
{
  $conn = $GLOBALS['conn'];

  $sql = "SELECT * FROM `user_details` WHERE `user_id` = ".$id." AND `key` LIKE 'user_name' AND `active` = '1' ORDER BY `id` ASC LIMIT 1";

  
  $result = mysqli_query($conn,$sql);
  
  if (!$result)
  {
    echo mysqli_error($conn);
  }

  if (mysqli_num_rows($result) > 0)
  {
    $row = mysqli_fetch_assoc($result);

    return $row['value'];
  }
}