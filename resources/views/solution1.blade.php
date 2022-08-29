@extends('layouts')
@section('content')
    <h4 class="text-center">Question 1 Answer</h4> <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-10">
                <div class="tab-content" id="faq-tab-content">
                    <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                        <div class="accordion" id="accordion-tab-1">
                            <div class="card">
                                <div class="card-header">

                                    <h5>
                                        <a href="#" class="btn btn-link" type="button">Total:
                                            {{ count($speed_arr) }} count of the speeds those crossed 60</a>
                                    </h5>
                                    <p>List:</p>
                                    <ul>
                                        @if (!empty($speed_arr))
                                            @foreach ($speed_arr as $key => $speed)
                                                <li>{{ $speed }}</li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
