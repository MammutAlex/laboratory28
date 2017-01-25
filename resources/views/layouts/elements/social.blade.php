<ul class="socialIcon">
    @if($globals->facebook)
        <li>
            <a href="{{$globals->facebook}}">
                <i class="ion-social-facebook"></i>
            </a>
        </li>
    @endif
    @if($globals->twitter)
        <li>
            <a href="{{$globals->twitter}}">
                <i class="ion-social-twitter"></i>
            </a>
        </li>
    @endif
    @if($globals->linkedin)
        <li>
            <a href="{{$globals->linkedin}}">
                <i class="ion-social-linkedin"></i>
            </a>
        </li>
    @endif
</ul>