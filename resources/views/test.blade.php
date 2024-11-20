<style>
div{
    color:red;
    width: 200px;
    height: 200;
    border: 1px solid green;

}
</style>

<div>  {{ $y }}  </div>

@if ($my_num>5)
greater
@else
ay7aga
@endif

@for ($i=0;$i<=10;$i++)
{{ $i }}
@endfor

@foreach ($cars as $car)
{{ $car }}
@endforeach
