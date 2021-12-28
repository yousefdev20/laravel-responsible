<?php

namespace Yousef\Responsible\Structure\ResponseAbstractFactory;

use Illuminate\Support\Facades\Response as ResponseFacade;

class JsonResponse extends Response {

    protected array $data = [];

    protected int $statusCode = 200;

    /**
     * @param $object
     * @param string|null $viewSource
     * @return \Illuminate\Http\JsonResponse|void
     */
    public function render() {

        return ResponseFacade::json($this->data, $this->statusCode);
    }

    /**
     * @param $object
     * @return $this|void
     */
    public function with($object = []) {

        $this->data[] = $object;
        return $this;
    }

    public function statusCode(int $code = 200) {

        $this->statusCode = $code;
        return $this;
    }
}