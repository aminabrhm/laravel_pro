
@extends('layouts.app')
@section('content')
@section('title', ' تعديل معلومات الإتصال ')



<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div>
                <h2>تعديل معلومات الإتصال</h2>
            </div>
        </div>
        </div>

    <form action="{{ route('contactInfo.update', $contact_info['user_id']) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <div class="form-group">

            <strong>الإيميل:</strong>
                <input type="email" name="email" class="form-control" value="{{$contact_info['email']}}">

            <strong>رقم الجوال:</strong>
                <input type="integer" name="mobile_number" class="form-control" value="{{$contact_info['mobile_number']}}">

            <strong>رقم الهاتف:</strong>
                <input type="integer" name="phone_number" class="form-control" value="{{$contact_info['phone_number']}}">

            <strong>رقم الجوال(واتساب):</strong>
                <input type="integer" name="whatsapp_number" class="form-control" value="{{$contact_info['whatsapp_number']}}">

            <strong>رقم جوال قريب:</strong>
                <input type="integer" name="other_number" value="{{$contact_info['other_number']}}" class="form-control">

            <label for="exampleFormControlSelect1"><strong>صلة القرابة:</strong></label>
                    <select class="form-control" value="{{$contact_info['relative']}}" name="relative">
                        <option>{{$contact_info['relative']}}</option>
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
                        <button type="submit" class="btn btn-success">{{__(' حفظ التحديثات')}}</button>
                    </div>
    </form>

@endsection