<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class CommandHandlerMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:cqrs:command-handler';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new command handler';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'CommandHandler';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/commandHandler.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return  $rootNamespace.'\Domain\Command\Handlers';
    }
}
