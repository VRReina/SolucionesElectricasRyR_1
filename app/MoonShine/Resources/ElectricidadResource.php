<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Electricidad;

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
 * @extends ModelResource<Electricidad>
 */
class ElectricidadResource extends ModelResource
{
    protected string $model = Electricidad::class;

    protected string $title = 'Electricidads';

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
                Text::make('Servicio', 'servicio')->sortable(),
                Text::make('Descripcion', 'descripcion')->sortable(),
                Image::make('Imagen', 'img')
                            ->disk('public')
                            ->allowedExtensions(['jpg', 'png', 'jpeg', 'gif'])
            ]),
        ];
    }

    /**
     * @param Electricidad $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
