<x-app-layout>
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif
  @if (isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-icon card-header-rose">
              <div class="card-icon">
                <i class="material-icons">perm_identity</i>
              </div>
              <h4 class="card-title">Edit Profile                 
              </h4>
            </div>
            <div class="card-body">
              <form method="POST" action="/update-profile">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="row">                
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">{{Auth::user()->username}}</label>
                      <input type="text" disabled class="form-control">
                    </div>
                    <div class="form-group">
                      <label class="bmd-label-floating">{{Auth::user()->email}}</label>
                      <input type="text" disabled class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">{{Auth::user()->cellphone}}</label>
                        <input type="text" name="cellphone" class="form-control">
                    </div>                    
                  </div>                 
                </div>       
                <button type="submit" class="btn btn-rose pull-right">Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="#pablo">
                <img class="img" src="{{asset('assets/img/avatar.png')}}" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-gray">E-COINCE Member</h6>
              <h4 class="card-title"> {{Auth::user()->username}}</h4>
              <p class="card-description">
                Joined :  {{Auth::user()->created_at}}
              </p>
            </div>
          </div>
        </div>
      </div>        
    </div>
</x-app-layout>
