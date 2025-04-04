@extends('layouts.app')

@section('content')
<body class="flex">
    <x-sidebar />
    <div class="p-6 w-full">
        @livewire('content-area')
    </div>
  
</body>
@endsection