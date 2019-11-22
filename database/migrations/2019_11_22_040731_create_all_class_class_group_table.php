<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllClassClassGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_class_class_group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('all_class_id');
            $table->foreign('all_class_id')->references('id')->on('all_classes')->onDelete('cascade');
            $table->unsignedBigInteger('class_group_id');
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
        Schema::dropIfExists('all_class_class_group');
    }
}
