<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_repair_histories', function (Blueprint $table) {
            $table->id();
            $table->integer("vin");
            $table->date("repair_date");
            $table->string("repair_type");
            $table->bigInteger('employee_id')->unsigned()->index()->nullable();
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->string("parts_used");
            $table->decimal("total_cost");
            $table->string("note");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_repair_histories');
    }
};
