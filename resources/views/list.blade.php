<?php
use App\Models\Company;

$companies = Company::orderBy('id','desc')->paginate(5);
?>

<x-guest-layout>
    @foreach ($companies as $company)
    <tr>
        <td>{{ $company->id }}</td>
        <td>{{ $company->name }}</td>
        <td>{{ $company->email }}</td>
        <td>{{ $company->address }}</td>
        <td>
            <form action="{{ route('companies.destroy',$company->id) }}" method="Post">
                <a class="btn btn-primary" href="{{ route('companies.show',$company->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
        <td><img class="h-16 w-auto" src="{{ url('storage/'.$company->image) }}" alt="" title="" /></td>
    </tr>
    @endforeach
</x-guest-layout>