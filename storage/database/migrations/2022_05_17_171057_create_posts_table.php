<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();

            $table->tinyInteger('view')->default(0);
            $table->enum('featured', ['YES', 'NO'])->default('NO');
            $table->enum('status', ['YES', 'NO'])->default('YES');
            $table->tinyInteger('start')->default(0);
            $table->enum('published', ['draft', 'pending', 'unpublished', 'published'])->default('draft');
            $table->dateTime('time_published')->nullable();

            $table->unsignedInteger('created_by');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('updated_by')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
