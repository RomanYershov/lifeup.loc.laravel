
@inject('DaysStat','\App\DiaryHelper')



@foreach($DaysStat::getStatByArray($onemonthstat->statistics) as $index => $days)
        <div class="oneDayColumn">
            <input class="inp day-num" type="text" value="{{$index+1}}">
            @for($i=0;$i<count($days);$i++)
                <input class="inp" inp_id="{{$i}}" name="inp[]" type="text" value="{{$days[$i]}}">
            @endfor
        </div>
@endforeach
<input type="hidden" name="stat_id" value="{{$onemonthstat->id}}">




