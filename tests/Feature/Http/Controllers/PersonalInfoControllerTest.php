<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Carbon;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PersonalInfoController
 */
final class PersonalInfoControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function index_displays_view(): void
    {
        $personalInfos = PersonalInfo::factory()->count(3)->create();

        $response = $this->get(route('personal-infos.index'));

        $response->assertOk();
        $response->assertViewIs('personalInfo.index');
        $response->assertViewHas('personalInfos');
    }


    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('personal-infos.create'));

        $response->assertOk();
        $response->assertViewIs('personalInfo.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonalInfoController::class,
            'store',
            \App\Http\Requests\PersonalInfoStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $id_card = $this->faker->word();
        $rank = $this->faker->randomElement(/** enum_attributes **/);
        $last_name = $this->faker->lastName();
        $first_name = $this->faker->firstName();
        $request_office_number = $this->faker->word();
        $office_origin = $this->faker->word();
        $request_signer = $this->faker->word();
        $request_type = $this->faker->word();
        $document_status = $this->faker->randomElement(/** enum_attributes **/);
        $issued_office_number = $this->faker->word();
        $dgcim_opinion_issued = $this->faker->randomElement(/** enum_attributes **/);
        $passport_number = $this->faker->word();
        $visa_number = $this->faker->word();
        $place_of_birth = $this->faker->word();
        $date_of_birth = Carbon::parse($this->faker->date());
        $home_address = $this->faker->text();
        $home_phone = $this->faker->word();
        $mobile_phone = $this->faker->word();
        $email = $this->faker->safeEmail();
        $work_unit = $this->faker->word();
        $position_held = $this->faker->word();
        $work_unit_phone_number = $this->faker->word();
        $travel_reason = $this->faker->word();
        $country_to_visit = $this->faker->word();
        $scale = $this->faker->word();
        $departure_date = Carbon::parse($this->faker->date());
        $return_date = Carbon::parse($this->faker->date());
        $travel_destination_address = $this->faker->text();
        $passport_submission = $this->faker->randomElement(/** enum_attributes **/);

        $response = $this->post(route('personal-infos.store'), [
            'id_card' => $id_card,
            'rank' => $rank,
            'last_name' => $last_name,
            'first_name' => $first_name,
            'request_office_number' => $request_office_number,
            'office_origin' => $office_origin,
            'request_signer' => $request_signer,
            'request_type' => $request_type,
            'document_status' => $document_status,
            'issued_office_number' => $issued_office_number,
            'dgcim_opinion_issued' => $dgcim_opinion_issued,
            'passport_number' => $passport_number,
            'visa_number' => $visa_number,
            'place_of_birth' => $place_of_birth,
            'date_of_birth' => $date_of_birth->toDateString(),
            'home_address' => $home_address,
            'home_phone' => $home_phone,
            'mobile_phone' => $mobile_phone,
            'email' => $email,
            'work_unit' => $work_unit,
            'position_held' => $position_held,
            'work_unit_phone_number' => $work_unit_phone_number,
            'travel_reason' => $travel_reason,
            'country_to_visit' => $country_to_visit,
            'scale' => $scale,
            'departure_date' => $departure_date->toDateString(),
            'return_date' => $return_date->toDateString(),
            'travel_destination_address' => $travel_destination_address,
            'passport_submission' => $passport_submission,
        ]);

        $personalInfos = PersonalInfo::query()
            ->where('id_card', $id_card)
            ->where('rank', $rank)
            ->where('last_name', $last_name)
            ->where('first_name', $first_name)
            ->where('request_office_number', $request_office_number)
            ->where('office_origin', $office_origin)
            ->where('request_signer', $request_signer)
            ->where('request_type', $request_type)
            ->where('document_status', $document_status)
            ->where('issued_office_number', $issued_office_number)
            ->where('dgcim_opinion_issued', $dgcim_opinion_issued)
            ->where('passport_number', $passport_number)
            ->where('visa_number', $visa_number)
            ->where('place_of_birth', $place_of_birth)
            ->where('date_of_birth', $date_of_birth)
            ->where('home_address', $home_address)
            ->where('home_phone', $home_phone)
            ->where('mobile_phone', $mobile_phone)
            ->where('email', $email)
            ->where('work_unit', $work_unit)
            ->where('position_held', $position_held)
            ->where('work_unit_phone_number', $work_unit_phone_number)
            ->where('travel_reason', $travel_reason)
            ->where('country_to_visit', $country_to_visit)
            ->where('scale', $scale)
            ->where('departure_date', $departure_date)
            ->where('return_date', $return_date)
            ->where('travel_destination_address', $travel_destination_address)
            ->where('passport_submission', $passport_submission)
            ->get();
        $this->assertCount(1, $personalInfos);
        $personalInfo = $personalInfos->first();

        $response->assertRedirect(route('personalInfos.index'));
        $response->assertSessionHas('personalInfo.id', $personalInfo->id);
    }


    #[Test]
    public function show_displays_view(): void
    {
        $personalInfo = PersonalInfo::factory()->create();

        $response = $this->get(route('personal-infos.show', $personalInfo));

        $response->assertOk();
        $response->assertViewIs('personalInfo.show');
        $response->assertViewHas('personalInfo');
    }


    #[Test]
    public function edit_displays_view(): void
    {
        $personalInfo = PersonalInfo::factory()->create();

        $response = $this->get(route('personal-infos.edit', $personalInfo));

        $response->assertOk();
        $response->assertViewIs('personalInfo.edit');
        $response->assertViewHas('personalInfo');
    }


    #[Test]
    public function update_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PersonalInfoController::class,
            'update',
            \App\Http\Requests\PersonalInfoUpdateRequest::class
        );
    }

    #[Test]
    public function update_redirects(): void
    {
        $personalInfo = PersonalInfo::factory()->create();
        $id_card = $this->faker->word();
        $rank = $this->faker->randomElement(/** enum_attributes **/);
        $last_name = $this->faker->lastName();
        $first_name = $this->faker->firstName();
        $request_office_number = $this->faker->word();
        $office_origin = $this->faker->word();
        $request_signer = $this->faker->word();
        $request_type = $this->faker->word();
        $document_status = $this->faker->randomElement(/** enum_attributes **/);
        $issued_office_number = $this->faker->word();
        $dgcim_opinion_issued = $this->faker->randomElement(/** enum_attributes **/);
        $passport_number = $this->faker->word();
        $visa_number = $this->faker->word();
        $place_of_birth = $this->faker->word();
        $date_of_birth = Carbon::parse($this->faker->date());
        $home_address = $this->faker->text();
        $home_phone = $this->faker->word();
        $mobile_phone = $this->faker->word();
        $email = $this->faker->safeEmail();
        $work_unit = $this->faker->word();
        $position_held = $this->faker->word();
        $work_unit_phone_number = $this->faker->word();
        $travel_reason = $this->faker->word();
        $country_to_visit = $this->faker->word();
        $scale = $this->faker->word();
        $departure_date = Carbon::parse($this->faker->date());
        $return_date = Carbon::parse($this->faker->date());
        $travel_destination_address = $this->faker->text();
        $passport_submission = $this->faker->randomElement(/** enum_attributes **/);

        $response = $this->put(route('personal-infos.update', $personalInfo), [
            'id_card' => $id_card,
            'rank' => $rank,
            'last_name' => $last_name,
            'first_name' => $first_name,
            'request_office_number' => $request_office_number,
            'office_origin' => $office_origin,
            'request_signer' => $request_signer,
            'request_type' => $request_type,
            'document_status' => $document_status,
            'issued_office_number' => $issued_office_number,
            'dgcim_opinion_issued' => $dgcim_opinion_issued,
            'passport_number' => $passport_number,
            'visa_number' => $visa_number,
            'place_of_birth' => $place_of_birth,
            'date_of_birth' => $date_of_birth->toDateString(),
            'home_address' => $home_address,
            'home_phone' => $home_phone,
            'mobile_phone' => $mobile_phone,
            'email' => $email,
            'work_unit' => $work_unit,
            'position_held' => $position_held,
            'work_unit_phone_number' => $work_unit_phone_number,
            'travel_reason' => $travel_reason,
            'country_to_visit' => $country_to_visit,
            'scale' => $scale,
            'departure_date' => $departure_date->toDateString(),
            'return_date' => $return_date->toDateString(),
            'travel_destination_address' => $travel_destination_address,
            'passport_submission' => $passport_submission,
        ]);

        $personalInfo->refresh();

        $response->assertRedirect(route('personalInfos.index'));
        $response->assertSessionHas('personalInfo.id', $personalInfo->id);

        $this->assertEquals($id_card, $personalInfo->id_card);
        $this->assertEquals($rank, $personalInfo->rank);
        $this->assertEquals($last_name, $personalInfo->last_name);
        $this->assertEquals($first_name, $personalInfo->first_name);
        $this->assertEquals($request_office_number, $personalInfo->request_office_number);
        $this->assertEquals($office_origin, $personalInfo->office_origin);
        $this->assertEquals($request_signer, $personalInfo->request_signer);
        $this->assertEquals($request_type, $personalInfo->request_type);
        $this->assertEquals($document_status, $personalInfo->document_status);
        $this->assertEquals($issued_office_number, $personalInfo->issued_office_number);
        $this->assertEquals($dgcim_opinion_issued, $personalInfo->dgcim_opinion_issued);
        $this->assertEquals($passport_number, $personalInfo->passport_number);
        $this->assertEquals($visa_number, $personalInfo->visa_number);
        $this->assertEquals($place_of_birth, $personalInfo->place_of_birth);
        $this->assertEquals($date_of_birth, $personalInfo->date_of_birth);
        $this->assertEquals($home_address, $personalInfo->home_address);
        $this->assertEquals($home_phone, $personalInfo->home_phone);
        $this->assertEquals($mobile_phone, $personalInfo->mobile_phone);
        $this->assertEquals($email, $personalInfo->email);
        $this->assertEquals($work_unit, $personalInfo->work_unit);
        $this->assertEquals($position_held, $personalInfo->position_held);
        $this->assertEquals($work_unit_phone_number, $personalInfo->work_unit_phone_number);
        $this->assertEquals($travel_reason, $personalInfo->travel_reason);
        $this->assertEquals($country_to_visit, $personalInfo->country_to_visit);
        $this->assertEquals($scale, $personalInfo->scale);
        $this->assertEquals($departure_date, $personalInfo->departure_date);
        $this->assertEquals($return_date, $personalInfo->return_date);
        $this->assertEquals($travel_destination_address, $personalInfo->travel_destination_address);
        $this->assertEquals($passport_submission, $personalInfo->passport_submission);
    }


    #[Test]
    public function destroy_deletes_and_redirects(): void
    {
        $personalInfo = PersonalInfo::factory()->create();

        $response = $this->delete(route('personal-infos.destroy', $personalInfo));

        $response->assertRedirect(route('personalInfos.index'));

        $this->assertModelMissing($personalInfo);
    }
}
