<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CacheConfigAndSyncTheme extends Command
{
    protected $signature = 'rebelde:cache-config';

    protected $description = 'Cache Laravel config and sync theme for Vite';

    public function handle(): int
    {
        $this->call('config:cache');
        $this->call('rebelde:vite-sync-theme');
        $this->info('Configuration cached and theme synced.');
        return Command::SUCCESS;
    }
}
