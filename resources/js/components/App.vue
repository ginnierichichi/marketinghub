<template>
    <div id="app">
        <vue-dropdown
            :config="config"
            @setSelectedOption="setNewSelectedOption($event);"
        ></vue-dropdown>
    </div>
</template>

<script>
import vueDropdown from "./VueDropdown";

export default {
    name: "App",
    components: {
        vueDropdown
    },
    data: function() {
        return {
            config: {
                options: [
                    {
                        value: "Scolmore"
                    },
                    {
                        value: "Ovia"
                    },
                    {
                        value: "Unicrimp"
                    }
                ],
                placeholder: "Select Company",
                backgroundColor: "#cde4f5",
                textColor: "black",
                borderRadius: "2.0em",
                border: "1px solid gray",
                width: 220
            }
        };
    },
    methods: {
        setNewSelectedOption(selectedOption) {
            this.config.placeholder = selectedOption.value;
        }
    }
};
</script>

<!--<style>-->
<!--#app {-->
<!--    font-family: "Avenir", Helvetica, Arial, sans-serif;-->
<!--    -webkit-font-smoothing: antialiased;-->
<!--    -moz-osx-font-smoothing: grayscale;-->
<!--    text-align: center;-->
<!--    color: #2c3e50;-->
<!--    margin-top: 60px;-->
<!--    font-size: 10px;-->
<!--}-->
<!--</style>-->
