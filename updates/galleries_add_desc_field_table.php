<?php namespace Raviraj\Rjgallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class GalleriesAddDescfield extends Migration
{
	public function up()
	{
		if (Schema::hasColumn('raviraj_rjgallery_galleries', 'slug')) {
			return;
		}

		Schema::table('raviraj_rjgallery_galleries', function($table)
		{
			$table->string('slug')->nullable()->index();
            $table->text('description')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('published')->default(false);
		});

	}

	public function down()
	{
		
	}



} 
