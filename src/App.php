<?php
declare(strict_types=1);

namespace Atk4\Skeleton;

use Atk4\Core\ConfigTrait;
use Atk4\Core\NameTrait;
use Atk4\Data\Persistence;
use Atk4\Ui\SessionTrait;

class App extends \Atk4\Ui\App
{
    use ConfigTrait;
    use NameTrait;
    use SessionTrait;

    public $title = 'ATK4 :: Skeleton';

    // we use our own routing, so set these to empty string
    protected string $urlBuildingIndexPage = '';
    protected string $urlBuildingExt = '';

    /** @var string Root URL - should be set by bootstrap index.php and used when geenrating URLs */
    //protected string $rootUrl;

    /**
     * @var string|array One or more config files to load on app start
     */
    protected $configFiles;

    public function __construct(array $defaults = [])
    {
        parent::__construct($defaults);
        $this->name = 'atk4_skeleton';

        $this->readConfig($this->configFiles);
    }

    /**
     * Connects database.
     */
    public function connectDb(): void
    {
        if ($db = $this->getConfig('db')) {
            $this->db = Persistence::connect($db);
        }
    }
}
