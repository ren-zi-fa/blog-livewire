<tr class="border-b border-gray-200 dark:border-gray-700">
    <td class="px-6 py-4">
        {{$user->uuid}}
    </td>
    <th scope="row"
        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
        {{$user->name}}
    </th>
    <td class="px-6 py-4">
        {{$user->email}}
    </td>
    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
        @foreach ($user->roles as $role)
        {{ $role->name }}
        @endforeach
    </td>
</tr>