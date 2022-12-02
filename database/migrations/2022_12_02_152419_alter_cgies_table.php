<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cgies', function (Blueprint $table) {
            $table->renameColumn('subject', 'title');
            $table->integer('sort')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cgies', function (Blueprint $table) {
            $table->renameColumn('title', 'subject');
            $table->integer('sort')->nullable(false)->default(0)->change();
        });
    }
};
