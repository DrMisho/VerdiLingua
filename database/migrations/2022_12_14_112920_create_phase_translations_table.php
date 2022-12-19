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
        Schema::create('phase_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('phase_id')
                    ->references('id')
                    ->on('phases')
                    ->onDelete('cascade');
            $table->string('locale')->index();

            $table->string('name');

            $table->softDeletes();
            $table->unique(['phase_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phase_translations');
    }
};
