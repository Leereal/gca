<x-app-layout>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>
          <button class="btn btn-primary btn-round pull-right">
            <i class="material-icons">add_task</i> ADD NEW
          </button>
          <h4 class="card-title">Payment Details</h4>          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>          
                  <th>AVATAR</th>
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
                  <td>{{$bank_detail->avatar}}</td>
                  <td>{{$bank_detail->name}}</td>
                  <td>{{$bank_detail->account_number}}</td>
                  <td>{{$bank_detail->branch}}</td>
                  <td>{{$bank_detail->account_holder}}</td>
                  <td>{{$bank_detail->account_type}}</td>                 
                  <td class="td-actions text-right">             
                    <button type="button" rel="tooltip" class="btn btn-success">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" class="btn btn-danger">
                      <i class="material-icons">close</i>
                    </button>
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
