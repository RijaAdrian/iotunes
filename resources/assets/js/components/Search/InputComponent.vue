<template>
    <div class="big_input_container">
        <form v-on:submit.prevent="doQuery">
            <input type="text" class="big_input" maxlength="20" v-model="write" autofocus placeholder="Search something..." v-on:keyup="writing">
            <div class="btn_container_header mr-auto ml-auto box">
                <button class="btn btn-outline-primary btn-round" v-on.click.prevent="doQuery" v-if="isValid">Search</button>
            </div>
        </form>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                write: '',
                isValid: false
            }
        },
        props: {
          currentValue: String
        },
        methods: {
            writing() {
                if(this.write.length > 0)
                    this.isValid = true
                else
                    this.isValid = false
                this.$emit('onTyping', this.write)
            },
            doQuery() {
                this.$emit('doQuery', this.write)
            }
        },
        mounted() {
            this.write = this.currentValue
            if(this.write.length > 0)
                this.isValid = true
        }
    }
</script>
<style>
    .big_input {
        border-radius: 40px;
        border: none;
        outline: none;
        color: #000;
        padding: 10px 15px;
        text-align: center;
        font-size: 50px;
    }

    .box {
        display: block;
        min-height: 40px;
        margin: 4px 0;
        text-align: center;
    }

    .big_input:-moz-placeholder {
        color: #000;
        opacity: .3;
        filter: alpha(opacity=100);
    }

    .big_input::-webkit-input-placeholder {
        color: #000;
        opacity: .3;
        filter: alpha(opacity=100);
    }

    .big_input:-ms-input-placeholder {
        color: #000;
        opacity: .3;
        filter: alpha(opacity=100);
    }

</style>