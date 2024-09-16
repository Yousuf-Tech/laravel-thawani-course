<div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">{{ $item['year'] }}</div>
                                                <div class="small fw-bolder">{{ $item['title'] }}</div>
                                                <div class="small text-muted">{{ $item['company'] }}</div>
                                                <div class="small text-muted">{{ $item['location'] }}</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>
                                        {{ $item['description'] }}
                                        </div></div>
                                    </div>
                                </div>
                            </div>