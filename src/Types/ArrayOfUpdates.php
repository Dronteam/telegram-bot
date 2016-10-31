<?php

namespace TelegramBot\Api\Types;

abstract class ArrayOfUpdates
{
    /**
     * Return class name
     */
    const className = __CLASS__;

    public static function fromResponse($data)
    {
        $arrayOfUpdates = [];
        foreach ($data as $update) {
            $arrayOfUpdates[] = Update::fromResponse($update);
        }

        return $arrayOfUpdates;
    }
}
