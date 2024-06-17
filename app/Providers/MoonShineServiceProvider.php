<?php

declare(strict_types=1);

namespace App\Providers;

use MoonShine\Providers\MoonShineApplicationServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Resources\ResourceContract;
use MoonShine\Menu\MenuElement;
use MoonShine\Pages\Page;
use App\MoonShine\Resources\CotizacionesResource;
use App\MoonShine\Resources\ServiciosResource;
use App\MoonShine\Resources\ElectricidadResource;
use App\MoonShine\Resources\AutomatizacionResource;
use App\MoonShine\Resources\ProyectosResource;
use Closure;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    /**
     * @return list<ResourceContract>
     */
    protected function resources(): array
    {
        return [];
    }

    /**
     * @return list<Page>
     */
    protected function pages(): array
    {
        return [];
    }

    /**
     * @return Closure|list<MenuElement>
     */
    protected function menu(): array
    {
        return [
            MenuGroup::make(static fn() => __('moonshine::ui.resource.system'), [
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.admins_title'),
                    new MoonShineUserResource()
                ),
                MenuItem::make(
                    static fn() => __('moonshine::ui.resource.role_title'),
                    new MoonShineUserRoleResource()
                ),
            ]),

                MenuGroup::make(static fn() => __('Servicios'), [
                    MenuItem::make('Electricidad', new ElectricidadResource),
                    MenuItem::make('Automatizacion', new AutomatizacionResource)
                ]),

                MenuItem::make('Cotizaciones', new CotizacionesResource),

                MenuItem::make('Proyectos', new ProyectosResource),
        ];
    }

    /**
     * @return Closure|array{css: string, colors: array, darkColors: array}
     */
    protected function theme(): array
    {
        return [
            
        ];
    }

    public function boot(): void
    {
        parent::boot();
 
        moonshineColors()
            ->dividers('#98d404')
            ->borders('#98d404')
            ->buttons('#98d404')
            ->primary('#ec7c1c');
    }
 
    //...
}


