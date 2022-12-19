<?php

use App\Models\Exercise;
use App\Models\Phase;
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
        Schema::create('exercise_phase', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Phase::class);
            $table->foreignIdFor(Exercise::class);
            $table->unsignedBigInteger('expected_time');
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
        Schema::dropIfExists('exercise_phase');
    }
};
