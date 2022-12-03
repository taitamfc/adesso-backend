<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingNotificationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_notifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->boolean('by_phone')->default(0);
            $table->string('type_notifi_by_phone', 30)->nullable();
            $table->string('number_phone', 15)->nullable();
            $table->boolean('by_email')->default(0);
            $table->string('type_notifi_by_email', 30)->nullable();
            $table->string('email', 191)->nullable();
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
        Schema::dropIfExists('setting_notifications');
    }
}
