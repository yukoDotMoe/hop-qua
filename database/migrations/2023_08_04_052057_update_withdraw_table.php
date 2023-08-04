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
        Schema::table('recharge', function (Blueprint $table) {
            $table->boolean('bill');
        });

        Schema::create('thong_bao', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->text('content');
            $table->integer('type');
            $table->boolean('read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('recharge', function (Blueprint $table) {
            $table->dropColumn('bill');
        });
        Schema::dropIfExists('thong_bao');

    }
};
