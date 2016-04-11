@extends('layouts.master')

@section('AppVersion')
<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="x_panel tile fixed_height_320">
        <div class="x_title">
            <h2>App Versions</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @foreach ($appVersions as $app => $version)
                <div class="widget_summary">
                    <div class="w_55">
                        <span><?php echo $app; ?></span>
                    </div>
                    <div class="w_25">
                        <span><?php echo $version; ?></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection