<?php
/**
 * Created by PhpStorm.
 * User: vkalappagari
 * Date: 7/30/2018
 * Time: 11:47 AM
 */

namespace App\Repositories;
use App\LearningPath;
use DB;
use Log;

class LearningPathRepository
{
    public function store($lps){
        if(is_array($lps)){
            foreach ($lps as $lpInfo){
                LearningPath::updateOrCreate(
                    [
                        'litmos_learning_path_id' => $lpInfo->Id,
                    ],
                    [
                        'name' => $lpInfo->Name,
                        'active' => $lpInfo->Active,
                        'for_sale' => $lpInfo->ForSale,
                        'original_id' => $lpInfo->OriginalId,
                        'description' => $lpInfo->Description,
                        'short_description' => $lpInfo->EcommerceShortDescription,
                        'long_description' => $lpInfo->EcommerceLongDescription,
                        'access_till_date' => $lpInfo->AccessTillDate,
                    ]
                );
            }
        }
    }


    public function get(){
        return LearningPath::orderBy('name', 'ASC')
            ->get();
    }

    public function getActive(){
        return LearningPath::where('active', 1)
            ->orderBy('name', 'ASC')
            ->get();
    }

}