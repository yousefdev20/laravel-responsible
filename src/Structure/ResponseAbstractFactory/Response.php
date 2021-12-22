<?php

namespace Yousef\Responsible\Structure\ResponseAbstractFactory;

abstract class Response {

    public function render($object,string $viewSource = null) {}
}