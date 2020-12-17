<?php

declare(strict_types=1);

namespace Zitkala\Support\Tests\Stubs;

use Illuminate\Routing\Controller;

/**
 * Class     DummyController
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class DummyController extends Controller
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    protected $template = 'welcome';

    /* -----------------------------------------------------------------
     |  Actions
     | -----------------------------------------------------------------
     */

    public function index()
    {
        return 'Dummy';
    }

    public function show($slug)
    {
        abort_unless($slug === 'super', 404, 'Super dummy not found !');

        return 'Super dummy';
    }
}
