<?php

namespace ArtisanCheckstyle;

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
        $standard = config('checkstyle.standard');
        $directories = config('checkstyle.directories', ['app/*']);
        if (empty($directories)) {
            throw new \Exception(
                'Error: checkstyle.directories config is empty'
            );
        }
        foreach ($directories as $directory) {
            if (! is_dir($directory)) {
                throw new \Exception(
                    'Error: \'' . $directory . '\' is not a directory'
                );
            }
        }
        $directories = implode(' ', $directories);
        $output = shell_exec(
            'vendor/bin/phpcs ' . $directories . ' --standard=' . $standard
        );
        echo $output;
    }
}
