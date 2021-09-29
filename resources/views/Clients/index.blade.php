@extends('layouts.mainLayout')

@section('content')
    <div class="row" style="margin-top: 100px">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Client CRUD Operations  </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clients.create') }}" title="Sign up as new client"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>email</th>
            <th>Location</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->location }}</td>
                <td>{{ date_format($client->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST">

                        <a href="{{ route('clients.show', $client->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('clients.edit', $client->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $clients->links() !!}

@endsection
