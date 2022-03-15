my help list
При ошибке
The stream or file "/var/www/test.com/storage/logs/laravel.log" could not be opened in append mode: Failed to open stream: Permission denied
Mostly in ubuntu changing ownership to www-data and 775 permission solve this problem. But in centos this seems not enough. So you can run below command your projects root directory:

sudo chmod -R gu+w storage/
sudo chmod -R guo+w storage/
sudo chmod -R gu+w bootstrap/cache/
sudo chmod -R guo+w bootstrap/cache/


Выбор версии PHP по умолчанию

Вы можете выбрать какую версию php нужно использовать по умолчанию с помощью утилиты update-alternatives. Сначала смотрим доступные версии:

sudo update-alternatives --config php

Далее необходимо перезапустить Apache:
sudo systemctl restart apache2


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

