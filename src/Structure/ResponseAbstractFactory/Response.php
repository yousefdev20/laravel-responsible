<?php

namespace Yousef\Responsible\Structure\ResponseAbstractFactory;

abstract class Response {

    public function render() {}

    public function redirect($object, $viewSource = null) {}

    public function view(string $viewSource = '', array $data = []) {}

    public function with(string $key = '', $value) {}

    public function statusCode(int $code = 200) {}
}