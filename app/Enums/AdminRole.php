<?php

namespace App\Enums;


use MyCLabs\Enum\Enum;

/**
 * @method static AdminRole OWNER()
 * @method static AdminRole ADMIN()
 * @method static AdminRole SUPPORTER()
 * @method static AdminRole EDITOR()
 */
class AdminRole extends Enum
{
    private const OWNER = 'owner';
    private const ADMIN = 'admin';
    private const SUPPORTER = 'supporter';
    private const EDITOR = 'editor';
}
