<?php


use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

if (!function_exists('example_helper')) {
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    function getTrackingData(array $userData): array
    {
        return array_merge($userData, session()->get('fb_tracking', []));
    }
}
