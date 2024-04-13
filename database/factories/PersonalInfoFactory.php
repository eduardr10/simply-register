<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\PersonalInfo;

class PersonalInfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PersonalInfo::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'id_card' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'rank' => $this->faker->randomElement(['S1', 'S2', 'SM3', 'SM2', 'SM1', 'SA', 'SS', 'TTE', 'TC', 'PTTE', 'TF', 'CAP', 'TNMY', 'CC', 'TCNEL', 'CF', 'CNEL', 'CN', 'GB', 'CA', 'GD', 'VA', 'MG', 'A', 'GJ', 'AJ']),
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'request_office_number' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'office_origin' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'request_signer' => $this->faker->regexify('[A-Za-z0-9]{60}'),
            'request_type' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'document_status' => $this->faker->randomElement(["OFICIO_RECIBIDO","PROCESANDO","PARA_LA_FIRMA","EN_DESPACHO","ENTREGADO"]),
            'issued_office_number' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'dgcim_opinion_issued' => $this->faker->randomElement(["FAVORABLE","NO_FAVORABLE"]),
            'passport_number' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'visa_number' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'place_of_birth' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'date_of_birth' => $this->faker->date(),
            'home_address' => $this->faker->text(),
            'home_phone' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'mobile_phone' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'email' => $this->faker->safeEmail(),
            'work_unit' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'position_held' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'work_unit_phone_number' => $this->faker->regexify('[A-Za-z0-9]{15}'),
            'travel_reason' => $this->faker->regexify('[A-Za-z0-9]{200}'),
            'country_to_visit' => $this->faker->regexify('[A-Za-z0-9]{60}'),
            'scale' => $this->faker->regexify('[A-Za-z0-9]{60}'),
            'departure_date' => $this->faker->date(),
            'return_date' => $this->faker->date(),
            'travel_destination_address' => $this->faker->text(),
            'passport_submission' => $this->faker->randomElement(["SI","NO"]),
            'observation' => $this->faker->text(),
        ];
    }
}
