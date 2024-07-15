<?php

namespace Maru0914\LaravelConfigJp\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'config-jp:publish')]
class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'config-jp:publish
                {name? : The name of the japanese configuration file to publish}
                {--all : Publish all japanese configuration files}
                {--force : Overwrite any existing japanese configuration files}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish japanese configuration files to your application';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Push configuration files.
    }
}
