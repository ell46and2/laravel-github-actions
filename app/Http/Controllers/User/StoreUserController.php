<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class StoreUserController extends Controller
{
    public function __invoke(): User
    {
        return User::factory()->create();
    }

    protected function hello(): void
    {
        /** @var \App\Models\User $user */
        $user = User::query()->first();
    }
}
