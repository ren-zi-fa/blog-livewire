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
            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="flex items-center py-2 px-5 gap-2">
    <label for="page">Per Page</label>
    <select id="page" wire:model.live='perPage'
      class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
      <option selected value="10">10</option>
      <option value="15">15</option>
      <option value="20">20</option>
      <option value="25">25</option>
      <option value="30">30</option>
    </select>
  </div>
  {{$users->links( )}}
</div>