<nav class="site-header sticky-top py-1 topnav">

    <div class="container">
        <div class="row">
            <div class="col-8 d-flex flex-column flex-md-row justify-content-between">
                <span class="{{Request::is('/') ? 'active' : ''}}">
                    <a class="py-2" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                        <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                        <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                        <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                        <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                        <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                        </svg>
                    </a>
                </span>
                <span class="{{Request::is('explore') ? 'active' : ''}}"> <a style="text-decoration: none;" class="py-2 d-none d-md-inline-block" href="/gallery"> Explore </a> </span>
                <span class="{{Request::is('arrivals') ? 'active' : ''}}"> <a class="py-2 d-none d-md-inline-block" href="/arrivals"> New Arrivals </a> </span>
                <span class="{{Request::is('customize') ? 'active' : ''}}"> <a class="py-2 d-none d-md-inline-block" href="/customize"> Customize </a> </span>
                <span class="{{Request::is('contact') ? 'active' : ''}}"> <a class="py-2 d-none d-md-inline-block" href="/contact"> Contact </a> </span>
                <span class="{{Request::is('login') ? 'active' : ''}}"> <a class="py-2 d-none d-md-inline-block" href="/login"> Login </a> </span>
                <span class="{{Request::is('signup') ? 'active' : ''}}"> <a class="py-2 d-none d-md-inline-block" href="/signup"> Signup </a> </span>
            </div>

            <div class="col-4 d-flex justify-content-end align-items-center">
            <span class="{{Request::is('signup') ? 'active' : ''}}">
                <a class="text-muted" href="/signup">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
                        <circle cx="10.5" cy="10.5" r="7.5">
                        </circle><line x1="21" y1="21" x2="15.8" y2="15.8">
                    </line>
                </svg>
                </a>
                </span>
                <a class="btn btn-sm btn-outline-secondary" href="#"> Sign up </a>
            </div>
        </div>
    </div>

    <!-- Yet to be resolved, for time of host location -->
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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
            </div>
            <div class="col-8">
                <p> <strong> We are opened and available </strong> between 10:00 and 18:00 (GMT +1) from Monday through Friday. </p>
            </div>
        </div>
    </div>

</nav>

@include('inc.localtime')
