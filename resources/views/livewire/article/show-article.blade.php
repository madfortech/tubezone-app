<div>
    {{-- The whole world belongs to you. --}}
    <div class="card">
 
        <div class="card-body">
            <h5 class="card-title"> {{ $article->title }}</h5>
            <p class="card-text">    {{ $article->description }}</p>
            <p class="card-text">    {{ $article->created_at }}</p>
        </div>
    </div>
</div>
