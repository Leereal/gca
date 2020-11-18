<x-app-layout>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>         
          <h4 class="card-title">Bids</h4>          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
                <thead class="">
                  <th>DATE</th>
                  <th>AMOUNT</th>
                  <th>BANK</th>
                  <th>PLAN</th>
                  <th>STATUS</th>
                </thead>
                <tbody>                          
                  @foreach($bids as $bid) 
                  <tr>
                    <td>{{$bid->created_at}}</td> 
                    <td>{{$bid->amount}}</td>
                    <td>{{$bid->bank->name}}</td>
                    <td>{{$bid->plan->name}}</td>
                    <td>{{$bid->status}}</td>             
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
