<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 3);
            $table->string('q1', 3);
            $table->string('q2', 3);
            $table->string('q3', 3);
            $table->string('q4', 3);
            $table->string('q5', 3);
            $table->string('q6', 3);
            $table->string('q7', 3);
            $table->string('q8', 3);
            $table->string('q9', 3);
            $table->string('q10', 3);
            $table->string('q11', 3);
            $table->string('q12', 3);
            $table->string('q13', 3);
            $table->string('q14', 3);
            $table->string('q15', 3);
            $table->string('q16', 3);
            $table->string('q17', 3);
            $table->string('q18', 3);
            $table->string('q19', 3);
            $table->string('q20', 3);
            $table->string('q21', 3);
            $table->string('q22', 3);
            $table->string('q23', 3);
            $table->string('q24', 3);
            $table->string('q25', 3);
            $table->string('q26', 3);
            $table->string('q27', 3);
            $table->string('q28', 3);
            $table->string('q29', 3);
            $table->string('q30', 3);
            $table->string('q31', 3);
            $table->string('q32', 3);
            $table->string('q33', 3);
            $table->string('q34', 3);
            $table->string('q35', 3);
            $table->string('q36', 3);
            $table->string('q37', 3);
            $table->string('q38', 3);
            $table->string('q39', 3);
            $table->string('q40', 3);
            $table->string('q41', 3);
            $table->string('q42', 3);
            $table->string('q43', 3);
            $table->string('q44', 3);
            $table->string('q45', 3);
            $table->string('q46', 3);
            $table->string('q47', 3);
            $table->string('q48', 3);
            $table->string('q49', 3);
            $table->string('q50', 3);
            $table->string('q51', 3);
            $table->string('q52', 3);
            $table->string('q53', 3);
            $table->string('q54', 3);
            $table->string('q55', 3);
            $table->string('q56', 3);
            $table->string('q57', 3);
            $table->string('q58', 3);
            $table->string('q59', 3);
            $table->string('q60', 3);
            $table->string('q61', 3);
            $table->string('q62', 3);
            $table->string('q63', 3);
            $table->string('q64', 3);
            $table->string('q65', 3);
            $table->string('q66', 3);
            $table->string('q67', 3);
            $table->string('q68', 3);
            $table->string('q69', 3);
            $table->string('q70', 3);
            $table->string('q71', 3);
            $table->string('q72', 3);
            $table->string('q73', 3);
            $table->string('q74', 3);
            $table->string('q75', 3);
            $table->string('q76', 3);
            $table->string('q77', 3);
            $table->string('q78', 3);
            $table->string('q79', 3);
            $table->string('q80', 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
