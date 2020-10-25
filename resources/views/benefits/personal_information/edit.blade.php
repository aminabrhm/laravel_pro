
@extends('layouts.app')
@section('content')
@section('title', 'المعلومات الشخصية')

<div class="row "> 
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <form  class="text-right" action="{{route('personalInfo.update', $personal_info['user_id'])}}" method="post" class="form">
                        @csrf
                        @method('PATCH')
                    <h1 class="text-center">تحديث بيانات</h1>

                    <strong>الاسم الأول</strong>
                        <input type="text" name="first_name" class="form-control" value="{{$personal_info['first_name']}}">
                    <strong>اسم الاب</strong>
                        <input type="text" name="second_name" class="form-control" value="{{$personal_info['second_name']}}">
                    <strong>اسم الجد</strong>
                        <input type="text" name="third_name" class="form-control" value="{{$personal_info['third_name']}}">
                    <strong>اسم العائلة</strong>
                        <input type="text" name="family_name" class="form-control" value="{{$personal_info['family_name']}}">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"><strong>الجنس</strong></label>
                                <select class="form-control" name="gender">

                                    <option>{{$personal_info['gender']}}</option>
                                    <option>أنثى</option>
                                    <option>ذكر</option>
                                </select>
                        </div>

                    <!-- if user saudi -->
                    @if(auth()->user()->user_type == 'saudi')
                        <div class="form-group" id="Saudi" >
                        <strong>رقم الهوية الوطنية:</strong>
                            <input type="intger" name="national_id" class="form-control" value="{{$personal_info['national_id']}}">
                            <strong>جهة الإصدار:</strong>
                            <input type="text" name="place_national" class="form-control" value="{{$personal_info['place_national']}}">
                        <strong>مكان الميلاد:</strong>
                            <input type="text" name="place_birth" class="form-control" value="{{$personal_info['place_birth']}}">
                        <strong>تاريخ الميلاد:</strong>
                            <input type="date" name="date_birth" class="form-control" value="{{$personal_info['date_birth']}}">
                            <strong>تاريخ إصدار بطاقة الهوية:</strong>
                            <input type="date" name="date_national" class="form-control" value="{{$personal_info['date_national']}}">
                            <strong>تاريخ إنتهاء بطاقة الهوية:</strong>
                            <input type="date" name="date_ex_national" class="form-control" value="{{$personal_info['date_ex_national']}}">
                        </div>
                    @endif
                    <!-- end user saudi -->

                    @if(auth()->user()->user_type == 'non_saudi')

                      <!-- if user non saudi -->
                        <div class="form-group" id="nonSaudi" >
                            <strong>رقم جواز السفر:</strong>
                                <input type="text" name="passport_number" class="form-control" value="{{$personal_info['passport_number']}}">
                            <strong>جهة إصدار جواز السفر:</strong>
                                <input type="text" name="passport_place" class="form-control" value="{{$personal_info['passport_place']}}">
                            <strong>تاريخ إصدار جواز السفر:</strong>
                                <input type="date" name="passport_date" class="form-control" value="{{$personal_info['passport_date']}}">
                            <strong>رقم رخصة الإقامة:</strong>
                                <input type="intger" name="license_number" class="form-control" value="{{$personal_info['license_number']}}">
                            <strong>مكان إصدار رخصة الإقامة:</strong>
                                <input type="text" name="license_place" class="form-control" value="{{$personal_info['license_place']}}">
                            <strong>تاريخ إنتهاء الإقامة:</strong>
                                <input type="date" name="date_ex_license" class="form-control" value="{{$personal_info['date_ex_license']}}">
                            <strong>المهنة المسجلة في رخصة الإقامة:</strong>
                                <input type="text" name="job" class="form-control" value="{{$personal_info['job']}}">
                        </div>
                    @endif

                    <div class="col-4">
                            <button type="submit" class="btn btn-success">{{__(' حفظ التغيرات')}}</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>





@endsection