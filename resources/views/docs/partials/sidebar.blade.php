<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <div class="logo-icon-container">
                        <?php $admin_logo_img = Admin::setting('admin.icon_image', ''); ?>
                        @if($admin_logo_img == '')
                            <img src="{{ admin_asset('images/logo-icon-light.png') }}" alt="Logo Icon">
                        @else
                            <img src="{{ Admin::image($admin_logo_img) }}" alt="Logo Icon">
                        @endif
                    </div>
                    <div class="title">{{ Admin::setting('admin.title', 'ADMIN PANEL') }}</div>
                </a>
            </div><!-- .navbar-header -->
        </div>
        {!! menu('admin', 'admin_menu') !!}
    </nav>
</div>
