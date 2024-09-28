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
        Schema::create('employeers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',60);
            $table->string('last_name',60);
            $table->string('age',3);
            $table->enum('gender',['m','f','o'])->nallable();
            $table->string('country',15);
            $table->string('username',20);
            $table->string('email',40);
            $table->string('password');
            $table->boolean('is_join')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeers');
    }
};
