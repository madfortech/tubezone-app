<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                    <br>
                    <span style="color: rgb(96, 96, 96);">{{('id')}}</span>
                </th>

                <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                    <br>
                    <span style="color: rgb(96, 96, 96);">{{('type')}}</span>
                </th>

                <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                    <br>
                    <span style="color: rgb(96, 96, 96);">{{('notifiable')}}</span>
                </th>

                <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                    <br>
                    <span style="color: rgb(96, 96, 96);">{{('data')}}</span>
                </th>

                <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                    <br>
                    <span style="color: rgb(96, 96, 96);">{{('read_at')}}</span>
                </th>

                <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                    <br>
                    <span style="color: rgb(96, 96, 96);">{{('created_at')}}</span>
                </th>
 
 
                <th data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="bottom" title="learn more">
                    <br>
                    <span style="color: rgb(96, 96, 96);">{{('updated_at')}}</span>
                </th>

          
            </tr>
        </thead>

        <tbody>
            @forelse($usersHistory as $history)
                <tr>
                    <td>{{ $history->id }}</td>
                    <td>{{ $history->type }}</td>
                    <td>{{ $history->notifiable_id }}</td>
                    <td>{{ $history->data }}</td>
                    <td>{{ $history->read_at }}</td>
                    <td>{{ $history->created_at }}</td>
                    <td>{{ $history->updated_at }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7">No history found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>