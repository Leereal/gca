<x-app-layout>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>         
          <h4 class="card-title">My Investments</h4>          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
                <thead class="">
                  <th>DATE</th>
                  <th>AMOUNT</th>
                  <th>PLAN</th>
                  <th>MATURITY DATE</th>
                  <th>BANK</th>
                  <th>STATUS</th>
                </thead>
                <tbody> 
                  @foreach($investments as $investment) 
                  <tr>
                    <td>{{$investment->created_at}}</td> 
                    <td>{{$investment->amount}}</td>
                    <td>{{$investment->plan->name}}</td>
                    <td>{{$investment->due_date}}</td>
                    <td>{{$investment->bank->name}}</td>
                    <td>{{$investment->status}}</td>              
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
