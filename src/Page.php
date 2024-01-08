<?php
declare(strict_types=1);

namespace Atk4\Skeleton;

use Atk4\Ui\Header;
use Atk4\Ui\View;

abstract class Page extends View
{
    /** @var string Page title */
    //protected string $title;

    /** @var array Page request  arguments */
    protected array $args = [];

    protected function init(): void
    {
        parent::init();

        //$h = Header::addTo($this);
        //$h->set($this->title);
    }

    public function setArgs(array $args): void
    {
        $this->args = $args;
    }
}
