<header id="header" class="fixed-top">
<div class="container d-flex">

    <div class="logo mr-auto">
    <h1 class="text-light"><a href="{{ url('')}}"><span>MAGANG PTPN</span>-IV</a></h1>
    </div>

    <nav class="nav-menu d-none d-lg-block">
    <ul>
        <li class="active"><a href="{{ url('') }}">Home</a></li>
        <li><a href="{{ url('')}}#services">Tutorials</a></li>
        <li><a href="{{ url('') }}#blog">Information</a></li>
        <li><a href="{{ url('') }}#contact">Contact</a></li>
        <li><a href="{{ url('')}}#portfolio">Gallery</a></li>
        <li><a href="{{ url('pendaftaran')}}">Pendaftaran</a></li>
        <li><a href="{{ url('data-lamaran')}}">Lamaran</a></li>
        <?php if(Auth::user() == ''){ ?>
            <li><a href="<?= url('login')?>">Login</a></li>
          <?php }else{ ?>
            <li class="drop-down"><a href="#">{{ Auth::user()->name}}</a>
              <ul>
                <li><a href="<?= url('profile')?>">Profile</a></li>
                <li><a href="<?= url('logout')?>">Logout</a></li>
              </ul>
            </li>
          <?php }?>
    </ul>
    </nav><!-- .nav-menu -->

</div>
</header><!-- End Header -->