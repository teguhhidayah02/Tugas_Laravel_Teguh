<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="{{route('admin.home')}}">
        <img src="{{url('images/logo.png')}}">
        Tokap Admin</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
<<<<<<< HEAD
     <div class="ml-auto"></div>
=======
      <div class="ml-auto"></div>
>>>>>>> eps.7

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            {{Auth::user()->name}}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
<<<<<<< HEAD
            <a class="dropdown-item" href="#">Settings</a>
=======
            <a class="dropdown-item" href="{{ route('admin.user.setting')}}">Settings</a>
>>>>>>> eps.7
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

<<<<<<< HEAD
 @push('modal')
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
@push('modal')
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> eps.7
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">Logout</a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
<<<<<<< HEAD
                  {{ csrf_field() }}
=======
               {{ csrf_field() }}
>>>>>>> eps.7
              </form>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD

    @endpush

=======
@endpush
>>>>>>> eps.7
