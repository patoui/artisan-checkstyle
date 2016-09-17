<?php

namespace ArtisanPHPCS;

use Config;
use Illuminate\Console\Command;

class ArtisanCheckStyle extends Command
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
        $directories = implode(' ', Config::get('laravel-phpcs.directories', []));
        if (empty($directories)) {
            $directories = ['app/*'];
        }
        exec('vendor/bin/phpcs --report=html --standard=PSR2 ' . $directories);
    }
}