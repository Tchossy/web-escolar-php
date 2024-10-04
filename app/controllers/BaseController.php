<?php

namespace app\controllers;

use app\controllers\BaseTemplateController;

class BaseController
{
  public function home()
  {
    return BaseTemplateController::view("home");
  }
  public function about()
  {
    return BaseTemplateController::view("about");
  }
  public function ensinosMedio()
  {
    return BaseTemplateController::view("ensinos-medio");
  }
  public function ensinosMedioDetails()
  {
    return BaseTemplateController::view("ensinos-medio-details");
  }
  public function blog()
  {
    return BaseTemplateController::view("blog");
  }
  public function blogDetails()
  {
    return BaseTemplateController::view("blog-details");
  }
  public function contact()
  {
    return BaseTemplateController::view("contact");
  }
  public function apply()
  {
    return BaseTemplateController::view("apply");
  }

  // 404
  public function notFound()
  {
    echo "404";
  }
}
