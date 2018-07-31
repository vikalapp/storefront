<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningPath extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'learning_paths';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'litmos_learning_path_id', 'name', 'active', 'for_sale', 'original_id', 'description', 'short_description',
        'long_description', 'access_till_date','price'
    ];

    public $timestamps = true;
}
