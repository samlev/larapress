<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class Controller
 *
 * @package App\Http\Controllers
 */
class Controller extends BaseController
{
    /**
     * Masks the loop, converting the list of posts into a collection of Post objects
     *
     * @return mixed
     */
    protected function collectPosts() {
        $ids = [];

        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $ids[] = get_the_ID();
            }
        }

        return Post::findMany($ids);
    }
}
