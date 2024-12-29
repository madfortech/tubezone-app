<form method="POST" action="{{ route('profile.profile.update') }}" enctype="multipart/form-data">
    @csrf

    <div class="row gx-0 mb-2">
        <div class="col-lg-12">
            <label for="">name</label>
            <input 
                class="form-control form-control-sm"
                value="{{ old('name', auth()->user()->name) }}"  
                type="text" 
                name="name"> 
        </div>
    </div>
    {{-- Name  --}}

    <div class="row gx-0 mb-2">
        <div class="col-lg-12 py-2">
            <label for="">avatar</label>
            <input 
                type="file" 
                class="form-control form-control-sm" 
                name="avatar">
        </div>
    </div>
    {{-- avatar  --}}

    <div class="row gx-0 mb-2">
        <div class="col-lg-12 py-2">
            <label for="">email</label>
                <span>update
                    <a href="{{route('user.email-update.index')}}">edit</a>
                </span>
            <input 
                class="form-control form-control-sm"
                disabled
                value="{{ old('email', auth()->user()->email) }}"  
                type="email" 
                name="email"> 
        </div>
    </div>
    {{-- Email  --}}

    <div class="row gx-0 mb-2">
        <div class="col-lg-12 py-2">
            <label for="">username</label>
            <input 
                class="form-control form-control-sm"
                value="{{ old('username', auth()->user()->username) }}"  
                type="text" 
                disabled
                name="username"> 
        </div>
    </div>
    {{-- Username  --}}

    <div class="row gx-0 mb-2">
        <div class="col d-grid">
            <button class="btn btn-primary btn-sm rounded-pill" type="submit">
                {{('update')}}
            </button>
        </div>
    </div>

    
</form>