<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cotizaciones;

use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Fields\Select;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Cotizaciones>
 */
class CotizacionesResource extends ModelResource
{
    protected string $model = Cotizaciones::class;

    protected string $title = 'Cotizaciones';

    protected bool $createInModal = true; 
 
    protected bool $editInModal = true; 
 
    protected bool $detailInModal = true; 

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Tipo Persona', 'tipo_persona')->sortable(),
            Text::make('Tipo Documento', 'tipo_documento')->sortable(),
            Text::make('Número Documento', 'id_cliente')->sortable(),
            Text::make('Nombre', 'nombre')->sortable(),
            Text::make('Correo Electrónico', 'email')->sortable(),
            Text::make('Teléfono', 'telefono')->sortable(),
            Text::make('Dirección', 'direccion')->sortable(),
            Select::make('Tipo de Servicio', 'tipo_servicio')->options([
                'Electricidad' => 'Electricidad',
                'Automatización Industrial' => 'Automatización Industrial',
            ])->sortable(),
            Text::make('Servicio', 'servicio')->sortable(),
            Textarea::make('Descripción', 'descripcion')->sortable(),
        ];
    }

    /**
     * @param Cotizaciones $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [
            'tipo_persona' => 'required|string|max:255',
            'tipo_documento' => 'required|string|max:255',
            'id_cliente' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'tipo_servicio' => 'required|string|max:255',
            'servicio' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ];
    }
}
