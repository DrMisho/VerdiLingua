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
        Schema::create('grade_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grade_id')
                    ->references('id')
                    ->on('grades')
                    ->onDelete('cascade');
            $table->string('locale')->index();

            $table->string('name');

            $table->softDeletes();
            $table->unique(['grade_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade_translations');
    }
};
