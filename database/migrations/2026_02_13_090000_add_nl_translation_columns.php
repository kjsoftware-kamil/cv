<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->string('title_nl')->nullable()->after('title');
            $table->string('subtitle_nl', 500)->nullable()->after('subtitle');
            $table->longText('body_nl')->nullable()->after('body');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->string('name_nl')->nullable()->after('name');
            $table->text('description_nl')->nullable()->after('description');
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->string('name_nl')->nullable()->after('name');
            $table->string('category_nl')->nullable()->after('category');
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->string('title_nl')->nullable()->after('title');
            $table->text('description_nl')->nullable()->after('description');
        });

        Schema::table('education', function (Blueprint $table) {
            $table->string('degree_nl')->nullable()->after('degree');
            $table->string('field_of_study_nl')->nullable()->after('field_of_study');
            $table->text('description_nl')->nullable()->after('description');
        });

        Schema::table('personal_infos', function (Blueprint $table) {
            $table->string('job_title_nl')->nullable()->after('job_title');
            $table->text('bio_nl')->nullable()->after('bio');
        });
    }

    public function down(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->dropColumn(['title_nl', 'subtitle_nl', 'body_nl']);
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['name_nl', 'description_nl']);
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn(['name_nl', 'category_nl']);
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn(['title_nl', 'description_nl']);
        });

        Schema::table('education', function (Blueprint $table) {
            $table->dropColumn(['degree_nl', 'field_of_study_nl', 'description_nl']);
        });

        Schema::table('personal_infos', function (Blueprint $table) {
            $table->dropColumn(['job_title_nl', 'bio_nl']);
        });
    }
};
