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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("lastname");
            $table->string("firstname");
            $table->string("middlename");
            $table->string("position");
            $table->string("employeeID");
            $table->string("email");
            $table->string("phone");
            $table->string("facebook");
            $table->string("telegram");
            $table->string("wechat");
            $table->string("viber");
            $table->string("whatsapp");
            $table->string("profile");
            $table->text("qrcode")->nullable();
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
