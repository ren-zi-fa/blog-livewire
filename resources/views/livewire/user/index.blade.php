<div
  class="p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

  <x-search-input :search="$search" />

  <div class="relative overflow-x-auto sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right ">
      <thead class="text-xs text-gray-700 border-b-2 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            No
          </th>
          <th scope="col" class="px-6 py-3" wire:click="doSort('name')">
            <x-data-tables-item :sortColumn="$sortColumn" :sortDirection="$sortDirection" columnName='name' />

          </th>
          <th scope="col" class="px-6 py-3" wire:click="doSort('email')">
            <x-data-tables-item :sortColumn="$sortColumn" :sortDirection="$sortDirection" columnName='email' />
          </th>
          <th scope="col" class="px-6 py-3">
            Role
          </th>

          <th scope="col" class="px-6 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody class="border-b-2">
        @foreach ($users as $user)

        <tr>
          <td class="px-6 py-4">
            {{$loop->iteration}}
          </td>
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{$user->name}}
          </th>
          <td class="px-6 py-4">
            {{$user->email}}
          </td>
          @foreach ($user->roles as $role)
          <td class="px-6 py-4">
            {{$role->name}}
          </td>
          @endforeach

          <td class="px-6 py-4">
            <button
              wire:click="$dispatch('openModal', { component: 'user.edit-user', arguments: { user: '{{ $user->uuid }}' }})"
              class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
              edit
            </button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="flex items-center py-2 px-5 gap-2">
    <label for="page">Per Page</label>
    <select id="page" wire:model.live='perPage'
      class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
      <option value="20">20</option>
      <option value="25">25</option>
      <option value="30">30</option>
    </select>
  </div>
  <div class="" wire:ignore>
    {{$users->links('vendor/pagination/tailwind')}}

  </div>
</div>