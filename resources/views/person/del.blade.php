@extends('layouts.helloapp')

@section('title', 'Person.Edit')

@section('menubar')
    @parent
    削除ページ
@endsection

@section('content')
    <form action="/person/del" method='post'>
        <table>
            @csrf
            <input type="hidden" name='id' value="{{ $form->id }}">
            <tr><th>name: </th><td>{{ $form->name }}</td></tr>
            <tr><th>name: </th><td>{{ $form->mail }}</td></tr>
            <tr><th>name: </th><td>{{ $form->age }}</td></tr>
            <tr><th></th><td><input type="submit" value="DELETE"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection