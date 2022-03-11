<?php
//7.Работа с циклами в шаблонизаторе Blade фреймворка Laravel
//7
@if(gettype($data) == 'array')
        <ul>
        @foreach($data as $elem)
                <li>{{$elem}}</li>
        @endforeach
        </ul>
@elseif(gettype($data) == 'integer')
 <p>{{ $data }}</p>
@else
 'Переменная не число и не массив!'
@endif

//8
<table border="1">
@foreach($arr as $elem)
<tr>
    @foreach($elem as $subelem)
    <td>{{ $subelem }}</td>
    @endforeach
</tr>
@endforeach
</table>

//9
 <ul>
@foreach($arr as $elem)
 <li>{{ $elem['name'] }} {{ $elem['surname'] }}  {{ $elem['salary'] }} </li>
@endforeach
</ul>

//10
<table border=1>
@foreach($arr as $elem)
 <tr><th>{{ $elem['name'] }}</th><th>{{ $elem['surname'] }}</th>  <th>{{ $elem['salary'] }}</th></tr>
@endforeach
</table>

//11
<ul>
@foreach($arr as $elem)
 <li>@php echo $loop->index @endphp {{ $elem }}</li>
@endforeach
</ul>

//12
<ul>
@foreach($arr as $elem)
 <li>@php echo $loop->iteration @endphp {{ $elem }}</li>
@endforeach
</ul>

//13
<ul>
@foreach($arr as $elem)
        @if($loop->first)
        @php $class = ' class='.'first' @endphp
        @elseif($loop->last)
        @php $class = ' class='.'last' @endphp
        @else
        @php $class = '' @endphp
        @endif
        <li{{ $class }}>@php echo $loop->iteration @endphp {{ $elem }}<li>
@endforeach
</ul>

//14
@foreach($arr as $elem)
        @if($loop->remaining >= 3)
          <b>{{ $elem }}</b>
        @else
          <i>{{ $elem }}</i>
        @endif         
@endforeach

//16
@forelse($arr as $elem)
 <p>{{ $elem }}</p>
@empty
  <p>No users</p>
@endforelse

//17
@for($i = 1; $i <= 10; $i++)
 <p>{{ $i }}</p>
@endfor






@foreach($arr as $elem)
        @if($loop->remaining == 5)
          @continue
        @elseif($loop->remaining >= 3)
          <b>{{ $elem }}</b>
        @else
          <i>{{ $elem }}</i>
        @endif         
@endforeach


@foreach($arr as $elem)
        @if($loop->remaining == 3)
          @break
        @elseif($loop->remaining >= 3)
          <b>{{ $elem }}</b>
        @else
          <i>{{ $elem }}</i>
        @endif         
@endforeach

 @foreach($arr as $elem)
        @continue($loop->remaining == 3)
        @if($loop->remaining >= 3)
          <b>{{ $elem }}</b>
        @else
          <i>{{ $elem }}</i>
        @endif         
@endforeach

@foreach($arr as $elem)
        @break($loop->remaining == 3)
        @if($loop->remaining >= 3)
          <b>{{ $elem }}</b>
        @else
          <i>{{ $elem }}</i>
        @endif         
@endforeach



















