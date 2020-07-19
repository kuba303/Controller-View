<?php

declare(strict_types=1);

namespace ViewApp;

require_once("src/utils/debug.php");
require_once("src/View.php");

class Controller
{

  private const DEFAULT_ACTION = 'home';


  private array $getData;
  private array $postData;



  public function __construct(array $getData, array $postData)
  {
    $this->getData = $getData;
    $this->postData = $postData;
  }
  // this->getData['action]=url!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  public function run(): void
  {
    $action = $this->getData['action'] ?? self::DEFAULT_ACTION;
    dump($action);
    //imp View
    $view = new View();
    // parametry do wyswietlania
    $viewParams = [];

    switch ($action) {

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
