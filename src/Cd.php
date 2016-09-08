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

}
?>
