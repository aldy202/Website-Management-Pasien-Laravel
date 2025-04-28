{{-- @if(($nilai >= 0) and ($nilai < 50))
tidak lulus
@elseif (($nilai >=50)and($nilai <= 100))
lulus
@else Tidak Teridentifikasi
@endif --}}


@for($i=1; $i<=10; $i++)
    <p>{{$i}}</p>
@endfor

{{--
@switch($nilai)
    @case(0)
        Sangat Buruk
        @break
    @case(75)
        Baik
        @break
    @case(100)
        Sempurna
        @break
    @default
    Nilai Tidak Valid
        
@endswitch

--}}