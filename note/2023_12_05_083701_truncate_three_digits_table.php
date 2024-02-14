<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    // Drop the foreign key constraint
    Schema::table('lotto_three_digit_pivot', function (Blueprint $table) {
        $table->dropForeign(['three_digit_id']);
    });

    // Truncate the three_digits table
    DB::table('three_digits')->truncate();

    // Add the foreign key constraint back
    Schema::table('lotto_three_digit_pivot', function (Blueprint $table) {
        $table->foreign('three_digit_id')->references('id')->on('three_digits')->onDelete('cascade');
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