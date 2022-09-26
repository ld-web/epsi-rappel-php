<?php

namespace App;

use App\IDisplayable;

class Product implements IDisplayable
{
  public function display()
  {
    echo "Je suis un produit<br />";
  }
}
