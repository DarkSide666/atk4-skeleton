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

        \Atk4\Ui\Header::addTo($this, ['Dashboard: ' . self::class]);
        $v = \Atk4\Ui\View::addTo($this);
        $v->set('Received request parameters: ' . json_encode($this->args));

        $l = \Atk4\Ui\Button::addTo($this, ['Customer 123']);
        $l->link(['customer', 'id'=>123]);
    }



}
