@include("inc.header")

@php
    $internship_tasks = $data['internship_task'];
    $internship_id = $data['internship_id'];
    use App\Models\Internship_process;
@endphp
<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

          <!-- navigation -->
          @include("inc.navbar")
          <!-- navigation -->
          <!-- main content -->
          <div class="main-content menu-active">
              @include("inc.topbar")

            <div class="middle-sidebar-bottom">
                <div class="middle-sidebar-left">
                    <div class="row">
                        <div class="col-lg-12 pt-0 mb-3 mt-4  d-flex justify-content-between">
                            <h2 class="fw-400 font-lg d-block"><b>{{$data['internship']->internship_title}}</b></h2>
                            <div class="float-right">
                                <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li><a class="fw-500 font-xsss text-dark" href="/internships">&nbsp; Internships</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active fw-500 text-black">&nbsp; Task</li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 col-md-6 mb-2 mt-2">
                            <div class="card p-0 bg-white rounded-lg shadow-xs border-0">
                                <div class="card-body p-3 border-top-lg border-size-lg border-primary p-0">
                                    <h4><span class="font-xsss fw-700 text-grey-900 mt-2 d-inline-block">To Do </span><a href="#" class="float-right btn-round-sm bg-greylight" data-toggle="modal" data-target="#Modaltodo"><i class="feather-plus font-xss text-grey-900"></i></a></h4>
                                </div>
                                @foreach ($internship_tasks as $internship_task)
                                @php
                                    $internship_process = Internship_process::where('student_id',session('rexkod_user_id'))
                                                            ->where('internship_id',$internship_id)
                                                            ->where('task_id',$internship_task->id)->first();
                                @endphp
                                @if (!$internship_process)
                                <div class="card-body p-3 bg-lightblue mt-0 mb-3 ml-3 mr-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">{{$internship_task->name}}</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">{{$internship_task->description}}</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">{{$internship_task->duration}}</span>
                                    <a href="/start_internship/{{$internship_task->id}}/{{$internship_task->lab_code}}">
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Start</span></a>

                                </div>
                                @endif

                                @endforeach


                                {{-- <div class="card-body p-3 bg-lightblue mt-0 mb-3 ml-3 mr-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">Task-7</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">Visit Home Depot to find out what is needed to rebuild backyard patio.</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">30 Min</span>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Design</span>

                                </div>


                                <div class="card-body p-3 bg-lightblue mt-0 mb-3 ml-3 mr-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">Task-6</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">Visit Home Depot to find out what is needed to rebuild backyard patio.</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">30 Min</span>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Design</span>

                                </div> --}}




                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-4 col-md-6 mb-2 mt-2">
                            <div class="card p-0 bg-white rounded-lg shadow-xs border-0">
                                <div class="card-body p-3 border-top-lg border-size-lg border-warning p-0">
                                    <h4><span class="font-xsss fw-700 text-grey-900 mt-2 d-inline-block">In progress </span><a href="#" class="float-right btn-round-sm bg-greylight" data-toggle="modal" data-target="#Modaltodo"><i class="feather-plus font-xss text-grey-900"></i></a></h4>
                                </div>

                                @foreach ($internship_tasks as $internship_task)
                                @php
                                    $internship_process = Internship_process::where('student_id',session('rexkod_user_id'))
                                                            ->where('internship_id',$internship_id)
                                                            ->where('task_id',$internship_task->id)->first();
                                @endphp
                                @if($internship_process && $internship_process->status == 1)
                                <div class="card-body p-3 bg-lightbrown mt-0 mb-3 ml-3 mr-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">{{$internship_task->name}}</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">{{$internship_task->description}}</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">{{$internship_task->duration}}</span>
                                    <a href="/continue_task/{{$internship_task->id}}/{{$internship_task->lab_code}}">
                                        <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Continue</span></a>
                                </div>
                                @endif
                                @endforeach
                                {{-- <div class="card-body p-3 bg-lightbrown mt-0 mb-3 ml-3 mr-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">Task-4</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">Visit Home Depot to find out what is needed to rebuild backyard patio.</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">30 Min</span>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Design</span>
                                </div> --}}

                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-4 col-md-6 mb-2 mt-2">
                            <div class="card p-0 bg-white rounded-lg shadow-xs border-0">
                                <div class="card-body p-3 border-top-lg border-size-lg border-success p-0">
                                    <h4><span class="font-xsss fw-700 text-grey-900 mt-2 d-inline-block">Done </span><a href="#" class="float-right btn-round-sm bg-greylight" data-toggle="modal" data-target="#Modaltodo"><i class="feather-plus font-xss text-grey-900"></i></a></h4>
                                </div>
                                @foreach ($internship_tasks as $internship_task)
                                @php
                                $internship_process = Internship_process::where('student_id',session('rexkod_user_id'))
                                                        ->where('internship_id',$internship_id)
                                                        ->where('task_id',$internship_task->id)->first();
                            @endphp
                            @if($internship_process && $internship_process->status == 2)
                                <div class="card-body p-3 bg-lightgreen m-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">{{$internship_task->name}}</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">{{$internship_task->description}}</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">{{$internship_task->duration}}</span>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Completed</span>
                                </div>
                                @endif
                                @endforeach

                                {{-- <div class="card-body p-3 bg-lightgreen m-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">Task-2</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">Visit Home Depot to find out what is needed to rebuild backyard patio.</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">30 Min</span>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Design</span>
                                </div>

                                <div class="card-body p-3 bg-lightgreen m-3 rounded-lg">
                                    <h4 class="font-xsss fw-700 text-grey-900 mb-2 mt-1 d-block">Task-1</h4>
                                    <p class="font-xssss lh-24 fw-500 text-grey-500 mt-3 d-block mb-3">Visit Home Depot to find out what is needed to rebuild backyard patio.</p>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-info d-inline-block text-info">30 Min</span>
                                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-lg ls-2 alert-success d-inline-block text-success mr-1">Design</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @include("inc.sidebar")

            </div>
        </div>
        <!-- main content -->
        {{-- <div class="app-footer border-0 shadow-lg">
            <a href="default.html" class="nav-content-bttn nav-center"><i class="feather-home"></i></a>
            <a href="default-follower.html" class="nav-content-bttn"><i class="feather-package"></i></a>
            <a href="default-live-stream.html" class="nav-content-bttn" data-tab="chats"><i class="feather-layout"></i></a>
            <a href="#" class="nav-content-bttn sidebar-layer"><i class="feather-layers"></i></a>
            <a href="default-settings.html" class="nav-content-bttn"><img src="https://via.placeholder.com/60x60.png" alt="user" class="w30 shadow-xss"></a>
        </div>

        <div class="app-header-search">
            <form class="search-form">
                <div class="form-group searchbox mb-0 border-0 p-1">
                    <input type="text" class="form-control border-0" placeholder="Search...">
                    <i class="input-icon">
                        <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
                    </i>
                    <a href="#" class="ml-1 mt-1 d-inline-block close searchbox-close">
                        <i class="ti-close font-xs"></i>
                    </a>
                </div>
            </form>
        </div> --}}

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.8/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.14.30/js/bootstrap-datetimepicker.min.js"></script>



    @include("inc.footer")

    <script>
        $(function () {
            $('#datetimepicker').datetimepicker({
                showTodayButton: true,
                showClose: true, //close the picker
                showClear: true, //clear selection
                format: 'YYYY-MMM-DD HH:mm', //YYYY-MMM-DD LT
                // calendarWeeks: true,
                inline: true,
                sideBySide: true,
                 icons: {
                    up: "ti-arrow-circle-up ti-icon",
                    down: "ti-arrow-circle-down ti-icon",
                    time: 'ti-alarm-clock',
                    date: 'ti-calendar',
                    previous: 'ti-arrow-circle-left ti-icon',
                    next: 'ti-arrow-circle-right ti-icon',
                    today: 'ti-calendar ti-icon',
                    clear: 'ti-trash ti-icon text-danger',
                    close: 'ti-close ti-icon text-success'
                }
            });
        });
    </script>



</body>

</html>
