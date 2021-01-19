<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->date('created_at');
            $table->decimal('duration', 2, 1);
            $table->tinyInteger('attendance');
            $table->text('description');
            $table->foreign('session_id')->references('session_id')->on('sessions');
            $table->foreign('mentee_id')->references('mentee_id')->on('mentees');
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
        Schema::dropIfExists('activities');
    }
}
