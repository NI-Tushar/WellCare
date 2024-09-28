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
        Schema::create('customers', function (Blueprint $table) {
            // $table->id(); // by default this column name will be id
            $table->id('customer_id'); // custom id field
            $table->string('customer_name',60); // 60 is a letter range
            $table->string('email',100);
            $table->enum('gender',["m","f","o"])->nullable(); // nullable meanse we can keep this field as null
            $table->text('address'); // this is text field
            $table->date('date_of_birth')->nullable();
            $table->string('password'); // by defauld this field letter range will be 255
            $table->boolean('status')->default(1); // this field defalult value will be 1
            $table->integer('points')->default(0);
    
            $table->timestamps(); // it will keep the record of a filed create_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};


