<?php
namespace App\DoNotCheat;


class LocalServiceRepository {
    public function getRecentlyBookedProperties(): array {
        $properties = array_map(static fn ($i) => (object) [
            'property_id' => round($i / 5) + 1
        ], range(0, 20));

        shuffle($properties);

        return $properties;
    }
}
