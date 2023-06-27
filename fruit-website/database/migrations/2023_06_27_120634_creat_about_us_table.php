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
        Schema::create('about_us', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_section_first');
            $table->string('first_section_secound');
            $table->string('first_section_third');

            $table->string('title');
            $table->string('sub_title');
            $table->longText('description');
            $table->string('secound_section_first');
            $table->string('secound_section_second');
            $table->string('secound_section_last');
            $table->string('image');

            $table->timestamps();
        });
     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
