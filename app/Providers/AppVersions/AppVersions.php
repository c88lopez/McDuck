<?php
/**
 * Created by PhpStorm.
 * User: clopez
 * Date: 4/13/16
 * Time: 2:41 AM
 */

namespace App\Providers\AppVersions;

class AppVersions
{
    public function getList()
    {
        return [
            'appVersions' => [
                'php'   => phpversion(),
                'nginx' => '1.8.1',
            ],
        ];
    }
}