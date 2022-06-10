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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('domain');
            $table->string('ssl');
            $table->string('web');
            $table->string('respondsive');
            $table->string('laguage');
            $table->string('corta');
            $table->string('menu');
            $table->string('banner');
            $table->string('content');
            $table->string('changimg');
            $table->string('tracking');
            $table->string('commerce');
            $table->string('product');
            $table->string('package');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        {
            Schema::dropIfExists('packages');
        }
    }
};
