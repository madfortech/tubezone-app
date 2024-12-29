<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    
                                            <table class="table my-0">
                                                <thead>
                                                    <tr>
                                                        <th>{{('Id')}}</th>
                                                        <th>{{('suggested_by')}}</th>

                                                        <th>{{('name')}}</th>
    

                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('description')}}
                                                            </span>
                                                        </th>
     
     
                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('created_at')}}
                                                            </span>
                                                        </th>

                                                        <th data-bs-toggle="tooltip" data-bss-tooltip="" title="learn more">
                                                            <br><br>
                                                            <span style="color: rgb(96, 96, 96);">
                                                                {{('updated_at')}}
                                                            </span>
                                                        </th>
 
                                                    </tr>
                                                </thead>

                                                @forelse ($featuresuggestion as $item)
                                                <tbody>
                                                 
                                                    <tr data-entry-id="">
                                                        <td> {{ $item->id ?? '' }}</td>
                                                        <td> {{ $item->user()->first()->name ?? $item->suggested_by }}</td>
                                                        <td> {{ $item->name ?? '' }}</td>
                                                        <td> {{ $item->description ?? '' }}</td>
                                                     
                                                        <td> {{ $item->created_at ?? '' }}</td>
                                                        <td> {{ $item->updated_at ?? '' }}</td>
                                                         
                                                    </tr>
                                                    
                                                </tbody>
                                                @endforeach
                                            </table>
</div>
