<?php

namespace TelegramBot\Api\Types;

abstract class ArrayOfArrayOfPhotoSize
{
    /**
     * Return class name
     */
    const className = __CLASS__;

    public static function fromResponse($data)
    {
        return array_map(function ($arrayOfPhotoSize) {
            return ArrayOfPhotoSize::fromResponse($arrayOfPhotoSize);
        }, $data);
    }
}
