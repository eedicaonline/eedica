<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('slug', 100)->nullable();
            $table->text('description', 500)->nullable();
            $table->text('comments', 500)->nullable();
            $table->bigInteger('comments_count')->nullable();
            $table->integer('videos_count')->nullable();
            $table->integer('lessons_count')->nullable();
            $table->integer('documents_count')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('course_image')->nullable();
            $table->datetime('start_date')->nullable();
            $table->tinyInteger('published')->nullable()->default(0);
            $table->tinyInteger('status')->nullable()->default(0);
            $table->tinyInteger('course_type')->nullable()->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
