<?php

namespace ArtisanCheckstyle;

use Config;
use Illuminate\Console\Command;

class ArtisanCheckstyle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'checkstyle';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run PHPCS against defined directories';

    /**
     * Create a new command instance.
     *
     * @param  DripEmailer  $drip
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public static function handle()
    {
        $directories = Config::get('laravel-phpcs.directories', ['app/*']);
        $directories = (empty($directories)) ? ['app/*'] : $directories;
        $directories = implode(' ', $directories);
        echo exec('vendor/bin/phpcs ' . $directories . ' --standard=PSR2');
    }
}