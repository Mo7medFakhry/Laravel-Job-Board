<div>
    @foreach ($Jobs as $job)
        <div>{{ $job['title'] }} : {{ $job['salary'] }} </div>
    @endforeach
</div>
