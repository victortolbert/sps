<template>
  <div>
    <h1>Oldtime Cars</h1>
    <div v-for="car in cars">

    </div>
  </div>
</template>
<script>
  import mixin from '@/mixins';

  export default {
    mixins: [ mixin ],
    data() {
      return {
        cars: null
      }
    }
  };
</script>