@extends('main')


@section('section')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <h1>Data Contact</h1>
                    <a class="btn btn-primary mb-3" href="{{ route('contacts.create') }}">Add contact</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hovered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Contact Number</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $item)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->contact_number }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <form action="{{ route('contacts.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('contacts.edit', [$item->id]) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@if ($message = Session::get('success'))
    @section('script')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ $message }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endsection
@endif
