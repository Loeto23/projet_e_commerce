<?php

namespace Jeremy\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JeremyUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
