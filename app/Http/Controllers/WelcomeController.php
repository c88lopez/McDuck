<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * Welcome the user.
     *
     * @return Response
     */
    public function index()
    {
        return view(
            'welcome',
            [
                'appVersions' => [
                    'php'   => phpversion(),
                    'nginx' => '1.8.1',
                ],
            ]
        );
    }
}