<?php

use App\Models\Expirience;
use App\Models\Formation;
use App\Models\Skill;
use App\Models\User;
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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('picture');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('nationality');
            $table->string('address')->nullable();
            $table->date('birthday');
            $table->string('gender')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('website')->nullable();
            $table->text('description');
            $table->foreignIdFor(Expirience::class);
            $table->foreignIdFor(Formation::class);
            $table->foreignIdFor(Skill::class);
            $table->foreignIdFor(User::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
