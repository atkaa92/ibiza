<div class="list-group siteBar">
    <a href="{{ url('/admin') }}" class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
    </a>

    <a href="#" class="list-group-item list-parent">
        <span class="fa fa-cubes" aria-hidden="true"></span> Rooms <i class="fa fa-angle-double-right pull-right"></i>
    </a>
    <div class="sub-menu-admin" style="display:none;">
        <a class="list-group-item" href="{{ url('/admin/new-room') }}">New Room</a>
        <a class="list-group-item" href="{{ url('/admin/rooms') }}">All Rooms</a>
    </div>

    <a href="#" class="list-group-item list-parent">
        <span class="fa fa-certificate" aria-hidden="true"></span> Features <i class="fa fa-angle-double-right pull-right"></i>
    </a>
    <div class="sub-menu-admin" style="display:none;">
        <a class="list-group-item" href="{{ url('/admin/new-feature') }}">New Feature</a>
        <a class="list-group-item" href="{{ url('/admin/features') }}">All Features</a>
    </div>

    <a href="{{ url('/admin/banners') }}" class="list-group-item">
        <span class="fa fa-picture-o" aria-hidden="true"></span> Gallery
    </a>

</div>