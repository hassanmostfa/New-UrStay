@extends('admin.mainComponents')

@section('title', 'الطلبات الجديدة')


@section('link_one', 'الوحدات')
@section('link_two', 'الطلبات الجديدة')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-success">{{ Session::get('success') }}</div>
@elseif (Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

<div class="container mt-3">
    <div class="table-responsive">
        <table class="table  table-bordered table-hover text-center table-striped align-middle">
            <thead class="table text-white" style="background-color: #88394E;">
                <tr>
                    <th>رقم الوحدة</th>
                    <th>صورة الوحدة</th>
                    <th>العنون</th>
                    <th>المساحة</th>
                    <th>عدد الغرف</th>
                    <th>عدد الحمامات</th>
                    <th>الموقع</th>
                    <th>حمام سباحة</th>
                    <th>الاجراءات</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($units as $unit)
<tr>
    <td>{{ $unit->id }}</td>
    <!-- Decode the JSON, and show the first image -->
    <td>
        @php
            $images = json_decode($unit->image, true); // Decode the JSON to an array
        @endphp
        @if (!empty($images) && is_array($images))
            <img src="{{ asset($images[0]) }}" alt="image" width="50px" height="50px">
        @else
            <span>No Image</span>
        @endif
    </td>
    <td>{{ $unit->title }}</td>
    <td>{{ $unit->size }}</td>
    <td>{{ $unit->rooms }}</td>
    <td>{{ $unit->bathrooms }}</td>
    <td>{{ $unit->location }}</td>

    <td>
        @if ($unit->pool == 1)
        <span class="badge bg-success">يوجد</span>
        @else
        <span class="badge bg-danger">لا يوجد</span>
        @endif
    </td>
    <td>
        <a href="{{ route('admin.unitDetails', $unit->id) }}" class="btn btn-secondary btn-sm">عرض</a>
        <div class="d-flex justify-content-start mt-3 gap-2">                        
                        @if ($unit->request_status == 'pending')
                        <form action="{{ route('admin.approveUnit', $unit->id) }}" method="POST" class="mt-3">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">قبول</button>
                        </form>

                        <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        رفض
                        </button>
                        @endif
                    </div>

                     <!-- Modal -->
                     <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog" style="max-width: 800px;">
                            <div class="modal-content">
                            <div class="modal-header justify-content-start">
                                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h1 class="modal-title fs-5 m-0" id="staticBackdropLabel">هل تريد رفض هذه الوحدة؟ رقم{{ $unit->id }}</h1>
                            </div>
                            <div class="modal-body">
                            <form action="{{ route('admin.rejectUnit', $unit->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                    
                                <div class="mb-3">
                                    <label for="reason" class="form-label" style="font-weight: bold;">سبب الرفض</label>
                                    <textarea class="form-control" id="reason" name="rejection_reason" rows="3"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mt-3">إرسال</button>
                                <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">اغلاق</button>

                            </form>
                            </div>
                            </div>
                            
                        </div>
                    </div>
    </td>
</tr>
@endforeach
            </tbody>
        </table>
    </div>
</div>


@endSection