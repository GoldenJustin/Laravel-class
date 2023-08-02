{{-- @if (5>10)
<p>5 is lower than 10</p>
@elseif(5==10)
<p>Five is indeed lower than 10</p>
@else
<h2>All conditions are wrong</h2>
@endif

@unless (empty($name))
<h2>name is not empty</h2>
    
@endunless

@empty(!$name)
    <h2>name is empty</h2>
@endempty

@isset($name)
    <h2>Name has been set</h2>
@endisset --}}

{{-- COMPARING MULTIPLE POSSIBLE CONDITIONNS
    MULTIPLE VALUES THAT MAY REQUIRE THE SAME CODE --}}

    {{-- @switch($name)
        @case('james')
            <h1>Name is Justin</h1>
            @break
        @case('john')
            <h1>name is john</h1>
            @break
        @default
        <h2>no match found</h2>
            
    @endswitch --}}

    {{-- 
        loops
        
        
        for loop
        foreach loop
        for else loop
        while loop --}}

        @for ($i = 0; $i <= 10; $i++)
            <h2>number is {{$i}}</h2>
        @endfor

        @foreach ($names as $name)
            <h2>name is {{$name}}</h2>
        @endforeach

        @forelse ($names as $name)
            <h2>name is {{$name}}</h2>
        @empty
            <h2>There are no names</h2>
        @endforelse

        {{$i=0}}
        @while ($i<10)
            <h2>{{$i}}</h2>
            {{$i++}}
        @endwhile