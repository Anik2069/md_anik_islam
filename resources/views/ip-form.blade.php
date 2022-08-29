@extends('layouts')
@section('content')
    <h4 class="text-center">IP Checker</h4> <br>
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

                                    <form action="{{ route('submit-ip') }}" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">IP Address</label>
                                            <input type="text" name="ip" class="form-control" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    <br>
                                    {{ isset($result) ? $result : '' }}
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
