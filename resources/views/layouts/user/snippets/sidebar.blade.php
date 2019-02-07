<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="{{asset('uploads/users/'.auth()->user()->avatar)}}" class="img-responsive" alt="">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">{{auth()->user()->name}}</div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<ul class="nav menu">
		<li class="{{Request::is('users/dashboard') ? 'active' : '' }}"><a href="/users/dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
		<li class="{{Request::is('users/posts') ? 'active' : '' }}"><a href="/users/posts"><i class="fa fa-list-alt" aria-hidden="true"></i> Posts</a></li>
		<li class="{{Request::is('users/profile') ? 'active' : '' }}"><a href="/users/profile"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a></li>
		<li>
			<a class="dropdown-item" href="{{ route('logout') }}"
			   onclick="event.preventDefault();
			                 document.getElementById('logout-form').submit();">
			    <em class="fa fa-power-off">&nbsp;</em> {{ __('Logout') }}
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			    @csrf
			</form>
		</li>
	</ul>
</div><!--/.sidebar-->