@extends('layouts.master', [
    'title' => 'Liste des offres d\'emploi',
])
@push('csss')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/select2/css/select2.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/fontawesome/css/all.min.css">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/themes/nano.min.css">

    <!-- Daterangepikcer CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ URL::asset('') }}assets/css/style.css">
@endpush
@push('scripts')
    <!-- Slimscroll JS -->
    <script src="{{ URL::asset('') }}assets/js/jquery.slimscroll.min.js"></script>

    <!-- Color Picker JS -->
    <script src="{{ URL::asset('') }}assets/plugins/@simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

    <!-- Daterangepikcer JS -->
    <script src="{{ URL::asset('') }}assets/js/moment.js"></script>
    <script src="{{ URL::asset('') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Select2 JS -->
    <script src="{{ URL::asset('') }}assets/plugins/select2/js/select2.min.js"></script>

    <!-- Custom JS -->
    <script src="{{ URL::asset('') }}assets/js/theme-colorpicker.js"></script>
    <script src="{{ URL::asset('') }}assets/js/script.js"></script>
@endpush

@section('content')
    <div class="breadcrumb position-relative bg-secondary py-5">
        <div class="my-5"></div>
        <div class="breadcrumb-bg">
            <span><img src="assets/img/bg/job-bg-01.png" class="job-bg-01" alt="Img"></span>
            <span><img src="assets/img/bg/job-bg-02.png" class="job-bg-02" alt="Img"></span>
            <span><img src="assets/img/bg/job-bg-03.png" class="job-bg-03" alt="Img"></span>
            <span><img src="assets/img/bg/job-bg-04.png" class="job-bg-04" alt="Img"></span>
        </div>
    </div>
    <div class="content px-0">
        <div class="container">
            <div class="card card-translate-top">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-md-8">
                            <div class="d-flex align-items-center mb-3">
                                <a href="#" class="me-2">
                                    <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/apple.svg"
                                            class="w-auto h-auto" alt="icon"></span>
                                </a>
                                <div>
                                    <h2 class="fw-medium mb-1 text-truncate">Senior IOS Developer</h2>
                                    <p class="text-dark d-inline-flex align-items-center mb-0 me-2 pe-2 border-end">
                                        <i class="ti ti-user-check text-gray-5 me-2"></i>
                                        25 Applicants
                                    </p>
                                    <p class="text-dark d-inline-flex align-items-center mb-0">
                                        <i class="ti ti-briefcase text-gray-5 me-2"></i>
                                        10 hours ago
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4">
                            <div class="d-flex align-items-center justify-content-end mb-3">
                                <p class="mb-0 me-3">Application End Date</p>
                                <span class="badge bg-primary-transparent">05 Sep 2024</span>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-md-8">
                            <div class="d-flex align-items-center flex-wrap row-gap-2">
                                <p class="text-dark d-inline-flex align-items-center mb-0 me-2 pe-2 border-end">
                                    <i class="ti ti-map-pin-check text-gray-5 me-2"></i>
                                    New York, USA
                                </p>
                                <p class="text-dark d-inline-flex align-items-center mb-0 me-2 pe-2 border-end">
                                    <i class="ti ti-currency-dollar text-gray-5 me-2"></i>
                                    30, 000 - 35, 000 / month
                                </p>
                                <p class="text-dark d-inline-flex align-items-center">
                                    <i class="ti ti-briefcase text-gray-5 me-2"></i>
                                    2 years of experience
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="#" class="btn btn-secondary flex-fill me-2">Apply</a>
                                <a href="#" class="btn btn-icon bg-transparent-dark"><i class="ti ti-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-3 mb-3">
                                <h4>Job Overview</h4>
                            </div>
                            <div class="row gy-4">
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-primary-transparent flex-shrink-0 me-2">
                                            <i class="ti ti-calendar fs-24"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-1 fw-medium">Date Posted</h6>
                                            <p>30 Aug 2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-primary-transparent flex-shrink-0 me-2">
                                            <i class="ti ti-calendar fs-24"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-1 fw-medium">Expiration Date</h6>
                                            <p>30 Aug 2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-primary-transparent flex-shrink-0 me-2">
                                            <i class="ti ti-calendar fs-24"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-1 fw-medium">Location</h6>
                                            <p>London, UK</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-primary-transparent flex-shrink-0 me-2">
                                            <i class="ti ti-calendar fs-24"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-1 fw-medium">Job Title</h6>
                                            <p>IOS Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-primary-transparent flex-shrink-0 me-2">
                                            <i class="ti ti-calendar fs-24"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-1 fw-medium">Hours</h6>
                                            <p>48 hours / week</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-primary-transparent flex-shrink-0 me-2">
                                            <i class="ti ti-calendar fs-24"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-1 fw-medium">Date Posted</h6>
                                            <p>30 Aug 2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-primary-transparent flex-shrink-0 me-2">
                                            <i class="ti ti-calendar fs-24"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-1 fw-medium">Date Posted</h6>
                                            <p>30 Aug 2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg bg-primary-transparent flex-shrink-0 me-2">
                                            <i class="ti ti-calendar fs-24"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-1 fw-medium">Date Posted</h6>
                                            <p>30 Aug 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-3 mb-3">
                                <h4>Job Description</h4>
                            </div>
                            <p>
                                We are seeking a skilled and experienced Senior iOS Developer to lead the
                                design,
                                development, and maintenance of our iOS applications. You will work closely with
                                cross-functional teams
                                to deliver high-quality, scalable, and user-friendly mobile applications.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-3 mb-3">
                                <h4>Responsibilities</h4>
                            </div>
                            <ul>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Design and build advanced applications for the iOS platform
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Collaborate with cross-functional teams (designers, backend developers, QA)
                                    to define, design, and ship new features.
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Ensure the performance, quality, and responsiveness of applications.
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Identify and fix bugs and performance bottlenecks.
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Stay up-to-date with the latest iOS development trends and best practices.
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Conduct code reviews to ensure adherence to industry standards and best
                                    practices.
                                </li>
                                <li class="d-flex align-items-center">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Mentor junior developers and provide technical guidance.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-3 mb-3">
                                <h4>Requirements</h4>
                            </div>
                            <ul>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Proven experience (5+ years) as an iOS developer
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Strong proficiency in Swift, Objective-C, and the iOS SDK.
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Experience with iOS frameworks such as Core Data, Core Animation, and Core
                                    Graphics.
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Familiarity with RESTful APIs to connect iOS applications to back-end
                                    services.
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Experience with unit testing, code reviews, and version control (e.g., Git).
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Strong understanding of Apple’s design principles and interface guidelines.
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Experience with Agile methodologies and CI/CD pipelines.
                                </li>
                                <li class="d-flex align-items-center mb-2">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Good communication skills and ability to work in a team environment.
                                </li>
                                <li class="d-flex align-items-center">
                                    <img src="assets/img/icons/polygon-icon.svg" class="me-1" alt="Img">
                                    Experience with App Store deployment and ongoing maintenance of released
                                    apps.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <h5 class="me-3">Share this job</h5>
                        <div class="d-flex align-items-center">
                            <a href="#" class="btn border btn-light-500 me-3"><img
                                    src="assets/img/social/google.svg" alt="Img"></a>
                            <a href="#" class="btn border btn-light-500 me-3"><img
                                    src="assets/img/social/facebook.svg" alt="Img"></a>
                            <a href="#" class="btn border btn-light-500 me-3"><img
                                    src="assets/img/social/twitter.svg" alt="Img"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 theiaStickySidebar">
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-3 mb-3">
                                <h4>Comapany Overview</h4>
                            </div>
                            <div class="card bg-light mb-3">
                                <div class="card-body p-3">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="me-2">
                                            <span class="avatar avatar-lg bg-gray-100"><img
                                                    src="assets/img/icons/apple.svg" class="w-auto h-auto"
                                                    alt="icon"></span>
                                        </a>
                                        <div>
                                            <h6 class="fw-medium mb-1 text-truncate"><a href="#">Senior
                                                    IOS Developer</a></h6>
                                            <a href="#" class="text-info">https://dreamstechnologies.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span>Primary Industry</span>
                                    <p class="text-gray-7">Software </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span>Founded in</span>
                                    <p class="text-gray-7">2014</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span>Phone</span>
                                    <p class="text-gray-7">+91 6789542132</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span>Email</span>
                                    <a href="#" class="text-info">business@example.com</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span>Location</span>
                                    <p class="text-gray-7">Location</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span>Social media</span>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm me-1"><i
                                                class="ti ti-mail"></i></a>
                                        <a href="#" class="avatar avatar-rounded avatar-sm me-1"><i
                                                class="ti ti-phone-call"></i></a>
                                        <a href="#" class="avatar avatar-rounded avatar-sm me-1"><i
                                                class="ti ti-message-2"></i></a>
                                        <a href="#" class="avatar avatar-rounded avatar-sm me-1"><i
                                                class="ti ti-brand-skype"></i></a>
                                        <a href="#" class="avatar avatar-rounded avatar-sm"><i
                                                class="ti ti-brand-facebook"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-3 mb-3">
                                <h4>Contact Us</h4>
                            </div>
                            <form action="job-details.html">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary d-flex align-items-center justify-content-center w-100">Send
                                    Message<i class="ti ti-send ms-1"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h4 class="mb-3">Related Posts</h4>
                <div class="row">
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img
                                                        src="assets/img/icons/react.svg" class="w-auto h-auto"
                                                        alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">React Developer
                                                    </a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <p class="text-dark d-inline-flex align-items-center mb-2">
                                        <i class="ti ti-map-pin-check text-gray-5 me-2"></i>
                                        Birmingham, UK
                                    </p>
                                    <p class="text-dark d-inline-flex align-items-center mb-2">
                                        <i class="ti ti-currency-dollar text-gray-5 me-2"></i>
                                        28, 000 - 32, 000 / month
                                    </p>
                                    <p class="text-dark d-inline-flex align-items-center">
                                        <i class="ti ti-briefcase text-gray-5 me-2"></i>
                                        3 years of experience
                                    </p>

                                </div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
                                </div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <p class="d-inline-flex align-items-center text-gray-9 mb-0">
                                        <i class="ti ti-clock me-1"></i>10 hours ago
                                    </p>
                                    <div>
                                        <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#apply_job">Apply Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img
                                                        src="assets/img/icons/laravel.svg" class="w-auto h-auto"
                                                        alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Laravel
                                                        Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <p class="text-dark d-inline-flex align-items-center mb-2">
                                        <i class="ti ti-map-pin-check text-gray-5 me-2"></i>
                                        Washington, USA
                                    </p>
                                    <p class="text-dark d-inline-flex align-items-center mb-2">
                                        <i class="ti ti-currency-dollar text-gray-5 me-2"></i>
                                        32, 000 - 36, 000 / month
                                    </p>
                                    <p class="text-dark d-inline-flex align-items-center">
                                        <i class="ti ti-briefcase text-gray-5 me-2"></i>
                                        1 years of experience
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
                                </div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <p class="d-inline-flex align-items-center text-gray-9 mb-0">
                                        <i class="ti ti-clock me-1"></i>10 hours ago
                                    </p>
                                    <div>
                                        <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#apply_job">Apply Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img
                                                        src="assets/img/icons/devops.svg" class="w-auto h-auto"
                                                        alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">DevOps
                                                        Engineer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <p class="text-dark d-inline-flex align-items-center mb-2">
                                        <i class="ti ti-map-pin-check text-gray-5 me-2"></i>
                                        Coventry, UK
                                    </p>
                                    <p class="text-dark d-inline-flex align-items-center mb-2">
                                        <i class="ti ti-currency-dollar text-gray-5 me-2"></i>
                                        25, 000 - 35, 000 / month
                                    </p>
                                    <p class="text-dark d-inline-flex align-items-center">
                                        <i class="ti ti-briefcase text-gray-5 me-2"></i>
                                        6 years of experience
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
                                </div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <p class="d-inline-flex align-items-center text-gray-9 mb-0">
                                        <i class="ti ti-clock me-1"></i>10 hours ago
                                    </p>
                                    <div>
                                        <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#apply_job">Apply Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img
                                                        src="assets/img/icons/android.svg" class="w-auto h-auto"
                                                        alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Android
                                                        Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column mb-3">
                                    <p class="text-dark d-inline-flex align-items-center mb-2">
                                        <i class="ti ti-map-pin-check text-gray-5 me-2"></i>
                                        Chicago, USA
                                    </p>
                                    <p class="text-dark d-inline-flex align-items-center mb-2">
                                        <i class="ti ti-currency-dollar text-gray-5 me-2"></i>
                                        28, 000 - 32, 000 / month
                                    </p>
                                    <p class="text-dark d-inline-flex align-items-center">
                                        <i class="ti ti-briefcase text-gray-5 me-2"></i>
                                        5 years of experience
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
                                </div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <p class="d-inline-flex align-items-center text-gray-9 mb-0">
                                        <i class="ti ti-clock me-1"></i>10 hours ago
                                    </p>
                                    <div>
                                        <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#apply_job">Apply Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Apply Job -->
    <div class="modal fade" id="apply_job">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Add Your Details</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="job-details.html">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div>
                            <label class="form-label">Upload your CV</label>
                            <input type="file" class="form-control" id="cv_upload">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Apply Job -->
@endsection
