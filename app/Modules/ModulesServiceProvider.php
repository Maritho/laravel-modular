<?php namespace App\Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ModulesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $modules = config("module.modules");

        foreach ($modules as $key => $module) {
            if(file_exists(__DIR__.'/'.$module.'/Routes/web.php')) {
                Route::group(['prefix' => str_slug($module)], function() use ($module)  {
                    include __DIR__.'/'.$module.'/Routes/web.php';
                });
            }

            if(file_exists(__DIR__.'/'.$module.'/Routes/api.php')) {
                Route::group(['prefix' => str_slug($module).'/api'], function() use ($module) {
                    include __DIR__.'/'.$module.'/Routes/api.php';
                });
            }

            if(is_dir(__DIR__.'/'.$module.'/Views')) {
                $this->loadViewsFrom(__DIR__.'/'.$module.'/Views', $module);
            }
        }
    }

    public function register() {

    }

}
