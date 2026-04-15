@extends('template')
@section('mark_details')
    
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Marks Details</h4>
        <p class="card-description"> Select Class, Subject to see marks </p>
        <div class="row align-items-end">
          <div class="col-12">
            <div class="template-demo d-flex justify-content-between">
              <form action="{{ route('allmarks') }}" class="container" method="GET">
                <div class="row">
                    <div class="col-md-4">
                      <div class="dropdown">
                        <select class="btn btn-warning text-white" name="class_subject_id">
                            <option value="">Choose Class & Subject</option>
                            
                              @foreach($class as $cs)

                                  <optgroup label="{{ $cs->class_name }} - {{ $cs->division }}">
                                      
                                      @foreach($class_sub as $sub)
                                          <option value="{{ $cs->id }},{{ $sub->subject_id }}">
                                              {{ $sub->subject_name }}
                                          </option>
                                      @endforeach
                                      
                                  </optgroup>

                              @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="mdi mdi-magnify"></i> Fetch Marks
                            </button>
                        </div>
                    </div>                                
                </div>
            </form>
          </div>
        </div>
      </div>
  <!-- <hr class="text-white"> -->
  <hr class="border-light">
  <div class="container m-4">
      
    @if(isset($marks))
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><b>{{ $class->class_name }} - {{ $class->division }}</b><hr/>Total Student: {{ $marks->count() }}</h4>
                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Subject</th>
                                    <th> CIA 1 </th>
                                    <th> CIA 2 </th>
                                    <th> SEE </th>
                                    <th>Marks</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($marks as $mark)
                                    <tr>
                                        <td>{{ $mark->student_name }}</td>
                                        <td>{{ $mark->subject_name }}</td>
                                        <td>
                                            <label class="badge badge-{{ $mark->marks >= 35 ? 'success' : 'danger' }}">
                                                {{ $mark->marks }}
                                            </label>
                                        </td>
                                        <td>
                                            <label class="badge badge-{{ $mark->marks >= 35 ? 'success' : 'danger' }}">
                                                {{ $mark->marks }}
                                            </label>
                                        </td>
                                        <td>
                                            <label class="badge badge-{{ $mark->marks >= 35 ? 'success' : 'danger' }}">
                                                {{ $mark->marks }}
                                            </label>
                                        </td>
                                        <td>
                                            <label class="badge badge-{{ $mark->marks >= 35 ? 'success' : 'danger' }}">
                                                {{ $mark->marks }}
                                            </label>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No marks found for this selection.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif












    </div>
        
  </div>
</div>
</div>

@endsection