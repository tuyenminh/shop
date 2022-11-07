<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dongho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donghos', function (Blueprint $table) {
            $table->id();
            $table->string('dh_ma', 50);
            $table->integer('gt_id');
            $table->integer('th_id');
            $table->integer('lms_id');
            $table->integer('lm_id');
            $table->integer('dkm_id');
            $table->integer('km_id');
            $table->integer('hdm_id');
            $table->integer('clmk_id');
            $table->integer('cld_id');
            $table->integer('mm_id');
            $table->integer('md_id');
            $table->integer('ldh_id');
            $table->integer('dcn_id');
            $table->integer('pc_id');
            $table->integer('ti_id');
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
