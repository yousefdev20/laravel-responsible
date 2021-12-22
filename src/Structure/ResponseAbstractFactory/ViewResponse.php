<?php

namespace Yousef\Responsible\Structure\ResponseAbstractFactory;

use Illuminate\Support\Facades\View;

class ViewResponse extends Response {

    /**
     * @param $object
     * @param string|null $viewSource
     * @return \Illuminate\Contracts\View\View|void
     */
    public function render($object, string $viewSource = null) {

        return View::make($viewSource, $object);
    }
}