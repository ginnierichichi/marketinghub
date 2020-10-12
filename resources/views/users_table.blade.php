<div id="container" class="container ml-auto mr-auto ml--5 border rounded-lg bg-white m-10 shadow-md" width="full">
<div class="m-10">
    <div>
        <h2 class="text-2xl pb-4 font-semibold leading-tight">Users</h2>
    </div>


    <table class="min-w-full leading-normal" id="datatable">
        <thead>
        <tr class="py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-m font-semibold text-gray-600 uppercase tracking-wider">
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr class="hover:bg-orange-100 bg-white">
                <td class="px-5 py-5 border-b border-gray-200 text-m hover:bg-orange-100">
                    <div class="flex items-center">
                        <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                                {{ $user->username }}
                            </p>
                        </div>
                    </div>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 text-m">
                    <p class="text-gray-900 whitespace-no-wrap ml-2">{{ $user->password }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 text-m">
                    <form method="POST" action="/{{ $user->id }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="flex items-center  text-gray-900 whitespace-no-wrap ml-2">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="15" height="20">
                                <path fill="#c53030" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path>
                            </svg>
                            <div class="pl-2 hover:text-red-700">
                                Delete
                            </div>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
