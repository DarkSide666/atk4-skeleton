<?php
declare(strict_types=1);

namespace Atk4\Skeleton\Page;

use Atk4\Skeleton\Page;
use Atk4\Ui\View;

class Index extends Page
{
    protected function init(): void
    {
        parent::init();

        \Atk4\Ui\Header::addTo($this, ['Test']);
        $v = \Atk4\Ui\View::addTo($this);
        $v->set('Received request parameters: ' . json_encode($this->args));
    }



}
