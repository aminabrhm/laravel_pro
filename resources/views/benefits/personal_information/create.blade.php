
@extends('layouts.app')
@section('content')
@section('title', 'المعلومات الشخصية')


<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div>
                <h2>البيانات الشخصية</h2>
            </div>
        </div>
    </div>

    <form action="{{ route('personalInfo.store') }}" method="POST">
        @csrf

        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <div class="form-group">
                <strong>الاسم الأول</strong>
                    <input type="text" name="first_name" class="form-control" placeholder="الاسم الأول">
                <strong>اسم الاب</strong>
                    <input type="text" name="second_name" class="form-control" placeholder="أسم الاب">
                <strong>اسم الجد</strong>
                    <input type="text" name="third_name" class="form-control" placeholder="أسم الجد">
                <strong>اسم العائلة</strong>
                    <input type="text" name="family_name" class="form-control" placeholder="اسم العائلة">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1"><strong>الجنس</strong></label>
                    <select class="form-control" id="exampleFormControlSelect1" name="gender">
                        <option>أنثى</option>
                        <option>ذكر</option>
                    </select>
            </div>

                <!-- if user saudi -->
                @if(auth()->user()->user_type == 'saudi')

                    <div class="form-group" id="Saudi" >
                       <strong>رقم الهوية الوطنية:</strong>
                        <input type="intger" name="national_id" class="form-control" placeholder="رقم الهوية الوطنية">
                        <strong>جهة الإصدار:</strong>
                        <input type="text" name="place_national" class="form-control" placeholder="جهة الإصدار">
                       <strong>مكان الميلاد:</strong>
                        <input type="text" name="place_birth" class="form-control" placeholder="مثال: بريده،عنيزة...">
                       <strong>تاريخ الميلاد:</strong>
                        <input type="date" name="date_birth" class="form-control" placeholder="تاريخ الميلاد">
                        <strong>تاريخ إصدار بطاقة الهوية:</strong>
                        <input type="date" name="date_national" class="form-control" placeholder="تاريخ الإصدار">
                        <strong>تاريخ إنتهاء بطاقة الهوية:</strong>
                        <input type="date" name="date_ex_national" class="form-control" placeholder="تاريخ الإنتهاء">
                    </div>
                @endif

                <!-- if user non saudi -->
                @if(auth()->user()->user_type == 'non_saudi')

                    <div class="form-group" id="nonSaudi" >
                        
                        <strong>رقم جواز السفر:</strong>
                            <input type="text" name="passport_number" class="form-control" placeholder="رقم الجواز">
                       <strong>جهة إصدار جواز السفر:</strong>
                            <input type="text" name="passport_place" class="form-control" placeholder="جهة إصدار الجواز">
                        <strong>تاريخ إصدار جواز السفر:</strong>
                            <input type="date" name="passport_date" class="form-control" placeholder="تاريخ إصدار الجواز">
                        <strong>رقم رخصة الإقامة:</strong>
                            <input type="integer" name="license_number" class="form-control" placeholder="رقم رخصة الإقامة">
                        <strong>مكان إصدار رخصة الإقامة:</strong>
                            <input type="text" name="license_place" class="form-control" placeholder="مكان إصدار الإقامة">
                        <strong>تاريخ إنتهاء الإقامة:</strong>
                            <input type="date" name="date_ex_license" class="form-control" placeholder="تاريخ إنتهاء الإقامة">
                        <strong>المهنة المسجلة في رخصة الإقامة:</strong>
                            <input type="text" name="job" class="form-control" placeholder="المهنة">
                    </div>
                @endif
                    <div class="col-4">
                            <button type="submit" class="btn btn-success">{{__('حفظ')}}</button>
                    </div>

     </form>









@endsection