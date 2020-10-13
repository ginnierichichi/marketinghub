<template>
    <div>
        <!------- button ------>
        <button
            class= "button is-outlined border bg-white hover:bg-blue-200 hover:border-blue-500 rounded-lg py-2 px-4 shadow-md"
            @click.prevent="newUser()">New User
        </button>
        <!---------- Modal --------->

        <modal name="create-user" class="rounded-lg p-10" :width="400" :height="375">
            <h1 class="font-bold mt-10 text-center text-2xl">Create New User</h1>
            <form @submit.prevent="submit">
                <div class="px-8">
                    <label for="username" class="text-m pt-4 mb-2 block">Username</label>
                    <input
                        type="text"
                        id="username"
                        class="border p-2 text-sm block rounded w-full"
                        :class="form.errors.username ? 'border-red-500' : 'border-muted-light' "
                        placeholder="Add user here"
                        v-model="form.username">
                    <span class="text-xs italic text-error" v-if="form.errors.username"
                          v-text="form.errors.username[0]"></span>
                </div>

                <div class="px-8">
                    <label for="password" class="text-m pt-4 mb-2 block">Password</label>
                    <input
                        type="text"
                        id="password"
                        class="border p-2 text-sm block rounded w-full"
                        :class="form.errors.password ? 'border-red-500' : 'border-muted-light' "
                        placeholder="Add password here"
                        v-model="form.password">

                    <span class="text-xs italic text-error" v-if="form.errors.password"
                          v-text="form.errors.password[0]"></span>
                </div>
                <footer class="mt-4 mb-4">
                    <button class="button is-outlined ml-8 border bg-blue-200 rounded-lg py-2 px-3">Create User</button>
                    <button type="button" class="button border ml-2 border-blue-200 rounded-lg py-2 px-3"
                            @click="form.reset();$modal.hide('create-user')">Cancel
                    </button>
                </footer>

            </form>
        </modal>
    </div>
</template>

<script>
import NewUserForm from './NewUserForm';

export default {

    props: {
        company: ''
    },

    data() {
        return {
            form: new NewUserForm({
                username: '',
                password: '',
            })
        };
    },

    methods: {
        async submit() {
            this.form.submit('/' + this.company)
                .then(response => location = response.data.message
                    // console.log(response.data.message);
                )

            // .catch(error => {
            //    this.errors = error.response.data.errors;
            // })
        },
        newUser() {         //this removes autofill
            this.form.errors = {};

            return this.$modal.show('create-user');
        }
    },
}


</script>

<!--<style scoped>-->

<!--</style>-->
