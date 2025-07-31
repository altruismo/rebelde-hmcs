<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SyncTheme extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rebelde:vite-sync-theme';
    protected $description = 'Export current theme from config/view.php to bootstrap/cache/theme.json';
    
    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $theme = config('view.theme');
        $path = base_path('bootstrap/cache/theme.json');
        file_put_contents($path, json_encode(['theme' => $theme], JSON_PRETTY_PRINT));
        $this->info("Theme '{$theme}' exported to {$path}.");
        return Command::SUCCESS;
    }
}
