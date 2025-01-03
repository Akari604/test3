<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weight_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->date('date')->comment('日付');
            $table->decimal('weight', $precision = 4, $scale = 1)->comment('体重');
            $table->integer('calories')->nullable()->comment('食事量');
            $table->time('exercise_time')->nullable()->comment('運動時間');
            $table->text('exercise_content')->nullable()->comment('運動内容');
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
        Schema::dropIfExists('weight_logs');
    }
}
