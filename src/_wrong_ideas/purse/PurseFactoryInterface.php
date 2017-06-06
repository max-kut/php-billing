<?php
/**
 * PHP Billing Library
 *
 * @link      https://github.com/hiqdev/php-billing
 * @package   php-billing
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\php\billing;

/**
 * Purse factory interface.
 *
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
interface PurseFactoryInterface
{
    /**
     * @return Purse
     */
    public function create(PurseCreationDto $dto);
}
