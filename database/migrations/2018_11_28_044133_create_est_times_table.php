<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('est_times', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->index();
            $table->integer('value')->unsigned();
        });

        DB::table('est_times')->insert([
            ['name' => '15 Minuets',            'value' => '15',    'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => '30 Minuets',            'value' => '30',    'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => '45 Minuets',            'value' => '45',    'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => '1 Hour',                'value' => '60',    'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => '1 Hour 15 Minuets',     'value' => '75',    'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => '1 Hour 30 Minuets',     'value' => '90',    'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => '1 Hour 45 Minuets',     'value' => '105',    'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => '2 Hour',                'value' => '120',    'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
                           
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('est_times');
    }
}
