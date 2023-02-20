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
        Schema::create('post_likes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('users')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('posts')->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_likes', function (Blueprint $table) {
            $table->dropForeign('post_likes_user_id_foreign');
            $table->dropForeign('post_likes_post_id_foreign');
        });
        Schema::dropIfExists('post_likes');
    }
};
