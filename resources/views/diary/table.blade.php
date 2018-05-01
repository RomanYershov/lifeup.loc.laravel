
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
           <input type="month" name="selectedDate" class="month-inp" value="{{date('Y-m')}}">
           <input type="submit" class="btn btn-success">
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
            })
        };

        $('.btn').click(function () {
            $.post('/table/update', $('input').serialize(),function (data,status) {
                console.log(status)
            });
        });
    </script>
    @endsection
