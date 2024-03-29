<header>
    <div class="header">
        <div class="container ">
            <div class="row">
                <div class="col-2">
                    <div class="cont-img">
                        <div class="pad2"></div>
                        <img src="../resources/images/logoseguro.png" alt="">
                    </div>
                </div>

                <div class="col-3">

                </div>
                <div class="col-2">
                    <div class="cont-img">
                        <img src="../resources/images/Logo_LosImparables_2023.png" width="auto">
                    </div>
                </div>
                <div class="col-5">
                    <div class="config_boton">
                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6 justify-content-end">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>ID {{ Auth::user()->cedula }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!--<x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>-->

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="subheader">
        <div class="desk">

            <nav>
                <div class="row">
                <div class="menu">
                         @can('Vendedor')
                         <div class="elemento e8 {{ request()->is('activaciones') ? 'active' : '' }}"><a href="{{route('activaciones')}}" >Ingresar Activaciones</a></div>
                         @endcan
                         
                         @can('Vendedor')
                         <div class="elemento e9 {{ request()->is('jugar') ? 'active' : '' }}"><a href="{{route('jugar')}}">Jugar</a></div>
                         @endcan
                         @can('Vendedor')
                         <div class="elemento e10 {{ request()->is('premios') ? 'active' : '' }}"><a href="{{route('premios')}}">Premios</a></div>
                         @endcan
                         @can('Vendedor')
                         <div class="elemento e11 {{ request()->is('ganadores') ? 'active' : '' }}"><a href="{{route('ganadores')}}">Ganadores</a></div>
                         @endcan
                         @can('Vendedor')
                         <div class="elemento e12 {{ request()->is('tyc') ? 'active' : '' }}"><a href="{{route('terminosycondiciones')}}">Terminos y condiciones</a></div>
                         @endcan
                         @can('Vendedor')
                         <div class="elemento e13 {{ request()->is('perfil') ? 'active' : '' }}"><a href="{{route('perfil')}}">Perfil</a></div>
                         @endcan

                         
                         @can('Administrador')
                         <div class="elemento e8 {{ request()->is('dashboard_admin') ? 'active' : '' }}"><a href="{{route('dashboard_admin')}}" >Dashboard</a></div>
                         @endcan                         
                         @can('Administrador')
                         <div class="elemento e9 {{ request()->is('jugar_admin') ? 'active' : '' }}"><a href="{{route('jugar_admin')}}">Jugar</a></div>
                         @endcan
                         @can('Administrador')
                         <div class="elemento e10 {{ request()->is('activaciones_admin') ? 'active' : '' }}"><a href="{{route('activaciones_admin')}}">Reporte de Activaciones</a></div>
                         @endcan
                         @can('Administrador')
                         <div class="elemento e11 {{ request()->is('premios_admin') ? 'active' : '' }}"><a href="{{route('premios_admin')}}">Reporte de Premios</a></div>
                         @endcan
                         @can('Administrador')
                         <div class="elemento e12 {{ request()->is('ganadores_admin') ? 'active' : '' }}"><a href="{{route('ganadores_admin')}}">Ganadores</a></div>
                         @endcan
                         @can('Administrador')
                         <div class="elemento e13 {{ request()->is('tyc_admin') ? 'active' : '' }}"><a href="{{route('tyc_admin')}}">Terminos y Condiciones</a></div>
                         @endcan
                         @can('Administrador')
                         <div class="elemento e13 {{ request()->is('usuarios') ? 'active' : '' }}"><a href="{{route('usuarios')}}">Usuarios</a></div>
                         @endcan
                  
                         
                  
                         
                  
                         
                  
                         
                                         </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu 
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">-->
            <!-- Hamburger -->
            <!--  <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>-->

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>