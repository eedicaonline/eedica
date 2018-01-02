<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable = [
		'title', 'slug', 'description', 'comments', 'comments_count', 'documents_count', 'lessons_count', 'videos_count', 'price', 'course_image', 'start_date', 'published'
	];
}
