@if(!session('isLogin'))
				<a href="/home/login"><span class="nav-item admin">
				     <img src="{{asset('images/user.png')}}"/><span class="span-top">登&nbsp;陆</span>
				</span></a>
				@else
				<a href="/home/personal"><span class="nav-item admin">
				   {{session('uname')}}
				</span></a><a href="/home/outLogin"><span class="nav-item admin">退出</span></a>
				@endif