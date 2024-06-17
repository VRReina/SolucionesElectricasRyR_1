<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Proyectos;

use Illuminate\Http\Request;
use MoonShine\Enums\ClickAction;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Fields\Image;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Proyectos>
 */
class ProyectosResource extends ModelResource
{
    protected string $model = Proyectos::class;

    protected string $title = 'Proyectos';

    protected bool $createInModal = true;

    protected bool $editInModal = true;

    protected bool $detailInModal = false;

    protected ?ClickAction $clickAction = ClickAction::EDIT;

    public function redirectAfterSave(): string
    {
        $referer = request()->header('referer');
        return $referer ?: '/';
    }

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Proyecto', 'nombre_proyecto')->sortable(),
                Text::make('Descripcion', 'descripcion')->sortable(),
                Image::make('Imagen', 'img_1')
                            ->disk('public')
                            ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif']),
                Image::make('Imagen', 'img_2')
                            ->disk('public')
                            ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif'])
            ]),
        ];
    }

    /**
     * @param Proyectos $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
