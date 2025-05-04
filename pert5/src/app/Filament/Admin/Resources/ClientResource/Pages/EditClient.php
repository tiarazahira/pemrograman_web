<?php

namespace App\Filament\Admin\Resources\ClientResource\Pages;
use Illuminate\Support\Str;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Admin\Resources\ClientResource;

class EditClient extends EditRecord
{
    protected static string $resource = ClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            Action::make('requestApiToken')
                ->label('Request New API Token')
                ->color('danger')
                ->icon('heroicon-o-key')
                ->requiresConfirmation()
                ->action(function () {
                    $this->record->api_token = Str::random(10);
                    $this->record->save();
                    $this->fillForm();
    
                    Notification::make()
                        ->title('New API Token Generated')
                        ->success()
                        ->send();
                }),
        ];
    }
    

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (empty($data['api_token'])) {
            $data['api_token'] = Str::random(10);
        }

        return $data;
    }
}