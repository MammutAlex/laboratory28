<nav class="mainMenu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <ul class="menus">
                    <li class="scroll"><a href="{{route('index')}}">{{trans('web.menu.index')}}</a></li>
                    <li class="scroll"><a href="{{route('about')}}">{{trans('web.menu.about')}}</a></li>
                    <li class="scroll"><a href="{{route('seminars.index')}}">{{trans('web.menu.seminars')}}</a></li>
                    <li class="scroll"><a href="{{route('publications')}}">{{trans('web.menu.publications')}}</a>
                    </li>
                    <li class="scroll"><a href="{{route('lectures.index')}}">{{trans('web.menu.lectures')}}</a></li>
                    <li class="scroll"><a href="{{route('news.index')}}">{{trans('web.menu.news')}}</a></li>
                    <li class="hasChild">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <b class="caret"></b> {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                        <ul class="dropDown">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <li>
                                        <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>