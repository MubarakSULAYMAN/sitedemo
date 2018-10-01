<!-- <div class="container mt-2">
    <div class="row justify-content-center"> -->
        <div class="col">
            <script type="text/javascript">
                setInterval(
                    function()
                    {
                        var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
                        var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
                        var newDate = new Date();
                        newDate.setDate(newDate.getDate());
                        $('#date').html(dayNames[newDate.getDay()] + ", " + newDate.getDate() + ' of ' + monthNames[newDate.getMonth()] + ', ' + newDate.getFullYear());
                        var currentTime = new Date ( );    
                        var currentHours = currentTime.getHours ( );   
                        var currentMinutes = currentTime.getMinutes ( );   
                        var currentSeconds = currentTime.getSeconds ( );
                        var currentMilliseconds = currentTime.getMilliseconds ( );
                        currentHours = ( currentHours < 10 ? "0" : "" ) + currentHours;   
                        currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
                        currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
                        // currentMilliseconds = ( currentMilliseconds < 10 ? "0" : "" ) + currentMilliseconds;    
                        // var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + ":" + currentMilliseconds;
                        var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds;
                        document.getElementById("timer").innerHTML = currentTimeString;
                    }
                , 1);

                var today = new Date();
                var hourNow = today.getHours();
                var greeting;

                if (hourNow == 1 || hourNow < 12)
                {
                    greeting = 'Good Morning <i class="fas fa-coffee dawn"></i> and Welcome. ';
                }
                else if (hourNow == 12 || hourNow < 18)
                {
                    greeting = 'Good Afternoon <i class="fas fa-sun noon"></i> and Welcome. ';
                }
                else if (hourNow == 18 || hourNow < 21)
                {
                    greeting = 'Good Evening <i class="fas fa-moon dusk"></i> and Welcome. ';
                }
                else
                {
                    greeting = 'Welcome! ';
                }
                document.write(greeting);
            </script>
            <strong> It is : </strong> <span id="timer"> </span> <strong> of </strong> <span id="date"> </span> <strong> of your local time. </strong> 
        </div>
    <!-- </div>
</div> -->