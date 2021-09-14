import {mapFields} from "vuex-map-fields";
import {mapActions, mapGetters} from "vuex";

export default {
  created(){
    this.retrieve('/api/config');
  },
  computed: {
    ...mapFields('config',{
      retrieved: 'retrieved'
    }),
    ...mapGetters('config', {
      find: 'find'
    }),
    config(){
      return this.find(decodeURIComponent('/api/config?id=1')) || {};
    }
  },
  methods: {
    ...mapActions('config', {
      retrieve: 'load'
    })
  }
}
