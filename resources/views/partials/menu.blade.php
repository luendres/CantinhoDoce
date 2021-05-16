<style>
    .active-menu {
        background-color: whitesmoke;
        color: #A33333 !important;
    }
</style>

<div class="c-sidebar c-sidebar-fixed c-sidebar-lg-show c-sidebar-md-show border-right" style="background-color:#C14242; color:white; border-color:#C14242;" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <a href="/admin/home" class="px-2 text-sm" style="color: white;"><b>Cantinho Doce</b></a>

    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item {{ request()->is('admin/paineldecontrolo') ? 'active-menu' : '' }}">
            <a href="/admin/paineldecontrolo" class="c-sidebar-nav-link py-4 {{ request()->is('admin/paineldecontrolo') ? 'active-menu' : '' }}">
                Painel de Controlo
                <i class="fas fa-chart-line fa-2x mx-3"></i>
            </a>
        </li>


        <li class="c-sidebar-nav-item {{ request()->is('admin/vendas*') ? 'active-menu' : '' }}">
            <a class="c-sidebar-nav-link py-4 {{ request()->is('admin/vendas*') ? 'active-menu' : '' }}" href="/admin/vendas">
                Vendas
                <i class="fas fa-money-check-alt fa-2x mx-3"></i>

            </a>
        </li>
        <li class="c-sidebar-nav-item {{ request()->is('admin/catalogo*') ? 'active-menu' : '' }}">
            <a class="c-sidebar-nav-link py-4 {{ request()->is('admin/catalogo*') ? 'active-menu' : '' }}" href="/admin/catalogo">
                Catálogo
                <i class="fas fa-list-alt fa-2x mx-3"></i>
            </a>
        </li>
        <li class="c-sidebar-nav-item {{ request()->is('admin/utilizadores*') ? 'active-menu' : '' }}">
            <a class="c-sidebar-nav-link py-4 {{ request()->is('admin/utilizadores*') ? 'active-menu' : '' }}" href="/admin/utilizadores">
                Utilizadores
                <i class="fas fa-users fa-2x mx-3"></i>
            </a>
        </li>
        <li class="c-sidebar-nav-item {{ request()->is('admin/definicoes*') ? 'active-menu' : '' }}">
            <a class="c-sidebar-nav-link py-4 {{ request()->is('admin/definicoes*') ? 'active-menu' : '' }}" href="/admin/definicoes">
                Definições
                <i class="fas fa-cog fa-2x mx-3"></i>
            </a>
        </li>

    </ul>
</div>