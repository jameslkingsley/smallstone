<template>
    <div v-show="show" class="fixed z-50 pin bg-brand">
        <button class="absolute pin-t pin-r mt-8 mr-8 text-white text-5xl" @click.prevent="close">
            <i class="material-icons text-5xl">close</i>
        </button>

        <div class="container w-1/3 py-24 mx-auto align-middle text-white">
            <div v-show="notSent">
                <h1 class="text-center mb-4">Just a few questions</h1>
                <p class="text-center leading-normal mb-12">
                    After you submit your details I'll get in touch with you to schedule a time to discuss your project. You should expect to hear from me within a few days.
                </p>

                <div class="flex flex-wrap mb-2">
                    <div class="flex-1 m-2 w-1/2">
                        <input class="bg-transparent appearance-none border-3 border-transparent-1/2 w-full py-2 px-3 text-white" required v-model="form.name" name="name" placeholder="Name *">
                        <p class="pt-2 text-xs text-error">{{ form.getError('name') }}</p>
                    </div>

                    <div class="flex-1 m-2 w-1/2">
                        <input class="bg-transparent appearance-none border-3 border-transparent-1/2 w-full py-2 px-3 text-white" required v-model="form.email" type="email" name="email" placeholder="Email address *">
                        <p class="pt-2 text-xs text-error">{{ form.getError('email') }}</p>
                    </div>
                </div>

                <div class="flex flex-wrap mb-2">
                    <div class="flex-1 m-2 w-1/2">
                        <input class="bg-transparent appearance-none border-3 border-transparent-1/2 w-full py-2 px-3 text-white" v-model="form.phone" name="phone" placeholder="Phone number">
                        <p class="pt-2 text-xs text-error">{{ form.getError('phone') }}</p>
                    </div>

                    <div class="flex-1 m-2 w-1/2">
                        <input class="bg-transparent appearance-none border-3 border-transparent-1/2 w-full py-2 px-3 text-white" v-model="form.website" name="website" placeholder="Website">
                        <p class="pt-2 text-xs text-error">{{ form.getError('website') }}</p>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="flex-1 m-2 w-full">
                        <textarea class="resize-none leading-normal bg-transparent appearance-none border-3 border-transparent-1/2 w-full py-2 px-3 text-white" required v-model="form.body" rows="7" placeholder="Tell me about your project *"></textarea>
                        <p class="pt-2 text-xs text-error">{{ form.getError('body') }}</p>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="flex-1 m-2 w-full">
                        <button @click.prevent="submit" :class="submitClasses" :disabled="form.processing">
                            Submit
                        </button>
                    </div>
                </div>
            </div>

            <div v-show="!notSent">
                <h1 class="text-center mb-4">Enquiry sent!</h1>
                <p class="text-center leading-normal mb-12">
                    You should expect to hear from me within a few days.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    import Form from 'form-backend-validation';

    export default {
        data() {
            return {
                show: false,
                notSent: true,
                form: new Form({
                    name: '',
                    body: '',
                    email: '',
                    phone: '',
                    website: '',
                })
            };
        },

        computed: {
            submitClasses() {
                return {
                    'btn': true,
                    'btn-hero': true,
                    'float-right': true,
                    'btn-loading': this.form.processing,
                };
            }
        },

        methods: {
            close() {
                this.show = false;
            },

            submit() {
                this.form.post('/contact')
                    .then(r => this.notSent = false)
                    .catch(e => console.log(this.form.errors.all()));
            }
        },

        mounted() {
            EventBus.listen('contact', e => {
                this.form.reset();
                this.notSent = true;
                this.show = true;
            });
        }
    }
</script>
