<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workorders', function (Blueprint $table) {
            
            //default table data
            $table->increments('id');
            $table->timestamps();

            //Work Order mandatory information
            $table->string('title');
            $table->text('description');

            //Work Order Admin assigned information
            $table->integer('priority_id')->index()->default(1)->unsigned()->nullable();            
            $table->integer('category_id')->index()->unsigned()->nullable();
            $table->integer('photo_id')->index()->unsigned()->nullable();
            $table->integer('asset_id')->index()->unsigned()->nullable();
            $table->integer('user_id')->index()->unsigned()->nullable();
            $table->timestamp('due')->nullable();

            // ->unique()->index()->default(3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workorders');
    }
}
