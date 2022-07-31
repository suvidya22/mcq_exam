<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_question_answers', function (Blueprint $table) {
            $table->bigIncrements('student_question_answer_id');
            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->unsignedBigInteger('question_id')->nullable();
            $table->foreign('question_id')->references('question_id')->on('questions');
            $table->unsignedBigInteger('option_id');
            $table->foreign('option_id')->references('option_id')->on('options');
            $table->tinyInteger('is_right');
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
        Schema::dropIfExists('student_question_answers');
    }
}
