<?php

namespace Simplon\Interfaces;

interface ErrorExceptionInterface extends \Throwable
{
    /**
     * @return int
     */
    public function getHttpStatusCode();

    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function getPublicData($key = null);
}