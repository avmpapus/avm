@extends('layouts.main-front')

@section('content')

<div class="clearfix"></div>

<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    @include('website.left-menu-sk')
</div>

<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>


        <div style="margin:-10px;padding:10px;">
            <h4 class="archive-title-sk">
                <p class="text-center">Архив новостей</p>
            </h4>
        </div>


        {{--var_dump(is_int((int)'55*1'))--}}
        @foreach($posts as $one_post)
        <div class="sk-div-post" data-id = "{{ $one_post->id }}">

            <div class="row">
            <div class="col-md-12">
                <b>
                    &nbsp;&nbsp;&nbsp;
                    {{ $one_post->title }}
                </b>
            </div>
            </div>

            <p class="">
                &nbsp;&nbsp;&nbsp;
                {{\Carbon\Carbon::parse($one_post->created_at)->format("от j/m/Y в G:i")}}
            </p>


            @if($one_post->img)
            <div class="col-md-12">
                <a class="sk-popup-link" href="{{$one_post->img}}">
                <img src="{{ $one_post->img }}" class="img-responsive img-post-sk">
                </a>
            </div>
            @endif

            @if($one_post->video)
            <div class="video-sk col-md-12">
                {!! $one_post->video !!}
            </div>
            @endif

            <p>
                {!! $one_post->description !!}
            </p>

            <a href="" style="text-decoration: none;">
                Подробнее
            </a>
            <br />

            <font color="gray">
                категория: {{ $one_post->category }}
            </font>
            <br />
            Просмотров: {{ $one_post->visits_for_post_count }}

            <table class="table-like table-like-archive">
            <tr>
                <td class="td-one-sk">
                    <img  src='{{asset('assets-front/img/very_like.png')}}' width='20' class=""/>
                    {{$one_post->very_like_for_post_count}}
                </td>

                <td class="td-one-sk">
                    <img src='{{asset('assets-front/img/like.png')}}' width='20' class="radius_unlikes"/>
                    {{$one_post->like_for_post_count}}
                </td>

                <td class="td-one-sk">
                    <img src='{{asset('assets-front/img/unlike.png')}}' width='20' class="radius_unlikes"/>
                    {{$one_post->unlike_for_post_count}}
                </td>

            </tr>
            </table>


            <div class="div-comments">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 div-all-comments">

                {{-- если больше 3 комментов, вывести кнопку и 3 последних поста --}}
                @if($one_post->commentsForPost->count()>3)

                <button type="button" class="btn btn-warning btn-lg btn-block btn-xs btn-more-comment">
                    <strong>
                        показать все
                    </strong>
                </button>
                @endif

                <hr>


                {{-- take(-3) возвращает новую коллекцию с указанным числом элементов c конца --}}
                {{-- @foreach($one_post->comments->take(-3) as $comment) --}}
                @foreach($one_post->commentsForPost as $key=>$comment)
                {{-- если комментарий не входит в 3 последних --}}
                <div class="{{($key < $one_post->commentsForPost->count()- 3)  ? 'comment-hidden' : 'comment-block-no-hidden'}}">
                    <div class="row">
                    <div class="com-title col-md-10">
                        <img src="{{$comment->userForComment->profileForUser->photo}}"
                            width="50" height="50" class="" alt="">
                        &nbsp;
                        <strong>
                            <span class="author-name" data-authorid="">
                                {{$comment->userForComment->profileForUser->name}}
                            </span>
                            {{$comment->userForComment->profileForUser->last_name}}
                        </strong>

                    </div>


                    </div>

                    <div class="com-content">
                        {!! $comment->comment !!}
                    </div>

                    <div class="com-time">
                        <p class="text-info">
                        <small>
                            {{\Carbon\Carbon::parse($comment->created_at)->format("отправлено j/m/Y в G:i")}}
                        </small>
                        </p>
                    </div>
                    {{-- \Carbon\Carbon::now()->diffForHumans($comment->updated_at,true) --}}
                    {{-- \Carbon\Carbon::now()->diffInDays($comment->updated_at) --}}
                    <hr>
                </div>
                @endforeach

                </div>
            </div>
            </div>






        </div>
        @endforeach

        <div class="pages-pagination text-center">
        {{ $posts->render() }}
        </div>

    </div>
</div>


<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div class="rightcolm">

        @include('website.right-menu-sk')

    </div>
</div>



@endsection