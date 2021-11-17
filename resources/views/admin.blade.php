@extends('layouts.app')

@section('content')
<script>    /*
 *   this script is for manage the logout of timeout
 *   if user is inactive for 15 min
 *   he will be logout :
 *
 * */
var logout = 'Are you sure to logout?';
var timeout;
var url =  'home'; // route path;
document.onmousemove = function(){
    clearTimeout(timeout);
        timeout = setTimeout(function () {
            var confirmstatus = confirm(logout);
            if(confirmstatus === true) {
              window.location.href = "{{ route('logout') }}";
            } else {
              clearTimeout(timeout);
            }
        }, 60000*0.5);
    };
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection
