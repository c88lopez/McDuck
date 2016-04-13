<?php

namespace App\Http\Controllers;

use App\Providers\AppVersions\AppVersions;

class WelcomeController extends Controller
{
    /**
     * @var AppVersions
     */
    protected $appVersions;

    public function __construct(AppVersions $appVersions)
    {
        $this->setAppVersions($appVersions);
    }

    public function setAppVersions(AppVersions $appVersions)
    {
        $this->appVersions = $appVersions;

        return $this;
    }

    public function getAppVersions()
    {
        return $this->appVersions;
    }

    /**
     * Welcome the user.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        return view(
            'welcome',
            $this->getAppVersions()->getList()
        );
    }
}