<?php
/**
 * AuthorController.php
 *
 * @package
 * @author: Samuel Levy <sam@determineddevelopment.com>
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class AuthorController
 *
 * @package App\Http\Controllers
 */
class AuthorController extends Controller
{
    /**
     * @param Request $request
     * @param string $name
     */
    public function byName(Request $request, string $name) {
        dump($request, $name);
    }
}

