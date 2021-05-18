<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_settings', function (Blueprint $table) {
            $table->id();
            $table->string('platform')->nullable();
            $table->float('price1', 8, 2)->default(0.00);
            $table->float('price3', 8, 2)->default(0.00);
            $table->float('price6', 8, 2)->default(0.00);
            $table->float('price12', 8, 2)->default(0.00);
            $table->string('currency')->default('EUR');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_settings');
    }
}
