<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHobbyTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobby_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('hobby_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->timestamps();
            // id消して新しい複合主キー作成（組み合わせ自体がユニークな必要があるため）
            $table->primary(['hobby_id', 'tag_id']);

            $table->foreign('hobby_id')
                ->references('id')->on('hobbies')
                ->onDelete('cascade'); // 親と一緒にdeleteさせる

            $table->foreign('tag_id')
                ->references('id')->on('tags')
                ->onDelete('cascade'); // 親と一緒にdeleteさせる
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobby_tag');
    }
}
