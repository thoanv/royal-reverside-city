<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('avatar')->nullable()->index();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->text('specification')->nullable();//Thông số kỹ thuật
            $table->integer('star')->default(5);
            $table->tinyInteger('favourite')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->decimal('price', 12, 2)->nullable()->default(0);
            $table->decimal('discount', 12, 2)->nullable()->default(0);
            $table->integer('quantity')->default(0);
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('trademark_id')->nullable();
            $table->unsignedInteger('origin_id')->nullable();
            $table->unsignedInteger('category_id');
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
        Schema::dropIfExists('products');
    }
}
