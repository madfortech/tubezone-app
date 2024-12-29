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
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('two_factor_code')->nullable();
                $table->dateTime('two_factor_expires_at')->nullable();
            });
        } else {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('two_factor_code')->nullable();
                $table->dateTime('two_factor_expires_at')->nullable();
                // ... other columns ...
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropColumn('two_factor_code');
        $table->dropColumn('two_factor_expires_at');
    }
};
