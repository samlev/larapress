<?php
/**
 * IndexController.php
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
class IndexController extends Controller
{
    /**
     * @param Request $request
     * @param string $name
     */
    public function list(Request $request) {
        return view('index', ['posts' => $this->collectPosts()]);
    }
}

