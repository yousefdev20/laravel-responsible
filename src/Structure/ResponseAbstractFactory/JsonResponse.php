<?php

namespace Yousef\Responsible\Structure\ResponseAbstractFactory;

use Illuminate\Support\Facades\Response as ResponseFacade;

class JsonResponse extends Response {

    /**
     * @param $object
     * @param string|null $viewSource
     * @return \Illuminate\Http\JsonResponse|void
     */
    public function render($object, string $viewSource = null) {

        return ResponseFacade::json($object);
    }
}