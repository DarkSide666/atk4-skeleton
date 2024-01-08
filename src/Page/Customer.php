<?php
declare(strict_types=1);

namespace Atk4\Skeleton\Page;

use Atk4\Skeleton\Page;
use Atk4\Ui\View;

class Customer extends Page
{
    protected function init(): void
    {
        parent::init();

        \Atk4\Ui\Header::addTo($this, ['Customer page: ' . self::class]);
        $v = \Atk4\Ui\View::addTo($this);
        $v->set('Received request parameters: ' . json_encode($this->args));

        $l = \Atk4\Ui\Button::addTo($this, ['Home address 456']);
        $l->link(['customer/home_address', 'id'=>456]);
    }
}
