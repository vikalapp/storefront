<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\LearningPathRepository;

class LearningPathController extends Controller
{

    private $repo;
    /**
     * LearningPathController constructor.
     */
    public function __construct(LearningPathRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index(){
        $learning_paths = $this->repo->getActive();
        dd($learning_paths);
    }
}
