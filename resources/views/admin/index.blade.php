@forelse ($users as $user)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>


            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @empty
        <td colspan="5" style="text-align: center;">No Users</td>
@endforelse 