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
        Schema::create('crudproduct', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer('stock')->default(0);
            $table->integer('price');
            $table->string("description");
            $table->unsignedBigInteger('category');
            $table->timestamps();

            $table->foreign("category")
            ->references("id")
            ->on("crudcategory")
            ->onDelete("cascade")
            ->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crudproduct');
    }
};

