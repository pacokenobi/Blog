<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

@can('ver-usuario')                      
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class=" fas fa-building"></i><span> Seguridad </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="/usuarios"> <i class="fas fa-user"></i><span>Usuarios</span></a>
        <a class="dropdown-item" href="/roles"><i class=" fas fa-user-lock"></i><span>Roles</span></a>
        </div>
    </li>
@endcan

<li class="side-menus {{ Request::is('blogs') ? 'active' : '' }}">
    <a class="nav-link" href="/blogs">
        <i class=" fas fa-blog"></i><span>Blog</span>
    </a>
</li>