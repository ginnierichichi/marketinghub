<div class="content text-center">
    <div class="title">
        Marketing Hub
    </div>
</div>

<!-----------Create a Modal-------------->


<!-----------Create a Table-------------->



{{--                        <new-user-modal> </new-user-modal>--}}




{{--<a href="" @click.prevent="$modal.show('create-user')">Create User</a>--}}

<modal name="create-user" class="rounded-lg p-10 " :width="400" :height="350">
    <h1 class="font-bold mt-10 text-center text-2xl">Create New User</h1>
    <form method="POST" action="/" class="bg-contain">
        @csrf
        @method('POST')
        <div class="px-8">
            <label for="username" class="text-m pt-4 mb-2 block">Username</label>
            <input
                type="text"
                id="username"
                class="border  p-2 text-sm block rounded w-full"
                name="username"
                placeholder="Add user here"
                required>
        </div>

        <div class="px-8">
            <label for="password" class="text-m pt-4 mb-2 block">Password</label>
            <input type="text"
                   class="border p-2 text-sm block rounded w-full"
                   id="password"
                   name="password"
                   placeholder="Add password here"
                   required
            >
        </div>
        <footer class="mt-4 mb-4">
            <button type="submit" class="button is-outlined ml-8 border bg-blue-200 rounded-lg py-2 px-3 ">Create User</button>
            <button class="button border ml-2 border-blue-200 rounded-lg py-2 px-3" @click="$modal.hide('create-user')">Cancel</button>
        </footer>
    </form>
</modal>

<button class="button is-outlined border bg-white hover:bg-blue-200 hover:border-blue-500 rounded-lg py-2 px-4 shadow-md" @click.prevent="$modal.show('create-user')">New User</button>

