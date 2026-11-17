<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('problem')->nullable();
            $table->text('objective')->nullable();
            $table->string('technologies')->nullable();
            $table->string('role')->nullable();
            $table->text('features')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('github_url')->nullable();
            $table->text('process_docs')->nullable();
            $table->text('user_feedback')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'problem', 
                'objective', 
                'technologies', 
                'role', 
                'features', 
                'demo_url', 
                'github_url', 
                'process_docs', 
                'user_feedback'
            ]);
        });
    }
};