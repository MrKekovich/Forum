<div class="list-group">
    @foreach($chats as $chat)
        <a href="{{ route('chats.show', $chat->id) }}"
           class="list-group-item list-group-item-action list-group-item-primary p-2 rounded">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="d-flex flex-start">
                        <img class="rounded-circle shadow-1-strong me-3"
                             src="{{ $chat->user->profile_pic }}"
                             alt="avatar"
                             width="40" height="40"
                             onerror="this.onerror=null; this.src='https://i.imgur.com/4q8VYRe.png'"/>
                        <div class="w-100">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="text-primary fw-bold mb-0">
                                    <div class="active">{{ $chat->user->name }}</div>
                                    <div class="text-dark ms-2">{{ $chat->message }}</div>
                                </h6>
                                <p class="mb-0">{{ $chat->created_at }}</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="small mb-0" style="color: #aaa;">
                                    {{--                                    <a href="#!" class="link-grey">Remove</a> •--}}
                                    {{--                                    <a href="#!" class="link-grey">Reply</a> •--}}
                                    {{--                                    <a href="#!" class="link-grey">Translate</a>--}}
                                </p>
                                <div class="d-flex flex-row">
                                    {{--                                    <i class="fas fa-star text-warning me-2"></i>--}}
                                    {{--                                    <i class="far fa-check-circle" style="color: #aaa;"></i>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <br>
    @endforeach

    <div class="mt-2">
        {{ $chats->links() }}
    </div>

</div>
