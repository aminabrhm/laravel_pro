
@extends('layouts.app')
@section('content')
@section('title', 'معلومات المهنة')

<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <div>
                <h2>معلومات المهنة</h2>
            </div>
        </div>
    </div>

    <form action="{{ route('jobInfo.store') }}" class="text-right" method="POST">
        @csrf

            <div class="form-group">
                <label for="exampleFormControlSelect1"><strong>المهنة</strong></label>
                    <select class="form-control" id="exampleFormControlSelect1" name="job">
                        <option></option>
                        <option>موظف حكومي</option>
                        <option>موظف أهلي</option>
                        <option>متقاعد</option>
                        <option>متسبب</option>
                        <option>طالب</option>
                        <option>ربة منزل</option>
                        <option>لايوجد</option>
                    </select>

                    <strong>مكان العمل</strong>
                        <input type="text" name="job_place" class="form-control" placeholder="مكان العمل">

                    <strong>هاتف العمل</strong>
                        <input type="text" name="phone_number" class="form-control" placeholder="هاتف العمل">


                    <label for="exampleFormControlSelect1"><strong>المؤهل الجامعي</strong></label>
                    <select class="form-control" id="exampleFormControlSelect1" name="education">
                        <option></option>
                        <option>جامعي</option>
                        <option>ثانوي</option>
                        <option>متوسط</option>
                        <option>ابتدائي</option>
                        <option>يقرأ ويكتب</option>
                        <option>أمي</option>
                    </select>
                </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-success">{{__('حفظ')}}</button>
                    </div>
    </form>
@endsection