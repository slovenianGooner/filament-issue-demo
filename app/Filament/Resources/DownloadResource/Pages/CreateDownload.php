<?php

namespace App\Filament\Resources\DownloadResource\Pages;

use App\Filament\Resources\DownloadResource;
use App\Models\Download;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDownload extends CreateRecord
{
    protected static string $resource = DownloadResource::class;

    public function afterCreate(): void
    {
        /**
         * @var Download $record
         */
        $record = $this->record;

        // This is where an instance of Media is expected, but returns null
        dd($record->getFirstMedia('pdf'));
    }
}
