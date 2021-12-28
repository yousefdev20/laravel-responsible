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
     * @param $object
     * @param string|null $viewSource
     * @return \Illuminate\Contracts\View\View|void
     */
    public function render($object = null) {

        return View::make($this->source, $this->data);
    }

    public function with($object = []) {

        $this->data[] = $object;
        return $this;
    }

    public function view(string $viewSource = '') {

        $this->source = $viewSource;
        return View::make($this->source, $this->data);
    }
}