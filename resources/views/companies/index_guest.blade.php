
<x-guest-layout>
    @foreach ($companies as $company)
    <tr>
        <td>{{ $company->id }}</td>
        <td>{{ $company->name }}</td>
        <td>{{ $company->email }}</td>
        <td>{{ $company->address }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('companies.show',$company->id) }}">Show</a>
        </td>
        <td><img class="h-16 w-auto" src="{{ url('storage/'.$company->image) }}" alt="" title="" /></td>
    </tr>
@endforeach
</x-guest-layout>
