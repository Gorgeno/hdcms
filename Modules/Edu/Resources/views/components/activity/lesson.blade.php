<div class="d-flex pt-3 pb-3 border-bottom align-items-center mb-2">
    <a href="{{ route('Edu.space.topic',$lesson->user) }}">
        <span class="mr-3 ant-avatar ant-avatar-square ant-avatar-image">
            <img src="{{ $lesson->user->avatar }}" class="w45 rounded">
        </span>
    </a>
    <div class="d-flex flex-column justify-content-between">
        <a href="{{ route('Edu.front.lesson.show',$lesson) }}" class="text-secondary h5">
            {{ $lesson->title }}
        </a>
        <div class="small text-black-50">
            <span class="badge badge-info">发布课程</span>
            <a href="{{ route('Edu.space.topic',$lesson->user) }}" class="">{{ $lesson->user->name }}</a>
            . 发表于 {{ $lesson->updated_at->diffForHumans() }}
            <span>. 点赞 {{ $lesson['favour_count'] }}</span>
            <span>. 收藏 {{ $lesson['favorite_count'] }}</span>
        </div>
    </div>
</div>