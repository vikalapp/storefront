<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Services\Litmos;
use App\Repositories\LearningPathRepository;
class LearningPaths extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Litmos:LearningPaths';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will fetch litmos learning and store to DB';

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
     * @return mixed
     */
    public function handle()
    {
        $litmos = New Litmos();
        $litmos_learning_paths = $litmos->getLearningPaths();
        $repo = new LearningPathRepository();
        $repo->store($litmos_learning_paths);
    }
}
