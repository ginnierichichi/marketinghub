<!--<template>-->
<!--    <form method="POST" @submit.prevent="submit">-->
<!--        <button type="submit" class="flex items-center  text-gray-900 whitespace-no-wrap ml-2">-->
<!--            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline&#45;&#45;fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="15" height="20">-->
<!--                <path fill="#c53030" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path>-->
<!--            </svg>-->
<!--            <div class="pl-2 hover:text-red-700">-->
<!--                Delete-->
<!--            </div>-->
<!--        </button>-->
<!--    </form>-->
<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    props: {-->
<!--      id: ''-->
<!--    },-->
<!--    methods: {-->
<!--        submit() {-->
<!--            this.errors = {};-->

<!--            axios.delete('/'+ this.id, this.form)-->
<!--                .then(response => {-->
<!--                    location = response.data.message;-->
<!--                })-->
<!--                .catch(error => {-->
<!--                    this.errors = error.response.data.errors;-->
<!--                })-->
<!--        }-->
<!--    }-->
<!--}-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->
