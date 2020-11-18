<x-app-layout>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-rose card-header-icon">
          <div class="card-icon">
            <i class="material-icons">assignment</i>
          </div>         
          <h4 class="card-title">Bonus</h4>          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
                <thead class="">
                  <th>DATE JOINED</th>
                  <th>USERNAME</th>
                  <th>CELLPHONE</th>        
                </thead>
                <tbody>  
                  @foreach($referrals as $referral) 
                  <tr>
                    <td>{{$referral->created_at}}</td> 
                    <td>{{$referral->username}}</td>
                    <td>{{$referral->cellphone}}</td>
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
