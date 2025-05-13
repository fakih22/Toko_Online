@extends('backend.v_layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-primary text-white rounded-top-4">
                        <h4 class="mb-0"><i class="fas fa-user-circle"></i> Detail Customer</h4>
                    </div>

                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/img-customer/' . $customer->user->foto) }}" alt="Foto Customer"
                                class="rounded-circle shadow" width="120" height="120" style="object-fit: cover;">
                            <h5 class="mt-3">{{ $customer->user->nama }}</h5>
                            <small class="text-muted">{{ $customer->user->email }}</small>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-phone-alt text-success me-3">"</i>
                                <strong> Nomor HP:</strong> <span class="ms-auto">{{ $customer->user->hp }}</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-danger me-3">"</i>
                                <strong> Alamat:</strong> <span class="ms-auto">{{ $customer->alamat }}</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-mail-bulk text-warning me-3">"</i>
                                <strong> Kode Pos:</strong> <span class="ms-auto">{{ $customer->pos }}</span>
                            </li>
                        </ul>

                        <div class="mt-4 text-center">
                            <a href="{{ route('backend.customer.index') }}" class="btn btn-secondary rounded-pill px-4">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection