@php
    use App\Models\Ban;
@endphp
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">report</h1>
         
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.reports.store', ['post' => $item->id]) }}" method="post">


                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <div class="form-check">
                                    @foreach(App\Models\Ban::COMMENTS as $key => $label)
                                        <div class="form-check">
                                            <input class="form-check-input" 
                                                type="radio" 
                                                value="{{ $key }}"
                                                name="comment"
                                                {{ old('comment', '') === (string) $key ? 'checked' : '' }}>
                                            <label class="form-check-label">
                                                {{ $label }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <button class="btn btn-primary btn-sm rounded-pill" type="submit">
                                    {{('report')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                
                
            </div>
        </div>
    </div>
</div>