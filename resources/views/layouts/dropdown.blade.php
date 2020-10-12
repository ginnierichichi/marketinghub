<dropdown align="right" width="150px">
    <template v-slot:trigger>
        <button type="button" class="inline-flex justify-center  rounded-md border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150">
            Company
        </button>
    </template>

    <a href="/scolmore" class="dropdown-menu-link" role="menuitem">Scolmore</a>
    <a href="/ovia" class="dropdown-menu-link" role="menuitem">Ovia</a>
    <a href="/unicrimp" class="dropdown-menu-link" role="menuitem">Unicrimp</a>

    <!---------------------------------------------Log Out Options ------------------------------------------------>

{{--                    <a href="#" class="dropdown-menu-link" onClick="javascript: document.querySelector('#logout-form').submit()">Logout</a>--}}

{{--                    <form id="logout-from" method="POST" action="/logout">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="dropdown-menu-link w-full text-left">Logout</button>--}}
{{--                    </form>--}}

</dropdown>

