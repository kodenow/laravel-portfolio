{{-- 
    Comparing multiple possible conditions
    Multiple values that may require the same code
--}}

<h2>Name is {{ $name }}</h2>
@switch($name)
    @case('Dary')
        <p>President</p>
        @break
    @case('John')
        <p>The CEO</p>
        @break
    @case('KodeNow')
        <p>This is a software developer</p>
        @break
    @default
        <h2>NO match found</h2>
@endswitch