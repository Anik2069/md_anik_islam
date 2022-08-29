@extends('layouts')
@section('content')
    <h4 class="text-center">Welcome To Question Answer Session</h4> <br>
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
                                        <a href="{{ route('solution', 1) }}" class="btn btn-link" type="button">Q1 . We have
                                            a set of data in the following url: http://103.219.147.17/api/json.php
                                            From this data we need to find the speeds those have crossed 60. The result
                                            should contain the list &
                                            the total number of speeds those have crossed 60.</a>
                                    </h5>

                                    <h5>
                                        <a href="{{ route('solution', 2) }}" class="btn btn-link" type="button">Q2 .We have
                                            an array like
                                            array('0'=>'z1', '1'=>'Z10', '2'=>'z12', '3'=>'Z2', '4'=>'z3')
                                            We need to sort this. You can use this given array for your sorted solution.
                                            Expected Output:
                                            array('0'=>'z1', '3'=>'Z2', '4'=>'z3', '1'=>'Z10', '2'=>'z12')</a>
                                    </h5>


                                    <h5>
                                        <a href="{{ route('solution', 3) }}" class="btn btn-link" type="button">Q3 .We need
                                            to validate any IP address.
                                            We are sure that you can write a logic to validate any IP address and return
                                            true if valid and false if
                                            invalid. We hope to see that you do this without any built-in function.</a>
                                    </h5>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
