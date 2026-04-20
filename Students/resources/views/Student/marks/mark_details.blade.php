@extends('template')
@section('mark_details')
    
  <div class="col-md-9 grid-margin stretch-card">
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
                                    @php
                                        $filtersub = $class_sub->where('class_id', $cs->id);
                                    @endphp

                                      @foreach($filtersub as $sub)
                                          <option value="{{ $cs->id }},{{ $sub->subject_id }}">
                                              {{ $sub->subject_name }}  
                                          </option>
                                      @endforeach
                                  </optgroup>

                              @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2">
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
                    <h4 class="card-title">
                        @if($marks->isNotEmpty())
                            <b>{{ $marks->first()->class_name }} - {{ $marks->first()->division }}</b><br><br>
                            <label class="badge badge-info p-3 text-white rounded-pill text-large">{{ $marks->first()->subject_name }}</label>
                        @else
                            <b>No Class Selected</b>
                        @endif
                        <hr/>
                        Total Students: {{ $marks->count() }}
                    </h4>                    <div class="table-responsive">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th> CIA 1 </th>
                                    <th> CIA 2 </th>
                                    <th> SEE </th>  
                                </tr>
                            </thead>    
                            <tbody>
                                @forelse($marks as $mark)
                                    <tr>
                                        <td>{{ $mark->student_name }}</td>
                                        <td>
                                            <label class="badge badge-{{ $mark->cia1 >= 35 ? 'success' : 'danger' }} text-dark">
                                                {{ $mark->cia1 }}
                                            </label>
                                        </td>
                                        <td>
                                            <label class="badge badge-{{ $mark->cia2 >= 35 ? 'success' : 'danger' }} text-dark">
                                                {{ $mark->cia2 }}
                                            </label>
                                        </td>
                                        <td>
                                            <label class="badge badge-{{ $mark->see >= 35 ? 'success' : 'danger' }} text-dark">
                                                {{ $mark->see }}
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