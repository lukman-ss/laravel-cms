<div class="table-responsive table-loading">
    @if($isLoading)
        <div wire:loading.delay>

            <livewire:component.loading />
        </div>
    @else
	<table wire:loading.remove class="table table-row-bordered gy-5">
		<thead>
			<tr class="fw-bold fs-6 text-gray-800">
                @foreach ($aliases as $alias)
                <th>{{ $alias }}</th>
                @endforeach
                <th>Action</th> 
			</tr>
		</thead>
		<tbody>
            @foreach ($datas as $data)
            <tr>
                @foreach ($headers as $header)
                <td>{{ $data[$header] }}</td>
                {{-- <td><livewire:form.button /> </td> --}}
                @endforeach
			</tr>
            @endforeach
		</tbody>
	</table>
    @endif
</div>
