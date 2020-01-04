<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('manager_list');
        Schema::create('manager_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fio');
            $table->string('departament');
            $table->string('email');
            $table->string('picture');
            $table->timestamps();
        });
        Schema::dropIfExists('days_settings');
        Schema::create('days_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('manager_id');
            $table->dateTime('start_day_time');
            $table->dateTime('end_day_time');
            $table->string('list_of_days');
            $table->timestamp('start_date_interval');
            $table->string('end_date_interval');
            $table->timestamps();
        });

        Schema::dropIfExists('salary');
        Schema::create('salary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('manager_id');
            $table->dateTime('start_day');
            $table->dateTime('end_day');
            $table->string('salary');
            $table->timestamps();
        });

        Schema::dropIfExists('magager_goals');
        Schema::create('magager_goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('manager_id');
            $table->integer('indicator_id');
            $table->integer('compare_type');
            $table->string('goal_label');
            $table->float('goal_value');
            $table->string('goal_manager_type');
            $table->string('award_type');
            $table->string('award_status_deal_name');
            $table->float('award_percent_deal_value');
            $table->float('award_max_value');
            $table->dateTime('start_day');
            $table->dateTime('end_day');
            $table->timestamps();
        });

        Schema::dropIfExists('indicator_list');
        Schema::create('indicator_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('value1');
            $table->float('value2');
            $table->float('value3');
            $table->float('value4');
            $table->float('value5');
            $table->timestamps();
        });

        Schema::dropIfExists('payments');
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('manager_id');
            $table->float('price');
            $table->integer('lead_id');
            $table->integer('company_id');
            $table->dateTime('date');
            $table->timestamps();
        });
        Schema::dropIfExists('timers');
        Schema::create('timers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('manager_id');
            $table->dateTime('start_day');
            $table->dateTime('end_day');
            $table->string('end_message');
            $table->string('restart_end_message');
            $table->string('explanatory_report');
            $table->timestamps();
        });
        Schema::dropIfExists('paid_to_manager');
        Schema::create('paid_to_manager', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('manager_id');
            $table->float('salary');
            $table->string('notes');
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
        Schema::dropIfExists('manager_list');
        Schema::dropIfExists('days_settings');
        Schema::dropIfExists('salary');
        Schema::dropIfExists('magager_goals');
        Schema::dropIfExists('indicator_list');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('timers');
        Schema::dropIfExists('paid_to_manager');
    }
}
