<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');  // id - integer, autoincrement, primary key, not null
                  
            $table->integer('author_id');
            $table->char('title',127);  //varchar with max length 127 chars
            $table->integer('published_at');  //year
            $table->date('finished_reading_at');
            $table->text('my_review');
            $table->integer('my_rating');
            
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
        Schema::dropIfExists('books');
    }
}
