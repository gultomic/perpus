<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebooks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('isbn',15)->nullable();
            $table->string('ddc',100)->nullable();
            $table->string('writer',100)->nullable();
            $table->string('publisher',100)->nullable();
            $table->char('year', 4)->nullable();
            $table->text('synopsis')->nullable();
            $table->string('folder')->nullable();
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
        Schema::dropIfExists('ebooks');
    }
}
