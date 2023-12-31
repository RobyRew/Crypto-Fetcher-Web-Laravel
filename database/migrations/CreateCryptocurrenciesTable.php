<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCryptocurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cryptocurrencies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('external_id')->unique();
            $table->string('name');
            $table->string('symbol');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->text('logo')->nullable();
            $table->json('urls')->nullable();
            $table->date('date_added')->nullable();
            $table->date('date_launched')->nullable();
            $table->json('tags')->nullable();
            $table->string('platform')->nullable();
            $table->string('category')->nullable();
            $table->boolean('infinite_supply')->default(false);
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
        Schema::dropIfExists('cryptocurrencies');
    }
}
