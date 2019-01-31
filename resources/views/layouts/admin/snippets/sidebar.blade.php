<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name">Shiva Stha</div>
			<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="divider"></div>
	<ul class="nav menu">
		<li class=""><a href="{{route('admin.categories')}}"><em class="fa fa-list-alt">&nbsp;</em> Category</a></li>
		<li class="active"><a href="{{route('admin.posts')}}"><i class="fa fa-file-text"></i> Posts</a></li>
		<li><a href="{{route('admin.users')}}"><i class="fa fa-user-o" aria-hidden="true"></i> Users</a></li>
		<li><a href="{{route('user.view_profile', ['user'=>$user->id])}}"><i class="fa fa-cog" aria-hidden="true"></i> Profile</a></li>
		<li>
			<a href="{{ route('logout') }}"
			   onclick="event.preventDefault();
			                document.getElementById('logout-form').submit();">
			    <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			    @csrf
			</form>
		</li>
	</ul>
</div><!--/.sidebar-->