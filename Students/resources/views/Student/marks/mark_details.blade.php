@extends('template')
@section('mark_details')
    
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Marks Details</h4>
                    <p class="card-description"> Select Class, Subject, Exam to see marks </p>
                    <div class="row align-items-end">
                      <div class="col-6 ">
                        <div class="template-demo d-flex justify-content-between">
                          
                          <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuIconButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="mdi mdi-book"></i>Class
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton2">
                              <h6 class="dropdown-header">Select Class</h6>
                              @foreach($classes as $class)
                                <a class="dropdown-item" name="{{ $class->id }}" href="#">{{ $class->class_name }}-{{ $class->division }}</a>
                              @endforeach
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>

                          <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              
                              <i class="mdi mdi-calendar"></i>Exam
                            <!-- <i class="mdi mdi-earth"></i> -->
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                              <h6 class="dropdown-header">Select Exam</h6>
                              @foreach($exams as $exam)
                                <a class="dropdown-item" name="{{ $exam->id }}" href="#">{{ $exam->exam_name }}</a>
                              @endforeach
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                <!-- <hr class="text-white"> -->
                <hr class="border-light">
                <div class="container m-4">
                    <div class="dropdown">
                        <b class="text-lg display-3">vsdfv </b>
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-pencil"></i>Subject
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton6">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>



                </div>
                    
                  </div>
                </div>
              </div>



            


@endsection