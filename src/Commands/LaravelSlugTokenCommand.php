<?php

namespace DanPalmieri\LaravelSlugToken\Commands;

use Illuminate\Console\Command;

class LaravelSlugTokenCommand extends Command
{
    public $signature = 'laravel-slug-token';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
