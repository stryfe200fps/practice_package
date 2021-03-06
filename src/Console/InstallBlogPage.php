<?php

namespace Adi\Blogpackage\Console;

use Illuminate\Console\Command;

class InstallBlogPackage extends Command {
    protected $signature = 'blogpackage:install';

    protected $description = 'Install the BlogPackage';

    public function handle() {
        $this->info('Installing BlogPackage...');

        $this->info('Publishing configuration...');

        $this->call('vendor:publish', [
            '--provider' => "Adi\Blogpackage\BlogPackageServiceProvider",
            '--tag' => "config"
        ]);

        $this->info('Installed BlogPackage');
    }
}