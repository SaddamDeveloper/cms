<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientType', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('clientName')->nullable();
            $table->string('contactNo')->nullable();
            $table->string('altContactNo')->nullable();
            $table->string('email')->unique()->nullable();
            $table->mediumText('address')->nullable();
            $table->integer('project_id')->nullable();
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
        //
    }
}
