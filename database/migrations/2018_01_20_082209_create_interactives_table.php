<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteractivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interactives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('publisher')->nullable();
            $table->string('description')->nullable();
            $table->char('year', 4)->nullable();
            $table->string('folder')->nullable();
            $table->string('file')->nullable();
            $table->string('cover')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interactives');
    }
}
