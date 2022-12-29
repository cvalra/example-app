<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Managecv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managecv', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('date');
            $table->string('title');
            $table->string('participant')->nullable();
            $table->string('theme')->nullable();
            $table->string('level')->nullable();
            $table->string('position')->nullable();
            
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
        
    }
}
