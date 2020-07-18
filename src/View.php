<?php

declare(strict_types=1);

namespace ViewApp;

class View
{
  public function render(string $page, array $params): void
  {
    require_once("templates/pages/layout.php");
  }
}
