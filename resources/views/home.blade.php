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

                    <div class="container">
    <a href="store.php">
<div class="wrapper">
<div class="wrapper-content">
<div class="shadow"></div>
<div class="bread bread--heart">
<div class="bread-upper"></div>
<div class="bread-bubbles bread-bubbles--1"></div>
<div class="bread-bubbles bread-bubbles--2"></div>
<div class="bread-bubbles bread-bubbles--3"></div>
<div class="bread-pic bread-pic--left">
<div class="bread-pic-heart"></div>
</div>
<div class="bread-pic bread-pic--right">
<div class="bread-pic-heart"></div>
</div>
</div>
<div class="bread bread--ball">
<div class="bread-upper"></div>
<div class="bread-pic-ball">
<div class="bread-pic-ball-inner"></div>
</div>
<div class="bread-bubbles"></div>
</div>
<div class="toaster">
<div class="toaster-body">
<div class="toaster-body-main"></div>
<div class="toaster-switch">
<div class="toaster-switch-hole"></div>
<div class="toaster-switch-handler"></div>
</div>
<div class="toaster-face">
<div class="toaster-face-happy">
<div class="toaster-eyes-happy toaster-eyes-happy--right"></div>
<div class="toaster-eyes-happy toaster-eyes-happy--left"></div>
<div class="toaster-mouth-happy">
<div class="toaster-mouth-happy-main">
<div class="toaster-mouth-happy-teeth"></div>
</div>
</div>
</div>
<div class="toaster-face-tense">
<div class="toaster-eyes-tense-wr">
<div class="toaster-eyes-tense toaster-eyes-tense--right"></div>
<div class="toaster-eyes-tense toaster-eyes-tense--left"></div>
</div>
<div class="toaster-mouth-tense"></div>
</div>
<div class="toaster-face-blush"></div>
</div>
</div>
<div class="toaster-bottom">
<div class="toaster-line"></div>
<div class="toaster-legs"></div>
</div>
</div>
</div>
</div>
</a>

</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
