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
        Schema::create('exercise_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')
                    ->references('id')
                    ->on('exercises')
                    ->onDelete('cascade');
            $table->string('locale')->index();

            $table->text('word');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['exercise_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_translations');
    }
};
