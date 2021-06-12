@extends('layouts.master')

@section('content')
<main>
            <h2 dash-titel>over view</h2>
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <span class="ti-briefcase"></span>
                        <div>
                            <h5>Total Products</h5>
                            <h4>{{$products_count}}</h4>
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
                            <h5>categories</h5>
                            <h4>{{$category_count}}</h4>
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
                            <h5>Total Posts</h5>
                            <h4>{{$posts_count}}</h4>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="">view all</a>
                    </div>

                </div>

            </div>
        </main>
@endsection
