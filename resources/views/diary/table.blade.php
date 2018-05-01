

@extends('layouts.app')
@section('content')

    @include('diary.statistic')
    {{--@inject('DaysStat','\App\Helper')--}}






    {{--@foreach($DaysStat::getStringByArray($onemonthstat->statistics) as $days)--}}
      {{--@for($i=0;$i< count($days);$i++)--}}
          {{--@if($days[$i]=="")--}}
              {{--<span>.</span>--}}
              {{--@else--}}
              {{--<span>{{$days[$i]}}</span>--}}
              {{--@endif--}}
          {{--@endfor--}}
      {{--<br>--}}
    {{--@endforeach--}}

@endsection