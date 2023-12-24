<?php

/**
 * Display credits of a content
 */

namespace Referencime\Controllers\Credit;

// require_once(dirname(__FILE__) . '/../models/lesson.php');

// use Mooc\Models\Lesson\Model_Lesson;

class Controller_Credit
{
    public static function displayCredit()
    {
        $updated = get_the_modified_date('j F Y');
        require_once(dirname(__FILE__) . '/../views/credit.php');
    }
}
