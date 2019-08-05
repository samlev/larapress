<?php
/**
 * AuthorController.php
 *
 * @package
 * @author: Samuel Levy <sam@determineddevelopment.com>
 */

namespace App\Http\Controllers;

use Corcel\Model\User;
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
        if (is_author($name)) {
            $author = User::find(\get_the_author_meta('ID'));

            return view('author', ['author' => $author, 'posts' => $this->collectPosts()]);
        }

        return response('No author found', 400);
    }
}

