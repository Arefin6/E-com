@extends('layouts.master')

@section('content')
<main>
            <h2 dash-titel>over view</h2>
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Total Coustomar</h5>
                            <h4>550</h4>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="">view all</a>
                    </div>

                </div>

                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-reload"></span>
                        <div>
                            <h5>Order</h5>
                            <h4>550</h4>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="">view all</a>
                    </div>

                </div>


                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-check-box"></span>
                        <div>
                            <h5>Total Sells</h5>
                            <h4>403555</h4>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="">view all</a>
                    </div>

                </div>

            </div>
        </main>
@endsection
