<x-app-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" id="reflink" value="{{Request::root().'/register/'.Auth::user()->username}}" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-default" onclick="copyLink()" type="button">COPY</button>
                    </span>
                </div><!-- /input-group -->   
            </div>
            @if(!$payments->isEmpty())
            <div class="col-lg-6 col-md-12">
                <div class="card">
                  <div class="card-header card-header-text card-header-success">
                    <div class="card-text">
                      <h4 class="card-title">Received Payments</h4>
                      <p class="card-category">Please approve only if you received payment.</p>
                    </div>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-hover">                      
                      <tbody>
                        @foreach($payments as $payment)
                        <form action="/approve" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="bid" value="{{$payment->id}}">
                            <tr>                        
                                <td>{{$payment->bank->name}}</td>
                                <td>{{$payment->user->username}}</td>
                                <td>P{{$payment->amount}}</td>
                                <td>
                                @if($payment->status == 101)
                                    <button type="submit" class="btn btn-success btn-sm btn-round" onclick="confirm('Are you sure you received?')"><i class="material-icons">add_task</i> Received</button>
                                
                                @else
                                    <button  class="btn btn-primary btn-sm btn-round" onclick="confirm('Are you sure you received?')"><i class="material-icons">schedule</i> Received</button>
                                @endif                              
                                </td>
                            </tr> 
                        <form
                        @endforeach                     
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            @endif      
            <div class="alert alert-info alert-with-icon" data-notify="container">
                <i class="material-icons" data-notify="icon">notifications</i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                <span data-notify="message">Thank you for registering and Welcome to Golden Auction Coin. Please join telegram channel for discussion: <a href="https://t.me/goldencoinauction">CLICK HERE TO JOIN</a></span>
            </div>
            @if($is_open)
            <div class="alert alert-success alert-with-icon" data-notify="container">
                <i class="material-icons" data-notify="icon">notifications</i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                <span data-notify="message">Auction is Open Now</span>
            </div>
            @else
            <div class="alert alert-primary alert-with-icon" data-notify="container">
                <i class="material-icons" data-notify="icon">notifications</i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                <span data-notify="message" id="countdown"></span>
            </div>
            @endif          
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">copyright</i>
                    </div>
                    <p class="card-category">Balance</p>
                    <h5 class="card-title">P{{$balance}}</h5>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-danger">equalizer</i>
                        <a href="#pablo">Amount waiting for withdrawal</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">card_giftcard</i>
                    </div>
                    <p class="card-category">Ready for Sale</p>
                    <h5 class="card-title">P{{$mature}}</h5>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i> Money is waiting for you
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">exit_to_app</i>
                    </div>
                    <p class="card-category">Bonus</p>
                    <h5 class="card-title">P{{$bonus}}</h5>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Since the beginning
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <p class="card-category">Referrals</p>
                    <h5 class="card-title">{{$referrals}}</h5>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function nextAuction(){     
            var d = new Date(),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();
            
            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;
            var today = [year, month, day].join('-');

            var tmonth = Number(month);
            var tday = Number(day)+ 1;

            if ((Number(month) == 4 && Number(tday) == 31) || (Number(month) == 6 && Number(tday) == 31) || (Number(month) == 9 && Number(tday) == 31) || (Number(month) == 11 && Number(tday) == 31)) {
                    tday = '1';
                    tmonth = Number(month)+1;
            }

            if(Number(tday)==32) {
                    tday = '1';
                    tmonth = Number(month)+1;
            }

            if ((Number(month) == 2 && Number(day) > 28)) {
                    tday = '1';
                    tmonth = '3';   
            }

            if (Number(tmonth) < 10) tmonth = '0' + tmonth;
            if (Number(tday)< 2) tday = '0' + tday;
            var nextday = [year, tmonth, tday].join('-');


            var dateOne = new Date(d.getFullYear(), d.getMonth(), d.getDate(), '09', '00', '00');
            var dateTwo = new Date(d.getFullYear(), d.getMonth(), d.getDate(), '19', '00', '00');

            if(d < dateOne){
                    return  today + ' ' + '09:00:00';
            }
            if((d > dateOne) && (d < dateTwo)){
                    return  today + ' ' + '19:00:00';;
            }
            if(d > dateTwo){
                    return  nextday + ' ' + '09:00:00';
            }
        };

        window.onload = function () {
            // Set the date we're counting down to
            
            var countDownDate = new Date(nextAuction()).getTime();//Use this for live

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();
                
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
                
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
            // Output the result in an element with id="demo"
            document.getElementById("countdown").innerHTML = "NEXT AUCTION COMING IN : " + hours + "hr "
            + minutes + "mins " + seconds + "sec ";
                
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "AUCTION IS ON";
            }
            }, 1000);
        };

        function copyLink() {
        /* Get the text field */
        var copyText = document.querySelector("#reflink");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Copied the Link: " + copyText.value);
        };
    </script>
</x-app-layout>
