<?php

namespace Mixdinternet\Mcache\Providers;

use Illuminate\Support\ServiceProvider;
use Pingpong\Menus\MenuFacade as Menu;

class McacheServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->setMenu();

        $this->setRoutes();

        $this->loadViews();

        $this->publish();
    }

    public function register()
    {

    }

    protected function setMenu()
    {
        Menu::modify('adminlte-sidebar', function ($menu) {
            $menu->route('admin.mcache.index', 'Cache', [], 200
                , ['icon' => 'fa fa-recycle', 'active' => function () {
                    return checkActive(route('admin.mcache.index'));
                }])->hideWhen(function () {
                return checkRule('admin.mcache.index');
            });
        });

        Menu::modify('adminlte-permissions', function ($menu) {
            $menu->url('admin.mcache.index', 'Cache', 200, ['except' => ['create', 'edit', 'destroy', 'trash']]);
        });
    }

    protected function setRoutes()
    {
        if (!$this->app->routesAreCached()) {
            $this->app->router->group(['namespace' => 'Mixdinternet\Mcache\Http\Controllers'],
                function () {
                    require __DIR__ . '/../routes/web.php';
                });
        }
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'mixdinternet/mcache');
    }

    protected function publish()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/mixdinternet/mcache'),
        ], 'views');
    }
}
