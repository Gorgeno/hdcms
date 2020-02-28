<?php

namespace App\Http\Controllers\Module;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Site;
use App\Servers\MenuServer;

class MenuController extends ApiController
{
  public function __construct()
  {
    $this->middleware('siteAuth');
  }

  public function index(Site $site, Module $module, MenuServer $menuServer)
  {
    $menus = $menuServer->getUserMenu($site, $module, auth()->user());
    return $this->success('用户菜单', $menus);
  }
}
