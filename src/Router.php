<?php
declare(strict_types=1);

namespace Atk4\Skeleton;

use Atk4\Ui\View;

class Router
{
    /** @var string Page path, for example, customers or customer/edit or index */
    protected string $page;

    /** @var array Page arguments */
    protected array $args;

    /** @var Page View class */
    protected $pageClass;

    private string $pageArgumentName = 'p';

    public function __construct()
    {
        parse_str($_SERVER['QUERY_STRING'] ?? '', $args);

        $this->page = $args[$this->pageArgumentName] ?? 'index';
        unset($args[$this->pageArgumentName]);
        $this->args = $args;

        $class = __NAMESPACE__ . '\\Page\\' . str_replace('/', '\\', $this->convertPathToClassName($this->page));
        //$class = $class::classname;
        if (!class_exists($class)) {
            throw new \Exception('Class ' . $class . ' do not exist');
        }
        $this->pageClass = $class;
    }

    protected function convertPathToClassName(string $path): string
    {
        // Split the path into segments
        $segments = explode('/', $path);

        // Capitalize each segment and replace underscore
        $segments = array_map(function($segment) {
            return str_replace('_', '', ucwords($segment, '_'));
        }, $segments);

        // Join the segments with '/'
        $converted = implode('/', $segments);

        return $converted;
    }

    public function getPage(): View
    {
        $page = new $this->pageClass();
        $page->setArgs($this->args);

        return $page;
    }
}
