<div class="sidebar" data-color="black">
    <div class="logo">
        <a href="{{ route('back.dashboard') }}" class="logo-text">
          <span style="
  width: 100%;
  font-size: xx-large;
  color: #fff;
  font-weight: 900;
">Abrigo Pet</span>
        </a>
    </div>

    <div class="logo logo-mini">
        <a href="{{ route('back.dashboard') }}" class="logo-text">
            <img src="/img/icon.png" width="40"/>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <a href="{{ route('back.profile') }}">
                <div class="photo">
                    <img src="/storage/profile/{{ Auth::user()->picture }}" alt="{{ Auth::user()->name }}"/>
                </div>
            </a>

            <div class="info">
                <a href="/">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <ul class="nav">
            <li class="{{ Route::is('back.adotantes.index') ? 'active' : '' }}">
                <a href="{{ route('back.adotantes.index') }}">
                    <i class="fa fa-address-book"></i>
                    <p>@lang('dictionary.adotantes')</p>
                </a>
            </li>

            <li class="{{ Route::is('back.adocoes.index') ? 'active' : '' }}">
                <a href="{{ route('back.adocaos.index') }}">
                  <i><img style="width:100%;" src="/img/tick-inside-circle.png" /></i>
                    <p>@lang('dictionary.adocaos')</p>
                </a>
            </li>

            <li class="{{ Route::is('back.adocaos.show') ? 'active' : '' }}">
                <a href="/back/adocaos/abdicar">
                  <i><img style="width:100%;" src="/img/thumb-down.png" /></i>
                    <p>@lang('dictionary.abdicar')</p>
                </a>
            </li>

            <li class="{{ Route::is('back.users.index') ? 'active' : '' }}">
                <a href="{{ route('back.users.index') }}">
                    <i class="fa fa-users"></i>
                    <p>@lang('dictionary.users')</p>
                </a>
            </li>

            <li class="{{ Route::is('back.animals.index') ? 'active' : '' }}">
                <a href="{{ route('back.animals.index') }}">
                  <i><img style="width:100%;" src="/img/dog.png" /></i>
                    <p>@lang('dictionary.animals')</p>
                </a>
            </li>

            <li class="{{ Route::is('back.racas.index') ? 'active' : '' }}">
                <a href="{{ route('back.racas.index') }}">
                    <i><img style="width:100%;" src="/img/animal-prints.png"/></i>
                    <p>@lang('dictionary.racas')</p>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}">
                    <i class="fa fa-sign-out"></i>
                    <p>@lang('dictionary.logout')</p>
                </a>
            </li>
        </ul>
    </div>
</div>
