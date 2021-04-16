<?php

function RemoveNonDigits($text)
{
  return preg_replace('/[^0-9]/','',$text);
}