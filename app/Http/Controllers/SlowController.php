<?php

namespace App\Http\Controllers;

use App\DoNotCheat\LocalServiceRepository;
use App\DoNotCheat\RemoteServiceRepository;
use Illuminate\Cache\Repository as Cache;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SlowController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct(
        protected Cache $cache,
        protected LocalServiceRepository $localServiceRepository,
        protected RemoteServiceRepository $remoteServiceRepository,
    ){}

    public function index() {
        return response()
            ->view('slowcontroller.index');
    }

    public function promos(Request $request) {
        $properties = $this->localServiceRepository->getRecentlyBookedProperties();

        foreach ($properties as $property) {
            $property->promotions = $this->remoteServiceRepository->getPromotionsForPropertyId($property->property_id);
        }

        $properties = array_values(array_unique($properties, SORT_REGULAR));

        $viewData = [
            'properties' => $properties
        ];

        return !$request->acceptsHtml() ?
            response()->json($viewData) :
            response()->view('slowcontroller.promos', $viewData);
    }
}
