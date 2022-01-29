<!-- jumbotron -->
<div class="jumbotron-1">
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            <button class="btn btn-rounded btn-primary btn-outline">Message</button>
            <button class="btn btn-rounded btn-primary btn-outline">Follow</button>
            <h1 class="display-3">{{ $heading }}</h1>
            <ol class="breadcrumb icon-home icon-angle-right no-bg">
                @if (!empty($breadcumb))
                @foreach ($breadcumb as $item)
                <li>
                    <a href="{{ url('admin') }}">{{ $item['home'] }}</a>
                </li>
                <li class="active">
                    {{ $item['page'] }}
                </li>
                @endforeach 
                @endif
            </ol>
            <button type="button" class="btn btn-raised btn-info bmd-btn-fab" data-toggle="dropdown">
                <i class="fa fa-ellipsis-v"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right from-right">
                <a class="dropdown-item" href="#">
                    <i class="material-icons icon">email</i>
                    <span class="title">Inbox</span>
                    <span class="tag tag-pill tag-raised tag-danger tag-xs">New</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="material-icons icon">grade</i>
                    <span class="title">Messages</span>
                    <span class="tag tag-outline-primary tag-rounded tag-xs">5</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="material-icons icon">settings</i>
                    <span class="title">Profile</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="material-icons icon">alarm</i>
                    <span class="title">Lock screen</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="material-icons icon">power_settings_new</i>
                    <span class="title">Logout</span>
                </a>
            </div>
        </div>
    </div>
</div>
