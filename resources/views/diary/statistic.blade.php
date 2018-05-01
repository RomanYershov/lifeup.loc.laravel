
@inject('DaysStat','\App\DiaryHelper')



@foreach($DaysStat::getStringByArray($onemonthstat->statistics) or 'Default' as $index => $days)
        <div class="oneDayColumn">
            <input class="inp day-num" type="text" value="{{$index+1}}">
            @for($i=0;$i<count($days);$i++)
                <input class="inp" inp_id="{{$i}}" type="text" value="{{$days[$i]}}">
            @endfor
        </div>
@endforeach




