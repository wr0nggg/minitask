<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('creator_id');
            $table->integer('updator_id');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('creator_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('updator_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
