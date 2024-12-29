<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
                               

                                            <table class="table my-0">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('Id')}}
                                                            </span>
                                                        </th>
    
 
                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('Title')}}
                                                            </span>
                                                        </th>
    
                                                       
                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('Description')}}
                                                            </span>
                                                        </th>
    

                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('Created at')}}
                                                            </span>
                                                        </th>
    
                                                        
                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('updated at')}}
                                                            </span>
                                                        </th>
    
                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('Edit')}}
                                                            </span>
                                                        </th>
     
                                                        
                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('show')}}
                                                            </span>
                                                        </th>

                                                    </tr>
                                                </thead>

                                                @forelse ($articles as $item)
                                                <tbody>
                                                 
                                                        <tr data-entry-id="{{ $item->id }}">
                                                            <td>    {{ $item->id ?? '' }}</td>
                                                            <td>   {{ $item->title ?? '' }}</td>
                                                            <td>   {{ $item->description ?? '' }}</td>
                                                        
                                                            <td>   {{ $item->created_at ?? '' }}</td>
                                                           

                                                            <td>   {{ $item->updated_at ?? '' }}</td>
                                                     
                                                            <td>
                                                                <a class="text-decoration-none text-info fw-semibold text-capitalize" 
                                                                    href="{{ route('writer.edit-article', $item->id) }}" title="Edit Article">
                                                                    {{ __('edit') }}
                                                                </a>
                                                            </td>

                                                            <td>
                                                                <a class="text-decoration-none text-info fw-semibold text-capitalize" 
                                                                    href="{{route('article.show',$item->id)}}">
                                                                    {{ __('view') }}
                                                                </a>
                                                            </td>

                                                         
                                                        </tr>
                                                    
                                                </tbody>
                                                @endforeach
                                            </table>
</div>
