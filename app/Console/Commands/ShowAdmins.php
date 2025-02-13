<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admin;

class ShowAdmins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admins:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all admin users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $admins = Admin::all(['id', 'name', 'email', 'username']);
        $this->table(['ID', 'Name', 'Email', 'Username'], $admins->toArray());
        return 0;
    }
}
