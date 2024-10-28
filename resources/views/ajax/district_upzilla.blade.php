@php $upzilla->prepend('উপজেলা নির্বাচন করুন','0')  @endphp
{!! Form::select('upzilla_id', $upzilla, old('upzilla_id'),['class'=>'form-control','required'=>'required']) !!}