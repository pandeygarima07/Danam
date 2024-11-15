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
        Schema::create('seeker_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title', 255)->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->dateTime('birth_date')->nullable();
            $table->unsignedBigInteger('profession_id')->nullable();
            $table->string('location', 255)->nullable();
            $table->text('reason_to_seek')->nullable();
            $table->integer('know_from')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            // Define foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('profession_id')->references('id')->on('professions')->onDelete('set null');
            $table->foreign('know_from')->references('id')->on('references')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seeker_information');
    }
};
