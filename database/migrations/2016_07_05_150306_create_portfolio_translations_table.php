<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('locale')->index();;

            $table->string('title')->default('');
            $table->string('description', 170)->default('');
            $table->text('content')->default('');

            $table->integer('portfolio_id');
            $table->foreign('portfolio_id')
                    ->references('id')
                    ->on('portfolios')
                    ->onDelete('cascade');

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
        Schema::drop('portfolio_translations');
    }
}
