<script>
import VueGallery from "vue-gallery";

export default {
  props: ["image"],
  data() {
    return {
      index: null,
      images: [this.image],
    };
  },
  components: {
    gallery: VueGallery,
  },
};
</script>
