@extends('admin.layouts.app')
@section('content')
    <div class="card-body">
        <form action="{{ route('admin.contact.store', $contact?->id) }}" method="POST" class="mx-5"
            enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="mt-3">
                    <label for="email" class="form-label fw-bold">
                        Email <span class="text-danger">*</span>
                    </label>

                    <input id="email" type="text" class="w-100 p-2" name="email" placeholder="Enter email"
                        value="{{ old('email', $contact?->email) }}">
                </div>


                <div class="mt-3">
                    <label for="address" class="form-label fw-bold">
                        Address <span class="text-danger">*</span>
                    </label>
                    <input id="address" type="text" class="w-100 p-2" name="address" placeholder="Enter address"
                        value="{{ old('address', $contact?->address) }}">
                </div>

                <div class="mt-3">
                    <label for="phone" class="form-label fw-bold">
                        Phone <span class="text-danger">*</span>
                    </label>
                    <input id="phone" type="text" class="w-100 p-2" name="phone" placeholder="Enter phone"
                        value="{{ old('phone', $contact?->phone) }}">
                </div>

                <div class="mt-3">
                    <label for="time" class="form-label fw-bold">
                        Time <span class="text-danger">*</span>
                    </label>
                    <input id="time" type="text" class="w-100 p-2" name="time" placeholder="Enter time"
                        value="{{ old('time', $contact?->time) }}">
                </div>

                <button type="submit" class="btn btn-lg btn-primary rounded px-5 mt-3">
                    {{ __('Submit') }}
                </button>

            </div>


        </form>


    </div>
@endsection
