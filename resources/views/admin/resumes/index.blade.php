@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Contacts</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{-- <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $key => $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->message }}</td>
                                </tr>
                            @empty
                                <tr class="small text-center" colspan="5">No data available in the table</tr>
                            @endforelse
                        </tbody>
                    </table> --}}
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.no</th>
                                <th>User Detail</th>
                                <th>Resume Detail</th>
                                <th>Resume User Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($resumes as $resume)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($resume->user)
                                        Id: {{ $resume->user->id }}<br>
                                        Name: {{ $resume->user->name }}<br>
                                        Email: {{ $resume->user->email }}<br>
                                        @endif
                                    </td>
                                    <td>
                                        Name: {{ $resume->name }}<br>
                                        Email: {{ $resume->email }}<br>
                                        Phone: {{ $resume->phone }}<br>
                                        Address: {{ $resume->address }}
                                    </td>
                                    <td>
                                        @if($resume->photo)
                                            <img class="img img-thumbnail rounded w-25" src="{{ public_asset($resume->photo) }}" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <button url="{{ url('resumes.show', $resume->id) }}" class="btn btn-sm btn-outline-primary" role="button">View</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No resumes found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="enquiry-paginate text-end mt-3">
                        {{ $resumes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
