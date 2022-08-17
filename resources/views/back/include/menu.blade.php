<!--**********************************
            Header start
        ***********************************-->
<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-left">
            <div class="input-group icons">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                </div>
                <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                <div class="drop-down animated flipInX d-md-none">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="header-right">

                <li class="icons dropdown">
                    <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                        <span class="activity active"></span>
                        <img src="{{asset('back')}}/images/user/user.jpg" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                               <li><a href="{{route('cikis')}}"><i class="icon-key"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--**********************************
    Header end ti-comment-altaaa
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->


<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label"></li>
            <li>
                <a href="{{route('back.home')}}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-label">Statikler</li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-graph menu-icon"></i><span class="nav-text">Sponsor</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('back.sponsorlar')}}">Tüm Sponsorlar</a></li>
                    <li><a href="{{route('back.create.sponsor')}}">Sponsor Ekle</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('back.category')}}" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Kategoriler</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Bloglar</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('back.blogs')}}">Tüm Bloglar</a></li>
                    <li><a href="{{route('back.blog')}}">Blog Ekle</a></li>
                    <li><a href="{{route('back.blog.trashed')}}">Silinen Bloglar</a></li>
                </ul>
            </li>


            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-play"></i><span class="nav-text">Eğitim Videoları</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('back.videolar')}}">Ekle</a></li>
                    <li><a href="{{route('back.adds.vid')}}">Eklenenler</a></li>
                </ul>
            </li>


            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-note menu-icon"></i> <span class="nav-text">Prodüksiyon</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('back.productions')}}">Tüm Prodüksiyonlar</a></li>
                    <li><a href="{{route('back.production')}}">Prodüksiyon ekle</a></li>
                </ul>
            </li>




            <li>
                <a href="{{route('back.iletisim')}}" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i><span class="nav-text">İletişim</span>
                </a>
            </li>




            <li class="nav-label">Yetki işlemleri</li>
             <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Admin</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('back.store.user')}}">Admin ekle</a></li>
                    <li><a href="{{route('back.users')}}">Adminler</a></li>

                </li>
            </li>
        </ul>
    </div>
</div>



<!--**********************************
    Sidebar end
***********************************-->

