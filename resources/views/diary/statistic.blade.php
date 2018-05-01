@inject('DaysStat','\App\Helper')

<div class="box" style="">
@foreach($DaysStat::getStringByArray($onemonthstat->statistics) as $days)
        <div class="oneDayColumn" style="float: left;margin: 2px;width: 22px;">
            @for($i=0;$i< count($days);$i++)
                <input type="text" value="{{$days[$i]}}" style="width: 22px;height: 22px;">
            @endfor
        </div>
@endforeach
</div>