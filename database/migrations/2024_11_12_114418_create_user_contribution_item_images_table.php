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
        Schema::create('user_contribution_item_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_contribution_item_id');
            $table->string('image', 255)->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            // Define foreign key
            $table->foreign('user_contribution_item_id')->references('id')->on('user_contribution_items')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_contribution_item_images');
    }
};
