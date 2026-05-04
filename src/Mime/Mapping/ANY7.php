<?php

/*
 * This file is part of fof/upload.
 *
 * Copyright (c) FriendsOfFlarum.
 * Copyright (c) Flagrow.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FoF\Upload\Mime\Mapping;

class ANY7 extends AbstractMimeMap
{
    public static function getMimeType(): string
    {
        return 'application/vnd.anyrail';
    }

    public static function getExtension(): string
    {
        return 'any';
    }

    public static function getMagicBytes(): array
    {
        return ["\x16\x00\x00\x00"]; // ANY signature
    }
}

