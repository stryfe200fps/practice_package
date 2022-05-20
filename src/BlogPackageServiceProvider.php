<?php

namespace Adi\Blogpackage;

use Adi\Blogpackage\Console\InstallBlogPackage;
use Illuminate\Support\ServiceProvider;

class BlogPackageServiceProvider extends ServiceProvider {
  public function register() {

    $this->mergeConfigFrom(__DIR__. '/../config/config.php', 'blogpackage');

    $this->app->bind('calculator', function ($app) {
        return new Calculator();
    });

  }

  public function boot() {



    if ($this->app->runningInConsole()) {
   $this->publishes([

      __DIR__.'/../config/config.php' =>   config_path('blogpackage.php'),
    ], 'config');

    $this->commands([
      InstallBlogPackage::class
    ]);
    }

  }
}