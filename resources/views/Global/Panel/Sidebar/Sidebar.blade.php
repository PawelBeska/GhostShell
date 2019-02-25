<div class="layout-sidebar">
    <div class="layout-sidebar-backdrop"></div>
    <div class="layout-sidebar-body">
        <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
                <ul class="sidenav">
                    <li class="sidenav-search hidden-md hidden-lg">
                        <form class="sidenav-form" action="/">
                            <div class="form-group form-group-sm">
                                <div class="input-with-icon">
                                    <input class="form-control" type="text" placeholder="Search…">
                                    <span class="icon icon-search input-icon"></span>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="sidenav-heading">Menu</li>
                    <li class="sidenav-item @if($title == "GhostShell.eu | Strona główna") active @endif">
                        <a href="/" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-home"></span>
                            <span class="sidenav-label">Strona główna</span>
                        </a>
                    </li>
                    <li class="sidenav-item has-subnav @if($title == "GhostShell.eu | Zlecenia - Twoje zlecenia") active @elseif($title == "GhostShell.eu | Zlecenia - Nowe zlecenia") active @endif">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-briefcase"></span>
                            <span class="sidenav-label">Zlecenia</span>
                        </a>
                        <ul class="sidenav-subnav collapse">
                            <li class="sidenav-subheading">Zlecenia</li>
                            <li><a href="/zlecenia">Twoje zlecenia</a></li>
                            <li><a href="/zlecenia/nowe">Nowe zlecenie</a></li>
                        </ul>
                    </li>
                    <li class="sidenav-item has-subnav @if($title == "") active @endif">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-shopping-cart"></span>
                            <span class="sidenav-label">Sklep</span>
                        </a>
                        <ul class="sidenav-subnav collapse">
                            <li class="sidenav-subheading">Sklep</li>
                            <li><a href="/sklep">Wszystkie produkty</a></li>
                            <li><a href="/sklep/zamowienia">Twoje zamówienia</a></li>
                        </ul>
                    </li>
                    <li class="sidenav-item has-subnav @if($title == "") active @endif">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-user"></span>
                            <span class="sidenav-label">Profil</span>
                        </a>
                        <ul class="sidenav-subnav collapse">
                            <li class="sidenav-subheading">Profil</li>
                            <li><a href="/profil">Twoj profil</a></li>
                            <li><a href="/profil/edycja">Edytuj profil</a></li>
                        </ul>
                    </li>
                    <li class="sidenav-item has-subnav @if($title == "") active @endif">
                        <a href="#" aria-haspopup="true">
                            <span class="sidenav-icon icon icon-envelope"></span>
                            <span class="sidenav-label">Kontakt</span>
                        </a>
                        <ul class="sidenav-subnav collapse">
                            <li class="sidenav-subheading">Kontakt</li>
                            <li><a href="/kontakt">Nowa wiadomość</a></li>
                            <li><a href="/konwersacje">Konwersacje</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</div>