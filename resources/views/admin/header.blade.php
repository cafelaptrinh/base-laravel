<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="index.html">
                <img class="img-fluid" src="{{asset('admin/png/logo.png')}}" alt="Theme-Logo" />
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="javascript:void(0)">
                <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid d-block">
            <ul class="nav-left">
                <li class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-prepend search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Enter Keyword">
                            <span class="input-group-append search-btn">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()"
                        class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
                        <i class="full-screen feather icon-maximize"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-bell"></i>
                            @if($countNotify=Auth::user()->unreadNotifications->count()>0)
                            <span class="badge bg-c-red">{{$countNotify}}</span>
                            @endif
                        </div>
                        <ul class="show-notification notification-view dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Thông Báo</h6>
                                <hr>
                                {{-- <label class="label label-danger">New</label> --}}
                            </li>
                            @forelse(Auth::user()->notifications as $notification)
                            <li class="@if($notification->read_at==null){{'active'}}@endif">
                                @if($notification->type=='App\Notifications\UserRegister')
                                <a class="media d-flex" href="{{route('profile',$notification->data['username'])}}">
                                    <img class="img-radius" src="{{$notification->data['avatar']}}"
                                        alt="">
                                    <div class="media-body">
                                        <h5 class="notification-user">Thành Viên Mới</h5>
                                        <p class="notification-msg">{{$notification->data['name']}} vừa đăng ký tài khoản !</p>
                                        <span class="notification-time">{{$notification->created_at->diffForHumans()}}</span>
                                    </div>
                                </a>
                                @endif
                            </li>
                            @empty
                            <li class="text-center">Không có thông báo nào !</li>
                            @endforelse
                        </ul>
                    </div>
                </li>
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-message-square"></i>
                            <span class="badge bg-c-green">3</span>
                        </div>
                    </div>
                </li>
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{Auth::user()->avatar}}" class="img-radius" style="width: 50px;height:50px" alt="User-Profile-Image">
                            <span>{{Auth::user()->name}}</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu"
                            data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <a href="#!">
                                    <i class="feather icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="email-inbox.html">
                                    <i class="feather icon-mail"></i> My Messages
                                </a>
                            </li>
                            <li>
                                <a href="auth-lock-screen.html">
                                    <i class="feather icon-lock"></i> Lock Screen
                                </a>
                            </li>
                            <li>
                                <a href="{{cproute('logout')}}">
                                    <i class="feather icon-log-out"></i> Đăng Xuất
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
    <div class="had-container">
        <div class="p-fixed users-main">
            <div class="user-box">
                <div class="chat-search-box">
                    <a class="back_friendlist">
                        <i class="feather icon-x"></i>
                    </a>
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" id="search-friends" name="footer-email" class="form-control"
                                placeholder="Search Friend">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i
                                        class="feather icon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-friend-list">
                    <div class="media userlist-box waves-effect waves-light" data-id="1"
                        data-status="online" data-username="Josephin Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius img-radius" src="jpg/avatar-3.jpg"
                                alt="Generic placeholder image ">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="chat-header">Josephin Doe</div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="2"
                        data-status="online" data-username="Lary Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="jpg/avatar-2.jpg"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Lary Doe</div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="3"
                        data-status="online" data-username="Alice">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="jpg/avatar-4.jpg"
                                alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Alice</div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="4"
                        data-status="offline" data-username="Alia">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="jpg/avatar-3.jpg"
                                alt="Generic placeholder image">
                            <div class="live-status bg-default"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min
                                    ago</small></div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="5"
                        data-status="offline" data-username="Suzen">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="jpg/avatar-2.jpg"
                                alt="Generic placeholder image">
                            <div class="live-status bg-default"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min
                                    ago</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="showChat_inner">
    <div class="media chat-inner-header">
        <a class="back_chatBox">
            <i class="feather icon-x"></i> Josephin Doe
        </a>
    </div>
    <div class="main-friend-chat">
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-radius img-radius m-t-5" src="jpg/avatar-2.jpg"
                    alt="Generic placeholder image">
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?
                    </p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">Ohh! very nice</p>
                </div>
                <p class="chat-time">8:22 a.m.</p>
            </div>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-radius img-radius m-t-5" src="jpg/avatar-2.jpg"
                    alt="Generic placeholder image">
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">can you come with me?</p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
    </div>
    <div class="chat-reply-box">
        <div class="right-icon-control">
            <div class="input-group input-group-button">
                <input type="text" class="form-control" placeholder="Write hear . . ">
                <div class="input-group-append">
                    <button class="btn btn-primary waves-effect waves-light" type="button"><i
                            class="feather icon-message-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>