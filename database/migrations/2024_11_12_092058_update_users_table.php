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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 150)->after('id');
            $table->string('last_name', 150)->after('first_name');
            $table->string('profile_picture', 255)->nullable()->after('email');
            $table->string('phone', 20)->nullable()->after('profile_picture');
            $table->integer('role_id')->unsigned()->after('password');
            $table->unsignedBigInteger('created_by')->nullable()->after('role_id');
            $table->unsignedBigInteger('updated_by')->nullable()->after('created_by');
            $table->unsignedBigInteger('deleted_by')->nullable()->after('updated_by');
            $table->softDeletes();
            
            // Modify existing columns
            $table->unique('email', 'users_email_uniq');
            $table->string('password', 255)->change();
            $table->dropColumn('name');
            $table->dropColumn('email_verified_at');
            $table->dropColumn('remember_token');

            // Add foreign key constraint to role_id
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->timestamp('email_verified_at');
            $table->string('remember_token');
            
            // Drop added columns
            $table->dropColumn(['first_name', 'last_name', 'profile_picture', 'phone', 'role_id', 'created_by', 'updated_by', 'deleted_by']);
            $table->dropSoftDeletes();
           
            // Remove the foreign key constraint
            $table->dropForeign(['role_id']);
        });
    }
};
