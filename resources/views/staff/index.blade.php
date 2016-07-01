@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Search employee</h2>
</div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="well">
                  <form class="form-inline" method="GET" action="{!! route('customer.search') !!}">
                      {{csrf_field()}}
                      <div class="form-group">
                          <input type="text" name="term" class="form-control" placeholder="Employee name">
                      </div>

                      <div class="form-group">
                        <select class="form-control" name="department" id="department">
                            @foreach($departments as $department)
                             <option value="" selected="">Filter by department</option>
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                      </div>

                      <button type="submit" class="btn btn-danger">
                        <span class="fa fa-search"></span>
                      </button>
                  </form>
              </div>
            </div>
        </div>
   </div>

   <div class="container">
       <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="panel panel-default">
               <div class="panel-heading">Recent created users</div>
               <div class="panel-body">
                 <table class="table table-striped table-condensed">
                   <thead>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Department</th>
                     <th>Created at</th>
                   </thead>
                   <tbody>
                     @foreach($users as $user_item)
                     <tr>
                       <td>{!! $user_item->name !!}</td>
                       <td>{!! $user_item->email !!}</td>
                       <td>{!! $user_item->department !!}</td>
                       <td>{!! $user_item->created_at !!}</td>
                     </tr>
                     @endforeach
                   </tbody>
                 </table>

               </div>
             </div>
           </div>
       </div>
  </div>
@endsection
