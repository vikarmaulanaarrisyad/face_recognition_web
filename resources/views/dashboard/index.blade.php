@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <x-card>
                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Door Mode</th>
                        <th>Control Mode</th>
                    </x-slot>
                </x-table>
            </x-card>
        </div>
    </div>
@endsection
@include('includes.datatable')

@push('scripts')
    <script>
        let table;
        $(function() {
            $('#spinner-border').hide();
        });

        table = $('.table').DataTable({
            processing: false,
            serverSide: true,
            autoWidth: false,
            responsive: true,
            ajax: {
                url: '{{ route('face.data') }}',
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'created_at',
                },
                {
                    data: 'door_mode',
                },
                {
                    data: 'control_mode',
                },
            ]
        });
    </script>
@endpush