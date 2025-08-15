@extends('layouts.layout')    
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Product List</h2>
        </div>
        <div class="card-body">
                <table class="table table-striped">
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
                        <th scope="row">3</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>@social</td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>

@endsection