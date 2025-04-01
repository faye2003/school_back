<div class="content">

<header>
<p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Accueil</span></p>

<div class="search-wrapper">
<span class="fa fa-search"></span>
<input type="search" name="" placeholder="recherche" />
</div>

<div class="user-wrapper" id="dropdown">
<div>
<h4>{{Auth::user()->name}}</h4>
<small>Super-Admin</small>
</div>

<span class="avatar avatar-online"><img src="{{ Auth::user()->image==null ? asset('css/app-assets/images/user-icon.png') : Auth::user()->image}}" width="30" height="30" class="logo-admin"><i></i></span>
<div class="dropdown-content">
<p>
    <a class="dropdown-item font" href="" target="_self" ng-click="showModalUpdate('user',{{Auth::user()->id}},false, true)">
        <i class="ft-user"></i> Mon Profil
    </a>
</p>
<p>
    <a class="dropdown-item font" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Deconnexion</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</p>
</div>

</div>
</header>