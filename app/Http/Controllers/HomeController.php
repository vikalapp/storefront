<?php

namespace App\Http\Controllers;

use App\Repositories\CourseRepository;
use App\Repositories\LearningPathRepository;
use Illuminate\Http\Request;
use App\Course;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseRepo = new CourseRepository();
        // $courses = $courseRepo->getActive();
        $courses = Course::paginate(8);
        return view('welcome')
            ->with('courses', $courses);
    }

    public function learningpaths()
    {
        $repo = new LearningPathRepository();
        $learning_paths = $repo->getActive();
        return view('learningpaths')
            ->with('learningpaths', $learning_paths);
    }

}
