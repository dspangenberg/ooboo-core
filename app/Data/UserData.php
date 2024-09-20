<?php

namespace App\Data;

use Carbon\CarbonInterface;
use Spatie\LaravelData\Data;

final class UserData extends Data
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $first_name,
        public readonly string $last_name,
        public readonly string $avatar,
        public readonly string $full_name,
        public readonly string $reverse_full_name,
        public readonly string $initials,
        public readonly bool $is_admin,
        public readonly string $email,
        public readonly ?CarbonInterface $email_verified_at,
    ) {
    }
}
