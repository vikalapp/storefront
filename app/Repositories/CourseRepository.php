<?php
/**
 * Created by PhpStorm.
 * User: vkalappagari
 * Date: 7/27/2018
 * Time: 7:09 PM
 */
namespace App\Repositories;
use App\Course;
use DB;
use Log;

class CourseRepository
{

    public function store($courses){
            if(is_array($courses)){
                foreach ($courses as $courseInfo){
                    Course::updateOrCreate(
                        [
                            'litmos_course_id' => $courseInfo->Id,
                        ],
                        [
                            'code' => $courseInfo->Code,
                            'name' => $courseInfo->Name,
                            'active' => $courseInfo->Active,
                            'for_sale' => $courseInfo->ForSale,
                            'original_id' => $courseInfo->OriginalId,
                            'description' => $courseInfo->Description,
                            'short_description' => $courseInfo->EcommerceShortDescription,
                            'long_description' => $courseInfo->EcommerceLongDescription,
                            'price' => $courseInfo->Price,
                            'access_till_date' => $courseInfo->AccessTillDate,
                            'team_library' => $courseInfo->CourseTeamLibrary

                        ]
                    );
                }
            }
    }


    public function get(){
        return Course::orderBy('name', 'ASC')
            ->get();
    }

    public function getActive(){
        return Course::where('active', 1)
            ->orderBy('name', 'ASC')
            ->get();
    }

    public function findById($id){
        return Course::find($id);
    }


}