<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('test')
                ->schema([
                    TextEntry::make('text')
                        ->copyable()
                        ->copyableState($state = fake()->words(asText: true))
                        ->getConstantStateUsing('state is: '.$state),
                ])
                ->action(fn () => null),
            CreateAction::make(),
        ];
    }
}
