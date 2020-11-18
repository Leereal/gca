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
    <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">compare_arrows</i>
              </div>
              <h4 class="card-title">Change Password</h4>
            </div>
            <form method="POST" action="/changepassword">
              {{ csrf_field() }}
            <div class="card-body ">                              
                <div class="form-group">
                  <label for="examplePass" class="bmd-label-floating">Old Password</label>
                  <input type="password" class="form-control"name="old_password"  id="examplePass">
                </div> 
                <div class="form-group">
                    <label for="examplePass" class="bmd-label-floating">New Password</label>
                    <input type="password" class="form-control" name="password" id="examplePass">
                </div> 
                <div class="form-group">
                    <label for="examplePass" class="bmd-label-floating">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password">
                </div>                
              
            </div>
            <div class="card-footer ">
              <button type="submit" class="btn btn-fill btn-rose">Submit</button>
            </div>
          </form>
          </div>
        </div>
      </div>
</x-app-layout>
