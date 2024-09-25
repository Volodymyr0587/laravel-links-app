<?php

namespace App\Console\Commands;

use App\Models\Link;
use Illuminate\Console\Command;

class LinkList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'link:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List links saved in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $headers = ['id', 'url', 'description'];
        $links = Link::all(['id', 'url', 'description'])->toArray();
        $this->table($headers, $links);

        return 0;
    }
}
