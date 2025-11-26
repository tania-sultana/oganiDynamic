@extends('admin.layouts.app')
@section('content')
    <div class="">
         <h4>Order List</h4>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-lg table-hover table-light">
                    <thead class="border-bottom">
                        <tr>
                            <th>#</th>
                            <th>User Id</th>
                            <th>Order Code</th>
                            <th>Total Price</th>
                            <th>Payment Method</th>
                            <th>Payment Status</th>
                            <th>Status</th>
                            {{-- <th class="text-center">Action</th> --}}
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($orders as $index => $order)
                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{$order->user_id}}
                                </td>
                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{ $order->order_code }}
                                </td>
                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{$order->total_price}}
                                </td>
                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{$order->payment_method}}
                                </td>
                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{$order->payment_status}}
                                </td>
                                <td style="max-width: 400px; white-space:normal; word-wrap:break-word">
                                    {{$order->status}}
                                </td>

                                {{-- <td class="text-center">
                                    <div class="d-flex justify-content-center align-items-center gap-2">
                                        <a href="{{ route('admin.order.edit', $order?->id) }}"
                                            class="btn btn-secondary">
                                            <i class="material-symbols-rounded">edit</i>
                                        </a>

                                        <a href="{{ route('admin.order.destroy', $order?->id) }}"
                                            class="btn btn-danger deleteConfirm">
                                            <i class="material-symbols-rounded">delete</i>
                                        </a>
                                    </div>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
