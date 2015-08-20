@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="pull-right">
                <span>
                    <form action="{{url('group/create')}}">
                        <button  type="submit" class="btn btn-info">Створити Групу</button>
                    </form>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive col-md-12">
                <div>
                    <h3>Групи</h3>
                </div>
                <table class="table custom-front-table">
                    <th style="border-top: 1px solid #e9c5cc">Назва</th>
                    <th style="border-top: 1px solid #e9c5cc">Кількість Співробітників</th>
                     @foreach($groups as $group)
                        <tr>
                            <td><a href="{{url('group/'.$group->id)}}">{{$group->name}}</a></td>
                            <td>{{$group->user_count}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
         </div>
    </div>
@endsection