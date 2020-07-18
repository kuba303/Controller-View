<?php

declare(strict_types=1);

namespace ViewApp;

require_once("src/utils/debug.php");
require_once("src/View.php");

class Controller
{

  private array $postData;

  public function __construct(array $postData)
  {
    $this->postData = $postData;
  }

  public function run(string $action): void
  {

    //imp View
    $view = new View();
    // parametry do wyswietlania
    $viewParams = [];

    switch ($action) {
        // case 'home':
        //   $viewParams['mamyDom'] = "udalo sie dom";
        //   $page = 'home';
        //   break;
      case 'option1':
        $viewParams['opcja1'] = "udalo sie opcja1";
        $page = 'option1';
        break;
      case 'option2':
        $viewParams['opcja2'] = "udalo sie opcja2";
        $page = 'option2';
        break;
      case 'option3':
        $viewParams['opcja3'] = "udalo sie opcja3";
        $page = 'option3';
        break;
      case 'option4':
        $viewParams['opcja4'] = "udalo sie opcja4";
        $page = 'option4';
        break;

      default:
        $viewParams['mamyDom'] = "udalo sie dom";
        $page = 'home';
        break;
    }

    $view->render($page, $viewParams);
  }
}
