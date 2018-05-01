
<style>
    .oneDayColumn{
        float: left;
        margin: 2px;
        width: 19px;
    }
    .inp{
        width: 22px;height:22px;
        margin-bottom: 1px;
        text-align: center;
        border: none;
        background-color: #8bc34a;
        color: white;
    }
    .inp.day-num{
        background-color: #2a88bd;
        color: wheat;
    }
</style>

@extends('layouts.app')
@section('content')
   <div class="container" style="margin: 0px 20px">
       <div class="well" style="padding: 5px;margin-top: 0px;">
           <input type="month" class="month-inp" value="{{date('Y-m')}}">
       </div>
      <div class="result">
          @include('diary.statistic')
      </div>
   </div>
@endsection



@section('scripts')
    <script>
        $('.month-inp').change(function () {
            getTable(this.value);
        });

        function getTable($date) {
            $.get('/table', {date:$date},function (data) {
                $('.result').html(data);
                console.log(data);
            })
        }
    </script>
    @endsection
