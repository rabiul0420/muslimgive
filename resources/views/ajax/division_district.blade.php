@php $districts->prepend('জেলা নির্বাচন করুন','0')  @endphp
{!! Form::select('district_id', $districts, old('district_id'),['class'=>'form-control','required'=>'required']) !!}