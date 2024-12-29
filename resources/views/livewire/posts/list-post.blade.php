<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
                              
                                    <div class="table-responsive overflow-x-scroll w-75">
                                        
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                 
                                                    <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                                                        <br>
                                                        <span style="color: rgb(96, 96, 96);">{{('Id')}}</span>
                                                    </th>

                                                    <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                                                        <br>
                                                        <span style="color: rgb(96, 96, 96);">{{('Title')}}</span>
                                                    </th>
                                                  
                                                    <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                                                        <br>
                                                        <span style="color: rgb(96, 96, 96);">{{('Description')}}</span>
                                                    </th>
 
                                                    <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                                                        <br><br>
                                                        <span style="color: rgb(96, 96, 96);">{{('Restrictions')}}</span>
                                                    </th>

                                                    <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                                                        <br><br>
                                                        <span style="color: rgb(96, 96, 96);">{{('Audience ')}}</span>
                                                    </th>

                                                    <th data-bs-toggle="tooltip" data-bss-tooltip="">
                                                        <br><br>
                                                        <span style="color: rgb(96, 96, 96);">
                                                            {{('Date')}}
                                                        </span>
                                                    </th>

                                                    <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                        <br><br>
                                                        <span style="color: rgb(96, 96, 96);">
                                                            {{('Views')}}
                                                        </span>
                                                    </th>

                                                    <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                        <br><br>
                                                        <span style="color: rgb(96, 96, 96);">
                                                            {{('Edit')}}
                                                        </span>
                                                    </th>
 
                                                    
                                                </tr>
                                            </thead>

                                            @forelse ($posts as $item)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->title }}</td>
                                                   
                                                    <td>{{ $item->description }}</td>
                                                   
                                                    <td>{{$item->restrictions}}</td>
                                                    <td>
                                                        {{ $item->audience }} 
                                                    </td>
                                                    <td>{{$item->created_at}}</td>
                                                    <td>{{$item->views}}</td>
                                                   

                                                    <td>
                                                        @can('update-post', $item)
                                                            <a class="text-decoration-none text-info fw-semibold text-capitalize" 
                                                                href="{{ route('posts.edit', $item->id) }}">
                                                                {{ __('edit') }}
                                                            </a>
                                                        @endcan
                                                    </td>
                                                   
                                                    
 
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                             
</div>