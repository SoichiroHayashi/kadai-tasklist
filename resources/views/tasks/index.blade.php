@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>コンテンツ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $row)
                <tr>
                    {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $row->id, ['task' => $row->id]) !!}</td>
                    <td>{{ $row->status }}</td>
                    <td>{{ $row->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規コンテンツの投稿', [], ['class' => 'btn btn-primary']) !!}
    
@endsection