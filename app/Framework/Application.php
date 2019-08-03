<?php
/**
 * Application.php
 *
 * @package
 * @author: Samuel Levy <sam@determineddevelopment.com>
 */

namespace App\Framework;

use FastRoute\Dispatcher;
use Illuminate\Http\Request;
use Laravel\Lumen\Application as BaseApplication;

/**
 * Class Application
 *
 * @package App\Framework
 */
class Application extends BaseApplication
{
    /**
     * Attaches ${type}_template_hierarchy filters so that we can collect the actual templates that WordPress is
     * looking for.
     */
    public function bootWordPressRouter() {
        // These are the template types recognised by WordPress
        $routeTypes = [
            'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'embed', 'home', 'frontpage',
            'privacypolicy', 'page', 'paged', 'search', 'single', 'singular', 'attachment'
        ];

        $app = &$this;
        foreach ($routeTypes as $routeType) {
            add_filter($routeType . '_template_hierarchy', function ($templates) use ($app) {
                $app->addPossibleRoutes($templates);

                return $templates;
            }, 10, 1);
        }
    }

    /**
     * Tracks possible routes that WordPress may want to use
     *
     * @var array
     */
    protected $possibleRoutes = [];

    /**
     * Adds possible route for WordPress
     *
     * @param array $routes
     */
    public function addPossibleRoutes(array $routes) {
        $routes = array_map(function ($val) {
            if (substr($val, -4) == '.php') {
                return substr($val, 0, -4);
            }

            return $val;
        }, $routes);

        $this->possibleRoutes = array_unique(array_merge($this->possibleRoutes, $routes));
    }

    /**
     * @return array
     */
    public function possibleRoutes() {
        return $this->possibleRoutes;
    }

    /**
     * Runs the application using wordpress requested templates for routing
     */
    public function runWordPressRoutes() {
        $targetRoute = '/index';

        // Attempt to dispatch the route just to check for a match
        $dispatcher = $this->createDispatcher();
        foreach ($this->possibleRoutes as $route) {
            if(strpos($route, '/') !== 0) {
                $route = '/' . $route;
            }

            $routeInfo = $dispatcher->dispatch('GET', $route);

            if ($routeInfo[0] === Dispatcher::FOUND) {
                $targetRoute = $route;
                break;
            }
        }

        // Make the Request object
        $request = Request::create($route);

        $this->run($request);
    }
}
