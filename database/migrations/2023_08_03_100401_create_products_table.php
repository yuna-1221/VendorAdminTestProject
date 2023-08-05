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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements("id");  
            $table->integer("company_id");          // 自動付番ID（PK）
            $table->string("product_name");        // 商品名
            $table->integer("price");              // 値段
            $table->integer("stock");              // ストック
            $table->string("comment");             // コメント
            $table->string("img_path");            // 商品画像
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
        Schema::dropIfExists('products');
    }
};
