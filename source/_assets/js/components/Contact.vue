<script>
    export default {
        data() {
            return {
                form: {
                    name: '',
                    email: '',
                    subject: '',
                    message: ''
                },
                success: false
            }
        },
        methods: {
            submit() {
                let vm = this;
                axios.post('https://formspree.io/colin@fitz-maurice.com', this.form)
                    .then(response => {
                        if (response.data.success === 'email sent') {
                            vm.reset();
                            vm.success = true;
                        }
                    });
            },
            reset() {
                this.form.name = '';
                this.form.email = '';
                this.form.subject = '';
                this.form.message = '';
            }
        }
    }
</script>
