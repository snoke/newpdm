<template>
    <div class="card col-lg shadow">
        <div class="card-body">
            <i style="float:right;" :class='"text-primary fas fa-" + this.icon'></i>
            <h2 class="card-title  text-center text-shadow-sm text-secondary" style="font-size:1.6rem;"><nobr>{{title}}</nobr></h2>
            <p class="row card-text  text-dark">{{text}}</p>
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