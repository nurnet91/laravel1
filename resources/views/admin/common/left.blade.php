<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ URL::asset(auth()->user()->image) }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>@if(!empty(auth()->user()->fio)) {{auth()->user()->fio}} @else {{auth()->user()->login}} @endif</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <form action="/search" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..." value="{{Request::input('q')}}">
            <span class="input-group-btn">
              <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <ul class="sidebar-menu">
      <li class="header">Menyular</li>
      <li class="@if(Request::is('numbers*')) active @endif">
        <a href="/numbers"><i class="fa fa-users"></i> <span>Gazeta sonlari</span></a>
      </li>
      <li class="@if(Request::is('categories*')) active @endif">
        <a href="/categories"><i class="fa fa-users"></i> <span>Kategoriyalar</span></a>
      </li>
      <li class="@if(Request::is('rukns*')) active @endif">
        <a href="/rukns"><i class="fa fa-users"></i> <span>Ruknlar</span></a>
      </li>
      <li class="@if(Request::is('reports*')) active @endif">
        <a href="/reports"><i class="fa fa-users"></i> <span>Xabarlar</span></a>
      </li>
      <li class="treeview @if(Request::is('galleries*') OR Request::is('fotos*')) active @endif">
        <a href="#"><i class="fa fa-pie-chart"></i><span>Galeriyalar</span><i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="@if(Request::is('galleries*')) active @endif">
            <a href="/galleries"><i class="fa fa-circle-o"></i> Galeriya</a>
          </li>
          <li class="@if(Request::is('fotos*')) active @endif">
            <a href="/fotos"><i class="fa fa-circle-o"></i> Rasmlar</a>
          </li>
        </ul>
      </li>
      <li class="@if(Request::is('messages*')) active @endif">
        <a href="/messages">
          <i class="fa fa-users"></i>
          <span>Xatlar</span>
          @if(isset($count_message) AND $count_message > 0)
            <span class="label label-primary pull-right">{{ $count_message }}</span>
          @endif
        </a>
      </li>
      <li class="treeview @if(Request::is('pages*')) active @endif">
        <a href="#"><i class="fa fa-pie-chart"></i><span>Sahifalar</span><i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="@if(Request::is('pages/tahririyat')) active @endif">
            <a href="/pages/tahririyat">Tahririyat</a>
          </li>
          <li class="@if(Request::is('pages/gazeta')) active @endif">
            <a href="/pages/gazeta">Gazeta haqida</a>
          </li>
          <li class="@if(Request::is('pages/rahbariyat')) active @endif">
            <a href="/pages/rahbariyat">Rahbariyat</a>
          </li>
          <li class="@if(Request::is('pages/bulimlar')) active @endif">
            <a href="/pages/bulimlar">Bo&rsquo;limlar</a>
          </li>
          <li class="@if(Request::is('pages/obuna')) active @endif">
            <a href="/pages/obuna">Obuna</a>
          </li>
          <li class="@if(Request::is('pages/contact')) active @endif">
            <a href="/pages/contact">Aloqa</a>
          </li>
        </ul>
      </li>
      <li class="treeview @if(Request::is('banners*')) active @endif">
        <a href="#"><i class="fa fa-pie-chart"></i><span>Reklama bannerlari</span><i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="@if(Request::is('banners/banner1')) active @endif">
            <a href="/banners/banner1">Tepadagi</a>
          </li>
          <li class="@if(Request::is('banners/banner2')) active @endif">
            <a href="/banners/banner2">O&rsquo;ngdagi</a
          ></li>
          <li class="@if(Request::is('banners/banner3')) active @endif">
            <a href="/banners/banner3">Chapdagi</a>
          </li>
          <li class="@if(Request::is('banners/banner4')) active @endif">
            <a href="/banners/banner4">O&rsquo;rtadagi</a>
          </li>
        </ul>
      </li>
    </ul>
  </section>
</aside>