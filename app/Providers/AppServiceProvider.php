<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ColumnDefinition;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFour();
        Model::preventLazyLoading(true);
        // Schema::defaultStringLength(255);
        Schema::defaultStringLength(191);

        $this->loadViewsFrom(resource_path('views/components'),'components');
        $this->loadViewsFrom(resource_path('views/frontend'),'frontend');
        $this->loadViewsFrom(resource_path('views/admin'),'admin');

        Blueprint::macro('lang', function ($columnName, $locales = [], $unique = false): ColumnDefinition {
            /** @var Blueprint $this */
            $column = $this->json($columnName);
            collect(count($locales) ? $locales : locals())->map(function ($locale) use ($columnName, $unique) {
                /** @var Blueprint $this */
                $localeColumn = $this->text("{$columnName}_{$locale}")
                    ->always()
                    ->virtualAs("JSON_UNQUOTE(json_extract({$columnName},'$.$locale'))")
                    ->comment("this is a {$columnName} with local : {$locale}");
                if ($unique) $localeColumn->unique();
            });
            return $column;
        });
    }
}
