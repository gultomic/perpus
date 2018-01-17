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
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('isbn',15)->nullable();
            $table->string('ddc',100)->nullable();
            $table->string('bcode',13)->unique();
            $table->string('writer',100)->nullable();
            $table->string('publisher',100)->nullable();
            $table->char('year', 4)->nullable();
            $table->text('synopsis')->nullable();
            $table->string('cover')->nullable();
            $table->boolean('borrowed')->default(true);
            $table->unsignedTinyInteger('deadline')->default(3);
            $table->unsignedInteger('forfeit')->nullable();
            $table->unsignedSmallInteger('amount')->default(1);
            $table->unsignedSmallInteger('damage')->default(0);
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedInteger('location_id')->nullable();
            $table->boolean('favorite')->default(false);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->foreign('location_id')->references('id')->on('locations');
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
