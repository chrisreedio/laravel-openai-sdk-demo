<?php

namespace App\Filament\Pages;

use ChrisReedIO\OpenAI\SDK\Facades\OpenAI;
use Filament\Pages\Page;
use Filament\Actions;

class TestOpenAiPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.test-open-ai-page';

    public array $assistants = [];

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('Fetch Models')
                ->action(function () {
                    $models = OpenAI::models()->list()->all();
                    dd($models);
                }),
            Actions\Action::make('List Assistants')
                ->action(function () {
                    $assistants = OpenAI::assistants()->list()->collect()->all();
                    dd($assistants);

                })
        ];
    }
}
