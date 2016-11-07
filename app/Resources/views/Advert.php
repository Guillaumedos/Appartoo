<?php
// src/OC/PlatformBundle/Entity/Advert.php

namespace OC\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Advert
{
  private $id;
  private $date;
  private $title;
  private $author;
  private $content;
  private $published = true;
  private $image;
  private $categories;
  private $applications;
  private $updatedAt;
  private $nbApplications = 0;
  private $slug;

  public function __construct()
  {
    $this->date         = new \Datetime();
    $this->categories   = new ArrayCollection();
    $this->applications = new ArrayCollection();
  }
  
  // … Les getters et setters
}