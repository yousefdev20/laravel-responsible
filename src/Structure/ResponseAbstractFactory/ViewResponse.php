<?php

namespace Yousef\Responsible\Structure\ResponseAbstractFactory;

use Illuminate\Support\Facades\View;

class ViewResponse extends Response {

    /**
     * @var array
     */
    protected array $data = [];

    protected string $source = '';

    /**
     * @return void
     */
    public function render() {

        return View::make($this->source, $this->data);
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
     * @param string $viewSource
     * @param array $data
     * @return void
     */
    public function view(string $viewSource = '', array $data = []) {

        $this->source = $viewSource;
        return View::make($this->source, $this->data);
    }
}