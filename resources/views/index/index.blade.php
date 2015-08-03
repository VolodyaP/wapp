@extends('app')

@section('content')

<div class="row">
    @include('admin.sidebar')

    <div class="col-lg-8">
        <div class="table-responsive">
            <table class="table">
                <th>Назва</th>
                 @foreach($events as $event)
                    <tr>
                        <td class="active"><a href="{{url('')}}">{{$event->id}}</a></td>
                    </tr>
                 @endforeach
            </table>
        </div>
    </div>
</div>
@endsection