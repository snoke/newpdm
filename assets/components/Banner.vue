<template>
    <div id="banner" class="banner">
      <img class="banner_img" id="banner_img" src="/new-home.jpg" /></div>
    </div>
</template>
<script>
export default {
  name: "Banner",
  components: {
  },
  data () { 
    return {
    }
  },
  created () {
  },
  updated () {
    document.getElementById('banner').height= document.getElementById('banner_img').height;
  },
  mounted () {
  },
};
</script>