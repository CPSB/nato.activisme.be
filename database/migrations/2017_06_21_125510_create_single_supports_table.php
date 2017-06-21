<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingleSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('single_supports')) {
            Schema::create('single_supports', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('country');
                $table->string('petition');
                $table->string('city')->default('unknown');
                $table->string('name');
                $table->string('postal_code');
                $table->string('city_name');
                $table->string('email');
                $table->string('publish')->default('N');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('single_supports')) {
            Schema::dropIfExists('single_supports');
        }
    }
}
