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
        Schema::table('site_settings', function (Blueprint $table) {
            $table->string('director_name')->nullable()->after('company_name');
            $table->string('director_title')->nullable()->default('Direktur')->after('director_name');
            $table->string('nib')->nullable()->after('director_title');
            $table->string('notary_deed')->nullable()->after('nib');
            $table->string('established_date')->nullable()->after('notary_deed');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'director_name',
                'director_title',
                'nib',
                'notary_deed',
                'established_date',
            ]);
        });
    }
};
