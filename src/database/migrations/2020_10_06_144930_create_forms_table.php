<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{

    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('type_id')->constrained();
            $table->timestamps();
        });

        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('field_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('media_path')->nullable();
            $table->integer('price')->default(0);
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('form_id');
            $table->json('body');
            $table->timestamps();
        });


        Schema::create('field_form', function (Blueprint $table) {
            $table->id();
            $table->foreignId('field_id');
            $table->foreignId('form_id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('forms');
        Schema::dropIfExists('types');
        Schema::dropIfExists('fields');
        Schema::dropIfExists('options');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('field_form');
    }
}
