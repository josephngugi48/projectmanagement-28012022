@extends('layouts.app')

@section('content')
@include('layouts.include.leftmenu')
<div class="container">
  <div class="row">
      <div class="col-sm-12">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="be-content">
          <div class="main-content container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card card-table card-border-color card-border-color-primary">
                  <div class="card-header">
                    <div class="title text-primary text-bold">Projects List</div>
                  </div>
                  <div class="card-body table-responsive">
                    <table class="table table-striped table-borderless" id="table1">
                      <thead>
                        <tr>
                            @if ($message = Session::get('success'))
                              <div class="row px-4" >
                                <div class="alert alert-success alert-block p-2 mb-2 col-sm-12">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                              </div>
                              @endif
                          </th>
                        </tr>                        
                        <tr>
                          <th style="width:5%;">#</th>
                          <th style="width:20%;">ProjectTitle</th>
                          <th style="width:15%;">ProjectID</th>
                          <th style="width:20%;">PASSCode</th>
                          <th style="width:20%;">PAGValue</th>
                          <th style="width:20%;">Donor</th>
                          <th style="width:20%;">Expenditure</th>
                          <th style="width:20%;">Contribution</th>
                          <th style="width:20%;">DateCreated</th>
                          <th style="width:20%;">Action</th>
                        </tr>
                      </thead>
                      <tbody class="no-border-x">
                        <?php $number = 1; ?>
                        @if($projects->count()>0)

                        @foreach($projects as $project)
                        <tr>
                          <td>{{ $number }}</td>
                          <td>{{ $project->projecttitle }}</td>
                          <td>{{ $project->projectid }}</td>
                          <td>{{ $project->paascode }}</td>
                          <td>{{ $project->pagvalue }}</td>
                          <td>{{ $project->donors }}</td>
                          <td>{{ $project->totalexpenditure }}</td>
                          <td>{{ $project->totalcontribution }}</td>
                          <td>{{ date('D jS M Y H:i:s', strtotime($project->created_at)) }}</td>
                          <td>
                            <a class="icon md-trigger" class="tooltip" tip="Delete" href="viewprojects/{{$project->id}}" onclick="
                            var result = confirm('Are you sure you want to delete this project?');
                            
                            if(result){
                                event.preventDefault();
                                document.getElementById('deleteproject{{$project->id}}').submit();
                            }" ><i class="mdi mdi-minus-circle"></i></a>
                          </td>
                          <form method="POST" id="deleteproject{{$project->id}}" action="{{route('viewprojects.destroy', [$project->id])}}">
                              {{csrf_field()}}
                              <input type="hidden" name="_method" value="DELETE">
                          </form>
                        </tr>
                        <?php $number++; ?>
                        @endforeach

                        @else 
                        <tr class="bg-danger text-white p-1"><td colspan="6">No Records</td></tr>
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
</div>
@endsection