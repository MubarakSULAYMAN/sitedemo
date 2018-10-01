<nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark topnav" role="navigation">

    <div class="container-fluid">

        <!-- Left Side Of Navbar -->

        <div class="navbar-nav mr-auto">

            <a class="navbar-brand" href="{{ url('/') }}">

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto my-2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                    <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                    <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                    <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                    <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                    <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                </svg>

                <!-- {{ config('app.name', 'Sitedemo') }} -->

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-3">
                
                    <li class="nav-item">
                        <span class="{{Request::is('explore') ? 'active' : ''}}"> <a class="nav-link" href="/explore"> Explore </a> </span>
                    </li>
                
                    <li class="nav-item">
                        <span class="{{Request::is('arrivals') ? 'active' : ''}}"> <a class="nav-link" href="/arrivals"> New Arrivals </a> </span>
                    </li>
                
                    <li class="nav-item">
                        <span class="{{Request::is('customize') ? 'active' : ''}}"> <a class="nav-link" href="/customize"> Customize </a> </span>
                    </li>
                
                    <li class="nav-item">
                        <span class="{{Request::is('contact') ? 'active' : ''}}"> <a class="nav-link" href="/contact"> Contact </a> </span>
                    </li>
                
                </ul>
            </div>

        </div>

        <div class="collapse navbar-collapse" id="status">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"> Check In </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"> Get Started </a>
                    </li>

                @else

                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Welcome here {{ Auth::user()->firstname . " (" . Auth::user()->username . ")" }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                Checkout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>

                    </li>

                @endguest
                
            </ul>

        </div>

    </div>

</nav>

    <!-- Yet to be resolved, time of host location -->
    <!-- <div class="col-sm-4">
        <div class="support-hour text-right">
            <script type="text/javascript">
                jQuery(function($) {

                    $('.time').each(function() {

                        var myUtc = $(this).data('utc');
                        var myUtcOffset =$(this).data('utc-offset');

                        $(this).jclock({
                            format: '%I:%M:%S %p',
                            utc: myUtc ,
                            utcOffset: myUtcOffset
                        })

                    })
                });
            </script>

            <p> <strong> Support <span class="label label-danger"> Offline </span> </strong> : Mon - Fri / 10am - 6pm (GMT +6)</p ><strong> Your Time: </strong> <span class="time" data-utc="false" currenttime="1529555358711"> 05:29:18 am </span> <strong >Our Time: </strong> <span class="time" data-utc="true" data-utc-offset="+6" currenttime="1529573358569"> 10:29:18 am </span>
        
        </div>
    </div> -->

<div class="row justify-content-center mt-2" id="navinfo">

    <div class="col-6">
        @include('inc.localtime')
    </div>

    <div class="col-6">
        <p> <strong> We are opened and available </strong> between 10:00 and 18:00 (GMT +1) from Monday through Friday. </p>
    </div>
    
</div>