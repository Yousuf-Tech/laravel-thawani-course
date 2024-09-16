@extends("layout.layout", ['title' => 'Resume'])
@section("content")
<!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <a class="btn btn-primary px-4 py-3" href="#!">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a>
                            </div>
                            @foreach($experiences as $item )
                            <!-- Experience Card 1-->
                                @include('components.experience-card', ['item' =>  $item])
                            @endforeach
                           
                        </section>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            @foreach($educations as $item)
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">{{ $item['year'] }}</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">{{ $item['university'] }}</div>
                                                    <div class="small text-muted">{{ $item['location'] }}</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">{{ $item['type'] }}</div>
                                                    <div class="small text-muted">{{ $item['title'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>
                                        {{ $item['description'] }}
                                        </div></div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            @foreach($skills as $item)
                                                <div class="col mb-4 mb-md-0" style="margin-top: 10px;"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{ $item['title'] }}</div></div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                        @foreach($languages as $item)
                                            <div class="col mb-4 mb-md-0" style="margin-top: 10px;"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{ $item['title'] }}</div></div>
                                        @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

    


@endsection