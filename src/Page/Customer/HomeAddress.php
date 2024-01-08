<?php
declare(strict_types=1);

namespace Atk4\Skeleton\Page\Customer;

use Atk4\Skeleton\Page;
use Atk4\Ui\View;

class HomeAddress extends Page
{
    protected function init(): void
    {
        parent::init();

        \Atk4\Ui\Header::addTo($this, ['Customer Home Address page: ' . self::class]);
        $v = \Atk4\Ui\View::addTo($this);
        $v->set('Received request parameters: ' . json_encode($this->args));
    }
}
