<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
  <div class="main-menu-content">
    {{-- @if(auth()->user()->type  != 'famous' || auth()->user()->famous == null) --}}
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item  ">
        <a href="{{ route('sliders.index') }}">
            <i class="fa fa-slideshare"></i>
            <span class="menu-title">القسم الرئيسي  </span></a>
       
    </li>
    <li class="nav-item  ">
      <a href="{{ route('about.index') }}">
          <i class="fa fa-slideshare"></i>
          <span class="menu-title">من نحن   </span></a>
     
     </li>
     <li class="nav-item  ">
      <a href="{{ route('whyus.index') }}">
          <i class="fa fa-slideshare"></i>
          <span class="menu-title">لماذا نحن   </span></a>
     </li>
     <li class="nav-item  ">
      <a href="{{ route('services.index') }}">
          <i class="fa fa-slideshare"></i>
          <span class="menu-title">خدماتنا    </span></a>
     </li>
     <li class="nav-item  ">
      <a href="{{ route('clients.index') }}">
          <i class="fa fa-slideshare"></i>
          <span class="menu-title">عملائنا    </span></a>
     </li>
     <li class="nav-item  ">
      <a href="{{ route('contacts.index') }}">
          <i class="fa fa-slideshare"></i>
          <span class="menu-title">طلبات التواصل    </span></a>
     </li>
     <li class="nav-item has-sub ">
      <a href="#">
          <i class="fa fa-user-circle"></i>
          <span class="menu-title">الاعدادات</span></a>
      <ul class="menu-content" style="">
          <li class="is-shown"><a class="menu-item" href="{{ route('get_setting') }}">البيانات الاساسية</a>
          </li>
          <li class="is-shown"><a class="menu-item" href="{{ route('social') }}">بيانات السوشل ميديا </a>
          </li>


      </ul>
  </li>
      
    </ul>
  </div>
</div>