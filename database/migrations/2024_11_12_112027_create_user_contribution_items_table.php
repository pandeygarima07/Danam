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
        Schema::create('user_contribution_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seeker_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('location', 255)->nullable();
            $table->boolean('status')->nullable();
            $table->boolean('is_contributed')->default(false);
            $table->string('issue_report', 255)->nullable();
            $table->timestamp('uploaded_at')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            // Define foreign keys
            $table->foreign('seeker_id')->references('id')->on('seekers')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_contribution_items');
    }
};
