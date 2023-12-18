@extends('base')

@section('content')
<div class="text-white">
    <header class="p-4" style="
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    z-index: 1;
    position: fixed;
    width: 100%;
    background-color: #2c3e50; /* Dark background color */
    color: #ecf0f1; /* Text color */
    background-image: url('path/to/your-background-image.jpg'); /* Add a textured background image */
    background-size: cover;
    background-blend-mode: overlay; /* Adjust overlay effect for better visibility */
">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="">
                <h1 style="font-family: 'Pacifico', cursive; text-shadow: 0 0 10px white;">
                    <i class="fas fa-music"></i> Addon Bazzar
                </h1>
            </div>
            <div class="mt-1">
                <a class="btn text-white" href="/dashboard">
                    <i class="fas fa-headphones"></i> Plugins
                </a>
                @role('user')
                <a class="btn text-white" href="/accepted-requests">
                    <i class="fas fa-headphones"></i> Your Plugin
                </a>
                @endrole
                @role('admin')
                <a class="btn text-white" href="/logs">
                    <i class="fas fa-file-alt"></i> Logs
                </a>
                <a class="btn text-white" href="/requests">
                    <i class="fas fa-file-alt"></i> Requests
                </a>
                @endrole

                <button class="text-white rounded-lg pe-4 ps-4 text-danger btn" style="background-color: transparent; font-size: 20px;" id="logoutButton" data-toggle="modal" data-target="#confirmLogoutModal">
                    <i class="fas fa-sign-out-alt"></i> {{ Auth::user()->name }}
                </button>
            </div>
        </div>
    </div>
</header>

    <div>
        <div class="p-5">
            <div style="margin-top: -30px; margin-bottom: 420px;">

                <div class="animation-container">
                    <div class="message-box">
                        <h1>Thank you for downloading!</h1>
                        <!-- Additional content or styling can be added here -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Confirm Logout -->
<div class="modal fade" style="margin-top: 300px" id="confirmLogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog text-white" role="document">
      <div class="modal-content" style="background-color: rgb(15, 15, 15)">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Are you sure you want to logout?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Confirm Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <style>
    @keyframes slideIn {
        from {
            transform: translateY(-100%);
        }
        to {
            transform: translateY(0);
        }
    }

    .animation-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .message-box {
        padding: 20px;
        text-align: center;

        border-radius: 8px;
        animation: slideIn 5s ease-out;
    }
</style>
<script>
    // Add the 'animated-page' class to the parent container when the page is visited
    document.addEventListener('DOMContentLoaded', function() {
        const pageContainer = document.querySelector('.animated-page');
        pageContainer.classList.add('animated-page');
    });
</script>

@endsection
@auth

@endauth

