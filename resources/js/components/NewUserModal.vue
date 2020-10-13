<template>
<!--    //button-->

    <modal name="create-user" class="rounded-lg p-10" :width="400" :height="375">
            <h1 class="font-bold mt-10 text-center text-2xl">Create New User</h1>
    <form @submit.prevent="submit">
            <div class="px-8">
                <label for="username" class="text-m pt-4 mb-2 block">Username</label>
                <input
                    type="text"
                    id="username"
                    class="border p-2 text-sm block rounded w-full"
                    :class = "errors.username"
                    v-model="form.username">
                <span class="text-xs italic text-error" v-if="errors.username" v-text="errors.username[0]"></span>
            </div>

            <div class="px-8">
                <label for="password" class="text-m pt-4 mb-2 block">Password</label>
                <input type="text" id="password" class="border p-2 text-sm block rounded w-full" v-model="form.password">
                <span class="text-xs italic text-error" v-if="errors.password" v-text="errors.password[0]"></span>
            </div>
            <footer class="mt-4 mb-4">
                <button class="button is-outlined ml-8 border bg-blue-200 rounded-lg py-2 px-3">Create User</button>
                <button type="button" class="button border ml-2 border-blue-200 rounded-lg py-2 px-3" @click="$modal.hide('create-user')">Cancel</button>
            </footer>



    </form>
    </modal>
</template>

<script>
export default {
    data() {
        return {
            form: {
                username: '',
                password: '',
            },
            errors: {},
            open: false,
        };
    },

    methods: {
         submit() {
             this.errors = {};

          axios.post('/scolmore', this.form)
            .then(response => {
                location = response.data.message;
            })
            .catch(error => {
               this.errors = error.response.data.errors;
            })
        }
    }
}


</script>

<!--<style scoped>-->

<!--</style>-->
