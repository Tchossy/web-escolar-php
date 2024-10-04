<?php

define('URL_BASE', "http://localhost:8000");
define('SITE', "InsPOPFU - Website escola");

define('CONTROLLERS', 'app/controllers');

define('BASE_STYLES', "/base/styles");
define('BASE_VENDORS', "/base/vendors");
define('BASE_FONTS', "/base/fonts");
define('BASE_JS', "/base/js");
define('BASE_ACTIONS', "/base/actions");
define('BASE_IMG', "/base/assets");

define('DASHBOARD_STYLES', "/dashboard/styles");
define('DASHBOARD_JS', "/dashboard/js");
define('DASHBOARD_ACTIONS', "/dashboard/actions");
define('DASHBOARD_IMG', "/dashboard/assets");


function urlProject(string $uri = null): string
{
  if ($uri) {
    return URL_BASE . "/{$uri}";
  }

  return URL_BASE;
}
function urlDashProject(string $uri = null): string
{
  if ($uri) {
    return URL_BASE . "/dashboard/{$uri}";
  }

  return URL_BASE . "/dashboard";
}
