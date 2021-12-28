<?php

namespace Yousef\Responsible\Structure\ResponseAbstractFactory;

abstract class Response {

    public function render($object,string $viewSource = null) {}

    public function redirect($object,string $viewSource = null) {}

    public function view(string $viewSource = '') {}

    public function with($object = []) {}

    public function statusCode(int $code = 200) {}
}