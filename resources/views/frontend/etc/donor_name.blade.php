@extends('frontend.layout.main')
<title>All Donor Name List Here</title>
</head>
<body>
    @section('main-contant')
    <div class="container my-3">
        <h4 class="text-center text-success">All Donor Name Is Here</h4>
        <div class="card">
            <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="thead-dark text-dark fs-4">
                                <tr>
                                    <th>Id</th>
                                    <th>দাতার নাম</th>
                                    <th>দাতার ধরণ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Post as $post)
                                <tr class="text-success fs-5">
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->donor_name }}</td>
                                    <td>{{ $post->donor_type }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    @endsection