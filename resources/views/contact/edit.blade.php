@extends('main')


@section('section')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <h1>Add Data Contact</h1>
                    <a class="btn btn-primary mb-3" href="{{ route('contacts.index') }}">Back to contact</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('contacts.update', $contact->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Contact Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="John Doe"
                                        name="name" value="{{ $contact->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="number" class="form-label">Contact Number</label>
                                    <input type="text" class="form-control" id="number" placeholder="0851xxxxxx"
                                        name="contact_number" value="{{ $contact->contact_number }}">
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Contact Status</label>
                                    <input type="text" class="form-control" id="status" placeholder="Ex"
                                        name="status" value="{{ $contact->status }}">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
