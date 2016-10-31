<?php

namespace TelegramBot\Api\Types;

abstract class ArrayOfPhotoSize
{
    /**
     * Return class name
     */
    const className = __CLASS__;

    public static function fromResponse($data)
    {
        $arrayOfPhotoSize = [];
        foreach ($data as $photoSizeItem) {
            $arrayOfPhotoSize[] = PhotoSize::fromResponse($photoSizeItem);
        }

        return $arrayOfPhotoSize;
    }
}
