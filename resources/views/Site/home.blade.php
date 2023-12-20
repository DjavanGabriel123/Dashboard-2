@extends('Site.layout')

@section('tittle, Página Home')

@section('content')

    <div class="row">
        <div class="col s8 l1" id="mobile-menu">
            <div class="col s8 l2 m2 menu-lateral" id="menu-lateral-mobile">

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

        <div class="col s12 m10 l9 xl10 offset-m2 offset-l2 offset-xl2 container-dados">

            <p>&nbsp;</p>

            <div class="col m3 s12">
                <div class="card">
                    <div class="z-depth-2 card-image color-1">
                        <i class="white-text fa-solid fa-money-bill"></i>
                    </div>

                    <div class="card-content">
                        <div class="col s12">
                            <p class="title right grey-text day">Today's Money</p>
                        </div>

                        <div class="col s12">
                            <p class="right value">$53k</p>
                        </div>

                        <div class="border"></div>

                        <div class="col s12 text-today">
                            <p class="black-text day"><span class="green-text porcentgem">+55%</span>than lask week</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col m3 s12">
                <div class="card">
                    <div class="z-depth-2 card-image color-2">
                        <i class="white-text fa-solid fa-user"></i>
                    </div>

                    <div class="card-content">
                        <div class="col s12">
                            <p class="title right grey-text day">Today's Users</p>
                        </div>

                        <div class="col s12">
                            <p class="right value">2,300</p>
                        </div>

                        <div class="border"></div>

                        <div class="col s12 text-today">
                            <p class="black-text day"><span class="green-text porcentgem">+3%</span>than lask month</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col m3 s12">
                <div class="card">
                    <div class="z-depth-2 card-image color-3">
                        <i class="white-text fa-solid fa-user"></i>
                    </div>

                    <div class="card-content">
                        <div class="col s12">
                            <p class="title right grey-text day">New Clients</p>
                        </div>

                        <div class="col s12">
                            <p class="right value">3,462</p>
                        </div>

                        <div class="border"></div>

                        <div class="col s12 text-today">
                            <p class="black-text day"><span class="red-text porcentgem">-2%</span>than yesterday</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col m3 s12">
                <div class="card">
                    <div class="z-depth-2 card-image color-4">
                        <i class="white-text fa-solid fa-money-bill"></i>
                    </div>

                    <div class="card-content">
                        <div class="col s12">
                            <p class="title right grey-text day">Sales</p>
                        </div>

                        <div class="col s12">
                            <p class="right value">$103,430</p>
                        </div>

                        <div class="border"></div>

                        <div class="col s12 text-today">
                            <p class="black-text day"><span class="green-text porcentgem">+5%</span>than yesterday</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <section class="col s12 espaço-grafico">

                    <div class="col m4 s12 container-grafico">
                        <div class="card-medio-1 z-depth-2">
                            <div class="card-grafico">
                                <img class="image-1" src="{{ asset('Images/Graficos/grafico-1.png') }}"
                                    class="responseive-img">
                                <h6 class="black-text font-weight">Website Views</h6>
                                <p class="grey-text">Last Campaing Perfomace</p>

                                <div class="border-2"></div>

                                <p class="update grey-text"><i class="relogio fa-regular fa-clock grey-text"></i> campaign
                                    sent 2 days ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="col m4 s12  container-grafico">
                        <div class="card-medio-2 z-depth-2">
                            <div class="card-grafico">
                                <img class="image-2" src="{{ asset('Images/Graficos/grafico-2.png') }}"
                                    class="responseive-img #4caf50 green">
                                <h6 class="black-text font-weight">Dayle Sales</h6>
                                <p class="grey-text"><b>(+15)</b> increase in otday sales.</p>

                                <div class="border-2"></div>

                                <p class="update grey-text"><i class="relogio fa-regular fa-clock grey-text"></i> uptade 4
                                    min ago</p>
                            </div>
                        </div>
                    </div>

                    <div class="col m4 s12  container-grafico">
                        <div class="card-medio-2 z-depth-2">
                            <div class="card-grafico">
                                <img class="image-3" src="{{ asset('Images/Graficos/grafico-3.png') }}"
                                    class="responseive-img #000000 black">
                                <h6 class="black-text font-weight">Completed Tasks</h6>
                                <p class="grey-text">Last Campaing Perfomace</p>

                                <div class="border-2"></div>

                                <p class="update grey-text"><i class="relogio fa-regular fa-clock grey-text"></i> just
                                    updated</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col s12 tabela-projeto">
                <div class="col s12 m8  projeto">

                    <div class="col s12">

                        <div class="col s2 projects">
                            <h6>Projects</h6>
                        </div>

                        <div class="col s12 check">
                            <i class="fa fa-ellipsis-v right menu" aria-hidden="true"></i>
                            <span class=""><i class="fa-solid fa-check icon-check"></i>
                                <p class="">30 done</p>
                                <p class="month">this month</p>
                            </span>
                        </div>
                        <div class="row scroll-table">
                            <table class="table-project" cellspacing="2">
                                <thead>
                                    <tr>
                                        <td colspan="2" class="title title-company">companes</td>
                                        <td class="title">members</td>
                                        <td class="title">budget</td>
                                        <td class="title">completion</td>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="responsive-img"><img src="{{ asset('Images/icons/icon-1.svg') }}"
                                                class="icon-1">
                                        </td>
                                        <td class="companes">Material XD Version</td>
                                        <td class="display-mobile"><img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-1.jpg') }}"
                                                class="circle responsive-img image-circle"> <img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-2.jpg') }}"
                                                class="circle responsive-img image-circle-2"> <img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-3.jpg') }}"
                                                class="circle responsive-img image-circle-3">
                                            <img src="{{ asset('Images/imagens-circulares/imagem-circular-4.jpg') }}"
                                                class="circle responsive-img image-circle-4">
                                        </td>
                                        <td>$14,000</td>
                                        <td><span class="text-black">60%</span><br><progress value="60"
                                                max="100"></progress></td>
                                    </tr>

                                    <tr>
                                        <td class="responsive-img"><img src="{{ asset('Images/icons/icon-3.svg') }}"
                                                class="icon-1">
                                        </td>
                                        <td class="companes">Add Progress Track</td>
                                        <td class="display-mobile"><img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-1.jpg') }}"
                                                class="circle responsive-img image-circle"> <img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-2.jpg') }}"
                                                class="circle responsive-img image-circle-2">
                                        </td>
                                        <td>$3,000</td>
                                        <td><span class="text-black">10%</span><br><progress value="10"
                                                max="100"></progress></td>
                                    </tr>

                                    <tr>
                                        <td class="responsive-img"><img src="{{ asset('Images/icons/icon-2.svg') }}"
                                                class="icon-1">
                                        </td>
                                        <td class="companes">Fix Platform Errors</td>
                                        <td class="display-mobile"><img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-1.jpg') }}"
                                                class="circle responsive-img image-circle"> <img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-2.jpg') }}"
                                                class="circle responsive-img image-circle-2">
                                        </td>
                                        <td>Not set</td>
                                        <td><span class="text-black">100%</span><br><meter value="100"
                                                max="100"></meter></td>
                                    </tr>

                                    <tr>
                                        <td class="responsive-img"><img src="{{ asset('Images/icons/icon-4.svg') }}"
                                                class="icon-1">
                                        </td>
                                        <td class="companes">Launch our Mobile App</td>
                                        <td class="display-mobile"><img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-1.jpg') }}"
                                                class="circle responsive-img image-circle"> <img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-2.jpg') }}"
                                                class="circle responsive-img image-circle-2"> <img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-3.jpg') }}"
                                                class="circle responsive-img image-circle-3">
                                            <img src="{{ asset('Images/imagens-circulares/imagem-circular-4.jpg') }}"
                                                class="circle responsive-img image-circle-4">
                                        </td>
                                        <td>$20,500</td>
                                        <td><span class="text-black">100%</span><br><meter value="100"
                                                max="100"></meter></td>
                                    </tr>

                                    <tr>
                                        <td class="responsive-img"><img src="{{ asset('Images/icons/icon-4.svg') }}"
                                                class="icon-1">
                                        </td>
                                        <td class="companes">Launch our Mobile App</td>
                                        <td class="display-mobile"><img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-1.jpg') }}"
                                                class="circle responsive-img image-circle"> <img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-2.jpg') }}"
                                                class="circle responsive-img image-circle-2"> <img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-3.jpg') }}"
                                                class="circle responsive-img image-circle-3">
                                            <img src="{{ asset('Images/imagens-circulares/imagem-circular-4.jpg') }}"
                                                class="circle responsive-img image-circle-4">
                                        </td>
                                        <td>$20,500</td>
                                        <td><span class="text-black">100%</span><br><meter value="100"
                                                max="100"></meter></td>
                                    </tr>

                                    <tr>
                                        <td class="responsive-img"><img src="{{ asset('Images/icons/icon-5.svg') }}"
                                                class="icon-1">
                                        </td>
                                        <td class="companes">Add the New Pricing Page</td>
                                        <td><img src="{{ asset('Images/imagens-circulares/imagem-circular-1.jpg') }}"
                                                class="circle responsive-img image-circle">
                                        </td>
                                        <td>$500</td>
                                        <td><span class="text-black">25%</span><br><progress value="25"
                                                max="100"></progress></td>
                                    </tr>

                                    <tr>
                                        <td class="responsive-img"><img src="{{ asset('Images/icons/icon-6.svg') }}"
                                                class="icon-1">
                                        </td>
                                        <td class="companes">Redesign New Online Shop</td>
                                        <td class="display-mobile"><img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-1.jpg') }}"
                                                class="circle responsive-img image-circle">
                                            <img src="{{ asset('Images/imagens-circulares/imagem-circular-2.jpg') }}"
                                                class="circle responsive-img image-circle-2">
                                        </td>
                                        <td>$2,932</td>
                                        <td><span class="text-black">87%</span><br><progress value="87"
                                                max="100"></progress></td>
                                    </tr>

                                    <tr class="last">
                                        <td class="responsive-img"><img src="{{ asset('Images/icons/icon-6.svg') }}"
                                                class="icon-1">
                                        </td>
                                        <td class="companes">Redesign New Online Shop</td>
                                        <td class="display-mobile"><img
                                                src="{{ asset('Images/imagens-circulares/imagem-circular-1.jpg') }}"
                                                class="circle responsive-img image-circle">
                                            <img src="{{ asset('Images/imagens-circulares/imagem-circular-2.jpg') }}"
                                                class="circle responsive-img image-circle-2">
                                        </td>
                                        <td>$2,000</td>
                                        <td><span class="text-black">40%</span><br><progress value="40"
                                                max="100"></progress></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col s12 orders">
                    <div class="col s12 template-lateral">
                        <h6>Orders overview</h6>
                        <p><i class="fa-solid fa-arrow-up arrow"></i><b>24%</b> this month</p>
                    </div>

                    <div class="col s1">
                        <div class="col s1 notifation">
                            <i class="fa-regular fa-bell bell"></i>

                            <div class="border-4"></div>

                            <i class="material-icons text-danger text-gradient danger">code</i>

                            <div class="border-4"></div>

                            <i class="fa-solid fa-cart-shopping cart"></i>

                            <div class="border-4"></div>

                            <i class="fa-regular fa-credit-card credit"></i>

                            <div class="border-4"></div>

                            <i class="material-symbols-outlined key">key</i>

                            <div class="border-4"></div>

                            <i class="material-symbols-outlined payments">payments</i>
                        </div>
                    </div>

                    <div class="col s11 text">
                        <div class="col s12 over-view">
                            <h6>$2400, Design changes </h6>
                            <p>22 DEC 7:20 PM</p>
                        </div>

                        <div class="col s12 over-view">
                            <h6>$2400, Design changes </h6>
                            <p>22 DEC 7:20 PM</p>
                        </div>

                        <div class="col s12 over-view">
                            <h6>$2400, Design changes </h6>
                            <p>22 DEC 7:20 PM</p>
                        </div>

                        <div class="col s12 over-view">
                            <h6>$2400, Design changes </h6>
                            <p>22 DEC 7:20 PM</p>
                        </div>

                        <div class="col s12 over-view">
                            <h6>$2400, Design changes </h6>
                            <p>22 DEC 7:20 PM</p>
                        </div>

                        <div class="col s12 over-view">
                            <h6>$2400, Design changes </h6>
                            <p>22 DEC 7:20 PM</p>
                        </div>
                    </div>
                </div>
            </div>


            <footer>
                <div class="col s12 footer">
                    <div class="col s12 text-footer left">
                        <span class="col s12">© 2023, made with<p><i class="fa-solid fa-heart"></i></p>by<p class="texto-grosso-1">Creative Tim
                            </p>&<p  class="texto-grosso-2">UPDIVISION</p> for a better web.
                        </span>

                        <ul class="right">
                            <li>Creative Tim</li>
                            <li>UPDIVISION</li>
                            <li>About Us</li>
                            <li>Blog</li>
                            <li>License</li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>

    @endsection
