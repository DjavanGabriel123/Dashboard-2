<div class="nav-wrapper row">
    <div>
        <div class="nav-wrapper">

            <span class="title-topo">Page / <p>Dashboard</p></span><br>

            <span class="destaque">Dashboard</span><br>

            <div class="type-here-mobile col s4">
                <label for="text">Type here...</label>
                <input type="text">
            </div>



            <a href="#" data-target="mobile-demo" class="sidenav-trigger right">
                <div class="row others-icons">
                    <i class="fa-solid fa-bell right"></i>
                    <i class="fa-solid fa-gear right"></i>
                    <i class="fa-solid fa-bars right"></i>
                    <i class="fa-solid fa-user right"></i>
                </div>
            </a>

            <ul class="right hide-on-med-and-down">
                <div class="type-here col s5">
                    <label for="text">Type here...</label>
                    <input type="text">
                </div>

                <li><a href="sass.html">Sign Out<i class="fa-solid fa-user left user"></i></a></li>
                <li><a href="badges.html"><i class="fa-solid fa-gear"></i></a></li>
                <li><a href="collapsible.html"><i class="fa-solid fa-bell"></i></a></li>
            </ul>
        </div>
    </div>

    <ul class="sidenav" id="mobile-demo">
        <div class="col s12 l1">
            <div class="col s11 l2 menu-lateral-mobile" id="menu-lateral-mobile">

                <div class="col s12 logo">
                    <img src="{{ asset('Images/logo.png') }}" alt=""><span class="text-white">Material
                        Dashboard 2<br>Laravel</span>
                </div>

                <div class="border-3"></div>


                <div class="col s12 examples">
                    <h6 class="center">LARAVEL EXAMPLES</h6>

                    <div class="interative-user center col s10">

                        <p class="left white-text"><i class="fa-solid fa-circle-user"></i>User Profile</p><br>

                        <p class="left"><i class="fa-solid fa-bars-progress"></i>User Management</p>
                    </div>

                    <div class="col s12 pages">
                        <h6 class="center">PAGES</h6>

                        <div class="button-pages">

                            <button class="col s12 "><i class="material-icons opacity-10">dashboard</i>
                                <p>Dashboard</p>
                            </button>

                            <button class="col s12 transparente"><i class="material-symbols-outlined ">
                                    table_view
                                </i>
                                <p>Tables</p>
                            </button>

                            <button class="col s12 transparente"><i class="material-symbols-outlined">
                                    receipt_long
                                </i>
                                <p>Billing</p>
                            </button>

                            <button class="col s12 transparente"><i class="material-symbols-outlined">
                                    view_in_ar
                                </i>
                                <p>Virtual Reality</p>
                            </button>

                            <button class="col s12 transparente"><i class="material-symbols-outlined">
                                    format_textdirection_r_to_l
                                </i>
                                <p>RTL</p>
                            </button>
                        </div>
                    </div>

                    <div class="col s12 documentation">
                        <div class="button-documentation">
                            <button class="#f50057 pink accent-3 col s12">
                                <p class="col s12">FREE DONWLOAD</p>
                            </button>

                            <button class="#f50057 pink accent-3 col s12">
                                <p class="col s12">VIEW DOCUMENTATION</p>
                            </button>

                            <button class="col s12">
                                <p class="col s12">UPGRADE TO PRO</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ul>
</div>
