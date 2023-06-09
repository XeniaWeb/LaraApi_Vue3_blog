<?php

declare(strict_types=1);

namespace App\Console\Command;

use Illuminate\Console\Command;

class ClearAllAndCacheAgain extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'clearall:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Очищает и записывает заново все кеши';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('config:cache');
        $this->call('event:clear');
        $this->call('optimize:clear');
        $this->call('route:clear');
        $this->call('route:cache');
        $this->call('view:clear');

        $this->info('Files cached successfully!');
    }
}
