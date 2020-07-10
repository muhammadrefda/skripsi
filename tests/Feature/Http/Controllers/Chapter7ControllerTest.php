<?php

namespace Tests\Feature\Http\Controllers;

use App\Subject;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use WithFaker;

/**
 * @property  faker
 */
class Subject7ControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function it_stores_data()
    {
        $user = factory(User::class)->create();
        $subject = factory(Subject::class)->create();

        $response = $this->actingAs($user)
            ->post(route('subject.store'),[

                'name' => $this->faker->randomElement(['PKn','IPA','IPS','Pendidikan Agama Islam','BahasaIndonesia','Bahasa Inggris','Penjaskes','Seni Budaya','Prakarya']),
                'user_id' => \App\User::all()->random()->id,
                'grade_id' => \App\Grade::all()->random()->id,
            ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('mata-pelajaran7.index'));
    }
}
