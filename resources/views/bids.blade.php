<x-app-layout>
  @if(session()->has('message'))
        <div class="alert alert-success text-center">
            {{ session()->get('message') }}
        </div>
    @endif
    @if (isset($errors) && count($errors) > 0)
        <div class="alert alert-danger text-center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if($bids->isEmpty())
      <div class="alert alert-success alert-with-icon" data-notify="container">
          <i class="material-icons" data-notify="icon">notifications</i>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <i class="material-icons">close</i>
          </button>
          <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
          <span data-notify="message">No bids to pay</span>
      </div>
    @endif
  <div class="row">
    @foreach($bids as $bid)
      <div class="col-lg-4 col-md-4 col-sm-12">         
          <div class="card card-pricing card-raised">
              <div class="card-body">
                  <form action="/make-payment" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}  
                  <input type="hidden" name="bid" value="{{$bid->id}}">                    
                      <h3 class="card-title">P{{$bid->amount}}</h3>                    
                      <ul>
                        <li>{{$bid->auction->bank_detail->bank->name}}</li>
                        <li>{{$bid->auction->bank_detail->account_number}}</li>
                        @if($bid->auction->bank_detail->account_holder)<li>{{$bid->auction->bank_detail->account_holder}}</li>@endif
                        @if($bid->auction->bank_detail->account_type)<li>{{$bid->auction->bank_detail->account_type}}</li>@endif
                      </ul> 
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="../../assets/img/image_placeholder.jpg" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-sm btn-round btn-file">
                            <span class="fileinput-new">UPLOAD POP</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="pop" />
                          </span>
                          <a href="#pablo" class="btn btn-danger btn-sm btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      <button type="submit" class="btn btn-success btn-round"><i class="material-icons">add_task</i> COMPLETE PAYMENT</button>
                  </form>
              </div>
          </div>       
      </div>
      @endforeach
  </div>
</x-app-layout>
