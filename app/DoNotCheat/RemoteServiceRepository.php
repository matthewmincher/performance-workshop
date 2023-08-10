<?php
namespace App\DoNotCheat;


class RemoteServiceRepository {
    protected array $PROMOTIONS_MOCK_DATA = [];

    public function __construct()
    {
        $this->PROMOTIONS_MOCK_DATA = [
            1  => [
                (object) ['name' => 'promotion for property 1']
            ],
            2  => [],
            3  => [],
            4  => [
                (object) ['name' => 'promotion for property 4'],
                (object) ['name' => 'another promotion for property 4']
            ],
            5  => [],
            6  => [],
            7  => [],
            8  => [],
            9  => [],
            10 => [],
            11 => [],
            12 => [],
            13 => [],
            14 => [],
            15 => [],
            16 => [],
            17 => [],
            18 => [],
            19 => [],
            20 => [],
            21 => [],
            22 => [],
            23 => [],
            24 => [],
            25 => [],
            26 => [],
            27 => [],
            28 => [],
            29 => [],
            30 => [],
            31 => [],
            32 => [],
            33 => [],
            34 => [],
            35 => [],
            36 => [],
            37 => [],
            38 => [],
            39 => [],
            40 => [],
            41 => [],
            42 => [],
            43 => [],
            44 => [],
            45 => [],
            46 => [],
            47 => [],
            48 => [],
            49 => [],
            50 => [],
        ];
    }

    public function getAllPromotions(): array {
        $this->doCostlyNetworkRequest(200);

        return $this->PROMOTIONS_MOCK_DATA;
    }

    public function getPromotionsForPropertyId($propertyId): ?array {
        $this->doCostlyNetworkRequest(100);

        return $this->PROMOTIONS_MOCK_DATA[$propertyId] ?? null;
    }

    protected function doCostlyNetworkRequest(int $durationMicoseconds): void
    {
        usleep($durationMicoseconds * 1_000);
    }
}
