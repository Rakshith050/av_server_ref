@include("inc_admin.header")
@php
    use App\Models\User;

@endphp

<body class="color-theme-orange mont-font">

    <div class="preloader"></div>


    <div class="main-wrapper">

        <!-- navigation -->
        @include("inc_admin.navbar")

        <!-- navigation -->
        <!-- main content -->
        <div class="main-content menu-active">
            @include("inc_admin.topbar")

            <div class="middle-sidebar-bottom bg-lightblue theme-dark-bg">
                <div class="middle-sidebar-left">
                    <div class=" mb-3">
                        <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                            <div class="card-body p-4 w-100 border-0 d-flex rounded-lg justify-content-between">

                                <h2 class="fw-400 font-lg d-block">All <b> Applications</b> </h2>
                                <div class="float-right">
                                    <ol class="breadcrumb " style="padding: 0.25rem 1rem;">
                                        <li><i class="fa fa-home"></i>&nbsp;<a class="fw-500 font-xsss text-dark" href="/admin/index">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li><a class="fw-500 font-xsss text-dark" href="/admin/all_jobs">&nbsp; Jobs</a>&nbsp;<i class="fa fa-angle-right"></i>
                                        </li>
                                        <li class="active fw-500 text-black">&nbsp; Job Applications</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="card-body p-lg-5 p-4 w-100 border-0 ">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col" class="text-dark">Action</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['job_application'] as $job_application)
                                            @php
                                                $student =User::where('id',$job_application->student_id)->first();
                                            @endphp
                                           <tr>
                                            <td>{{$student->name}}</td>
                                            <td>{{date('Y-m-d', strtotime($job_application->created_at))}}</td>
                                            <td>{{date('H:i:s', strtotime($job_application->created_at))}}</td>
                                            <td><a href="/admin/student_profile/{{$student->id}}" class="btn bg-current text-center text-white font-xsss fw-600 p-2  rounded-lg d-inline-block border-0">View Profile</a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>



            </div>


        </div>

    </div>

    @include("inc_admin.footer")

</body>

</html>
