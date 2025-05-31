<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        // Column already renamed manually in phpMyAdmin — nothing to do here
    }

    public function down(): void
    {
        Schema::table('authers', function (Blueprint $table) {
            $table->renameColumn('city', 'auther');
        });
    }
};
