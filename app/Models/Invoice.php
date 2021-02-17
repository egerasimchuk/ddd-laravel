<?php
/**
 * Description of Invoice.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Models;


class Invoice extends Model
{

    const STATUS_NEW = 'NEW';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_COMPLETED = 'COMPLETED';

}
