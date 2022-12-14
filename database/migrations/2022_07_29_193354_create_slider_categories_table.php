<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 => Active; 2 => Inactive;');
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
        Schema::dropIfExists('slider_categories');
    }
};
