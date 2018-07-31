<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningPathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_paths', function (Blueprint $table) {
            $table->increments('id');
            $table->string('litmos_learning_path_id',50)->unique();
            $table->string('name',255);
            $table->boolean('active')->default(true);
            $table->boolean('for_sale')->default(true);
            $table->integer('original_id');
            $table->longText('description')->nullable(true);
            $table->longText('short_description')->nullable(true);
            $table->longText('long_description')->nullable(true);
            $table->double('price',15,2)->nullable(true);
            $table->timestamp('access_till_date')->nullable(true);
            $table->string('image',255)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learning_paths');
    }
}
