<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->renameColumn('title_nl', 'title_en');
            $table->renameColumn('subtitle_nl', 'subtitle_en');
            $table->renameColumn('body_nl', 'body_en');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('name_nl', 'name_en');
            $table->renameColumn('description_nl', 'description_en');
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->renameColumn('name_nl', 'name_en');
            $table->renameColumn('category_nl', 'category_en');
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->renameColumn('title_nl', 'title_en');
            $table->renameColumn('description_nl', 'description_en');
        });

        Schema::table('education', function (Blueprint $table) {
            $table->renameColumn('degree_nl', 'degree_en');
            $table->renameColumn('field_of_study_nl', 'field_of_study_en');
            $table->renameColumn('description_nl', 'description_en');
        });

        Schema::table('personal_infos', function (Blueprint $table) {
            $table->renameColumn('job_title_nl', 'job_title_en');
            $table->renameColumn('bio_nl', 'bio_en');
        });
    }

    public function down(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->renameColumn('title_en', 'title_nl');
            $table->renameColumn('subtitle_en', 'subtitle_nl');
            $table->renameColumn('body_en', 'body_nl');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->renameColumn('name_en', 'name_nl');
            $table->renameColumn('description_en', 'description_nl');
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->renameColumn('name_en', 'name_nl');
            $table->renameColumn('category_en', 'category_nl');
        });

        Schema::table('experiences', function (Blueprint $table) {
            $table->renameColumn('title_en', 'title_nl');
            $table->renameColumn('description_en', 'description_nl');
        });

        Schema::table('education', function (Blueprint $table) {
            $table->renameColumn('degree_en', 'degree_nl');
            $table->renameColumn('field_of_study_en', 'field_of_study_nl');
            $table->renameColumn('description_en', 'description_nl');
        });

        Schema::table('personal_infos', function (Blueprint $table) {
            $table->renameColumn('job_title_en', 'job_title_nl');
            $table->renameColumn('bio_en', 'bio_nl');
        });
    }
};
