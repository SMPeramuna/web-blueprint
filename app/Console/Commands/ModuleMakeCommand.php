<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Support\Str;

class ModuleMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make module in root level';

    /**
     * @var array
    */
    protected $folderStructure = [
        'Command/Handlers',
        'Query/Handlers',
        'Repository/Contacts',
        'Exceptions',
    ];

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        foreach ($this->folderStructure as $folder) {
           $this->makeDirectory($this->getFolderPath($folder));
        }
    }

    /**
     * @param string $folderPath
     * @return string
     */
    private function getFolderPath($folderPath)
    {
        return $this->getPath($this->getNameInput()).$folderPath."/.gitkeep";
    }

    protected function getPath($fqns)
    {
        return $this->laravel['path.base'].'/src/'.str_replace('\\', '/', $fqns).'/';
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        // TODO: Implement getStub() method.
    }

}
