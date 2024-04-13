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
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('id_card', 15)->unique();
            $table->enum('rank', ['S1', 'S2', 'SM3', 'SM2', 'SM1', 'SA', 'SS', 'TTE', 'TC', 'PTTE', 'TF', 'CAP', 'TNMY', 'CC', 'TCNEL', 'CF', 'CNEL', 'CN', 'GB', 'CA', 'GD', 'VA', 'MG', 'A', 'GJ', 'AJ']);
            $table->string('last_name', 60);
            $table->string('first_name', 60);
            $table->string('request_office_number', 15);
            $table->string('office_origin', 150);
            $table->string('request_signer', 60);
            $table->string('request_type', 150);
            $table->enum('document_status', ["OFICIO_RECIBIDO","PROCESANDO","PARA_LA_FIRMA","EN_DESPACHO","ENTREGADO"]);
            $table->string('issued_office_number', 15);
            $table->enum('dgcim_opinion_issued', ["FAVORABLE","NO_FAVORABLE"]);
            $table->string('passport_number', 15);
            $table->string('visa_number', 15);
            $table->string('place_of_birth', 200);
            $table->date('date_of_birth');
            $table->text('home_address');
            $table->string('home_phone', 15);
            $table->string('mobile_phone', 15);
            $table->string('email', 60)->unique();
            $table->string('work_unit', 150);
            $table->string('position_held', 150);
            $table->string('work_unit_phone_number', 15);
            $table->string('travel_reason', 200);
            $table->string('country_to_visit', 60);
            $table->string('scale', 60);
            $table->date('departure_date');
            $table->date('return_date');
            $table->text('travel_destination_address');
            $table->enum('passport_submission', ["SI","NO"]);
            $table->text('observation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_infos');
    }
};
