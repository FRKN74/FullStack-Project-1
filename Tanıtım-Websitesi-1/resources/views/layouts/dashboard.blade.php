@extends('layouts.back.master')

@section('content')

            

            <!-- card -->
            <div class="cardBox">
                <div class="card  bg-danger">
                    <div>
                        <div class="numbers">111</div>
                        <div class="cardName">İzlenme</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye"></i>
                    </div>
                </div>
                <div class="card bg-info">
                    <div>
                        <div class="numbers">111</div>
                        <div class="cardName">İzlenme</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye"></i>
                    </div>
                </div>
                <div class="card bg-warning">
                    <div>
                        <div class="numbers">111</div>
                        <div class="cardName">İzlenme</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye"></i>
                    </div>
                </div>
                <div class="card bg-dark">
                    <div>
                        <div class="numbers">111</div>
                        <div class="cardName">İzlenme</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye"></i>
                    </div>
                </div>
            </div>

            <!-- details list-->
            <div class="details ">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>
                            Recent Order
                        </h2>
                        <a href="{{ route('index') }}" target="_blank" class="btn btn-info">View All</a>
                    </div>
                    <table class="table table-dark text-center rounded-top mt-3">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    
@endsection