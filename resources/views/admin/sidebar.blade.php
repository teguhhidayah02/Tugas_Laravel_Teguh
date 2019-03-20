<<<<<<< HEAD
<ul class="sidebar navbar-nav">
=======
  <ul class="sidebar navbar-nav">
>>>>>>> Eps.19
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        @if(Auth::user()->akses == 'admin')
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.user')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
          </a>
        </li>
        @endif
<<<<<<< HEAD
   		
 </ul>

=======
        
 </ul>
>>>>>>> Eps.19
