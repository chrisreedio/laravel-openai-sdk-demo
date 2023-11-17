<?php

namespace App\Filament\Pages;

use ChrisReedIO\OpenAI\SDK\Facades\OpenAiClient;
use Filament\Pages\Page;
use Filament\Actions;

class TestOpenAiPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'openai-sdk::filament.pages.test-open-ai-page';

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('Fetch Models')
                ->action(function () {
                    $models = OpenAiClient::models()->list();
                    dd($models);
                })
        ];
    }
}
