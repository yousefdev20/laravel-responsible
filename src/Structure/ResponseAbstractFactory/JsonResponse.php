<?php

namespace Yousef\Responsible\Structure\ResponseAbstractFactory;

use Illuminate\Support\Facades\Response as ResponseFacade;

class JsonResponse extends Response {

    protected array $data = [];

    protected int $statusCode = 200;

    /**
     * @return void
     */
    public function render() {

        return ResponseFacade::json($this->data, $this->statusCode);
    }

    /**
     * @param string $key
     * @param $value
     * @return $this|void
     */
    public function with(string $key = '', $value) {

        $this->data[$key] = $value;
        return $this;
    }

    /**
     * @param int $code
     * @return $this|void
     */
    public function statusCode(int $code = 200) {

        $this->statusCode = $code;
        return $this;
    }

    /**
     * @param string $viewSource
     * @param array $data
     * @return void
     */
    public function view(string $viewSource = '', array $data = []) {

        $this->data[] = $data;
        return ResponseFacade::json($this->data, $this->statusCode);
    }
}