@extends('back.layouts.master')
@section('title', 'Contacts')
@section('content')
    
                <span class="float-right">{{ $contact->count() }} message found.</strong>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Sent at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $contacts)
                        <tr>
                                <td>{{ $contacts->name }}</td>
                                <td>{{ $contacts->email }}</td>
                                <td>{{ $contacts->subject }}</td>
                                <td>{{ $contacts->message }}</td>
                                <td>{{ $contacts->created_at }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script></script>
@endsection
