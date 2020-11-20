<x-app-layout>
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
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <button 
          class="btn btn-primary btn-round pull-right"
          data-toggle="modal" 
          data-target="#myModal"
          >
            <i class="material-icons">add_task</i> ADD NEW
          </button>
          <h4 class="card-title">Payment Details</h4>          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>          
                  {{-- <th>AVATAR</th> --}}
                  <th>BANK NAME</th>
                  <th>ACCOUNT NUMBER</th>
                  <th>BRANCH</th>
                  <th>ACCOUNT OWNER NAME</th> 
                  <th>ACCOUNT TYPE</th>                  
                  <th class="text-right">ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                @foreach($bank_details as $bank_detail)
                <tr>
                  {{-- <td>{{$bank_detail->bank->avatar}}</td> --}}
                  <td>{{$bank_detail->bank->name}}</td>
                  <td>{{$bank_detail->account_number}}</td>
                  <td>{{$bank_detail->branch}}</td>
                  <td>{{$bank_detail->account_holder}}</td>
                  <td>{{$bank_detail->account_type}}</td>                 
                  <td class="td-actions text-right"> 
                    <form method="POST" action="/bank-details/{{$bank_detail->id}}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="submit" rel="tooltip" class="btn btn-danger">
                        <i class="material-icons">close</i>
                      </button>
                    </form>
                  </td>
                </tr>                  
                @endforeach       
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
<!-- Classic Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Payment Method</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <form method="POST" action="/bank-details">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <select class="selectpicker" name="bank" data-size="7" data-style="btn btn-primary  btn-round">
              <option disabled selected>BANK / PAYMENT METHOD</option>
              @foreach($banks as $bank)
              <option value="{{$bank->id}}">{{$bank->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="account_number" placeholder="ACCOUNT NUMBER" id="account_holder">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="account_holder" placeholder="ACCOUNT OWNER NAME" id="account_holder">
          </div> 
          <div class="form-group">
            <input type="text" class="form-control" name="branch" placeholder="BRANCH" id="account_holder">
          </div>
          <div class="form-group">
            <select class="selectpicker" data-size="7" name="account_type" data-style="btn btn-primary  btn-round">
              <option disabled selected>ACCOUNT TYPE</option>
              <option value="Savings">Savings</option>
              <option value="Cheque">Cheque</option>
              <option value="Current">Current</option>
              <option value="Investment">Investment</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-link">Save</button>
          @foreach($errors as $error)
            <p>$error</p>
          @endforeach        
        </div>
      </form>
    </div>
  </div>
</div>
<!--  End Modal -->
