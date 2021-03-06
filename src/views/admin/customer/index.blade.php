@extends('nuclues::backend.layouts.app')
@section('title','customer')

@push('css')
<style>
  .pagination {
    position: absolute;
    top: -25px;
    right: 4px;
}
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    border-color: rgba(0,0,0,0);
    background: rgba(0,0,0,0) linear-gradient(45deg, #6878E2, #7356B2);
}
</style>
@endpush
@section('content')
     <div class="panel-body">
              
      <div class="content-area">
        <div class="sub-bar">
          <div class="sub-title">
            <h4>Dashboard:</h4>
            <span>Welcome To customer</span>
          </div>
          <ul class="bread-crumb">
            <li><a href="#" title="">Dashboard</a></li>
            <li>customer</li>
          </ul>
        </div>
        <div class="gap inner-bg">
          <div class="element-title">
            <h4>customer</h4>
            <span>It's your customer list </span> </div>
          <div class="table-styles">
            <div class="widget">
              <table class="prj-tbl striped table-responsive">
                <thead class="color">
                  <tr>
                    <th><em>ID</em></th>
                    <th><em>Name</em></th>
                    <th><em>Email</em></th>
                    <th><em>Action</em></th>
                  </tr>
                </thead>
                <tbody>
                    @if($customers->count() > 0)
                    @foreach($customers as $key=>$customer)
                      <tr>
                        <td><span>{{ $key + 1 }}</span></td>
                        <td><span>{{ $customer->name }}</span></td>
                        <td><span>{{ $customer->email }}</span></td>

                        <td><i>
                          
                           
                            <a href="{{ route('customer.delete',$customer->id) }}" class="btn-st rd-clr"><i class="fa fa-trash"></i></a>
                        </i></td>

                      </tr>
                  @endforeach
                    <div class="pagination">
                      {!! $customers->links() !!}
                    </div>
                  @else
                  <tbody>
                      <tr>
                          
                      </tr>
                  </tbody>
                  @endif
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>
      <div class="bottombar"> 
                            <span>© 2019. Laramaster. All Rights Reserved.</span>
                        </div>
      <!-- bottombar --> 
    </div>
@endsection