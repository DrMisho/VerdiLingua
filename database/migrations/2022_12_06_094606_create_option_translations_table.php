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
        Schema::create('option_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_id')
                    ->references('id')
                    ->on('options')
                    ->onDelete('cascade');
            $table->string('locale')->index();

            $table->text('option');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['option_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('option_translations');
    }
};
