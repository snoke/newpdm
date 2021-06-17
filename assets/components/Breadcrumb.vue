<template>
    <ul class="bc" style="background-color:none;">
      <li class="bc-item">/</li>
      <li class="bc-item"><a href="/">PDM</a></li>
      <li class="bc-item">/</li>
      <li class="bc-item"><a href="#">Library</a></li>
      <li class="bc-item">/</li>
      <li class="bc-item active" aria-current="page">Data</li>
    </ul>
</template>

<script>
export default {
  name: "Breadcrumb",
  components: {
  },
  data () { 
    return {
    }
  },
  created () {
    // fetch the data when the view is created and the data is
    // already being observed
    this.fetchData()
  },
  methods: {
    fetchData () {
    }
  }
};
</script>