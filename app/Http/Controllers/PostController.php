<?php
/**
 * PostController.php
 *
 * @package
 * @author: Samuel Levy <sam@determineddevelopment.com>
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/**
 * Class PostController
 *
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\View\View|\Laravel\Lumen\Application
     */
    public function single(Request $request) {
        return view('single', ['post' => $this->collectPosts()[0]]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\View\View|\Laravel\Lumen\Application
     */
    public function page(Request $request) {
        return view('page', ['post' => $this->collectPosts()[0]]);
    }
}

