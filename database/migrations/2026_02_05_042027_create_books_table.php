<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
            public function up(): void
            {
                        Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('author');
                $table->integer('pages')->nullable();
                $table->string('type')->nullable();
                $table->string('category')->nullable();
                $table->string('ddc_code')->nullable();
                $table->string('location')->nullable();
                $table->string('isbn_issn')->nullable();
                $table->text('description')->nullable();
                $table->string('cover')->nullable();
                $table->string('pdf_file')->nullable();
                $table->timestamps();
            });

            }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
