<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'courses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'litmos_course_id', 'code', 'name', 'active', 'for_sale', 'original_id', 'description', 'short_description',
        'long_description', 'price', 'access_till_date', 'team_library'
    ];

    public $timestamps = true;
}
