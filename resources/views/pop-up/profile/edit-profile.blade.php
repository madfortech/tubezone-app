<form method="POST" action="{{ route('profile.profile.update') }}">
    @csrf

    <div class="row gx-0 mb-2">
        <div class="col-lg-12">
            <input 
                class="form-control form-control-sm"
                value="{{ old('name', auth()->user()->name) }}"  
                type="text" 
                name="name"> 
        </div>
    </div>
    {{-- Name  --}}


    <div class="row gx-0 mb-2">
        <div class="col-lg-12">
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
        <div class="col-lg-12">
            <input 
                class="form-control form-control-sm"
                value="{{ old('username', auth()->user()->username) }}"  
                type="text" 
                name="username"> 
        </div>
    </div>
    {{-- Username  --}}

    <div class="row gx-0 mb-2">
        <div class="col d-grid ">
            <button class="btn btn-primary btn-sm rounded-pill" type="submit">
                {{('update')}}
            </button>
        </div>
    </div>

    
</form>