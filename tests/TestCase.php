<?php

namespace Adi\Blogpackage\Tests;

use Adi\Blogpackage\BlogPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase {

  public function setUp(): void {

    parent::setUp();
    // additional setup
  }

  protected function getPackageProviders($app) {
    return [
      BlogPackageServiceProvider::class,
    ];
  }

  protected function getEnvironmentSetUp($app) {
    // perform environment setup
  }
}