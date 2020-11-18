<x-app-layout>
    @if(!$is_open)
    <div class="row">
        <div class="col-md-12">                   
            <div class="alert alert-primary alert-with-icon" data-notify="container">
                <i class="material-icons" data-notify="icon">notifications</i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                <span data-notify="message" id="countdown"></span>
            </div>
        </div>
    </div>
    @elseif($is_open && $auctions->isEmpty())
    <div class="row">
        <div class="col-md-12">                   
            <div class="alert alert-warning alert-with-icon" data-notify="container">
                <i class="material-icons" data-notify="icon">notifications</i>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
                <span data-notify="message">COINS FINISHED!</span>
            </div>
        </div>
    </div>
    @else    
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6">         
            <div class="card card-pricing card-raised">
                <div class="card-body">
                    <h6 class="card-category">FNB (SOUTH AFRICA)</h6>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                            <img src="../../images/stanbic.png" alt="...">
                        </div>                      
                    </div>
                    <h3 class="card-title">R250.37</h3>
                    <div class="form-group">    
                        <input type="text" class="form-control" name="amount" placeholder="Amount" id="amount">
                    </div>
                    <a href="#pablo" class="btn btn-rose btn-round">BID</a>
                </div>
            </div>       
        </div>   
        <div class="col-lg-3 col-md-4 col-sm-6">         
            <div class="card card-pricing card-raised">
                <div class="card-body">
                    <h6 class="card-category">FNB (SOUTH AFRICA)</h6>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                            <img src="../../images/stanbic.png" alt="...">
                        </div>                      
                    </div>
                    <h3 class="card-title">R250.37</h3>
                    <div class="form-group">    
                        <input type="text" class="form-control" name="amount" placeholder="Amount" id="amount">
                    </div>
                    <a href="#pablo" class="btn btn-rose btn-round">BID</a>
                </div>
            </div>       
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">         
            <div class="card card-pricing card-raised">
                <div class="card-body">
                    <h6 class="card-category">FNB (SOUTH AFRICA)</h6>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                            <img src="../../images/stanbic.png" alt="...">
                        </div>                      
                    </div>
                    <h3 class="card-title">R250.37</h3>
                    <div class="form-group">    
                        <input type="text" class="form-control" name="amount" placeholder="Amount" id="amount">
                    </div>
                    <a href="#pablo" class="btn btn-rose btn-round">BID</a>
                </div>
            </div>       
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">         
            <div class="card card-pricing card-raised">
                <div class="card-body">
                    <h6 class="card-category">FNB (SOUTH AFRICA)</h6>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                            <img src="../../images/stanbic.png" alt="...">
                        </div>                      
                    </div>
                    <h3 class="card-title">R250.37</h3>
                    <div class="form-group">    
                        <input type="text" class="form-control" name="amount" placeholder="Amount" id="amount">
                    </div>
                    <a href="#pablo" class="btn btn-rose btn-round">BID</a>
                </div>
            </div>       
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">         
            <div class="card card-pricing card-raised">
                <div class="card-body">
                    <h6 class="card-category">FNB (SOUTH AFRICA)</h6>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                            <img src="../../images/stanbic.png" alt="...">
                        </div>                      
                    </div>
                    <h3 class="card-title">R250.37</h3>
                    <div class="form-group">    
                        <input type="text" class="form-control" name="amount" placeholder="Amount" id="amount">
                    </div>
                    <a href="#pablo" class="btn btn-rose btn-round">BID</a>
                </div>
            </div>       
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">         
            <div class="card card-pricing card-raised">
                <div class="card-body">
                    <h6 class="card-category">FNB (SOUTH AFRICA)</h6>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                            <img src="../../images/stanbic.png" alt="...">
                        </div>                      
                    </div>
                    <h3 class="card-title">R250.37</h3>
                    <div class="form-group">    
                        <input type="text" class="form-control" name="amount" placeholder="Amount" id="amount">
                    </div>
                    <a href="#pablo" class="btn btn-rose btn-round">BID</a>
                </div>
            </div>       
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">         
            <div class="card card-pricing card-raised">
                <div class="card-body">
                    <h6 class="card-category">FNB (SOUTH AFRICA)</h6>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                            <img src="../../images/stanbic.png" alt="...">
                        </div>                      
                    </div>
                    <h3 class="card-title">R250.37</h3>
                    <div class="form-group">    
                        <input type="text" class="form-control" name="amount" placeholder="Amount" id="amount">
                    </div>
                    <a href="#pablo" class="btn btn-rose btn-round">BID</a>
                </div>
            </div>       
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">         
            <div class="card card-pricing card-raised">
                <div class="card-body">
                    <h6 class="card-category">FNB (SOUTH AFRICA)</h6>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-circle">
                            <img src="../../images/stanbic.png" alt="...">
                        </div>                      
                    </div>
                    <h3 class="card-title">R250.37</h3>
                    <div class="form-group">    
                        <input type="text" class="form-control" name="amount" placeholder="Amount" id="amount">
                    </div>
                    <a href="#pablo" class="btn btn-rose btn-round">BID</a>
                </div>
            </div>       
        </div>     
    </div>
    @endif
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
            var countDownDate = new Date("Nov 20, 2020 09:00:00").getTime();

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
            document.getElementById("countdown").innerHTML = "NEXT AUCTION COMING IN :" + days + "days " + hours + "hr "
            + minutes + "mins " + seconds + "sec ";
                
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
            }, 1000);
        };
    </script>
</x-app-layout>
