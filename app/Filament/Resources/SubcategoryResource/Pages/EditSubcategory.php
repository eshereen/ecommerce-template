<?php

namespace App\Filament\Resources\SubCategoryResource\Pages;

use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use App\Filament\Resources\SubCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubCategory extends EditRecord
{
    protected static string $resource = SubCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
