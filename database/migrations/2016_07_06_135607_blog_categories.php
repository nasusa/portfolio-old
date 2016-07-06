<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category')->unique();
            $table->timestamps();
        });

        DB::table('blog_categories')->insert([
            'category' => "WebDevelopment"
        ]);

        DB::table('blog_categories')->insert([
            'category' => "PhotoEditing"
        ]);

        DB::table('blog_categories')->insert([
            'category' => "VideoEditing"
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
