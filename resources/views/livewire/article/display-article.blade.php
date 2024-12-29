<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @forelse ($articles as $item)
        <div class="card mb-2" style="width:50%; margin:auto;">
    
            <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ Str::limit($item->description, 200) }}</p>
                <a href="{{route('article.show',$item->id)}}" class="btn btn-primary rounded-pill text-capitalize">
                    {{('readmore')}}
                </a>
            </div>
        </div>
    @endforeach
</div>
