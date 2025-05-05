<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashbord') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <!-- logo -->
            </div>
            <div class="sidebar-brand-text mx-3">Dashboard</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('/dashbord') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('dashbord') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Article -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('article*') || Request::is('addArticle') ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="{{ Request::is('article*') || Request::is('addArticle') ? 'true' : 'false' }}" aria-controls="collapseTwo">
                <i class="fas fa-newspaper fa-cog"></i>
                <span>Article</span>
            </a>
            <div id="collapseTwo" class="collapse {{ Request::is('article*') || Request::is('addArticle') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item {{ Request::is('article') ? 'active' : '' }}" href="{{ url('article') }}">Liste des articles</a>
                    <a class="collapse-item {{ Request::is('addArticle') ? 'active' : '' }}" href="{{ url('addArticle') }}">Ajouter un article</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Vidéo -->
        <li class="nav-item">
            <a class="nav-link {{ Request::is('video*') || Request::is('addVideo') ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseFoor"
                aria-expanded="{{ Request::is('video*') || Request::is('addVideo') ? 'true' : 'false' }}" aria-controls="collapseFoor">
                <i class="fas fa-video fa-cog"></i>
                <span>Vidéo</span>
            </a>
            <div id="collapseFoor" class="collapse {{ Request::is('video*') || Request::is('addVideo') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item {{ Request::is('video') ? 'active' : '' }}" href="{{ url('video') }}">Liste des vidéos</a>
                    <a class="collapse-item {{ Request::is('addVideo') ? 'active' : '' }}" href="{{ url('addVideo') }}">Ajouter une vidéo</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Bénévoles -->
        <li class="nav-item {{ Request::is('benevoles') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('benevoles') }}">
                <i class="fas fa-users fa-chart-area"></i>
                <span>Liste de Membres</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
</div>
