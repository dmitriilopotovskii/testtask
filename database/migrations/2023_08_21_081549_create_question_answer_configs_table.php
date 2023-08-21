<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('question_answer_configs', function (Blueprint $table) {
            $table->id();
            $table->float('paddingTop');
            $table->float('paddingBottom');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('question_answer_configs');
    }
};
