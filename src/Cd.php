<?php

class Cd
{
  private $artist;
  private $price;
  private $image;


function __construct($artist, $price, $image)
{
    $this->artist = $artist;
    $this->price = $price;
    $this->image = $image;

}
function getArtist()
{
  return $this->artist;
}

function getPrice()
{
  return $this->price;
}
function getImage()
{
  return $this->image;
}
function save()
{
  array_push($_SESSION["allCds"], $this);
}
static function getAll()
{
    return $_SESSION['allCds'];
}
static function deleteAll()
{
    $_SESSION['allCds'] = array();
}



}
?>
