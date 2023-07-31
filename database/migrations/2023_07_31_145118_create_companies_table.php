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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements("id");           // 自動付番ID（PK）
            $table->string("company_name");        // メーカー名
            $table->string("street_address");      // メーカー住所
            $table->string("representative_name"); // メーカー社長名
            $table->dateTime("created_at");        // 作成日時
            $table->dateTime("update_at");         // 更新日時
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
