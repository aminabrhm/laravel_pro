
@extends('layouts.app')
@section('content')
@section('title', 'معلومات الإتصال')



<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div>
                <h2>معلومات الإتصال</h2>
            </div>
        </div>
        </div>

    <form action="{{ route('contactInfo.store') }}" method="POST">
        @csrf

        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <div class="form-group">

            <strong>الإيميل:</strong>
                <input type="email" name="email" class="form-control" placeholder="الإيميل">

            <strong>رقم الجوال:</strong>
                <input type="integer" name="mobile_number" class="form-control" placeholder="رقم الجوال">

            <strong>رقم الهاتف:</strong>
                <input type="integer" name="phone_number" class="form-control" placeholder="رقم الهاتف">

            <strong>رقم الجوال(واتساب):</strong>
                <input type="integer" name="whatsapp_number" class="form-control" placeholder="رقم الجوال(واتساب)">

            <strong>رقم جوال قريب:</strong>
                <input type="integer" name="other_number" class="form-control" placeholder="رقم جوال قريب">

            <label for="exampleFormControlSelect1"><strong>صلة القرابة:</strong></label>
                    <select class="form-control" id="exampleFormControlSelect1" name="relative">
                        <option></option>
                        <option>والد</option>
                        <option>والدة</option>
                        <option>زوج</option>
                        <option>زوجة</option>
                        <option>ابن</option>
                        <option>جد</option>
                        <option>جدة</option>
                        <option>أخ</option>
                        <option>أخت</option>
                        <option>ابن الإبن</option>
                        <option>عم</option>
                        <option>عمة</option>
                        <option>خال</option>
                        <option>خالة</option>
                        <option>ابن الأخ</option>
                        <option>ابن الأخت</option>
                    </select>

                    <div class="col-4">
                        <button type="submit" class="btn btn-success">{{__('حفظ')}}</button>
                    </div>
    </form>

@endsection