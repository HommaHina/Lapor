<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lapor Batola</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  @include('include.style')
</head>
<body>

  <div class="subnavbar">
    <div class="subnavbar-inner">
      <div class="container">
        <ul class="mainnav">
          <li><a href="{{ route('dashboard') }}"><i class="icon-home"></i><span>Home</span> </a> </li>
          <li><a href="{{ route('lapor.index') }}"><i class="icon-bar-chart"></i><span>Data Lapor</span> </a> </li>
          {{-- <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-bar-chart"></i><span>Survey Kepuasan Masyarakat</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url('skm/data/dpmptsp') ?>">DPMPTSP</a></li>
              <li><a href="<?php echo base_url('skm/data/mpp') ?>">MPP</a></li>
            </ul>
          </li> --}}
          <li>
            <form method="POST" action="{{ route('logout') }}" style="margin-top:10px;cursor: pointer;">
                @csrf

                <x-dropdown-link :href="route('logout')" style="text-decoration: none"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    <i class="icon-signout" style="font-size:22px;"></i>
                    <div style="font-weight:700;font-size:12px">Keluar</div>
                </x-dropdown-link>
            </form>
            {{-- <a href="{{ route('logout') }}"><i class="icon-signout"></i><span>Keluar</span> </a> --}}
         </li>
        </ul>
      </div>
      <!-- /container -->
    </div>
    <!-- /subnavbar-inner -->
  </div>
  <!-- /subnavbar -->
  <div class="main" style="min-height: 600px">
    <div class="main-inner">
      <div class="container">
        <div class="row">
          <div class="span12">
            @yield('contents')
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /main-inner -->
  </div>
  <!-- /main -->
  <!--<div class="footer">-->
  <!--  <div class="footer-inner">-->
  <!--    <div class="container">-->
  <!--      <div class="row">-->
  <!--        <div class="span12"> &copy; 2023 <a href="#">Diskominfo Kab. Barito Kuala</a></div>-->
          <!-- /span12 -->
  <!--      </div>-->
        <!-- /row -->
  <!--    </div>-->
      <!-- /container -->
  <!--  </div>-->
    <!-- /footer-inner -->
  <!--</div>-->
  <!-- /footer -->
<!-- Le javascript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
 @include('include.main')
</body>
</html>
