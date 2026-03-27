<?php

namespace Tests\Feature;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CheckMaintenanceMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    private function enableMaintenance(): void
    {
        Setting::set('is_maintenance', 'true');
    }

    private function disableMaintenance(): void
    {
        Setting::set('is_maintenance', 'false');
    }

    public function test_anonymous_user_sees_maintenance_page(): void
    {
        $this->enableMaintenance();

        $this->get('/')->assertStatus(503);
    }

    public function test_authenticated_user_bypasses_maintenance(): void
    {
        $this->enableMaintenance();

        $this->actingAs(User::factory()->create())
            ->get('/')
            ->assertStatus(200);
    }

    public function test_admin_route_bypasses_maintenance_for_anonymous(): void
    {
        $this->enableMaintenance();

        // /admin redirects to login, so not 503
        $this->get('/admin')->assertStatus(302);
    }

    public function test_maintenance_disabled_allows_anonymous_access(): void
    {
        $this->disableMaintenance();

        $this->get('/')->assertStatus(200);
    }
}
