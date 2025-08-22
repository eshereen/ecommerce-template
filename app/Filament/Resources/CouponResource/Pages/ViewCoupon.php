<?php

namespace App\Filament\Resources\CouponResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\CouponResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCoupon extends ViewRecord
{
    protected static string $resource = CouponResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
