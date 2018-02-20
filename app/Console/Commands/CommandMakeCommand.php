<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CommandMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:cqrs:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new command';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Command';

    public function handle()
    {
        parent::handle();

        $this->call('make:cqrs:command-handler', [
            'name' => $this->argument('name')."Handler"
        ]);
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/command.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return  $rootNamespace.'\Domain\Command';
    }
}
