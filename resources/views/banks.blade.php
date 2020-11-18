<x-app-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                  <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title "> Payment Methods</h4>
              </div>
              <div class="card-body table-full-width table-hover">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="">
                      <th>ID</th>
                      <th>AVATAR</th>
                      <th>NAME</th>                      
                    </thead>
                    <tbody>
                      @foreach($banks as $bank)
                      <tr>
                      <td>{{$bank->id}}</td>
                        <td>{{$bank->avatar}}</td>
                        <td>{{$bank->name}}</td>
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
