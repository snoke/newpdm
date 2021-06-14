<template>
    <div class="card col-lg shadow">
        <div class="card-body">
            <i style="float:right;" :class='"fas fa-" + this.icon'></i>
            <h2 class="card-title" style="font-size:1.6rem;">{{title}}</h2>
            <p class="row card-text">{{text}}</p>
        </div>
    </div>
</template>
<script>
export default {
  name: "Card",
  components: {
  },
    props: {
        title: {},
        text: {},
        icon: {},
    },
  data () { 
    return {
    }
  },
  created () {
  },
};
</script>