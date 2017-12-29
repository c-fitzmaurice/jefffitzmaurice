<script>
    export default {
        props: ['links'],
        data() {
            return {
                open: false
            }
        },
        methods: {
            toggle() {
                this.open = !this.open;
            }
        }
    }
</script>
