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
     */
    public function with(string $key = '', $value) {

        $this->data[$key] = $value;
        return $this;
    }

    /**
     * @param string $viewSource
     * @param array $data
     * @return \Illuminate\Contracts\View\View|void
     */
    public function view(string $viewSource = '', array $data = []) {

        $this->source = $viewSource;
        $this->data = array_merge($this->data, $data);
        return View::make($this->source, $this->data);
    }
}