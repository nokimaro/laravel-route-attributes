<?php

namespace Spatie\RouteAttributes\Tests;

use Spatie\RouteAttributes\Tests\TestClasses\Controllers\PostTestController;

class PostAttributeTest extends TestCase
{
    /** @test */
    public function it_can_register_a_post_route()
    {
        $this->routeRegistrar->registerClass(PostTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(PostTestController::class, 'myPostMethod', 'post', 'my-post-method');
    }
}
