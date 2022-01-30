<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->double('monthly_amount',15,8);
            $table->double('quarterly_amount',15,8);
            $table->double('semi_annually_amount',15,8);
            $table->double('annually_amount',15,8);
            $table->double('two_year_amount',15,8);
            $table->double('five_year_amount',15,8);
            $table->double('lifetime_amount',15,8);
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
        Schema::dropIfExists('membership_types');
    }
}
