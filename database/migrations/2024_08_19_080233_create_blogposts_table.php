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
        Schema::create('blogposts', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Title');
            $table->string('Subtitle')->nullable();
            $table->text('BriefContent')->nullable();
            $table->text('FullContent')->nullable();
            $table->timestamp('CreatedDate')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('IsPublished')->default(0);
            $table->integer('OrderNo')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogposts');
    }
};
