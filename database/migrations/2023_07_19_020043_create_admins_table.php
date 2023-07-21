<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->string('email')->unique(); 
            $table->string('number'); // 電話番号などを保存する文字列型のカラム
            $table->string('opening_hours');   
            $table->string('address'); // 住所を保存する文字列型のカラム
            $table->string('password'); // パスワードを保存する文字列型のカラム
            $table->string('store_img');
            $table->string('facebook_id');
            $table->rememberToken(); // ユーザーを"記憶"するためのトークンを保存するカラム
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
        Schema::dropIfExists('admins');
    }
}
