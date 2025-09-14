<?php

namespace Dock\AssistForWCAG;

use Dock\AssistForWCAG\Services\Contracts\AssistForWCAGServiceContract;
use Dock\AssistForWCAG\Services\AssistForWCAGService;
use Illuminate\Support\ServiceProvider;

class DockServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/assistforwcag.php', 'assistforwcag');

        $this->app->bind(AssistForWCAGServiceContract::class, AssistForWCAGService::class);
        $this->app->scoped('dockcodes-assistforwcag', AssistForWCAGServiceContract::class);
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/assistforwcag.php' => config_path('assistforwcag.php'),
        ], 'config');

        $this->bootBladeDirective();
    }

    public function provides(): array
    {
        return ['dockcodes-assistforwcag'];
    }

    protected function bootBladeDirective(): void
    {
        \Blade::directive('assistForWCAG', function () {
            return "<?= \\AssistForWCAG::render() ?>";
        });
    }
}
