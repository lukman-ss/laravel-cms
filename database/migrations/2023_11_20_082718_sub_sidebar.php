<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubSidebar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sidebar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sidebar_id')
            ->constrained('sidebar')
            ->onDelete('cascade') // Cascade on delete
            ->onUpdate('cascade'); // Cascade on update;
            $table->string('alias',150)->unique();
            $table->string('url',50);
            $table->string('status',50)->default('active');
            // $table->foreign('sidebar_id')->references('id')->on('sidebar');
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
        //
    }
}
