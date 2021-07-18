<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;

class CreateRoleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'role:create {name} {description}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new role with custom description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $description = $this->argument('description');
        $role = new Role();
        $role->name = $name;
        $role->description = $description;
        $role->save();

        $this->info('Role successfully created with name: '.$name.", and description: ".$description);
    }
}
