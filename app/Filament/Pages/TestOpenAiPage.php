<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions;

class TestOpenAiPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test-open-ai-page';

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('Fetch Models')
                ->action(function () {

                })
        ];
    }
}
